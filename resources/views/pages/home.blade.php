@extends('layouts.app')

@section('title', 'Inspiration House | Building Stronger Communities')

@section('description', 'Inspiration House builds stronger communities through charity, education, youth empowerment, community development and social impact.')

@section('content')

{{-- =========================================================
     HERO
     ========================================================= --}}

<section class="home-hero">

    <div class="home-hero-overlay"></div>

    <div class="home-hero-content">

        <span>CREATING POSITIVE CHANGE</span>

        <h1>
            Building Stronger Communities.
            Creating Lasting Impact.
        </h1>

        <p>
            We bring people, ideas and resources together to support
            communities, empower lives and create opportunities for
            meaningful change.
        </p>

        <div class="home-hero-actions">
            <a href="#our-work">Discover Our Work</a>
            <a href="#get-involved">Get Involved</a>
        </div>

    </div>

    <div class="hero-scroll">
        <span>Scroll to explore</span>
        <i>↓</i>
    </div>

</section>


{{-- =========================================================
     LIVE IMPACT BAR
     ========================================================= --}}

<section class="impact-bar">

    <div class="impact-stat">
        <strong>10+</strong>
        <span>Years of Impact</span>
    </div>

    <div class="impact-stat">
        <strong>25+</strong>
        <span>Community Initiatives</span>
    </div>

    <div class="impact-stat">
        <strong>1,000+</strong>
        <span>Lives Reached</span>
    </div>

    <div class="impact-stat">
        <strong>15+</strong>
        <span>Partners & Collaborators</span>
    </div>

</section>


{{-- =========================================================
     WHO WE ARE
     ========================================================= --}}

<section class="home-intro">

    <div class="intro-image">

        <img
            src="{{ asset('images/community.jpg') }}"
            alt="Inspiration House community work"
        >

        <div class="intro-image-label">
            <span>OUR MISSION</span>
            <strong>People. Community. Purpose.</strong>
        </div>

    </div>

    <div class="intro-content">

        <span>WHO WE ARE</span>

        <h2>
            Creating opportunities.
            Strengthening communities.
        </h2>

        <p>
            Inspiration House is a community-focused organization committed
            to creating opportunities, supporting people and strengthening
            communities through practical initiatives and meaningful
            partnerships.
        </p>

        <p>
            We connect people, organizations and resources to respond to
            real needs while creating sustainable opportunities for
            individuals and communities to thrive.
        </p>

        <a href="/services">
            Learn More About Us →
        </a>

    </div>

</section>


{{-- =========================================================
     OUR WORK
     ========================================================= --}}

<section class="impact-section" id="our-work">

    <div class="section-heading">

        <span>OUR WORK</span>

        <h2>
            Creating Impact Where It Matters
        </h2>

        <p>
            Our work focuses on practical areas that help people,
            strengthen communities and create opportunities for growth.
        </p>

    </div>

    <div class="impact-grid">

        <article class="impact-card">

            <div class="impact-card-top">
                <span>01</span>
                <span>COMMUNITY</span>
            </div>

            <h3>Community Development</h3>

            <p>
                Supporting initiatives that strengthen communities,
                improve everyday lives and create sustainable local impact.
            </p>

            <a href="/services">
                Explore Our Work →
            </a>

        </article>


        <article class="impact-card">

            <div class="impact-card-top">
                <span>02</span>
                <span>SUPPORT</span>
            </div>

            <h3>Charity & Giving</h3>

            <p>
                Providing practical support, resources and assistance to
                individuals and communities facing difficult circumstances.
            </p>

            <a href="/services">
                Explore Our Work →
            </a>

        </article>


        <article class="impact-card">

            <div class="impact-card-top">
                <span>03</span>
                <span>YOUTH</span>
            </div>

            <h3>Youth Empowerment</h3>

            <p>
                Creating opportunities for young people to develop skills,
                confidence, leadership capacity and a stronger future.
            </p>

            <a href="/services">
                Explore Our Work →
            </a>

        </article>


        <article class="impact-card">

            <div class="impact-card-top">
                <span>04</span>
                <span>LEARNING</span>
            </div>

            <h3>Education & Learning</h3>

            <p>
                Supporting learning, knowledge sharing and access to
                resources that help people discover new possibilities.
            </p>

            <a href="/services">
                Explore Our Work →
            </a>

        </article>

    </div>

</section>


{{-- =========================================================
     CURRENT INITIATIVES
     ========================================================= --}}

<section class="initiatives-section">

    <div class="section-heading">

        <span>WHAT'S HAPPENING</span>

        <h2>
            Making A Difference Right Now
        </h2>

        <p>
            Discover some of the initiatives, activities and opportunities
            currently connected to Inspiration House.
        </p>

    </div>


    <div class="initiative-grid">

        <article class="initiative-card">

            <div class="initiative-image">
                <img
                    src="{{ asset('images/community2.jpg') }}"
                    alt="Community initiative"
                >

                <span class="initiative-status">
                    ACTIVE
                </span>
            </div>

            <div class="initiative-content">

                <span class="initiative-category">
                    COMMUNITY
                </span>

                <h3>
                    Community Support Initiative
                </h3>

                <p>
                    Supporting people and communities through practical
                    assistance, collaboration and local action.
                </p>

                <a href="services">
                    View Initiative →
                </a>

            </div>

        </article>


        <article class="initiative-card">

            <div class="initiative-image">
                <img
                    src="{{ asset('images/youth.jpg') }}"
                    alt="Youth empowerment initiative"
                >

                <span class="initiative-status">
                    ONGOING
                </span>
            </div>

            <div class="initiative-content">

                <span class="initiative-category">
                    YOUTH
                </span>

                <h3>
                    Youth Empowerment Programme
                </h3>

                <p>
                    Creating opportunities for young people through
                    learning, mentorship and practical development.
                </p>

                <a href="/services">
                    View Initiative →
                </a>

            </div>

        </article>


        <article class="initiative-card">

            <div class="initiative-image">
                <img
                    src="{{ asset('images/learn.jpg') }}"
                    alt="Education initiative"
                >

                <span class="initiative-status">
                    ONGOING
                </span>
            </div>

            <div class="initiative-content">

                <span class="initiative-category">
                    EDUCATION
                </span>

                <h3>
                    Learning & Resource Programme
                </h3>

                <p>
                    Connecting people with useful knowledge, resources
                    and opportunities for personal development.
                </p>

                <a href="#/services>
                    View Initiative →
                </a>

            </div>

        </article>

    </div>

</section>


{{-- =========================================================
     OUR APPROACH
     ========================================================= --}}

<section class="feature-section">

    <div class="feature-content">

        <span>OUR APPROACH</span>

        <h2>
            Turning Compassion Into Action
        </h2>

        <p>
            Meaningful change happens when people work together.
            We bring communities, individuals and organizations together
            to turn ideas into practical action.
        </p>

        <div class="feature-list">

            <div>
                <strong>01</strong>
                <span>Community-focused initiatives</span>
            </div>

            <div>
                <strong>02</strong>
                <span>Partnerships for greater impact</span>
            </div>

            <div>
                <strong>03</strong>
                <span>Support for vulnerable communities</span>
            </div>

            <div>
                <strong>04</strong>
                <span>Opportunities for young people</span>
            </div>

        </div>

        <a href="/services">
            Learn About Our Work →
        </a>

    </div>


    <div class="feature-image">

        <img
            src="{{ asset('images/compassion.jpg') }}"
            alt="Inspiration House community engagement"
        >

        <div class="feature-image-caption">

            <span>IMPACT THROUGH ACTION</span>

            <strong>
                Together, we can create meaningful change.
            </strong>

        </div>

    </div>

</section>


{{-- =========================================================
     PARTNERSHIPS
     ========================================================= --}}

<section class="partnership-section">

    <div class="section-heading">

        <span>OUR PARTNERS</span>

        <h2>
            Working Together For Greater Impact
        </h2>

        <p>
            We collaborate with organizations and initiatives that share
            our commitment to people, communities and positive change.
        </p>

    </div>

    <div class="partner-grid">

        <a href="#" class="partner-card">
            <strong>Acts 1038</strong>
            <span>Explore Partnership →</span>
        </a>

        <a href="#" class="partner-card">
            <strong>Mission Aid Network</strong>
            <span>Explore Partnership →</span>
        </a>

        <a href="#" class="partner-card">
            <strong>Jesus Army Global</strong>
            <span>Explore Partnership →</span>
        </a>

        <a href="#" class="partner-card">
            <strong>Children Emergency Relief Funds</strong>
            <span>Explore Partnership →</span>
        </a>

    </div>

</section>


{{-- =========================================================
     LATEST STORIES
     ========================================================= --}}

<section class="stories-section">

    <div class="section-heading stories-heading">

        <div>

            <span>LATEST FROM INSPIRATION HOUSE</span>

            <h2>
                Stories, News & Resources
            </h2>

        </div>

        <a href="/services">
            View All Stories →
        </a>

    </div>


    <div class="stories-grid">

        <article class="story-card">

            <div class="story-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Community story"
                >

                <span>STORY</span>

            </div>

            <div class="story-content">

                <small>
                    Community • {{ date('M d, Y') }}
                </small>

                <h3>
                    Stories From Our Community
                </h3>

                <p>
                    Discover stories, updates and insights from the people
                    and communities connected to our work.
                </p>

                <a href="#">
                    Read Story →
                </a>

            </div>

        </article>


        <article class="story-card">

            <div class="story-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Learning resources"
                >

                <span>RESOURCE</span>

            </div>

            <div class="story-content">

                <small>
                    Resources • {{ date('M d, Y') }}
                </small>

                <h3>
                    Learning & Inspiration
                </h3>

                <p>
                    Explore useful resources, conversations and ideas
                    designed to encourage learning and positive action.
                </p>

                <a href="#">
                    Explore Resource →
                </a>

            </div>

        </article>


        <article class="story-card">

            <div class="story-image">

                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Inspiration House update"
                >

                <span>UPDATE</span>

            </div>

            <div class="story-content">

                <small>
                    Updates • {{ date('M d, Y') }}
                </small>

                <h3>
                    Making A Difference Together
                </h3>

                <p>
                    Follow our latest activities and discover how people
                    are contributing to positive community change.
                </p>

                <a href="#">
                    View Update →
                </a>

            </div>

        </article>

    </div>

</section>


{{-- =========================================================
     GALLERY
     ========================================================= --}}

<section class="gallery-section">

    <div class="section-heading gallery-heading">

        <div>

            <span>FROM THE FIELD</span>

            <h2>
                Moments That Tell Our Story
            </h2>

            <p>
                A glimpse into our activities, people, partnerships
                and community engagements.
            </p>

        </div>

        <a href="/gallery">
            View Full Gallery →
        </a>

    </div>


    <div class="gallery-grid">

        <a href="#" class="gallery-item gallery-large">

            <img
                src="{{ asset('images/gallery/gallery-1.jpg') }}"
                alt="Inspiration House gallery"
            >

            <div class="gallery-overlay">
                <span>COMMUNITY</span>
                <strong>Creating impact together</strong>
            </div>

        </a>


        <a href="/gallery" class="gallery-item">

            <img
                src="{{ asset('images/gallery/gallery-2.jpg') }}"
                alt="Inspiration House community activity"
            >

            <div class="gallery-overlay">
                <span>OUTREACH</span>
                <strong>People in action</strong>
            </div>

        </a>


        <a href="/gallery" class="gallery-item">

            <img
                src="{{ asset('images/gallery/gallery-3.jpg') }}"
                alt="Inspiration House outreach"
            >

            <div class="gallery-overlay">
                <span>PEOPLE</span>
                <strong>Building connections</strong>
            </div>

        </a>


        <a href="/gallery" class="gallery-item">

            <img
                src="{{ asset('images/gallery/gallery-4.jpg') }}"
                alt="Inspiration House event"
            >

            <div class="gallery-overlay">
                <span>EVENTS</span>
                <strong>Moments that matter</strong>
            </div>

        </a>


        <a href="/gallery" class="gallery-item">

            <img
                src="{{ asset('images/gallery/gallery-5.jpg') }}"
                alt="Inspiration House activity"
            >

            <div class="gallery-overlay">
                <span>IMPACT</span>
                <strong>Making a difference</strong>
            </div>

        </a>

    </div>

</section>


{{-- =========================================================
     GET INVOLVED
     ========================================================= --}}

<section class="home-cta" id="get-involved">

    <div class="home-cta-content">

        <span>GET INVOLVED</span>

        <h2>
            Change Begins When We Act Together.
        </h2>

        <p>
            Give your time, resources, skills or support and become
            part of work that creates meaningful impact in communities.
        </p>

        <div class="cta-actions">

            <a href="/partnerships">
                Become A Partner
            </a>

            <a href="/donate">
                Donate
            </a>

            <a href="/volunteer">
                Volunteer
            </a>

        </div>

    </div>

</section>

@endsection