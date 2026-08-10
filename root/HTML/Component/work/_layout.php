<?php
/**
 * Shared case-study layout.
 * Expected vars before include:
 *   $caseTitle, $caseLead, $caseTags (array), $caseSections (array of ['h'=>'','p'=>''] or HTML strings in $caseBodyHtml)
 * Optional: $caseIcon (SVG icon name), $caseLogo (resource SVG filename), $caseExternal (['href'=>'','label'=>''])
 */
if (!isset($caseTitle)) $caseTitle = 'Case study';
if (!isset($caseLead)) $caseLead = '';
if (!isset($caseTags)) $caseTags = array();
if (!isset($caseSections)) $caseSections = array();
if (!isset($caseBodyHtml)) $caseBodyHtml = '';
$caseSlugTitle = isset($casePageTitle) ? $casePageTitle : $caseTitle;
?>
<main id="work-case" aria-label="<?php echo htmlspecialchars($caseTitle, ENT_QUOTES, 'UTF-8'); ?> case study" class="avyaan-landing no-auto-cover">

	<div class="avyaan-wrap" role="region" aria-labelledby="case-title">

		<div class="avyaan-atmosphere" aria-hidden="true">
			<span class="orb orb-a"></span>
			<span class="orb orb-b"></span>
			<span class="orb orb-c"></span>
			<svg class="bg-lines" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMid slice">
				<defs>
					<linearGradient id="case-gradient" x1="0" x2="1">
						<stop offset="0" stop-color="#00ffa3" stop-opacity=".07"/>
						<stop offset="1" stop-color="#00b3ff" stop-opacity=".03"/>
					</linearGradient>
				</defs>
				<rect width="1600" height="900" fill="url(#case-gradient)"/>
				<g fill="none" stroke="#00ffa3" stroke-opacity=".05" stroke-width="1.2">
					<path class="flow-line" d="M0 740 C360 560 820 940 1600 660"/>
					<path class="flow-line" d="M0 320 C420 140 860 480 1600 220"/>
				</g>
			</svg>
		</div>

		<div class="grid layout-rail">

			<nav class="case-breadcrumb reveal" aria-label="Breadcrumb" data-reveal>
				<a class="case-back XURL" href="/work" data-target="work" data-title="Work"><span aria-hidden="true">&larr;</span> All work</a>
			</nav>

			<header class="case-hero reveal" data-reveal>
				<div class="case-hero-visual" aria-hidden="true">
					<?php if (!empty($caseLogo)) { ?>
						<span class="work-card-icon work-card-icon--logo"><?php includeResourceSVG($caseLogo); ?></span>
					<?php } else { ?>
						<span class="work-card-icon"><?php includeSVG('Icon', !empty($caseIcon) ? $caseIcon : 'innovation_star'); ?></span>
					<?php } ?>
				</div>
				<div class="case-hero-copy">
					<?php if (!empty($caseTags)) { ?>
						<ul class="work-card-tags case-hero-tags">
							<?php foreach ($caseTags as $tag) { ?>
								<li><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></li>
							<?php } ?>
						</ul>
					<?php } ?>
					<h1 id="case-title"><?php echo htmlspecialchars($caseTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
					<?php if ($caseLead !== '') { ?>
						<p class="lead"><?php echo htmlspecialchars($caseLead, ENT_QUOTES, 'UTF-8'); ?></p>
					<?php } ?>
					<?php if (!empty($caseExternal) && !empty($caseExternal['href'])) { ?>
						<p class="case-external">
							<a class="case-link" href="<?php echo htmlspecialchars($caseExternal['href'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars(!empty($caseExternal['label']) ? $caseExternal['label'] : $caseExternal['href'], ENT_QUOTES, 'UTF-8'); ?><span class="external-indicator" aria-hidden="true"><svg viewBox="0 0 12 12" focusable="false"><path d="M4.5 2H10v5.5H8.5V4.81L4.06 9.25 2.75 7.94 7.19 3.5H4.5V2z" fill="currentColor"/></svg></span></a>
						</p>
					<?php } ?>
				</div>
			</header>

			<section class="case-body reveal" data-reveal>
				<?php
				if ($caseBodyHtml !== '') {
					echo $caseBodyHtml;
				} else {
					foreach ($caseSections as $section) {
						if (!empty($section['h'])) {
							echo '<h2>' . htmlspecialchars($section['h'], ENT_QUOTES, 'UTF-8') . '</h2>';
						}
						if (!empty($section['p'])) {
							echo '<p>' . htmlspecialchars($section['p'], ENT_QUOTES, 'UTF-8') . '</p>';
						}
					}
				}
				?>
			</section>

			<section class="contact-cta glass-panel reveal case-cta" data-reveal>
				<div>
					<strong class="contact-cta-title">Have a similar problem?</strong>
					<span class="contact-cta-sub">Share your challenge and we&apos;ll outline the path from ideation to measurable impact</span>
				</div>
				<div class="contact-cta-actions">
					<a class="btn XURL" href="/#contact" data-target="root" data-title="" data-section-nav="contact">Talk to us</a>
				</div>
			</section>

			<noscript class="noscript-warning">For best experience enable JavaScript — we progressively enhance the page with motion and interactions</noscript>

		</div>

	</div>

</main>
