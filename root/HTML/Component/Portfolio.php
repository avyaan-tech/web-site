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
                    <h3>DevOps</h3>
                    <p>Docker, Kubernetes, GitHub Actions, Serverless Framework, automated CI/CD pipelines</p>
                </article>
                <article class="skill-card">
                    <h3>Security & Identity</h3>
                    <p>NFC, NXP Mifare DESFire, Digital Signatures, Cryptographic Hashing, secure authentication</p>
                </article>
                <article class="skill-card">
                    <h3>Algorithm Design</h3>
                    <p>Custom algorithms for word-based encoding, location addressing</p>
                </article>
            </section>

            <section class="portfolio-showcase" aria-label="Portfolio case studies">
                <article class="portfolio-case" data-tags="ai,delivery">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'workflow_gear'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Delivery Stack</h3>
                        <p>Designed and deployed Python microservices on Kubernetes with automated CI/CD pipelines so multidisciplinary squads could ship developed capabilities reliably.</p>
                    </div>
                </article>
                <!-- digital evaluation -->
                <artical class="portfolio-case" data-tags="ai,ocr">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'data_platform'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>Digital Evaluation Platform</h3>
                        <p>Built OCR, ICR, and OMR pipelines using OpenCV, AWS Textract and AWS Lambda to automate answersheet evaluation processing.</p>
                    </div>
                </artical>
                <article class="portfolio-case" data-tags="ai,ocr">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'customer_chat'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>AI Evaluation Platform</h3>
                        <p>Built AI answersheet evaluation pipelines using LangChain, Hugging Face, and AWS Lambda to automate handwritten answersheet evaluationx.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="education,rag">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'insights_bulb'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>EdTech Platform</h3>
                        <p>Defined modular architecture, orchestrated containerised services on AWS, and implemented RAG-powered search with access controls.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="quality,automation">
                    <div class="case-media" aria-hidden="true">
                        <span class="case-icon"><?php includeSVG('Icon', 'cloud_infra'); ?></span>
                    </div>
                    <div class="case-content">
                        <h3>AI Test Automation Suite</h3>
                        <p>Guided test automation firm on integrating ML-assisted review workflows, Dockerised services, and GitHub-based checks for AI-driven testing.</p>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="security,innovation">
                    <div class="case-media" aria-hidden="true">
                        <div class="case-icon external-icon">
                            <?php require '../../Resource/wcode_logo-full.svg' ?>
                        </div>
                    </div>
                    <div class="case-content">
                        <h3>WCode Platform</h3>
                        <p>Word-based encoding and secure data exchange workflows published at wcodes.org, pairing human readability with cryptographic rigour.</p>
                        <div class="case-links">
                            <a class="case-link" href="https://wcodes.org" target="_blank" rel="noopener noreferrer">wcodes.org<span class="external-indicator" aria-hidden="true"><svg viewBox="0 0 12 12" focusable="false"><path d="M4.5 2H10v5.5H8.5V4.81L4.06 9.25 2.75 7.94 7.19 3.5H4.5V2z" fill="currentColor"/></svg></span></a>
                        </div>
                    </div>
                </article>
                <article class="portfolio-case" data-tags="product,addressing">
                    <div class="case-media" aria-hidden="true">
                        <div class="case-icon external-icon">
                            <?php require '../../Resource/wolo_logo-full.svg' ?>
                        </div>                    </div>
                    <div class="case-content">
                        <h3>Wolo Code</h3>
                        <p>Three-word addressing platform spanning Android, web, and cloud tooling so locations stay precise yet human friendly.</p>
                        <div class="case-links">
                            <a class="case-link" href="https://wolo.codes/about" target="_blank" rel="noopener noreferrer">wolo.codes<span class="external-indicator" aria-hidden="true"><svg viewBox="0 0 12 12" focusable="false"><path d="M4.5 2H10v5.5H8.5V4.81L4.06 9.25 2.75 7.94 7.19 3.5H4.5V2z" fill="currentColor"/></svg></span></a>
                        </div>
                    </div>
                </article>
            </section>

            <section class="profile-grid" aria-label="Background">
                <article class="bio-card">
                    <h3>Recognitions</h3>
                    <ul>
                        <li>2018 - Prior art acknowledgement for word-based location codes (Patent WO2014170646A1) &mdash; Ujjwal Singh</li>
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
