@extends('layouts.app')

@section('title', $event->title . ' | Inspiration House')

@section(
    'description',
    \Illuminate\Support\Str::limit(
        strip_tags($event->description),
        155
    )
)

@section('content')

{{-- =========================================================
     EVENT HERO
========================================================= --}}

<section
    class="event-detail-hero"
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

    <div class="event-detail-hero-content">

        <span>
            INSPIRATION HOUSE EVENTS
        </span>

        <h1>
            {{ $event->title }}
        </h1>

        @if($event->event_date)

            <p>
                {{ $event->event_date->format('F j, Y') }}
            </p>

        @endif

    </div>

</section>


{{-- =========================================================
     EVENT CONTENT
========================================================= --}}

<section class="event-detail-section">

    <div class="event-detail-container">

        <div class="event-detail-layout">


            {{-- =================================================
                 LEFT — GALLERY
            ================================================== --}}

            <div class="event-detail-gallery">

                <div class="event-detail-section-heading">

                    <span>
                        EVENT GALLERY
                    </span>

                    <h2>
                        Moments From The Event
                    </h2>

                </div>


                @if($event->images->count())

                    <div class="event-gallery-grid">

                        @foreach($event->images as $image)

                            <a
                                href="{{ asset('storage/' . $image->image_path) }}"
                                class="event-gallery-item"
                                target="_blank"
                            >

                                <img
                                    src="{{ asset('storage/' . $image->image_path) }}"
                                    alt="{{ $event->title }}"
                                    loading="lazy"
                                >

                            </a>

                        @endforeach

                    </div>

                @else

                    <div class="event-gallery-empty">

                        <p>
                            No pictures have been uploaded for this event yet.
                        </p>

                    </div>

                @endif

            </div>


            {{-- =================================================
                 RIGHT — EVENT WRITE-UP
            ================================================== --}}

            <article class="event-detail-content">

                @if($event->event_date)

                    <div class="event-detail-date">

                        {{ $event->event_date->format('F j, Y') }}

                    </div>

                @endif


                <h2>
                    {{ $event->title }}
                </h2>


                <div class="event-detail-description">

                    {!! nl2br(e($event->description)) !!}

                </div>


                <div class="event-detail-back">

                    <a
                        href="{{ route('events') }}"
                    >
                        ← Back to Events
                    </a>

                </div>

            </article>


        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}

<section class="event-detail-cta">

    <div class="event-detail-container">

        <div class="event-detail-cta-content">

            <span>
                GET INVOLVED
            </span>

            <h2>
                Be Part of Something Meaningful
            </h2>

            <p>
                Stay connected with Inspiration House and discover
                opportunities to participate, volunteer and support
                our work in the community.
            </p>


            <div class="event-detail-cta-actions">

                <a
                    href="{{ route('volunteer') }}"
                    class="event-detail-btn event-detail-btn-primary"
                >
                    Volunteer With Us
                </a>


                <a
                    href="{{ route('donate') }}"
                    class="event-detail-btn event-detail-btn-outline"
                >
                    Support Our Work
                </a>

            </div>

        </div>

    </div>

</section>

@endsection