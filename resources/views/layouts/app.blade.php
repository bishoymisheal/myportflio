<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bishoy Miechel — Full-Stack Web Developer. Building modern, high-performance web applications with cutting-edge technologies.">
    <title>Bishoy Miechel — Full-Stack Developer</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/social-skills.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating-socials.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    {{-- ===== ANIMATED BACKGROUND LAYER ===== --}}
    <div class="bg-animation-layer" aria-hidden="true">
        {{-- Grid overlay --}}
        <div class="bg-grid"></div>

        {{-- Floating glow orbs --}}
        <div class="bg-orb bg-orb-cyan"></div>
        <div class="bg-orb bg-orb-violet"></div>
        <div class="bg-orb bg-orb-pink"></div>
        <div class="bg-orb bg-orb-blue"></div>

        {{-- Floating particles --}}
        <div class="bg-particle bg-particle-1"></div>
        <div class="bg-particle bg-particle-2"></div>
        <div class="bg-particle bg-particle-3"></div>
        <div class="bg-particle bg-particle-4"></div>
        <div class="bg-particle bg-particle-5"></div>
        <div class="bg-particle bg-particle-6"></div>
        <div class="bg-particle bg-particle-7"></div>
        <div class="bg-particle bg-particle-8"></div>
        <div class="bg-particle bg-particle-9"></div>
        <div class="bg-particle bg-particle-10"></div>
        <div class="bg-particle bg-particle-11"></div>
        <div class="bg-particle bg-particle-12"></div>

        {{-- Shooting stars --}}
        <div class="shooting-star shooting-star-1"></div>
        <div class="shooting-star shooting-star-2"></div>
        <div class="shooting-star shooting-star-3"></div>
        <div class="shooting-star shooting-star-4"></div>
        <div class="shooting-star shooting-star-5"></div>

        {{-- Scan line overlay --}}
        <div class="bg-scanlines"></div>
    </div>

    <header>
        <div class="header-container">
            <a href="#hero" class="logo">
                <i class="fas fa-code"></i>
                <span style="font-weight: 800; font-family: 'Space Grotesk', 'Inter', sans-serif;">Bishoy<span style="color: var(--accent-secondary); font-size: 1.3rem;">.</span></span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation menu">
                <i class="fas fa-bars" id="menuIcon"></i>
            </button>

            <div class="nav-menu" id="navMenu">
                <nav id="navbar">
                    <ul>
                        <li><a href="#hero" class="nav-link active">Home</a></li>
                        <li><a href="#about" class="nav-link">About</a></li>
                        <li><a href="#skills" class="nav-link">Skills</a></li>
                        <li><a href="#qualifications" class="nav-link">Qualifications</a></li>
                        <li><a href="#projects" class="nav-link">Projects</a></li>
                        <li><a href="#social-media" class="nav-link">Social</a></li>
                    </ul>
                </nav>

                <a href="#social-media" class="header-cta">
                    <i class="fas fa-share-nodes"></i> Connect
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content" style="text-align: center; padding: 2.5rem 1rem;">
            <p style="color: var(--text-secondary); font-size: 0.95rem;">&copy; {{ date('Y') }} Bishoy Miechel. Crafted with precision & passion.</p>
        </div>
    </footer>

    {{-- ===== FIXED COMPACT SOCIAL SIDEBAR (bottom-right) ===== --}}
    <div class="floating-socials" id="floatingSocials">
        <a href="https://www.facebook.com/share/1DoW8NwVRe/"
           class="fs-icon fs-facebook" title="Facebook" target="_blank" rel="noopener">
            <i class="fab fa-facebook-f"></i>
            <span class="fs-tooltip">Facebook</span>
        </a>
        <a href="https://www.instagram.com/bisho9017?igsh=aXFpaGVheTVodXRj"
           class="fs-icon fs-instagram" title="Instagram" target="_blank" rel="noopener">
            <i class="fab fa-instagram"></i>
            <span class="fs-tooltip">Instagram</span>
        </a>
        <a href="https://wa.me/qr/43KE3O2O3V7UE1"
           class="fs-icon fs-whatsapp" title="WhatsApp" target="_blank" rel="noopener">
            <i class="fab fa-whatsapp"></i>
            <span class="fs-tooltip">WhatsApp</span>
        </a>
        <a href="https://t.me/Bishoymisheal"
           class="fs-icon fs-telegram" title="Telegram" target="_blank" rel="noopener">
            <i class="fab fa-telegram-plane"></i>
            <span class="fs-tooltip">Telegram</span>
        </a>
        <a href="https://www.tiktok.com/@bishoy.misheal?_r=1&_t=ZS-95MK9Uh7ukO"
           class="fs-icon fs-tiktok" title="TikTok" target="_blank" rel="noopener">
            <i class="fab fa-tiktok"></i>
            <span class="fs-tooltip">TikTok</span>
        </a>
        <a href="#" class="fs-icon fs-linkedin" title="LinkedIn" target="_blank" rel="noopener">
            <i class="fab fa-linkedin-in"></i>
            <span class="fs-tooltip">LinkedIn</span>
        </a>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
