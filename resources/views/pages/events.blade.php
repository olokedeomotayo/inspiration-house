@extends('layouts.app')

@section('title', 'Events | Inspiration House')

@section('description', 'Discover upcoming events, community activities and programmes from Inspiration House.')

@section('content')

<section class="inner-hero events-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>EVENTS & ACTIVITIES</span>

        <h1>
            Bringing People
            Together.
        </h1>

        <p>
            Discover upcoming gatherings, community activities,
            programmes and opportunities to connect with Inspiration House.
        </p>

    </div>

</section>


<section class="events-intro">

    <div class="section-heading">

        <span>WHAT'S HAPPENING</span>

        <h2>
            Connect. Participate. Make An Impact.
        </h2>

        <p>
            Our events create opportunities for people to connect,
            learn, contribute and participate in meaningful community
            activities.
        </p>

    </div>

</section>


<section class="events-section">

    <div class="events-grid">

        <article class="event-card">

            <div class="event-date">

                <strong>20</strong>
                <span>NOV</span>

            </div>

            <div class="event-card-content">

                <span>COMMUNITY</span>

                <h2>
                    Community Impact Gathering
                </h2>

                <p>
                    A community-focused gathering bringing people together
                    to connect, share ideas and explore practical ways to
                    create positive change.
                </p>

                <div class="event-meta">
                    <span>📍 Lagos, Nigeria</span>
                    <span>🕐 10:00 AM</span>
                </div>

                <a href="{{ route('contact') }}">
                    Get More Information →
                </a>

            </div>

        </article>


        <article class="event-card">

            <div class="event-date">

                <strong>05</strong>
                <span>DEC</span>

            </div>

            <div class="event-card-content">

                <span>YOUTH</span>

                <h2>
                    Youth Empowerment Workshop
                </h2>

                <p>
                    An interactive programme designed to encourage young
                    people to develop skills, confidence and leadership
                    capacity.
                </p>

                <div class="event-meta">
                    <span>📍 Lagos, Nigeria</span>
                    <span>🕐 11:00 AM</span>
                </div>

                <a href="{{ route('contact') }}">
                    Get More Information →
                </a>

            </div>

        </article>


        <article class="event-card">

            <div class="event-date">

                <strong>18</strong>
                <span>DEC</span>

            </div>

            <div class="event-card-content">

                <span>OUTREACH</span>

                <h2>
                    Community Outreach Day
                </h2>

                <p>
                    A practical outreach activity focused on connecting
                    people with support, resources and meaningful community
                    engagement.
                </p>

                <div class="event-meta">
                    <span>📍 Lagos, Nigeria</span>
                    <span>🕐 9:00 AM</span>
                </div>

                <a href="{{ route('volunteer') }}">
                    Volunteer At This Event →
                </a>

            </div>

        </article>

    </div>

</section>


<section class="event-participation">

    <div class="event-participation-content">

        <span>GET INVOLVED</span>

        <h2>
            Events Are Better
            When You Are Part Of Them.
        </h2>

        <p>
            You can participate by attending an event, volunteering,
            contributing resources or partnering with us to create
            meaningful experiences for communities.
        </p>

        <div class="cta-actions">

            <a href="{{ route('volunteer') }}">
                Volunteer
            </a>

            <a href="{{ route('partnerships') }}">
                Partner With Us
            </a>

            <a href="{{ route('contact') }}">
                Contact Us
            </a>

        </div>

    </div>

</section>


<section class="past-events">

    <div class="section-heading">

        <span>PAST EVENTS</span>

        <h2>
            Moments From Our Journey
        </h2>

        <p>
            Explore previous activities and community moments through
            our gallery.
        </p>

    </div>

    <a class="past-events-link" href="{{ route('gallery') }}">
        Explore The Gallery →
    </a>

</section>

@endsection