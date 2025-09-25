<main id="portfolio" aria-label="Avyaan portfolio" class="avyaan-landing">

    <div class="avyaan-wrap" role="region" aria-labelledby="portfolio-title">

        <svg class="bg-lines" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <defs>
                <linearGradient id="portfolio-gradient" x1="0" x2="1">
                    <stop offset="0" stop-color="#00ffa3" stop-opacity=".06"/>
                    <stop offset="1" stop-color="#00b3ff" stop-opacity=".02"/>
                </linearGradient>
            </defs>
            <rect width="1600" height="900" fill="url(#portfolio-gradient)"/>
            <g fill="none" stroke="#00ffa3" stroke-opacity=".04" stroke-width="1">
                <path d="M0 740 C360 560 820 940 1600 660"/>
                <path d="M0 320 C420 140 860 480 1600 220"/>
            </g>
        </svg>

        <div class="grid">

            <header class="hero" id="portfolio-hero">
                <div class="hero-left">
                    <h1 id="portfolio-title"><span class="hero-line">Work that delivers.</span><span class="hero-line">Results that create an impact.</span></h1>
                    <p class="lead">
                        Selected engagements where Avyaan partnered with teams to design intelligent platforms, streamline operations, and accelerate delivery across web, mobile, data, and AI-first experiences.
                    </p>
                    <div class="meta">
                        <div>AI, automation, and platform engineering</div>
                        <div>From discovery sprints to global rollouts</div>
                    </div>
                </div>
            </header>

            <section class="skills-grid" aria-label="Core capabilities">
                <article class="skill-card">
                    <h3>Programming Languages</h3>
                    <p>Java, JavaScript, C, C++, Dart, Python</p>
                </article>
                <article class="skill-card">
                    <h3>Frontend & Web</h3>
                    <p>Angular, React, Next.js, TypeScript, Responsive UX systems</p>
                </article>
                <article class="skill-card">
                    <h3>Backend & APIs</h3>
                    <p>Spring Boot, Django, FastAPI, Node.js, Grails, REST & Graph patterns</p>
                </article>
                <article class="skill-card">
                    <h3>Cloud & Data Platforms</h3>
                    <p>AWS, Firebase, Supabase, Vercel, PostgreSQL, MySQL, MongoDB, Redis, Qdrant</p>
                </article>
                <article class="skill-card">
                    <h3>AI & Machine Learning</h3>
                    <p>LangChain, LlamaIndex, Hugging Face, OCR/ICR/OMR pipelines, RAG agents, AI chatbots</p>
                </article>
                <article class="skill-card">
                    <h3>DevOps & Security</h3>
                    <p>Docker, Kubernetes, GitHub Actions, Serverless Framework, NFC & cryptographic auth</p>
                </article>
            </section>

            <section class="portfolio-showcase" aria-label="Portfolio case studies">
                <article class="portfolio-case" data-tags="automation,operations">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'workflow_gear'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Intelligent Ops Hub</h3>
                        <p>Unified ticket triage and SLA monitoring across five global support teams with automation that cut response time by 38%.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="customer,experience">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'customer_chat'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Conversational CX Platform</h3>
                        <p>Designed multilingual virtual agents and agent assist workflows, boosting NPS by 22 points within the first quarter.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="data,insights">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'insights_bulb'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Analytics Fabric</h3>
                        <p>Implemented governed data pipelines and self-service dashboards so leadership could act on trusted, near real-time insights.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="platform,scale">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'cloud_infra'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Elastic Delivery Platform</h3>
                        <p>Migrated monolithic workloads into containerized services with automated delivery pipelines, reducing release time by 60%.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="product,design">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'app_development'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Field Enablement Suite</h3>
                        <p>Shipped cross-platform mobile tools that empowered on-site teams with offline-first capabilities and guided workflows.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="data,security">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'data_platform'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Secure Data Exchange</h3>
                        <p>Delivered encrypted data-sharing pipelines with automated compliance checks for sensitive partner integrations.</p>
                    </div>
                </article>
            </section>

            <section class="products innovations" aria-label="Flagship products">
                <div class="products-intro">
                    <h2>Flagship Innovations</h2>
                    <p>Product lines conceived, engineered, and scaled by Avyaan</p>
                </div>
                <div class="products-list">
                    <a class="product-card" href="https://wcodes.org" title="wcodes.org" target="_blank" rel="noopener noreferrer">
                        <div class="card-logo">
                            <?php require '../../Resource/wcode_logo-full.svg' ?>
                        </div>
                        <div class="card-body">
                            <span class="product-name">wcodes.org</span>
                            <p class="product-description">A secure, human-readable encoding system that simplifies data exchange without sacrificing cryptographic rigour.</p>
                        </div>
                    </a>
                    <a class="product-card" href="https://wolo.codes/about" title="wolo.codes" target="_blank" rel="noopener noreferrer">
                        <div class="card-logo">
                            <?php require '../../Resource/wolo_logo-full.svg' ?>
                        </div>
                        <div class="card-body">
                            <span class="product-name">wolo.codes</span>
                            <p class="product-description">A word-based addressing system that turns precise locations into three memorable words for instant sharing and navigation.</p>
                        </div>
                    </a>
                </div>
            </section>

            <section class="profile-grid" aria-label="Background">
                <article class="bio-card">
                    <h3>Recognitions</h3>
                    <ul>
                        <li>2018 - Prior art acknowledgement for word-based location codes (Patent WO2014170646A1)</li>
                        <li>2014 - BI portal upgrades and marketing automation milestone</li>
                    </ul>
                </article>
            </section>

            <section class="contact-cta">
                <div>
                    <strong class="contact-cta-title">Plan your next launch with Avyaan</strong>
                    <span class="contact-cta-sub">Share your challenge and we'll outline the path from ideation to measurable impact</span>
                </div>
                <div class="contact-cta-actions">
                    <button class="btn" onclick="location.href='mailto:contact@avyaan.tech'">Start the conversation</button>
                </div>
            </section>

            <noscript class="noscript-warning">For best experience enable JavaScript - we progressively enhance the page with subtle interactions</noscript>

        </div>

    </div>

</main>
