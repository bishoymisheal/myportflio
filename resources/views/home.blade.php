@extends('layouts.app')

@section('content')
    {{-- ===== HERO SECTION ===== --}}
    <section id="hero">
        <div class="hero-text">
            <span class="badge">
                <i class="fas fa-circle" style="font-size: 0.5rem; color: #48BB78;"></i> Available for Hire & Projects
            </span>
            <h1>Hello, I'm Bishoy Miechel</h1>
            <h2>Full-Stack <span class="gradient-text">Web Developer</span></h2>
            <p>I design and build modern, scalable, and high-performance web applications using cutting-edge frontend and backend technologies. Focused on clean code, seamless user experiences, and robust architectures.</p>
            
            <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;">
                <a href="#projects" class="header-cta" style="padding: 0.8rem 1.8rem; font-size: 0.95rem;">
                    <i class="fas fa-layer-group"></i> View My Work
                </a>
                <a href="#social-media" class="project-link" style="padding: 0.8rem 1.5rem; border: 1px solid var(--border-light); border-radius: var(--radius-sm); background: var(--bg-secondary);">
                    <i class="fas fa-share-nodes"></i> Connect With Me
                </a>
            </div>
        </div>

        <div class="photo-wrapper">
            <img src="{{ asset('img/photo.jpeg') }}" alt="Bishoy Miechel" class="profile-photo" onerror="this.onerror=null; this.src='{{ asset('img/myphoto.jpeg') }}';">
            <div class="orbit-ring"></div>
            <div class="orbit-dot orbit-dot-1"></div>
            <div class="orbit-dot orbit-dot-2"></div>
            <div class="orbit-dot orbit-dot-3"></div>
            <span class="sparkle sparkle-1"></span>
            <span class="sparkle sparkle-2"></span>
            <span class="sparkle sparkle-3"></span>
            <span class="sparkle sparkle-4"></span>
        </div>
    </section>

    {{-- ===== ABOUT ME SECTION ===== --}}
    <section id="about">
        <h2>About Me</h2>
        <p>I am a passionate Full-Stack developer dedicated to building responsive, intuitive, and high-speed web solutions. With extensive experience turning complex requirements into polished, functional digital products, I bridge aesthetic frontend design with powerful backend engineering.</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.2rem; margin-top: 2rem;">
            <div class="project" style="padding: 1.5rem;">
                <i class="fas fa-laptop-code" style="font-size: 1.8rem; color: var(--accent-primary); margin-bottom: 0.8rem;"></i>
                <h3 style="font-size: 1.05rem;">Modern UI/UX</h3>
                <p style="font-size: 0.85rem; margin-bottom: 0;">Interactive, responsive interfaces built with precision, micro-animations, and fluid design systems.</p>
            </div>
            <div class="project" style="padding: 1.5rem;">
                <i class="fas fa-server" style="font-size: 1.8rem; color: var(--accent-secondary); margin-bottom: 0.8rem;"></i>
                <h3 style="font-size: 1.05rem;">Robust Backend</h3>
                <p style="font-size: 0.85rem; margin-bottom: 0;">Scalable architectures, secure RESTful APIs, and optimized databases tailored for performance.</p>
            </div>
            <div class="project" style="padding: 1.5rem;">
                <i class="fas fa-bolt" style="font-size: 1.8rem; color: var(--accent-tertiary); margin-bottom: 0.8rem;"></i>
                <h3 style="font-size: 1.05rem;">Fast Performance</h3>
                <p style="font-size: 0.85rem; margin-bottom: 0;">Lightweight assets, optimized code delivery, and best-in-class SEO practices.</p>
            </div>
        </div>
    </section>

    {{-- ===== TECHNICAL SKILLS SECTION ===== --}}
    <section id="skills">
        <h2>Technical Skills</h2>
        <div class="skills-container">
            <div class="skill-category">
                <h3 style="color: var(--accent-primary); margin-bottom: 1.2rem; font-size: 1.15rem;">
                    <i class="fas fa-desktop" style="margin-right: 0.5rem;"></i> Frontend Development
                </h3>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-html5"></i> HTML5</div>
                    <div class="skill-pill"><i class="fab fa-css3-alt"></i> CSS3 & SCSS</div>
                    <div class="skill-pill"><i class="fab fa-js-square"></i> JavaScript (ES6+)</div>
                    <div class="skill-pill"><i class="fab fa-react"></i> React.js</div>
                    <div class="skill-pill"><i class="fas fa-wind"></i> Tailwind CSS</div>
                    <div class="skill-pill"><i class="fab fa-bootstrap"></i> Bootstrap</div>
                </div>
            </div>

            <div class="skill-category">
                <h3 style="color: var(--accent-secondary); margin-bottom: 1.2rem; font-size: 1.15rem;">
                    <i class="fas fa-database" style="margin-right: 0.5rem;"></i> Backend Development
                </h3>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-php"></i> PHP</div>
                    <div class="skill-pill"><i class="fab fa-laravel"></i> Laravel</div>
                    <div class="skill-pill"><i class="fab fa-node-js"></i> Node.js & Express</div>
                    <div class="skill-pill"><i class="fas fa-database"></i> MySQL</div>
                    <div class="skill-pill"><i class="fas fa-server"></i> RESTful APIs</div>
                </div>
            </div>

            <div class="skill-category">
                <h3 style="color: var(--accent-tertiary); margin-bottom: 1.2rem; font-size: 1.15rem;">
                    <i class="fas fa-tools" style="margin-right: 0.5rem;"></i> Tools & DevOps
                </h3>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-git-alt"></i> Git & GitHub</div>
                    <div class="skill-pill"><i class="fab fa-docker"></i> Docker</div>
                    <div class="skill-pill"><i class="fas fa-terminal"></i> Command Line (CLI)</div>
                    <div class="skill-pill"><i class="fab fa-npm"></i> NPM / Composer</div>
                    <div class="skill-pill"><i class="fas fa-vial"></i> Postman & Testing</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== QUALIFICATIONS & COURSES SECTION ===== --}}
    <section id="qualifications">
        <h2>Qualifications & Courses</h2>
        
        <h3 style="margin-bottom: 1.5rem; color: var(--accent-tertiary); font-size: 1.2rem;">
            <i class="fas fa-graduation-cap" style="margin-right: 0.5rem;"></i> Academic Qualifications
        </h3>
        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
            <div class="project social-card" style="align-items: flex-start; text-align: left; padding: 1.8rem;">
                <i class="fas fa-user-graduate" style="font-size: 2.2rem; color: var(--accent-primary); margin-bottom: 0.8rem;"></i>
                <h3>Bachelor of Computer Science</h3>
                <p style="color: var(--accent-primary); font-weight: 600; margin-bottom: 0.4rem; font-size: 0.95rem;">University of Applied Sciences — Graduated 2023</p>
                <p style="font-size: 0.88rem; color: var(--text-secondary); margin-bottom: 0;">Comprehensive study of Software Engineering principles, Data Structures, Algorithms, Database Systems, and Web Engineering.</p>
            </div>
            
            <div class="project social-card" style="align-items: flex-start; text-align: left; padding: 1.8rem;">
                <i class="fas fa-school" style="font-size: 2.2rem; color: var(--accent-secondary); margin-bottom: 0.8rem;"></i>
                <h3>High School Diploma</h3>
                <p style="color: var(--accent-secondary); font-weight: 600; margin-bottom: 0.4rem; font-size: 0.95rem;">Major in Mathematics — 2019</p>
                <p style="font-size: 0.88rem; color: var(--text-secondary); margin-bottom: 0;">Strong foundation in analytical reasoning, advanced mathematical models, and structured problem-solving methodologies.</p>
            </div>
        </div>

        <h3 style="margin-bottom: 1.5rem; color: var(--accent-primary); font-size: 1.2rem;">
            <i class="fas fa-award" style="margin-right: 0.5rem;"></i> Professional Certifications & Courses
        </h3>
        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            <div class="project social-card" style="align-items: flex-start; text-align: left; padding: 1.8rem;">
                <i class="fab fa-laravel" style="font-size: 2.2rem; color: #ff2d20; margin-bottom: 0.8rem;"></i>
                <h3>Advanced Laravel Mastery</h3>
                <p style="color: var(--accent-primary); font-weight: 600; margin-bottom: 0.4rem; font-size: 0.95rem;">Udemy — 2024</p>
                <p style="font-size: 0.88rem; color: var(--text-secondary); margin-bottom: 0;">Enterprise backend architecture, Eloquent optimization, JWT/Sanctum authentication, queue workers, and RESTful API security.</p>
            </div>

            <div class="project social-card" style="align-items: flex-start; text-align: left; padding: 1.8rem;">
                <i class="fab fa-react" style="font-size: 2.2rem; color: #61dbfb; margin-bottom: 0.8rem;"></i>
                <h3>Full-Stack React Development</h3>
                <p style="color: var(--accent-primary); font-weight: 600; margin-bottom: 0.4rem; font-size: 0.95rem;">Coursera — 2023</p>
                <p style="font-size: 0.88rem; color: var(--text-secondary); margin-bottom: 0;">Building high-scale SPAs, state management with Hooks/Redux, asynchronous data pipelines, and responsive Tailwind UI styling.</p>
            </div>

            <div class="project social-card" style="align-items: flex-start; text-align: left; padding: 1.8rem;">
                <i class="fas fa-code" style="font-size: 2.2rem; color: #48BB78; margin-bottom: 0.8rem;"></i>
                <h3>JavaScript Algorithms & DS</h3>
                <p style="color: var(--accent-primary); font-weight: 600; margin-bottom: 0.4rem; font-size: 0.95rem;">FreeCodeCamp — 2022</p>
                <p style="font-size: 0.88rem; color: var(--text-secondary); margin-bottom: 0;">Mastering modern ES6+ features, Object-Oriented Programming, functional programming patterns, and time complexity optimization.</p>
            </div>
        </div>
    </section>

    {{-- ===== PROJECTS SECTION ===== --}}
    <section id="projects">
        <h2>Featured Projects</h2>
        <div class="projects-grid">
            <div class="project">
                <h3>React Weather Intelligence</h3>
                <p>A responsive real-time weather analytics application featuring automatic geolocation, 7-day predictive charts, and animated dynamic backgrounds.</p>
                <div style="display: flex; gap: 0.5rem; margin-bottom: 1.2rem; flex-wrap: wrap;">
                    <span style="font-size: 0.75rem; background: rgba(6, 182, 212, 0.15); color: var(--accent-primary); padding: 0.2rem 0.6rem; border-radius: 4px;">React.js</span>
                    <span style="font-size: 0.75rem; background: rgba(139, 92, 246, 0.15); color: var(--accent-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">OpenWeather API</span>
                    <span style="font-size: 0.75rem; background: rgba(255, 255, 255, 0.08); color: var(--text-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">Chart.js</span>
                </div>
                <a href="#hero" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="project">
                <h3>E-Commerce Storefront UI</h3>
                <p>A high-conversion online shopping interface equipped with instant live search, dynamic cart drawer, multi-currency display, and checkout flow.</p>
                <div style="display: flex; gap: 0.5rem; margin-bottom: 1.2rem; flex-wrap: wrap;">
                    <span style="font-size: 0.75rem; background: rgba(6, 182, 212, 0.15); color: var(--accent-primary); padding: 0.2rem 0.6rem; border-radius: 4px;">JavaScript</span>
                    <span style="font-size: 0.75rem; background: rgba(139, 92, 246, 0.15); color: var(--accent-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">CSS Grid & Flex</span>
                    <span style="font-size: 0.75rem; background: rgba(255, 255, 255, 0.08); color: var(--text-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">LocalStorage</span>
                </div>
                <a href="#hero" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="project">
                <h3>Interactive Analytics Dashboard</h3>
                <p>A full admin and analytics dashboard with drag-and-drop metrics widgets, user activity heatmaps, and customizable data filters.</p>
                <div style="display: flex; gap: 0.5rem; margin-bottom: 1.2rem; flex-wrap: wrap;">
                    <span style="font-size: 0.75rem; background: rgba(6, 182, 212, 0.15); color: var(--accent-primary); padding: 0.2rem 0.6rem; border-radius: 4px;">PHP / Laravel</span>
                    <span style="font-size: 0.75rem; background: rgba(139, 92, 246, 0.15); color: var(--accent-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">MySQL</span>
                    <span style="font-size: 0.75rem; background: rgba(255, 255, 255, 0.08); color: var(--text-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">ApexCharts</span>
                </div>
                <a href="#hero" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="project">
                <h3>Creative Interactive Portfolio</h3>
                <p>A high-performance modern developer portfolio featuring custom glassmorphic aesthetics, particle animations, and responsive section routing.</p>
                <div style="display: flex; gap: 0.5rem; margin-bottom: 1.2rem; flex-wrap: wrap;">
                    <span style="font-size: 0.75rem; background: rgba(6, 182, 212, 0.15); color: var(--accent-primary); padding: 0.2rem 0.6rem; border-radius: 4px;">HTML5 / CSS3</span>
                    <span style="font-size: 0.75rem; background: rgba(139, 92, 246, 0.15); color: var(--accent-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">ES6+ JS</span>
                    <span style="font-size: 0.75rem; background: rgba(255, 255, 255, 0.08); color: var(--text-secondary); padding: 0.2rem 0.6rem; border-radius: 4px;">Animations</span>
                </div>
                <a href="#hero" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    {{-- ===== CONNECT WITH ME (SOCIAL MEDIA) SECTION ===== --}}
    <section id="social-media">
        <h2 style="margin-bottom: 0.8rem;">Connect With Me</h2>
        <p style="color: var(--text-secondary); text-align: center; margin-bottom: 1.5rem; font-size: 0.95rem;">Follow me on social platforms or message me directly for freelance & collaborations.</p>

        <div class="social-icons-wrapper">
            <a href="https://www.facebook.com/share/1DoW8NwVRe/" class="social-btn facebook" target="_blank" rel="noopener" title="Facebook">
                <i class="fab fa-facebook-f"></i>
                <span class="social-tooltip">Facebook</span>
            </a>
            <a href="https://www.instagram.com/bisho9017?igsh=aXFpaGVheTVodXRj" class="social-btn instagram" target="_blank" rel="noopener" title="Instagram">
                <i class="fab fa-instagram"></i>
                <span class="social-tooltip">Instagram</span>
            </a>
            <a href="https://wa.me/qr/43KE3O2O3V7UE1" class="social-btn whatsapp" target="_blank" rel="noopener" title="WhatsApp">
                <i class="fab fa-whatsapp"></i>
                <span class="social-tooltip">WhatsApp</span>
            </a>
            <a href="#" class="social-btn linkedin" target="_blank" rel="noopener" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
                <span class="social-tooltip">LinkedIn</span>
            </a>
            <a href="https://www.tiktok.com/@bishoy.misheal?_r=1&_t=ZS-95MK9Uh7ukO" class="social-btn tiktok" target="_blank" rel="noopener" title="TikTok">
                <i class="fab fa-tiktok"></i>
                <span class="social-tooltip">TikTok</span>
            </a>
            <a href="https://t.me/Bishoymisheal" class="social-btn telegram" target="_blank" rel="noopener" title="Telegram">
                <i class="fab fa-telegram-plane"></i>
                <span class="social-tooltip">Telegram</span>
            </a>
        </div>
    </section>
@endsection
