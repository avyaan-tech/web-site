<main id="work" aria-label="Avyaan work" class="avyaan-landing no-auto-cover">

	<div class="avyaan-wrap" role="region" aria-labelledby="work-title">

		<div class="avyaan-atmosphere" aria-hidden="true">
			<span class="orb orb-a"></span>
			<span class="orb orb-b"></span>
			<span class="orb orb-c"></span>
			<svg class="bg-lines" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMid slice">
				<defs>
					<linearGradient id="work-gradient" x1="0" x2="1">
						<stop offset="0" stop-color="#00ffa3" stop-opacity=".07"/>
						<stop offset="1" stop-color="#00b3ff" stop-opacity=".03"/>
					</linearGradient>
				</defs>
				<rect width="1600" height="900" fill="url(#work-gradient)"/>
				<g fill="none" stroke="#00ffa3" stroke-opacity=".05" stroke-width="1.2">
					<path class="flow-line" d="M0 740 C360 560 820 940 1600 660"/>
					<path class="flow-line" d="M0 320 C420 140 860 480 1600 220"/>
				</g>
			</svg>
		</div>

		<div class="grid layout-rail">

			<section class="work-cover" aria-label="Work introduction">
				<header class="hero reveal" id="work-hero" data-reveal>
					<div class="hero-left">
						<div class="hero-copy">
							<h2 id="work-title">
								<span class="hero-line reveal-child">Work that delivers</span>
								<span class="hero-line reveal-child">Results that create an impact</span>
							</h2>
							<p class="lead reveal-child">Selected engagements where Avyaan partnered with teams to design intelligent platforms, streamline operations, and accelerate delivery across web, mobile, data, and AI-first experiences.</p>
						</div>
					</div>
					<div class="hero-visual reveal-child" aria-hidden="true">
						<span class="work-hero-gears"><?php includeSVG('Icon', 'coupled_gears'); ?></span>
					</div>
				</header>

				<div class="work-meta meta">
					<span>AI, automation, and platform engineering</span>
					<span>&mdash;</span>
					<span>from discovery sprints to global rollouts</span>
				</div>
			</section>

			<section class="skills-grid" aria-label="Core capabilities">
				<article class="skill-card reveal" data-reveal>
					<h3>Programming Languages</h3>
					<p>Java, JavaScript, C, C++, Dart, Python</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>Frontend &amp; Web</h3>
					<p>Angular, React, Next.js, TypeScript, Responsive UX systems</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>Backend &amp; APIs</h3>
					<p>Spring Boot, Django, FastAPI, Node.js, Grails, REST &amp; Graph patterns</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>Cloud &amp; Data Platforms</h3>
					<p>AWS, Firebase, Supabase, Vercel, PostgreSQL, MySQL, MongoDB, Redis, Qdrant</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>AI &amp; Machine Learning</h3>
					<p>LangChain, LlamaIndex, Hugging Face, OCR/ICR/OMR pipelines, RAG agents, AI chatbots</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>DevOps</h3>
					<p>Docker, Kubernetes, GitHub Actions, Serverless Framework, automated CI/CD pipelines</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>Security &amp; Identity</h3>
					<p>NFC, NXP Mifare DESFire, Digital Signatures, Cryptographic Hashing, secure authentication</p>
				</article>
				<article class="skill-card reveal" data-reveal>
					<h3>Algorithm Design</h3>
					<p>Custom algorithms like word-based encoding, location addressing, asymmetric key based software protection</p>
				</article>
			</section>

			<section class="portfolio-showcase" aria-label="Portfolio case studies">

				<a class="portfolio-case reveal XURL" href="/work/pmsbeds" data-target="work/pmsbeds" data-title="Property Management System" data-reveal data-tags="hospitality,ai,voice">
					<div class="case-media" aria-hidden="true">
						<span class="case-icon"><?php includeSVG('Icon', 'cloud_infra'); ?></span>
					</div>
					<div class="case-content">
						<h3>Property Management System</h3>
						<p>Hotel-side PMS for mid-sized hotels covering front-desk and operations, with an ElevenLabs voice agent for reception and guest workflows</p>
					</div>
				</a>

				<a class="portfolio-case reveal XURL" href="/work/delivery-stack" data-target="work/delivery-stack" data-title="Delivery Stack" data-reveal data-tags="ai,delivery">
					<div class="case-media" aria-hidden="true">
						<span class="case-icon"><?php includeSVG('Icon', 'workflow_gear'); ?></span>
					</div>
					<div class="case-content">
						<h3>Delivery Stack</h3>
						<p>Designed and deployed Python microservices on Kubernetes with automated CI/CD pipelines so multidisciplinary squads could ship developed capabilities reliably</p>
					</div>
				</a>

				<a class="portfolio-case reveal XURL" href="/work/digital-evaluation" data-target="work/digital-evaluation" data-title="Digital Evaluation Platform" data-reveal data-tags="ai,ocr">
					<div class="case-media" aria-hidden="true">
						<span class="case-icon"><?php includeSVG('Icon', 'data_platform'); ?></span>
					</div>
					<div class="case-content">
						<h3>Digital Evaluation Platform</h3>
						<p>Built OCR, ICR, and OMR pipelines using OpenCV, AWS Textract and AWS Lambda to automate answersheet evaluation processing</p>
					</div>
				</a>

				<a class="portfolio-case reveal XURL" href="/work/ai-evaluation" data-target="work/ai-evaluation" data-title="AI Evaluation Platform" data-reveal data-tags="ai,ocr">
					<div class="case-media" aria-hidden="true">
						<span class="case-icon"><?php includeSVG('Icon', 'customer_chat'); ?></span>
					</div>
					<div class="case-content">
						<h3>AI Evaluation Platform</h3>
						<p>Built AI answersheet evaluation pipelines using LangChain, Hugging Face, and AWS Lambda to completely automate handwritten answersheet</p>
					</div>
				</a>

				<a class="portfolio-case reveal XURL" href="/work/edtech" data-target="work/edtech" data-title="EdTech Platform" data-reveal data-tags="education,rag">
					<div class="case-media" aria-hidden="true">
						<span class="case-icon"><?php includeSVG('Icon', 'ai_agents'); ?></span>
					</div>
					<div class="case-content">
						<h3>EdTech Platform</h3>
						<p>Defined modular architecture, orchestrated containerised services on VPS, and implemented RAG-powered search with access controls</p>
					</div>
				</a>

				<a class="portfolio-case reveal XURL" href="/work/ai-test-automation" data-target="work/ai-test-automation" data-title="AI Test Automation Suite" data-reveal data-tags="quality,automation">
					<div class="case-media" aria-hidden="true">
						<span class="case-icon"><?php includeSVG('Icon', 'app_development'); ?></span>
					</div>
					<div class="case-content">
						<h3>AI Test Automation Suite</h3>
						<p>Guided test automation firm on integrating ML-assisted review workflows, Dockerised services, and GitHub-based checks for AI-driven testing</p>
					</div>
				</a>

				<article class="portfolio-case reveal" data-reveal data-tags="security,innovation">
					<div class="case-media" aria-hidden="true">
						<div class="case-icon external-icon"><?php includeResourceSVG('WCode_Logo-Full.svg'); ?></div>
					</div>
					<div class="case-content">
						<h3>WCode Platform</h3>
						<p>Word-based encoding and secure data exchange workflows published at wcodes.org, pairing human readability with cryptographic rigour</p>
						<div class="case-links">
							<a class="case-link" href="https://wcodes.org" target="_blank" rel="noopener noreferrer">wcodes.org<span class="external-indicator" aria-hidden="true"><svg viewBox="0 0 12 12" focusable="false"><path d="M4.5 2H10v5.5H8.5V4.81L4.06 9.25 2.75 7.94 7.19 3.5H4.5V2z" fill="currentColor"/></svg></span></a>
							<a class="case-link XURL" href="/work/wcode" data-target="work/wcode" data-title="WCode">Case study<span aria-hidden="true"> &rarr;</span></a>
						</div>
					</div>
				</article>

				<article class="portfolio-case reveal" data-reveal data-tags="product,addressing">
					<div class="case-media" aria-hidden="true">
						<div class="case-icon external-icon"><?php includeResourceSVG('Wolo_Logo-Full.svg'); ?></div>
					</div>
					<div class="case-content">
						<h3>Wolo Code</h3>
						<p>Three-word addressing platform spanning Android, web, and cloud tooling so locations stay precise yet human friendly</p>
						<div class="case-links">
							<a class="case-link" href="https://wolo.codes/about" target="_blank" rel="noopener noreferrer">wolo.codes<span class="external-indicator" aria-hidden="true"><svg viewBox="0 0 12 12" focusable="false"><path d="M4.5 2H10v5.5H8.5V4.81L4.06 9.25 2.75 7.94 7.19 3.5H4.5V2z" fill="currentColor"/></svg></span></a>
							<a class="case-link XURL" href="/work/wolo-code" data-target="work/wolo-code" data-title="Wolo Code">Case study<span aria-hidden="true"> &rarr;</span></a>
						</div>
					</div>
				</article>

			</section>

			<section class="profile-grid reveal" aria-label="Background" data-reveal>
				<article class="bio-card">
					<h3>Recognitions</h3>
					<ul>
						<li>2018 - Prior art acknowledgement for word-based location codes (<a class="case-link" href="https://patents.google.com/patent/WO2014170646A1#:~:text=by%20third%20party-,Non%2DPatent%20Citations%20(2),-Title" target="_blank" rel="noopener noreferrer">Patent WO2014170646A1</a>) — Ujjwal Singh</li>
					</ul>
				</article>
			</section>

			<section class="contact-cta work-contact-cta reveal" data-reveal>
				<div>
					<strong class="contact-cta-title">Plan your next launch with Avyaan</strong>
					<span class="contact-cta-sub">Share your challenge and we&apos;ll outline the path from ideation to measurable impact</span>
				</div>
				<div class="contact-cta-actions">
					<a class="btn XURL" href="/#contact" data-target="root" data-title="" data-section-nav="contact">Start the conversation</a>
				</div>
			</section>

			<noscript class="noscript-warning">For best experience enable JavaScript — we progressively enhance the page with motion and interactions</noscript>

		</div>

	</div>

</main>
