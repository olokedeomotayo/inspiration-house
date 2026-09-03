@extends('layouts.app')

@section('title', 'Get Involved | Volunteer | Inspiration House')

@section('description', 'Get involved with Inspiration House through volunteering, partnerships, skills, resources and community participation.')

@section('content')

{{-- =========================================================
     PAGE HERO
     ========================================================= --}}

<section
    class="inner-hero"
    style="
        background-image:
            linear-gradient(
                90deg,
                rgba(38, 9, 9, 0.88),
                rgba(38, 9, 9, 0.52)
            ),
            url('{{ asset('images/about1.jpg') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    "
>

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>GET INVOLVED</span>

        <h1>
            There Is A Place
            For You In The Work.
        </h1>

        <p>
            Give your time, skills, resources or ideas and become part
            of initiatives creating meaningful community impact.
        </p>

    </div>

</section>


{{-- =========================================================
     INTRODUCTION
     ========================================================= --}}

<section class="volunteer-intro">

    <div class="volunteer-intro-content">

        <span>BE PART OF THE CHANGE</span>

        <h2>
            Impact Is Something
            We Create Together.
        </h2>

        <p>
            Inspiration House brings people together around opportunities
            to serve, collaborate, learn and contribute to stronger
            communities.
        </p>

        <p>
            You don't need to have everything figured out. Whether you
            have a few hours to give, a professional skill to share,
            resources to contribute or an idea worth exploring, there
            may be a place for you.
        </p>

    </div>

    <div class="volunteer-intro-image">

        <img
            src="{{ asset('images/about2.jpg') }}"
            alt="People volunteering with Inspiration House"
        >

    </div>

</section>


{{-- =========================================================
     WAYS TO GET INVOLVED
     ========================================================= --}}

<section class="involvement-section">

    <div class="section-heading">

        <span>WAYS TO PARTICIPATE</span>

        <h2>
            Find Your Way To Contribute
        </h2>

        <p>
            There are different ways to support the work depending on
            your time, skills, interests and resources.
        </p>

    </div>


    <div class="involvement-grid">

        <article class="involvement-card">

            <strong>01</strong>

            <span>TIME</span>

            <h3>
                Volunteer
            </h3>

            <p>
                Give your time to community activities, events,
                programmes and outreach initiatives.
            </p>

            <a href="#volunteer-form">
                Volunteer With Us →
            </a>

        </article>


        <article class="involvement-card">

            <strong>02</strong>

            <span>SKILLS</span>

            <h3>
                Share Your Expertise
            </h3>

            <p>
                Contribute your professional knowledge, creative skills
                or experience to help an initiative move forward.
            </p>

            <a href="#volunteer-form">
                Share Your Skills →
            </a>

        </article>


        <article class="involvement-card">

            <strong>03</strong>

            <span>RESOURCES</span>

            <h3>
                Give Resources
            </h3>

            <p>
                Support programmes with resources, equipment, materials
                or other practical contributions.
            </p>

            <a href="{{ route('donate') }}">
                Support Our Work →
            </a>

        </article>


        <article class="involvement-card">

            <strong>04</strong>

            <span>COLLABORATE</span>

            <h3>
                Become A Partner
            </h3>

            <p>
                Organizations and businesses can collaborate with us on
                programmes, initiatives and community projects.
            </p>

            <a href="{{ route('partnerships') }}">
                Explore Partnerships →
            </a>

        </article>

    </div>

</section>


{{-- =========================================================
     VOLUNTEER EXPERIENCE
     ========================================================= --}}

<section class="volunteer-feature">

    <div class="volunteer-feature-image">

        <img
            src="{{ asset('images/about1.jpg') }}"
            alt="Inspiration House volunteers working together"
        >

        <div class="volunteer-feature-label">

            <span>TOGETHER</span>

            <strong>
                Small contributions can create significant impact.
            </strong>

        </div>

    </div>


    <div class="volunteer-feature-content">

        <span>WHY VOLUNTEER?</span>

        <h2>
            Your Contribution
            Can Go Further.
        </h2>

        <p>
            Volunteering is more than giving time. It is an opportunity
            to connect with people, develop new experiences, contribute
            your strengths and become part of something bigger.
        </p>

        <div class="volunteer-benefits">

            <div>
                <strong>✓</strong>
                <span>Make a practical difference</span>
            </div>

            <div>
                <strong>✓</strong>
                <span>Connect with people and communities</span>
            </div>

            <div>
                <strong>✓</strong>
                <span>Use your skills for positive impact</span>
            </div>

            <div>
                <strong>✓</strong>
                <span>Gain meaningful experiences</span>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     VOLUNTEER FORM
     ========================================================= --}}

<section class="volunteer-form-section" id="volunteer-form">

    <div class="volunteer-form-intro">

        <span>JOIN THE COMMUNITY</span>

        <h2>
            Tell Us How You'd Like To Get Involved.
        </h2>

        <p>
            Complete the form and tell us a little about yourself and
            how you would like to contribute.
        </p>

    </div>


    <div class="volunteer-form-wrapper">

        <form action="#" method="POST" class="volunteer-form">

            @csrf

            <div class="form-row">

                <div class="form-group">

                    <label for="volunteer-name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="volunteer-name"
                        name="name"
                        placeholder="Your full name"
                    >

                </div>


                <div class="form-group">

                    <label for="volunteer-email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="volunteer-email"
                        name="email"
                        placeholder="you@example.com"
                    >

                </div>

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label for="volunteer-phone">
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        id="volunteer-phone"
                        name="phone"
                        placeholder="+234..."
                    >

                </div>


                <div class="form-group">

                    <label for="volunteer-interest">
                        Area Of Interest
                    </label>

                    <select
                        id="volunteer-interest"
                        name="interest"
                    >

                        <option value="">
                            Select an area
                        </option>

                        <option value="community">
                            Community Development
                        </option>

                        <option value="charity">
                            Charity & Giving
                        </option>

                        <option value="youth">
                            Youth Empowerment
                        </option>

                        <option value="education">
                            Education & Learning
                        </option>

                        <option value="outreach">
                            Community Outreach
                        </option>

                        <option value="events">
                            Events & Activities
                        </option>

                        <option value="skills">
                            Professional Skills
                        </option>

                    </select>

                </div>

            </div>


            <div class="form-group">

                <label for="volunteer-message">
                    Tell Us More
                </label>

                <textarea
                    id="volunteer-message"
                    name="message"
                    rows="6"
                    placeholder="Tell us about yourself and how you would like to contribute..."
                ></textarea>

            </div>


            <button type="submit">
                Submit Interest →
            </button>

        </form>

    </div>

</section>


{{-- =========================================================
     CTA
     ========================================================= --}}

<section class="home-cta">

    <div class="home-cta-content">

        <span>READY TO GET STARTED?</span>

        <h2>
            Let's Create Something
            Meaningful Together.
        </h2>

        <p>
            You can start by volunteering, supporting an initiative,
            partnering with us or simply starting a conversation.
        </p>

        <div class="cta-actions">

            <a href="#volunteer-form">
                Volunteer
            </a>

            <a href="{{ route('donate') }}">
                Donate
            </a>

            <a href="{{ route('contact') }}">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection