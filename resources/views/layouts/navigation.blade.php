<header class="site-header">

    <nav class="site-nav">

        <a href="{{ route('home') }}" class="site-logo">
            <img
                src="{{ asset('images/Inspirationhx_logo.png') }}"
                alt="Inspiration House"
            >
        </a>

        <div class="nav-links">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('about') }}">
                About Us
            </a>

            <a href="{{ route('services') }}">
                Our Work
            </a>

            <div class="nav-dropdown">

                <a href="{{ route('partnerships') }}" class="dropdown-toggle">
                    Partnerships
                </a>

                <div class="dropdown-menu">

                    <a href="{{ route('partnerships') }}">
                        Our Partners
                    </a>

                    <a href="{{ route('volunteer') }}">
                        Volunteer
                    </a>

                </div>

            </div>

            <div class="nav-dropdown">

                <a href="{{ route('blog') }}" class="dropdown-toggle">
                    Resources
                </a>

                <div class="dropdown-menu">

                    <a href="{{ route('blog') }}">
                        Stories & Blog
                    </a>

                    <a href="{{ route('events') }}">
                        Events
                    </a>

                    <a href="{{ route('gallery') }}">
                        Gallery
                    </a>

                </div>

            </div>

            <a href="{{ route('team') }}">
                Our Team
            </a>

            <a href="{{ route('contact') }}">
                Contact
            </a>

            <a href="{{ route('donate') }}" class="nav-donate">
                Donate
            </a>

        </div>

    </nav>

</header>