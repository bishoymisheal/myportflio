<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Bishoy Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--bg-color);
        }
        .login-card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            padding: 3rem;
            border-radius: var(--radius-lg);
            width: 100%;
            max-width: 400px;
            box-shadow: var(--shadow-lg);
        }
        .error-msg {
            color: #E53E3E;
            font-size: 0.85rem;
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2 style="text-align: center; margin-bottom: 2rem;">Admin Login</h2>
            
            @if(session('error'))
                <div class="error-msg">{{ session('error') }}</div>
            @endif

            <form action="/admin/login" method="POST">
                @csrf
                <div style="margin-bottom: 1.5rem;">
                    <label for="password">Administrator Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter password">
                </div>
                <button type="submit" style="width: 100%;">Login to Dashboard</button>
            </form>
            
            <p style="text-align: center; margin-top: 1.5rem; font-size: 0.85rem;">
                <a href="/" style="color: var(--text-muted); text-decoration: none;">&larr; Back to Site</a>
            </p>
        </div>
    </div>
</body>
</html>
