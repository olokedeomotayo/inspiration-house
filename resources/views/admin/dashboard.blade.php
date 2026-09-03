<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard | Inspiration House</title>

    <link rel="icon"
          type="image/x-icon"
          href="{{ asset('images/favicon/favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="dashboard-layout">

    <!-- SIDEBAR -->
    <aside class="dashboard-sidebar">

        <div class="dashboard-sidebar-logo">
            <a href="{{ route('admin.dashboard') }}">
                <img
                    src="{{ asset('images/Inspirationhx_logo.png') }}"
                    alt="Inspiration House"
                >
            </a>
        </div>

        <nav class="dashboard-sidebar-nav">

            <a
                href="{{ route('admin.dashboard') }}"
                class="active"
            >
                <span>▦</span>
                Dashboard
            </a>

            <a href="#">
                <span>◫</span>
                Events
            </a>

            <a href="#">
                <span>▤</span>
                Blog
            </a>

            <a href="#">
                <span>▧</span>
                Gallery
            </a>

            <a href="#">
                <span>♙</span>
                Team
            </a>

            <a href="{{ route('home') }}" target="_blank">
                <span>↗</span>
                View Website
            </a>

            <a href="{{ route('profile.edit') }}">
                <span>⚙</span>
                Profile
            </a>

        </nav>

    </aside>


    <!-- MAIN -->
    <div class="dashboard-main">

        <!-- TOP BAR -->
        <header class="dashboard-topbar">

            <h1>Admin Dashboard</h1>

            <div class="dashboard-user">

                <div class="dashboard-user-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="dashboard-user-info">
                    <strong>{{ auth()->user()->name }}</strong>
                    <span>Administrator</span>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="admin-logout"
                    >
                        Logout
                    </button>
                </form>

            </div>

        </header>


        <!-- CONTENT -->
        <main class="dashboard-content">

            <div class="dashboard-welcome">

                <span>Inspiration House</span>

                <h2>
                    Welcome back, {{ auth()->user()->name }}
                </h2>

            </div>


            <!-- STATISTICS -->
            <section class="dashboard-stats">

                <div class="dashboard-stat-card">
                    <span>Events</span>
                    <strong>0</strong>
                </div>

                <div class="dashboard-stat-card">
                    <span>Blog Posts</span>
                    <strong>0</strong>
                </div>

                <div class="dashboard-stat-card">
                    <span>Gallery Images</span>
                    <strong>0</strong>
                </div>

                <div class="dashboard-stat-card">
                    <span>Team Members</span>
                    <strong>0</strong>
                </div>

            </section>


            <!-- QUICK ACTIONS -->
            <section class="dashboard-section">

                <div class="dashboard-section-header">

                    <h3>Quick Actions</h3>

                </div>

                <div class="dashboard-quick-actions">

                    <a href="#" class="dashboard-action">

                        <strong>Create Event</strong>

                        <span>
                            Add a new event to the website.
                        </span>

                    </a>

                    <a href="#" class="dashboard-action">

                        <strong>Create Blog Post</strong>

                        <span>
                            Publish a new story or article.
                        </span>

                    </a>

                    <a href="#" class="dashboard-action">

                        <strong>Upload Gallery Image</strong>

                        <span>
                            Add new photos to the gallery.
                        </span>

                    </a>

                </div>

            </section>


            <!-- RECENT ACTIVITY -->
            <section class="dashboard-section">

                <div class="dashboard-section-header">

                    <h3>Recent Activity</h3>

                </div>

                <div class="dashboard-action">

                    <strong>No activity yet</strong>

                    <span>
                        Your recent events, posts and gallery activity
                        will appear here.
                    </span>

                </div>

            </section>

        </main>

    </div>

</div>

</body>
</html>