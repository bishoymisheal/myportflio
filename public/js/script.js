document.addEventListener("DOMContentLoaded", () => {

    // ── Mobile Hamburger Menu Toggle ──
    const menuBtn = document.getElementById('mobileMenuBtn');
    const menuIcon = document.getElementById('menuIcon');
    const navMenu = document.getElementById('navMenu');

    if (menuBtn && navMenu) {
        menuBtn.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('active');
            // Switch icon between bars ↔ X
            menuIcon.classList.replace(
                isOpen ? 'fa-bars' : 'fa-xmark',
                isOpen ? 'fa-xmark' : 'fa-bars'
            );
            // Prevent body scroll when menu is open
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close menu when a nav link is clicked
        navMenu.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                menuIcon.classList.replace('fa-xmark', 'fa-bars');
                document.body.style.overflow = '';
            });
        });

        // Close menu on window resize above 768px
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                menuIcon.classList.replace('fa-xmark', 'fa-bars');
                document.body.style.overflow = '';
            }
        });
    }


    // Subtle hover lift effect for cards (replacing aggressive 3D tilt)
    const cards = document.querySelectorAll('.project, .social-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-4px)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });

    // Reveal sections on scroll with IntersectionObserver
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.classList.add('hidden-section');
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    sections.forEach(section => {
        observer.observe(section);
    });

    // Contact form handler
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;
            submitBtn.innerText = 'Sending...';
            submitBtn.disabled = true;

            const formData = new FormData(this);
            fetch('/contact', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    submitBtn.innerText = 'Sent ✓';
                    submitBtn.style.background = '#48BB78';
                    setTimeout(() => {
                        submitBtn.innerText = originalText;
                        submitBtn.style.background = '';
                        submitBtn.disabled = false;
                    }, 3000);
                    this.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitBtn.innerText = 'Error ✗';
                    submitBtn.style.background = '#E53E3E';
                    setTimeout(() => {
                        submitBtn.innerText = originalText;
                        submitBtn.style.background = '';
                        submitBtn.disabled = false;
                    }, 3000);
                });
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});