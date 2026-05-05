@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="hero-text">
            <span class="badge"><i class="fas fa-circle" style="font-size: 0.5rem; color: #48BB78;"></i> Available for Hire</span>
            <h1>Hello, I'm Bishoy Misheal</h1>
            <h2>Full-Stack <span class="gradient-text">Web Developer</span></h2>
            <p>I build modern, scalable, and high-performance web applications using cutting-edge technologies. Focused on clean code and exceptional user experiences.</p>
        </div>
        <div class="photo-wrapper">
            <img src="{{ asset('img/photo.jpeg') }}" alt="Bishoy Misheal" class="profile-photo">
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

    <section id="about">
        <h2>About Me</h2>
        <p>I am a passionate Full-Stack developer specializing in building modern, responsive, and high-performance web
            applications. With a strong foundation in both frontend and backend technologies, I deliver complete solutions that are both elegant and efficient.</p>
        <p style="margin-top:20px; display: flex; gap: 16px; flex-wrap: wrap;">
            <a href="#skills" class="project-link">
                <i class="fas fa-arrow-right"></i> Explore my skills
            </a>
            <a href="/qualifications" class="project-link">
                <i class="fas fa-graduation-cap"></i> Qualifications & Courses
            </a>
        </p>
    </section>

    <section id="skills">
        <h2>Technical Skills</h2>
        <div class="skills-container" style="padding: 0;">
            <div class="skill-category">
                <h3 style="color: var(--accent-primary); margin-bottom: 1rem;">Frontend Development</h3>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-html5"></i> HTML5</div>
                    <div class="skill-pill"><i class="fab fa-css3-alt"></i> CSS3 & SCSS</div>
                    <div class="skill-pill"><i class="fab fa-js-square"></i> JavaScript (ES6+)</div>
                    <div class="skill-pill"><i class="fab fa-react"></i> React.js</div>
                    <div class="skill-pill"><i class="fas fa-wind"></i> Tailwind CSS</div>
                </div>
            </div>

            <div class="skill-category">
                <h3 style="color: var(--accent-primary); margin-bottom: 1rem;">Backend Development</h3>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-php"></i> PHP</div>
                    <div class="skill-pill"><i class="fab fa-laravel"></i> Laravel</div>
                    <div class="skill-pill"><i class="fab fa-node-js"></i> Node.js & Express</div>
                    <div class="skill-pill"><i class="fas fa-database"></i> MySQL</div>
                    <div class="skill-pill"><i class="fas fa-server"></i> RESTful APIs</div>
                </div>
            </div>

            <div class="skill-category">
                <h3 style="color: var(--accent-primary); margin-bottom: 1rem;">Tools & DevOps</h3>
                <div class="skill-items">
                    <div class="skill-pill"><i class="fab fa-git-alt"></i> Git & GitHub</div>
                    <div class="skill-pill"><i class="fab fa-docker"></i> Docker</div>
                    <div class="skill-pill"><i class="fas fa-terminal"></i> Command Line</div>
                    <div class="skill-pill"><i class="fab fa-npm"></i> NPM / Composer</div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="projects-grid">
            <div class="project">
                <h3>React Weather App</h3>
                <p>A responsive web app that displays real-time weather using an external API, designed with clean UI patterns and intuitive navigation.</p>
                <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="project">
                <h3>E-Commerce UI</h3>
                <p>A modern e-commerce storefront built with Vue.js, featuring smooth product transitions, cart management, and responsive design.</p>
                <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="project">
                <h3>Interactive Dashboard</h3>
                <p>An analytics dashboard with drag-and-drop mechanisms and responsive, interactive charts using HTML5, CSS, and Chart.js.</p>
                <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="project">
                <h3>Creative Portfolio</h3>
                <p>A highly interactive personal portfolio utilizing modern design patterns and Intersection Observers for smooth section reveals.</p>
                <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Get in Touch</h2>
        <form id="contact-form" action="/contact" method="post">
            @csrf
            <div>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
            </div>

            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required>
            </div>

            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="How can I help you?" required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <section id="social-media">
        <h2 style="margin-bottom: 1.5rem;">Connect With Me</h2>
        <div class="social-icons" style="margin-bottom: 3rem; display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
            <a href="https://www.facebook.com/share/1DoW8NwVRe/" class="fs-icon fs-facebook" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/bisho9017?igsh=aXFpaGVheTVodXRj" class="fs-icon fs-instagram" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/qr/43KE3O2O3V7UE1" class="fs-icon fs-whatsapp" title="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="fs-icon fs-linkedin" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.tiktok.com/@bishoy.misheal?_r=1&_t=ZS-95MK9Uh7ukO" class="fs-icon fs-tiktok" title="TikTok">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://t.me/Bishoymisheal" class="fs-icon fs-telegram" title="Telegram">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </div>
    </section>
@endsection
