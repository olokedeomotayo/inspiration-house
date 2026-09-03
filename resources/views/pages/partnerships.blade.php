@extends('layouts.app')

@section('title', 'Partnerships | Inspiration House')

@section('description', 'Discover the organizations, initiatives and networks partnering with Inspiration House to create greater community impact.')

@section('content')

<section class="inner-hero partnerships-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>PARTNERSHIPS</span>

        <h1>
            Greater Impact
            Through Collaboration.
        </h1>

        <p>
            We believe lasting change becomes possible when people,
            organizations and resources work together around a shared
            purpose.
        </p>

    </div>

</section>


<section class="partnership-intro">

    <div class="section-heading">

        <span>WORKING TOGETHER</span>

        <h2>
            No Community Creates Change Alone.
        </h2>

        <p>
            Our partnerships connect expertise, resources and opportunities
            to initiatives that can make a meaningful difference in the
            lives of people and communities.
        </p>

    </div>

</section>


<section class="partners-page-section">

    <div class="partner-page-grid">

        <article class="partner-profile">

            <div class="partner-profile-number">
                01
            </div>

            <div class="partner-profile-content">

                <span>PARTNER ORGANIZATION</span>

                <h2>Acts 1038</h2>

                <p>
                    A collaborative initiative connected to community
                    support, outreach and practical service.
                </p>

                <a href="#partner-acts-1038">
                    Explore Partnership →
                </a>

            </div>

        </article>


        <article class="partner-profile">

            <div class="partner-profile-number">
                02
            </div>

            <div class="partner-profile-content">

                <span>PARTNER ORGANIZATION</span>

                <h2>Mission Aid Network</h2>

                <p>
                    Working together to connect resources and support
                    communities through meaningful initiatives.
                </p>

                <a href="#partner-mission-aid">
                    Explore Partnership →
                </a>

            </div>

        </article>


        <article class="partner-profile">

            <div class="partner-profile-number">
                03
            </div>

            <div class="partner-profile-content">

                <span>PARTNER ORGANIZATION</span>

                <h2>Jesus Army Global</h2>

                <p>
                    A collaborative network supporting people, communities
                    and initiatives through shared resources and action.
                </p>

                <a href="#partner-jesus-army">
                    Explore Partnership →
                </a>

            </div>

        </article>


        <article class="partner-profile">

            <div class="partner-profile-number">
                04
            </div>

            <div class="partner-profile-content">

                <span>PARTNER ORGANIZATION</span>

                <h2>Children Emergency Relief Funds</h2>

                <p>
                    Supporting children and vulnerable communities through
                    relief, assistance and community-focused initiatives.
                </p>

                <a href="#partner-children-relief">
                    Explore Partnership →
                </a>

            </div>

        </article>

    </div>

</section>


<section class="partnership-feature">

    <div class="partnership-feature-content">

        <span>WHY PARTNER WITH US?</span>

        <h2>
            Bringing The Right People
            Around The Right Ideas.
        </h2>

        <p>
            We welcome partnerships with organizations, businesses,
            community groups and individuals who want to contribute
            knowledge, resources, expertise or opportunities.
        </p>

        <div class="partnership-points">

            <div>
                <strong>01</strong>
                <span>Shared community goals</span>
            </div>

            <div>
                <strong>02</strong>
                <span>Access to complementary resources</span>
            </div>

            <div>
                <strong>03</strong>
                <span>Collaborative problem solving</span>
            </div>

            <div>
                <strong>04</strong>
                <span>Greater reach and measurable impact</span>
            </div>

        </div>

    </div>

    <div class="partnership-feature-image">

        <img
            src="{{ asset('images/hero.jpg') }}"
            alt="Inspiration House partnership and collaboration"
        >

    </div>

</section>


<section class="partner-cta">

    <div class="partner-cta-content">

        <span>LET'S WORK TOGETHER</span>

        <h2>
            Do You Have An Idea,
            Resource Or Opportunity To Share?
        </h2>

        <p>
            Tell us how you would like to collaborate and let's explore
            what we can achieve together.
        </p>

        <a href="{{ route('contact') }}">
            Become A Partner →
        </a>

    </div>

</section>

@endsection