<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Bishoy Miechel</title>
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

        /* Subtle background orbs */
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

        /* ── Auth Card ── */
        .auth-wrapper {
            width: 100%;
            max-width: 460px;
            padding: 1.5rem;
            position: relative;
            z-index: 1;
        }

        /* Logo at top */
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

        /* Divider line under title */
        .auth-divider {
            width: 40px;
            height: 3px;
            background: var(--accent-gold);
            border-radius: 2px;
            margin: 0.8rem auto 0;
        }

        /* ── Form Fields ── */
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

        .auth-input-wrap input:focus ~ i.field-icon,
        .auth-input-wrap:focus-within i.field-icon {
            color: var(--accent-secondary);
        }

        /* Toggle password visibility */
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

        /* ── Submit Button ── */
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

        /* ── Switch Link ── */
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

        /* ── Error/Success alerts ── */
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
        .auth-alert.success {
            background: rgba(72,187,120,0.08);
            border: 1px solid rgba(72,187,120,0.2);
            color: #276749;
        }

        /* ── Back to site link ── */
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
                <h1>Welcome Back</h1>
                <div class="auth-divider"></div>
                <p>Sign in to access the portfolio</p>
            </div>

            {{-- Error Alert --}}
            @if ($errors->any() || session('error'))
                <div class="auth-alert error" style="margin-bottom:1.2rem;">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ session('error') ?? $errors->first() }}
                </div>
            @endif

            {{-- Success Alert --}}
            @if (session('success'))
                <div class="auth-alert success" style="margin-bottom:1.2rem;">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <form action="/login" method="POST" class="auth-form">
                @csrf

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
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                        >
                        <i class="fas fa-lock field-icon"></i>
                        <button type="button" class="toggle-password" onclick="togglePass('password', this)" tabindex="-1">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="auth-btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Sign In
                </button>
            </form>

            <div class="auth-switch">
                Don't have an account?
                <a href="/register">Create one</a>
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
    </script>
</body>
</html>
