<main id="landing" aria-label="Avyaan landing" class="avyaan-landing">

	<div class="avyaan-wrap" role="region" aria-labelledby="hero-title">

		<svg class="bg-lines" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
			<defs>
				<linearGradient id="g1" x1="0" x2="1"><stop offset="0" stop-color="#0ff" stop-opacity=".06"/><stop offset="1" stop-color="#00b3ff" stop-opacity=".02"/></linearGradient>
			</defs>
			<rect width="1600" height="900" fill="url(#g1)"/>
			<g fill="none" stroke="#0ff" stroke-opacity=".03" stroke-width="1">
				<path d="M0 750 C400 600 800 900 1600 700"/>
				<path d="M0 300 C400 160 800 420 1600 200"/>
			</g>
		</svg>

		<div class="grid">

			<div class="hero" id="hero">
				<div class="hero-left">
					<h1 id="hero-title"><span class="hero-line">Human-centered Tech.</span><span class="hero-line">Engineered for scale</span></h1>
					<p class="lead">
						We design intelligent systems that augment teams, automate critical workflows, and make data instantly usable — without the noise.
						<br>Minimal overhead, maximum precision & impact
					</p>

					<div class="cta-row">
						<button class="btn" data-scroll-target="contact-cta">Start a conversation</button>
					</div>

					<div class="meta">
						<div>Trusted by <strong>enterprises</strong> & small teams</div>
					</div>
				</div>
			</div>
			<div class="hero-center">
				<img src='/hero.png' alt="">
			</div>

			<section class="features" aria-label="Capabilities">
				<div class="card" data-category="outcome" data-tags="efficiency,ops,scale">
					<h3>
						<span class="card-icon" aria-hidden="true"><?php includeSVG('Icon', 'workflow_gear'); ?></span>
						Workflow Automation
					</h3>
					<p>Eliminate repetitive tasks across sales, operations, and support — while keeping humans in control where it matters most</p>
				</div>
				<div class="card" data-category="outcome" data-tags="growth,product,experience">
					<h3>
						<span class="card-icon" aria-hidden="true"><?php includeSVG('Icon', 'customer_chat'); ?></span>
						Customer Experience
					</h3>
					<p>Deliver faster responses, consistent service, and multilingual experiences that boost conversion and retention</p>
				</div>
				<div class="card" data-category="outcome" data-tags="insights,analytics,leadership">
					<h3>
						<span class="card-icon" aria-hidden="true"><?php includeSVG('Icon', 'insights_bulb'); ?></span>
						Intelligence & Insights
					</h3>
					<p>Go beyond dashboards — search, summarize, and act on your data in a unified interface</p>
				</div>
				<div class="card" data-category="platform" data-tags="data,pipelines,storage,scale">
					<h3>
						<span class="card-icon" aria-hidden="true"><?php includeSVG('Icon', 'data_platform'); ?></span>
						Data Platform & Pipelines
					</h3>
					<p>Design clean schemas, streaming pipelines, and reliable object storage to keep data accurate and actionable</p>
				</div>
				<div class="card" data-category="platform" data-tags="cloud,devops,kubernetes,delivery">
					<h3>
						<span class="card-icon" aria-hidden="true"><?php includeSVG('Icon', 'cloud_infra'); ?></span>
						Cloud Infra & Delivery
					</h3>
					<p>Deploy containerized applications with autoscaling and CI/CD pipelines so teams can ship faster and with fewer surprises</p>
				</div>
				<div class="card" data-category="build" data-tags="web,mobile,embedded,development">
					<h3>
						<span class="card-icon" aria-hidden="true"><?php includeSVG('Icon', 'app_development'); ?></span>
						App & Soluntion Development
					</h3>
					<p>Engineer cross-platform web, mobile, and embedded solutions — designed end-to-end to solve real world challenges</p>
				</div>
			</section>


			<section class="products" aria-label="Products">
				<div class="products-intro">
					<h2>
						<span class="section-icon" aria-hidden="true"><?php includeSVG('Icon', 'innovation_star'); ?></span>
						Our innovations
					</h2>
					<p>Products by Avyaan</p>
				</div>

				<div class="products-list">
					<!-- Card: wcodes -->
					<a class="product-card" href="https://wcodes.org" title="wcodes.org" target="_blank" rel="noopener noreferrer">
					<div id='product-wcode' class="card-logo">
						<?php require '../../Resource/wcode_logo-full.svg' ?>
					</div>
					<div class="card-body">
						<span class="product-name">wcodes.org</span>
						<p class="product-description">
							A word-based encoding system that converts digital data into simple, human-readable words for seamless, error-free manual exchange
						</p>
					</div>
					</a>

					<!-- Card: wolo -->
					<a class="product-card" href="https://wolo.codes/about" title="wolo.codes" target="_blank" rel="noopener noreferrer">
					<div id='product-wolo' class="card-logo">
						<?php require '../../Resource/wolo_logo-full.svg' ?>
					</div>
					<div class="card-body">
						<span class="product-name">wolo.codes</span>
						<p class="product-description">
							A word-based addressing system that transforms precise locations into three simple, memorable words for effortless sharing and navigation
						</p>
					</div>
					</a>
				</div>
			</section>


			<section id="contact-cta" class="contact-cta">
				<div>
					<strong class="contact-cta-title">Let's build the future — Now</strong>
					<span class="contact-cta-sub">Tell us about your vision — we'll propose a pragmatic plan</span>
				</div>
				<div class="contact-cta-actions">
					<button class="btn" onclick="location.href='mailto:ujjwal@avyaan.tech'">Contact us</button>
				</div>
			</section>

			<noscript class="noscript-warning">For best experience enable JavaScript — we progressively enhance the page with subtle interactions</noscript>

		</div>

	</div>

</main>
