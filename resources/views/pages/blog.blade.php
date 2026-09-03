@extends('layouts.app')

@section('title', 'Stories & Resources | Inspiration House')

@section('description', 'Read the latest stories, updates, insights and resources from Inspiration House and the communities we serve.')

@section('content')

<section class="inner-hero blog-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>STORIES & RESOURCES</span>

        <h1>
            Ideas, Stories
            & Inspiration.
        </h1>

        <p>
            Explore stories from our communities, programme updates,
            useful resources and ideas that encourage positive action.
        </p>

    </div>

</section>


<section class="featured-story-section">

    <div class="featured-story-image">

        <img
            src="{{ asset('images/hero.jpg') }}"
            alt="Featured Inspiration House story"
        >

    </div>

    <div class="featured-story-content">

        <span>FEATURED STORY</span>

        <small>
            Community • {{ date('M d, Y') }}
        </small>

        <h2>
            Building Stronger Communities
            Through Collective Action
        </h2>

        <p>
            Discover how people, partnerships and practical action can
            come together to create meaningful opportunities and stronger
            communities.
        </p>

        <a href="#latest-stories">
            Read Featured Story →
        </a>

    </div>

</section>


<section class="blog-section" id="latest-stories">

    <div class="section-heading">

        <span>LATEST STORIES</span>

        <h2>
            What's Happening
        </h2>

        <p>
            Follow our latest activities, stories and community updates.
        </p>

    </div>


    <div class="blog-grid">

        <article class="blog-card">

            <div class="blog-card-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Community story"
                >

                <span>STORY</span>

            </div>

            <div class="blog-card-content">

                <small>
                    Community • {{ date('M d, Y') }}
                </small>

                <h3>
                    Stories From Our Community
                </h3>

                <p>
                    Discover stories from people and communities connected
                    to our work.
                </p>

                <a href="#latest-stories">
                    Read More →
                </a>

            </div>

        </article>


        <article class="blog-card">

            <div class="blog-card-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Youth empowerment update"
                >

                <span>UPDATE</span>

            </div>

            <div class="blog-card-content">

                <small>
                    Youth • {{ date('M d, Y') }}
                </small>

                <h3>
                    Creating Opportunities For Young People
                </h3>

                <p>
                    Learn more about opportunities designed to encourage
                    young people to learn, grow and lead.
                </p>

                <a href="#latest-stories">
                    Read More →
                </a>

            </div>

        </article>


        <article class="blog-card">

            <div class="blog-card-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Community development update"
                >

                <span>IMPACT</span>

            </div>

            <div class="blog-card-content">

                <small>
                    Impact • {{ date('M d, Y') }}
                </small>

                <h3>
                    Turning Support Into Meaningful Action
                </h3>

                <p>
                    See how resources, partnerships and community action
                    can create practical results.
                </p>

                <a href="#latest-stories">
                    Read More →
                </a>

            </div>

        </article>


        <article class="blog-card">

            <div class="blog-card-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Education resource"
                >

                <span>RESOURCE</span>

            </div>

            <div class="blog-card-content">

                <small>
                    Resources • {{ date('M d, Y') }}
                </small>

                <h3>
                    Learning & Inspiration
                </h3>

                <p>
                    Explore resources and ideas designed to encourage
                    learning and positive action.
                </p>

                <a href="#latest-stories">
                    Read More →
                </a>

            </div>

        </article>


        <article class="blog-card">

            <div class="blog-card-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Partnership story"
                >

                <span>PARTNERSHIPS</span>

            </div>

            <div class="blog-card-content">

                <small>
                    Partnerships • {{ date('M d, Y') }}
                </small>

                <h3>
                    The Power Of Working Together
                </h3>

                <p>
                    Explore how collaboration can bring greater resources,
                    ideas and opportunities to communities.
                </p>

                <a href="#latest-stories">
                    Read More →
                </a>

            </div>

        </article>


        <article class="blog-card">

            <div class="blog-card-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Inspiration House update"
                >

                <span>NEWS</span>

            </div>

            <div class="blog-card-content">

                <small>
                    News • {{ date('M d, Y') }}
                </small>

                <h3>
                    What's Next For Inspiration House
                </h3>

                <p>
                    Follow new initiatives, opportunities and developments
                    across our organization.
                </p>

                <a href="#latest-stories">
                    Read More →
                </a>

            </div>

        </article>

    </div>

</section>


<section class="resources-cta">

    <div class="resources-cta-content">

        <span>EXPLORE MORE</span>

        <h2>
            Knowledge Can Create
            New Possibilities.
        </h2>

        <p>
            Browse our growing collection of resources, stories and
            conversations created to inform, encourage and inspire action.
        </p>

        <div class="cta-actions">

            <a href="#latest-stories">
                Browse Resources
            </a>

            <a href="{{ route('gallery') }}">
                Visit Gallery
            </a>

        </div>

    </div>

</section>

@endsection