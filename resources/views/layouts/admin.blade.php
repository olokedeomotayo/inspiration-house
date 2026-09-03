<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'Admin Dashboard') | Inspiration House
    </title>

    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('images/favicon/favicon.ico') }}"
    >

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
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
            >
                <span>▦</span>
                Dashboard
            </a>


            <a
                href="{{ route('admin.events.index') }}"
                class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}"
            >
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


            <a
                href="{{ route('home') }}"
                target="_blank"
            >
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

            <div>

                <h1>
                    @yield('page-heading', 'Admin Dashboard')
                </h1>

                <span>
                    Inspiration House Management
                </span>

            </div>


            <div class="dashboard-user">

                <div class="dashboard-user-avatar">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>


                <div class="dashboard-user-info">

                    <strong>
                        {{ auth()->user()->name }}
                    </strong>

                    <span>
                        Administrator
                    </span>

                </div>


                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

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


        <!-- PAGE CONTENT -->
        <main class="dashboard-content">

            @yield('admin-content')

        </main>

    </div>

</div>

</body>
</html>