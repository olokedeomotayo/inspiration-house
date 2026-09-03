@extends('layouts.app')

@section('title', 'Gallery | Inspiration House')

@section('description', 'Explore photos and moments from Inspiration House community initiatives, outreach activities, events and partnerships.')

@section('content')

{{-- =========================================================
     PAGE HERO
     ========================================================= --}}

<section class="inner-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>OUR GALLERY</span>

        <h1>
            Moments That
            Tell Our Story.
        </h1>

        <p>
            Explore moments from our activities, community engagements,
            events, partnerships and initiatives.
        </p>

    </div>

</section>


{{-- =========================================================
     GALLERY INTRO
     ========================================================= --}}

<section class="gallery-page-intro">

    <div class="section-heading">

        <span>FROM THE FIELD</span>

        <h2>
            People. Places. Moments.
        </h2>

        <p>
            Every image represents a moment in the journey — people coming
            together, ideas becoming action and communities creating
            positive change.
        </p>

    </div>

</section>


{{-- =========================================================
     GALLERY FILTERS
     ========================================================= --}}

<section class="gallery-page-section">

    <div class="gallery-filters">

        <button class="active">
            All
        </button>

        <button>
            Community
        </button>

        <button>
            Outreach
        </button>

        <button>
            Events
        </button>

        <button>
            Youth
        </button>

        <button>
            Partnerships
        </button>

    </div>


    {{-- =====================================================
         GALLERY GRID
         ===================================================== --}}

    <div class="gallery-page-grid">

        <a href="#" class="gallery-page-item gallery-page-large">

            <img
                src="{{ asset('images/gallery/gallery-1.jpg') }}"
                alt="Inspiration House community activity"
            >

            <div class="gallery-page-overlay">

                <span>COMMUNITY</span>

                <strong>
                    Creating impact together
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-2.jpg') }}"
                alt="Inspiration House outreach activity"
            >

            <div class="gallery-page-overlay">

                <span>OUTREACH</span>

                <strong>
                    Reaching communities
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-3.jpg') }}"
                alt="Inspiration House youth activity"
            >

            <div class="gallery-page-overlay">

                <span>YOUTH</span>

                <strong>
                    Empowering young people
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-4.jpg') }}"
                alt="Inspiration House event"
            >

            <div class="gallery-page-overlay">

                <span>EVENTS</span>

                <strong>
                    Moments that matter
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-5.jpg') }}"
                alt="Inspiration House partnership"
            >

            <div class="gallery-page-overlay">

                <span>PARTNERSHIPS</span>

                <strong>
                    Working together
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-1.jpg') }}"
                alt="Inspiration House community engagement"
            >

            <div class="gallery-page-overlay">

                <span>COMMUNITY</span>

                <strong>
                    Building connections
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-2.jpg') }}"
                alt="Inspiration House outreach"
            >

            <div class="gallery-page-overlay">

                <span>OUTREACH</span>

                <strong>
                    People in action
                </strong>

            </div>

        </a>


        <a href="#" class="gallery-page-item">

            <img
                src="{{ asset('images/gallery/gallery-3.jpg') }}"
                alt="Inspiration House initiative"
            >

            <div class="gallery-page-overlay">

                <span>IMPACT</span>

                <strong>
                    Making a difference
                </strong>

            </div>

        </a>

    </div>

</section>


{{-- =========================================================
     GALLERY CTA
     ========================================================= --}}

<section class="gallery-page-cta">

    <div class="gallery-page-cta-content">

        <span>SHARE THE JOURNEY</span>

        <h2>
            Be Part Of The Next Chapter.
        </h2>

        <p>
            Join us in creating more moments of connection, opportunity
            and positive community impact.
        </p>

        <div class="cta-actions">

            <a href="{{ route('volunteer') }}">
                Get Involved
            </a>

            <a href="{{ route('donate') }}">
                Support Our Work
            </a>

        </div>

    </div>

</section>

@endsection