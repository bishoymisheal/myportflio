<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up — Bishoy Misheal</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ── Auth Page Layout ── */
        body {
            padding-top: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-color);
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            display: block;
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(6,182,212,0.08) 0%, transparent 70%);
            top: -200px;
            left: -200px;
            pointer-events: none;
        }
        body::after {
            content: '';
            display: block;
            position: fixed;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(139,92,246,0.08) 0%, transparent 70%);
            bottom: -150px;
            right: -150px;
            pointer-events: none;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 460px;
            padding: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .auth-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            text-decoration: none;
            color: var(--accent-primary);
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 2rem;
            letter-spacing: -0.02em;
            transition: var(--transition);
        }
        .auth-logo i { font-size: 1.2rem; }
        .auth-logo span { color: var(--accent-gold); font-size: 1.5rem; }
        .auth-logo:hover { opacity: 0.8; }

        .auth-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-xl);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .auth-card-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .auth-card-header h1 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--accent-primary);
            margin-bottom: 0.5rem;
            letter-spacing: -0.03em;
            background: none;
            -webkit-text-fill-color: unset;
        }
        .auth-card-header p {
            font-size: 0.92rem;
            color: var(--text-muted);
        }

        .auth-divider {
            width: 40px;
            height: 3px;
            background: var(--accent-gold);
            border-radius: 2px;
            margin: 0.8rem auto 0;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .auth-field {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }

        .auth-field label {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 0;
        }

        .auth-input-wrap {
            position: relative;
        }

        .auth-input-wrap i.field-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 0.9rem;
            pointer-events: none;
            transition: var(--transition);
        }

        .auth-input-wrap input {
            width: 100%;
            background: rgba(10, 10, 15, 0.6);
            border: 1px solid var(--border-color);
            padding: 0.85rem 2.8rem 0.85rem 2.8rem;
            border-radius: var(--radius-sm);
            color: var(--text-color);
            font-family: inherit;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .auth-input-wrap input:focus {
            outline: none;
            border-color: var(--accent-secondary);
            box-shadow: 0 0 0 3px rgba(6,182,212,0.15);
            background: var(--bg-secondary);
        }

        .auth-input-wrap:focus-within .field-icon {
            color: var(--accent-secondary);
        }

        .toggle-password {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 0;
            font-size: 0.9rem;
            transition: var(--transition);
        }
        .toggle-password:hover { color: var(--accent-primary); }

        /* Field error hint */
        .field-error {
            font-size: 0.8rem;
            color: #c53030;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        /* Password strength bar */
        .strength-bar-wrap {
            display: flex;
            gap: 4px;
            margin-top: 6px;
        }
        .strength-seg {
            flex: 1;
            height: 3px;
            border-radius: 2px;
            background: var(--border-color);
            transition: background 0.3s;
        }
        .strength-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-top: 3px;
        }

        .auth-btn {
            background: var(--accent-primary);
            color: var(--bg-color);
            border: none;
            padding: 0.9rem;
            border-radius: var(--radius-sm);
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: var(--transition);
            letter-spacing: 0.02em;
            margin-top: 0.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .auth-btn:hover {
            background: var(--accent-secondary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        .auth-btn:active { transform: translateY(0); }

        .auth-switch {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: var(--text-muted);
        }
        .auth-switch a {
            color: var(--accent-secondary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }
        .auth-switch a:hover { color: var(--accent-primary); }

        .auth-alert {
            padding: 0.85rem 1rem;
            border-radius: var(--radius-sm);
            font-size: 0.88rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }
        .auth-alert.error {
            background: rgba(229,62,62,0.07);
            border: 1px solid rgba(229,62,62,0.2);
            color: #c53030;
        }

        .auth-back {
            text-align: center;
            margin-top: 1.2rem;
        }
        .auth-back a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            transition: var(--transition);
        }
        .auth-back a:hover { color: var(--accent-primary); }

        /* Terms text */
        .auth-terms {
            font-size: 0.78rem;
            color: var(--text-muted);
            text-align: center;
            margin-top: -0.3rem;
        }
    </style>
</head>
<body>
    <div class="auth-wrapper">

        {{-- Logo --}}
        <a href="/" class="auth-logo">
            <i class="fas fa-code"></i>
            Bishoy<span>.</span>
        </a>

        <div class="auth-card">
            <div class="auth-card-header">
                <h1>Create Account</h1>
                <div class="auth-divider"></div>
                <p>Join to explore the portfolio</p>
            </div>

            {{-- Error Alert --}}
            @if ($errors->any())
                <div class="auth-alert error" style="margin-bottom:1.2rem;">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/register" method="POST" class="auth-form" id="registerForm">
                @csrf

                {{-- Name --}}
                <div class="auth-field">
                    <label for="name">Full Name</label>
                    <div class="auth-input-wrap">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="John Doe"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                        >
                        <i class="fas fa-user field-icon"></i>
                    </div>
                </div>

                {{-- Email --}}
                <div class="auth-field">
                    <label for="email">Email Address</label>
                    <div class="auth-input-wrap">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="your@email.com"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                        >
                        <i class="fas fa-envelope field-icon"></i>
                    </div>
                </div>

                {{-- Password --}}
                <div class="auth-field">
                    <label for="password">Password</label>
                    <div class="auth-input-wrap">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Min. 8 characters"
                            required
                            autocomplete="new-password"
                            oninput="checkStrength(this.value)"
                        >
                        <i class="fas fa-lock field-icon"></i>
                        <button type="button" class="toggle-password" onclick="togglePass('password', this)" tabindex="-1">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    {{-- Strength Indicator --}}
                    <div class="strength-bar-wrap" id="strengthBar">
                        <div class="strength-seg" id="seg1"></div>
                        <div class="strength-seg" id="seg2"></div>
                        <div class="strength-seg" id="seg3"></div>
                        <div class="strength-seg" id="seg4"></div>
                    </div>
                    <span class="strength-label" id="strengthLabel"></span>
                </div>

                {{-- Confirm Password --}}
                <div class="auth-field">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="auth-input-wrap">
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Repeat your password"
                            required
                            autocomplete="new-password"
                        >
                        <i class="fas fa-lock field-icon"></i>
                        <button type="button" class="toggle-password" onclick="togglePass('password_confirmation', this)" tabindex="-1">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="auth-btn">
                    <i class="fas fa-user-plus"></i>
                    Create Account
                </button>

                <p class="auth-terms">
                    By signing up, you agree to view an awesome portfolio 🎉
                </p>
            </form>

            <div class="auth-switch">
                Already have an account?
                <a href="/login">Sign in</a>
            </div>
        </div>

        <div class="auth-back">
            <a href="/"><i class="fas fa-arrow-left"></i> Back to Home</a>
        </div>
    </div>

    <script>
        function togglePass(fieldId, btn) {
            const input = document.getElementById(fieldId);
            const icon = btn.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        function checkStrength(val) {
            const segs   = [seg1, seg2, seg3, seg4];
            const label  = document.getElementById('strengthLabel');
            const colors = { 1: '#fc8181', 2: '#f6ad55', 3: '#68d391', 4: '#48bb78' };
            const labels = { 1: 'Weak', 2: 'Fair', 3: 'Good', 4: 'Strong' };

            let score = 0;
            if (val.length >= 8)          score++;
            if (/[A-Z]/.test(val))        score++;
            if (/[0-9]/.test(val))        score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            segs.forEach((s, i) => {
                s.style.background = i < score ? colors[score] : 'var(--border-color)';
            });

            label.textContent = score > 0 ? labels[score] : '';
            label.style.color = colors[score] || 'var(--text-muted)';
        }
    </script>
</body>
</html>
