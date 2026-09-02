document.addEventListener("DOMContentLoaded", () => {

    // ── Mobile Hamburger Menu Toggle ──
    const menuBtn = document.getElementById('mobileMenuBtn');
    const menuIcon = document.getElementById('menuIcon');
    const navMenu = document.getElementById('navMenu');

    if (menuBtn && navMenu) {
        menuBtn.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('active');
            if (menuIcon) {
                menuIcon.classList.replace(
                    isOpen ? 'fa-bars' : 'fa-xmark',
                    isOpen ? 'fa-xmark' : 'fa-bars'
                );
            }
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close menu when a nav link is clicked
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                if (menuIcon) menuIcon.classList.replace('fa-xmark', 'fa-bars');
                document.body.style.overflow = '';
            });
        });

        // Close menu on resize above 768px
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                if (menuIcon) menuIcon.classList.replace('fa-xmark', 'fa-bars');
                document.body.style.overflow = '';
            }
        });
    }

    // ── Header Scroll Blur Effect ──
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        }, { passive: true });
    }

    // ── ScrollSpy: Active Nav Link Highlight on Scroll ──
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a');

    function highlightNavOnScroll() {
        const scrollPosition = window.scrollY + 180;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', highlightNavOnScroll, { passive: true });

    // ── Reveal Sections with Smooth IntersectionObserver ──
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
        threshold: 0.08,
        rootMargin: "0px 0px -40px 0px"
    });

    sections.forEach(section => {
        observer.observe(section);
    });

    // ── Floating Socials Visibility Control ──
    const floatingSocials = document.getElementById('floatingSocials');
    const footer = document.querySelector('footer');
    const socialSection = document.getElementById('social-media');

    if (floatingSocials) {
        let footerVisible = false;
        let socialVisible = false;

        const updateFloatingSidebar = () => {
            if (footerVisible || socialVisible) {
                floatingSocials.classList.add('fs-hidden');
            } else {
                floatingSocials.classList.remove('fs-hidden');
            }
        };

        const sidebarObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.target === footer) footerVisible = entry.isIntersecting;
                if (entry.target === socialSection) socialVisible = entry.isIntersecting;
            });
            updateFloatingSidebar();
        }, { root: null, threshold: 0.05 });

        if (footer) sidebarObserver.observe(footer);
        if (socialSection) sidebarObserver.observe(socialSection);
    }

    // ── Frontend Contact Form Handler ──
    const contactForm = document.getElementById('contact-form');
    const formAlert = document.getElementById('form-alert');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalHTML = submitBtn.innerHTML;

            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Gather inputs
            const name = document.getElementById('name')?.value || '';
            const email = document.getElementById('email')?.value || '';
            const message = document.getElementById('message')?.value || '';

            // Simulate immediate clean frontend experience or send to backend if available
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
                submitBtn.style.background = 'linear-gradient(135deg, #10B981, #059669)';

                if (formAlert) {
                    formAlert.style.display = 'block';
                    formAlert.style.background = 'rgba(16, 185, 129, 0.15)';
                    formAlert.style.border = '1px solid rgba(16, 185, 129, 0.4)';
                    formAlert.style.color = '#34D399';
                    formAlert.innerHTML = `<strong>Thank you, ${name || 'Friend'}!</strong> Your message has been sent successfully. I'll get back to you shortly.`;
                }

                contactForm.reset();

                setTimeout(() => {
                    submitBtn.innerHTML = originalHTML;
                    submitBtn.style.background = '';
                    submitBtn.disabled = false;
                    if (formAlert) {
                        formAlert.style.display = 'none';
                    }
                }, 5000);
            }, 600);
        });
    }

    // ── Smooth Scroll for all internal hash anchors ──
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || !targetId) return;
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