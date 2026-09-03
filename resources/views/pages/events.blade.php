@extends('layouts.app')

@section('title', 'Events | Inspiration House')

@section(
    'description',
    'Explore Inspiration House events, community activities, outreach programmes and moments of impact.'
)

@section('content')

{{-- ==========================================
     EVENTS HERO
========================================== --}}

<section
    class="events-hero"
    style="
        background-image:
            linear-gradient(
                90deg,
                rgba(38, 9, 9, 0.90),
                rgba(38, 9, 9, 0.55)
            ),
            url('{{ asset('images/events.jpg') }}');
    "
>

    <div class="events-hero-content">

        <span class="events-eyebrow">
            INSPIRATION HOUSE
        </span>

        <h1>
            Our Events
        </h1>

        <p>
            Discover the people, programmes and moments
            that bring our community together.
        </p>

    </div>

</section>


{{-- ==========================================
     EVENTS INTRO
========================================== --}}

<section class="events-intro">

    <div class="events-container">

        <div class="events-intro-content">

            <span class="events-section-label">
                EVENTS & ACTIVITIES
            </span>

            <h2>
                Creating Moments That Matter
            </h2>

            <p>
                From community outreach and empowerment programmes
                to special gatherings and initiatives, our events
                create opportunities for people to connect,
                participate and make a difference.
            </p>

        </div>

    </div>

</section>


{{-- ==========================================
     EVENTS LIST
========================================== --}}

<section class="events-list-section">

    <div class="events-container">

        @if($events->count())

            <div class="events-grid">

                @foreach($events as $event)

                    <article class="event-card">

                        {{-- IMAGE PREVIEW --}}
                        <div class="event-card-image">

                            @if($event->images->count())

                                <img
                                    src="{{ asset('storage/' . $event->images->first()->image_path) }}"
                                    alt="{{ $event->title }}"
                                    loading="lazy"
                                >

                            @else

                                <div class="event-card-placeholder">
                                    Inspiration House
                                </div>

                            @endif


                            @if($event->event_date)

                                <div class="event-date-badge">

                                    <strong>
                                        {{ $event->event_date->format('d') }}
                                    </strong>

                                    <span>
                                        {{ $event->event_date->format('M') }}
                                    </span>

                                </div>

                            @endif

                        </div>


                        {{-- CONTENT --}}
                        <div class="event-card-content">

                            @if($event->event_date)

                                <div class="event-card-date">

                                    {{ $event->event_date->format('F j, Y') }}

                                </div>

                            @endif


                            <h3>
                                {{ $event->title }}
                            </h3>


                            <p>
                                {{ \Illuminate\Support\Str::limit(
                                    strip_tags($event->description),
                                    180
                                ) }}
                            </p>


                            <div class="event-card-footer">

                                <span>
                                    {{ $event->images->count() }}
                                    {{ $event->images->count() === 1 ? 'Photo' : 'Photos' }}
                                </span>


                                <a
                                    href="{{ route('events.show', $event) }}"
                                    class="event-view-link"
                                >
                                    View Event
                                    <span>→</span>
                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="events-empty">

                <div class="events-empty-icon">
                    ◫
                </div>

                <h3>
                    No Events Yet
                </h3>

                <p>
                    There are currently no events available.
                    Please check back soon for updates.
                </p>

            </div>

        @endif

    </div>

</section>


{{-- ==========================================
     CTA
========================================== --}}

<section class="events-cta">

    <div class="events-container">

        <div class="events-cta-content">

            <span class="events-section-label">
                GET INVOLVED
            </span>

            <h2>
                Be Part of Something Meaningful
            </h2>

            <p>
                Stay connected with Inspiration House and discover
                opportunities to participate, volunteer and support
                the work we do in our communities.
            </p>

            <div class="events-cta-actions">

                <a
                    href="{{ route('volunteer') }}"
                    class="events-btn events-btn-light"
                >
                    Volunteer With Us
                </a>

                <a
                    href="{{ route('donate') }}"
                    class="events-btn events-btn-outline"
                >
                    Support Our Work
                </a>

            </div>

        </div>

    </div>

</section>

@endsection