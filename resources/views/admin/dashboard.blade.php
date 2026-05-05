<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — Bishoy Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dashboard-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            min-height: 100vh;
        }
        .sidebar {
            background: var(--accent-primary);
            color: white;
            padding: 2rem;
        }
        .sidebar h2 { color: white; margin-bottom: 2rem; font-size: 1.5rem; }
        .sidebar a { color: rgba(255,255,255,0.7); text-decoration: none; display: block; padding: 0.8rem 0; font-weight: 500; transition: color 0.3s; }
        .sidebar a:hover { color: white; }
        .sidebar a.active { color: white; border-right: 3px solid var(--accent-gold); }

        .main-content { padding: 3rem; background: var(--bg-color); }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 3rem; }
        .stat-card { background: white; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: var(--shadow-sm); }
        .stat-card h4 { font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); margin-bottom: 0.5rem; }
        .stat-card .value { font-size: 1.8rem; font-weight: 800; color: var(--accent-primary); }

        .messages-list { display: flex; flex-direction: column; gap: 1rem; }
        .message-item { background: white; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: flex-start; transition: var(--transition); }
        .message-item:hover { border-color: var(--accent-secondary); box-shadow: var(--shadow-md); }
        .msg-info h3 { font-size: 1rem; margin-bottom: 0.3rem; }
        .msg-info p { font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 0.5rem; }
        .msg-body { font-style: italic; color: var(--text-color); border-left: 3px solid var(--border-color); padding-left: 1rem; margin-top: 0.8rem; }
        
        .btn-delete { background: #FED7D7; color: #C53030; border: none; padding: 0.5rem 1rem; border-radius: var(--radius-sm); cursor: pointer; transition: var(--transition); font-weight: 600; font-size: 0.85rem; }
        .btn-delete:hover { background: #FC8181; color: white; }

        @media (max-width: 900px) {
            .dashboard-layout { grid-template-columns: 1fr; }
            .sidebar { display: none; }
        }
    </style>
</head>
<body>
    <div class="dashboard-layout">
        <aside class="sidebar">
            <h2>Bishoy Dashboard</h2>
            <nav>
                <a href="/admin/dashboard" class="active"><i class="fas fa-envelope"></i> Messages</a>
                <a href="/"><i class="fas fa-external-link-alt"></i> View Website</a>
                <a href="/admin/logout" style="margin-top: 2rem; color: #FC8181;"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <header style="margin-bottom: 3rem; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h1 style="font-size: 2rem; margin-bottom: 0.5rem;">Messages Inbox</h1>
                    <p>Manage inquiries received through your website contact form.</p>
                </div>
                <div class="badge" style="margin-bottom: 0; background: #EBF8FF; color: #2B6CB0; border-color: #BEE3F8;">
                    {{ count($messages) }} Total Messages
                </div>
            </header>

            @if(session('success'))
                <div style="background: #C6F6D5; color: #22543D; padding: 1rem; border-radius: var(--radius-sm); margin-bottom: 2rem; border: 1px solid #9AE6B4;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="messages-list">
                @forelse($messages as $msg)
                    <div class="message-item">
                        <div class="msg-info">
                            <h3>{{ $msg->name }}</h3>
                            <p><i class="fas fa-at"></i> {{ $msg->email }} &bull; <i class="fas fa-clock"></i> {{ $msg->created_at->diffForHumans() }}</p>
                            <div class="msg-body">
                                "{{ $msg->message }}"
                            </div>
                        </div>
                        <form action="/admin/messages/{{ $msg->id }}/delete" method="POST">
                            @csrf
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
                        </form>
                    </div>
                @empty
                    <div style="text-align: center; padding: 5rem; background: white; border: 1px dashed var(--border-color); border-radius: var(--radius-lg);">
                        <i class="fas fa-inbox" style="font-size: 3rem; color: var(--border-color); margin-bottom: 1rem;"></i>
                        <p>No messages received yet.</p>
                    </div>
                @endforelse
            </div>
        </main>
    </div>
</body>
</html>
