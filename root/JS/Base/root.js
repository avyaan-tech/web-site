(function () {
	var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var scrollSpyObserver = null;
	var sectionRatios = {};
	var scrollSpyPausedUntil = 0;

	if (prefersReduced) {
		document.querySelectorAll('.pulse').forEach(function (n) {
			n.style.animation = 'none';
		});
		document.querySelectorAll('.reveal').forEach(function (n) {
			n.classList.add('is-visible');
		});
	}

	function isHomePage() {
		var path = (window.location.pathname || '/').replace(/\/+$/, '') || '/';
		var prefix = typeof getLanguagePrefix === 'function' ? getLanguagePrefix() : '';
		if (prefix && path.indexOf(prefix) === 0) {
			path = path.substring(prefix.length) || '/';
		}
		return path === '/' || path === '';
	}

	function pauseScrollSpy(ms) {
		scrollSpyPausedUntil = Date.now() + (ms || 900);
	}

	function scrollToSection(id, behavior) {
		var target = document.getElementById(id);
		if (!target) return false;
		var header = document.getElementById('header-wrapper');
		var offset = header ? header.getBoundingClientRect().height + 16 : 16;
		var top = target.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop || 0) - offset;
		var scrollBehavior = behavior || (prefersReduced ? 'auto' : 'smooth');
		// Keep hash/nav stable while smooth-scroll settles (spy would otherwise overwrite).
		pauseScrollSpy(scrollBehavior === 'smooth' ? 1100 : 200);
		window.scrollTo({
			top: Math.max(0, top),
			behavior: scrollBehavior
		});
		return true;
	}

	// Smooth scroll for in-page CTA targets
	document.addEventListener('click', function (e) {
		var btn = e.target.closest && e.target.closest('[data-scroll-target]');
		if (!btn) return;
		var targetId = btn.getAttribute('data-scroll-target');
		if (!targetId) return;
		if (!document.getElementById(targetId)) return;
		e.preventDefault();
		scrollToSection(targetId);
		if (window.history && window.history.replaceState) {
			var scrollUrl = targetId === 'hero' ? window.location.pathname : '#' + targetId;
			if (typeof replaceHistoryUrl === 'function') replaceHistoryUrl(scrollUrl);
			else window.history.replaceState(window.history.state || { id: 'root', title: '' }, '', scrollUrl);
		}
	});

	function bindSectionNav() {
		document.addEventListener('click', function (e) {
			var homeLink = e.target.closest && e.target.closest('[data-home-nav]');
			if (homeLink) {
				if (isHomePage()) {
					if (scrollToSection('hero')) {
						e.preventDefault();
						e.stopImmediatePropagation();
						window.__avyaanScrollSection = null;
						if (window.history && window.history.replaceState) {
							if (typeof replaceHistoryUrl === 'function') replaceHistoryUrl(window.location.pathname);
							else window.history.replaceState(window.history.state || { id: 'root', title: '' }, '', window.location.pathname);
						}
						updateSectionNavActive('hero');
						updateHomeNavActive(true);
					}
				}
				// Off-home: let XURL SPA-load root (do not full-navigate).
				return;
			}

			var link = e.target.closest && e.target.closest('[data-section-nav]');
			if (!link) return;
			var sectionId = link.getAttribute('data-section-nav');
			if (!sectionId) return;

			if (isHomePage()) {
				if (scrollToSection(sectionId)) {
					e.preventDefault();
					e.stopImmediatePropagation();
					window.__avyaanScrollSection = null;
					if (window.history && window.history.replaceState) {
						var hash = sectionId === 'hero' ? window.location.pathname : '#' + sectionId;
						if (typeof replaceHistoryUrl === 'function') replaceHistoryUrl(hash);
						else window.history.replaceState(window.history.state || { id: 'root', title: '' }, '', hash);
					}
					updateSectionNavActive(sectionId);
				}
				return;
			}

			// Off-home: follow /#section and block XURL so it cannot SPA-navigate to `/` without the hash.
			e.preventDefault();
			e.stopImmediatePropagation();
			var href = link.getAttribute('href') || '/';
			window.location.assign(href);
		}, true);
	}

	function bindProtectedEmails(root) {
		var scope = root || document;
		scope.querySelectorAll('[data-email-user][data-email-domain]').forEach(function (link) {
			var user = link.getAttribute('data-email-user');
			var domain = link.getAttribute('data-email-domain');
			if (!user || !domain) return;
			var address = user + '@' + domain;
			link.href = 'mailto:' + address;
			link.setAttribute('aria-label', 'Email ' + address);
		});
	}

	function maybeScrollSection() {
		var id = window.__avyaanScrollSection;
		if (!id && window.location.hash) {
			id = window.location.hash.substring(1);
		}
		if (!id || !document.getElementById(id)) return false;
		if (scrollToSection(id, prefersReduced ? 'auto' : 'smooth')) {
			window.__avyaanScrollSection = null;
			updateSectionNavActive(id);
			return true;
		}
		return false;
	}

	function handleSectionHash() {
		if (!window.location.hash) {
			if (isHomePage()) updateSectionNavActive('hero');
			return;
		}
		var tries = 0;
		var run = function () {
			tries += 1;
			if (maybeScrollSection() || tries >= 20) return;
			window.setTimeout(run, 50);
		};
		window.setTimeout(run, 50);
	}

	function updateSectionNavActive(sectionId) {
		if (!isHomePage()) return;
		document.querySelectorAll('[data-section-nav]').forEach(function (link) {
			var nav = link.getAttribute('data-section-nav');
			link.classList.toggle('is-active', nav === sectionId);
		});
		updateHomeNavActive(!sectionId || sectionId === 'hero');
	}

	function updateHomeNavActive(active) {
		document.querySelectorAll('[data-home-nav]').forEach(function (link) {
			link.classList.toggle('is-active', !!active);
		});
	}

	// On home: #portfolio. Off home (/work, …): /#portfolio so the section resolves on `/`.
	function syncSectionNavHrefs() {
		var onHome = isHomePage();
		var prefix = typeof getLanguagePrefix === 'function' ? getLanguagePrefix() : '';
		document.querySelectorAll('[data-home-nav]').forEach(function (link) {
			link.setAttribute('href', prefix || '/');
		});
		document.querySelectorAll('[data-section-nav]').forEach(function (link) {
			var sectionId = link.getAttribute('data-section-nav');
			if (!sectionId) return;
			link.setAttribute('href', onHome ? ('#' + sectionId) : (prefix + '/#' + sectionId));
		});
	}

	function syncNavActive() {
		var path = (window.location.pathname || '/').replace(/\/+$/, '') || '/';
		var prefix = typeof getLanguagePrefix === 'function' ? getLanguagePrefix() : '';
		if (prefix && path.indexOf(prefix) === 0) {
			path = path.substring(prefix.length) || '/';
		}

		syncSectionNavHrefs();

		document.querySelectorAll('.avyaan-nav-link[data-target]').forEach(function (link) {
			var target = link.getAttribute('data-target');
			var sectionNav = link.getAttribute('data-section-nav');
			var homeNav = link.hasAttribute('data-home-nav');
			if (sectionNav || homeNav) return;
			var active = (target === 'work' && path.indexOf('/work') === 0);
			link.classList.toggle('is-active', !!active);
		});

		if (isHomePage()) {
			var hashId = window.location.hash ? window.location.hash.substring(1) : 'hero';
			if (!document.getElementById(hashId)) hashId = 'hero';
			updateSectionNavActive(hashId);
			bindScrollSpy(document);
		} else {
			document.querySelectorAll('[data-section-nav]').forEach(function (link) {
				link.classList.remove('is-active');
			});
			updateHomeNavActive(false);
			teardownScrollSpy();
		}
	}

	function teardownScrollSpy() {
		if (!scrollSpyObserver) return;
		scrollSpyObserver.disconnect();
		scrollSpyObserver = null;
		sectionRatios = {};
	}

	function bindScrollSpy(root) {
		if (!isHomePage() || !('IntersectionObserver' in window)) return;

		var scope = root || document;
		var sections = scope.querySelectorAll('[data-section]');
		if (!sections.length) return;

		teardownScrollSpy();
		sectionRatios = {};

		scrollSpyObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				sectionRatios[entry.target.id] = entry.isIntersecting ? entry.intersectionRatio : 0;
			});

			if (Date.now() < scrollSpyPausedUntil) return;

			var bestId = null;
			var bestRatio = 0;
			Object.keys(sectionRatios).forEach(function (id) {
				if (sectionRatios[id] > bestRatio) {
					bestRatio = sectionRatios[id];
					bestId = id;
				}
			});

			if (!bestId || bestRatio <= 0) return;

			updateSectionNavActive(bestId);

			if (window.history && window.history.replaceState) {
				var nextHash = bestId === 'hero' ? '' : '#' + bestId;
				var currentHash = window.location.hash || '';
				if (currentHash !== nextHash) {
					var spyUrl = window.location.pathname + nextHash;
					if (typeof replaceHistoryUrl === 'function') replaceHistoryUrl(spyUrl);
					else window.history.replaceState(window.history.state || { id: 'root', title: '' }, '', spyUrl);
				}
			}
		}, {
			rootMargin: '-18% 0px -55% 0px',
			threshold: [0, 0.15, 0.35, 0.55, 0.75, 1]
		});

		sections.forEach(function (section) {
			sectionRatios[section.id] = 0;
			scrollSpyObserver.observe(section);
		});
	}

	function revealIfInView(node) {
		var rect = node.getBoundingClientRect();
		var vh = window.innerHeight || document.documentElement.clientHeight || 0;
		// Match IntersectionObserver rootMargin bottom -8%.
		return rect.bottom > 0 && rect.top < vh * 0.92;
	}

	function bindReveal(root) {
		var scope = root || document;
		var nodes = scope.querySelectorAll('.reveal:not(.is-visible)');
		if (!nodes.length) return;

		if (prefersReduced || !('IntersectionObserver' in window)) {
			nodes.forEach(function (n) { n.classList.add('is-visible'); });
			return;
		}

		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (!entry.isIntersecting) return;
				entry.target.classList.add('is-visible');
				io.unobserve(entry.target);
			});
		}, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });

		nodes.forEach(function (n) {
			io.observe(n);
			// SPA canvas swaps can miss the first IO callback; reveal above-fold
			// nodes immediately so the page is not stuck at opacity 0.
			if (revealIfInView(n)) {
				n.classList.add('is-visible');
				io.unobserve(n);
			}
		});
	}

	function bindHeaderCompact() {
		var header = document.getElementById('header-wrapper');
		if (!header) return;
		var onScroll = function () {
			header.classList.toggle('is-compact', window.scrollY > 24);
		};
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	function syncDrawerState() {
		var open = document.getElementById('main-wrapper') &&
			document.getElementById('main-wrapper').classList.contains('pml-open');
		var drawer = document.getElementById('nav-menu');
		var button = document.getElementById('menu-button');
		if (drawer) drawer.setAttribute('aria-hidden', open ? 'false' : 'true');
		if (button) button.setAttribute('aria-expanded', open ? 'true' : 'false');
		document.documentElement.classList.toggle('avyaan-drawer-open', !!open);
	}

	function closeDrawer() {
		if (typeof activateMain === 'function') {
			activateMain();
		} else {
			var wrap = document.getElementById('main-wrapper');
			var button = document.getElementById('menu-button');
			if (wrap) wrap.classList.remove('pml-open');
			if (button) button.classList.remove('active');
		}
		syncDrawerState();
	}

	function bindDrawer() {
		document.addEventListener('click', function (e) {
			if (e.target.closest && e.target.closest('[data-drawer-close]')) {
				closeDrawer();
			}
			if (e.target.closest && e.target.closest('.avyaan-drawer-link')) {
				window.setTimeout(closeDrawer, 30);
			}
		});

		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') closeDrawer();
		});

		var menuButton = document.getElementById('menu-button');
		if (menuButton) {
			menuButton.addEventListener('click', function () {
				window.setTimeout(syncDrawerState, 0);
			});
		}

		var wrap = document.getElementById('main-wrapper');
		if (wrap && 'MutationObserver' in window) {
			new MutationObserver(syncDrawerState).observe(wrap, { attributes: true, attributeFilter: ['class'] });
		}
		syncDrawerState();
	}

	function boot() {
		syncNavActive();
		bindReveal(document);
		bindHeaderCompact();
		bindDrawer();
		bindSectionNav();
		bindProtectedEmails(document);
		handleSectionHash();
		bindCanvasObserver();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', boot);
	} else {
		boot();
	}

	function bindCanvasObserver() {
		var canvas = document.getElementById('canvas-main');
		var contentRoot = document.getElementById('content') || canvas;
		if (!contentRoot || !('MutationObserver' in window)) return;

		var t;
		new MutationObserver(function () {
			window.clearTimeout(t);
			t = window.setTimeout(function () {
				syncNavActive();
				bindReveal(document.getElementById('canvas-main') || contentRoot);
				bindProtectedEmails(document.getElementById('canvas-main') || contentRoot);
				maybeScrollSection();
			}, 40);
		}).observe(contentRoot, { childList: true, subtree: false });
	}

	window.addEventListener('popstate', function () {
		syncNavActive();
		handleSectionHash();
	});
})();
