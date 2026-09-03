@extends('layouts.app')

@section('title', 'About Us | Inspiration House')

@section('description', 'Learn about Inspiration House, our mission, values and commitment to strengthening communities and creating lasting social impact.')

@section('hero-image', asset('images/community.jpg'))

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
            url('{{ asset('images/Community.jpg') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    "
>
    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>ABOUT INSPIRATION HOUSE</span>

        <h1>
            People. Purpose.
            Positive Change.
        </h1>

        <p>
            Discover who we are, what drives us and how we work with
            communities and partners to create meaningful impact.
        </p>

    </div>

</section>


{{-- =========================================================
     INTRODUCTION
     ========================================================= --}}

<section class="about-intro">

    <div class="about-intro-image">

        <img
            src="{{ asset('images/community.jpg') }}"
            alt="Inspiration House community engagement"
        >

    </div>

    <div class="about-intro-content">

        <span>WHO WE ARE</span>

        <h2>
            Building communities through people, partnerships and action.
        </h2>

        <p>
            Inspiration House is a community-focused organization committed
            to supporting people, developing opportunities and strengthening
            communities.
        </p>

        <p>
            We believe sustainable change happens when people come together
            around shared purpose. Our work connects individuals,
            organizations and resources to respond to real needs and create
            opportunities for growth.
        </p>

        <p>
            From community initiatives and charitable support to youth
            empowerment, education and partnerships, we focus on practical
            ways to make a lasting difference.
        </p>

    </div>

</section>


{{-- =========================================================
     MISSION / VISION
     ========================================================= --}}

<section class="about-values">

    <div class="section-heading">

        <span>WHAT DRIVES US</span>

        <h2>
            Our Mission & Vision
        </h2>

    </div>

    <div class="about-values-grid">

        <article>

            <span>OUR MISSION</span>

            <h3>
                Creating opportunities and strengthening communities.
            </h3>

            <p>
                To support people and communities through practical
                initiatives, meaningful partnerships and opportunities
                that promote positive and sustainable change.
            </p>

        </article>

        <article>

            <span>OUR VISION</span>

            <h3>
                Communities where people can thrive.
            </h3>

            <p>
                We envision stronger communities where individuals have
                access to support, opportunities, knowledge and the
                relationships needed to build a better future.
            </p>

        </article>

    </div>

</section>


{{-- =========================================================
     VALUES
     ========================================================= --}}

<section class="values-section">

    <div class="section-heading">

        <span>OUR VALUES</span>

        <h2>
            Principles That Guide Our Work
        </h2>

        <p>
            Our approach is shaped by values that influence how we serve,
            collaborate and create impact.
        </p>

    </div>

    <div class="values-grid">

        <article class="value-card">
            <strong>01</strong>
            <h3>Integrity</h3>
            <p>
                We act with honesty, transparency and accountability in
                everything we do.
            </p>
        </article>

        <article class="value-card">
            <strong>02</strong>
            <h3>Compassion</h3>
            <p>
                We care about people and respond to needs with empathy,
                dignity and practical support.
            </p>
        </article>

        <article class="value-card">
            <strong>03</strong>
            <h3>Collaboration</h3>
            <p>
                We believe greater impact is possible when people and
                organizations work together.
            </p>
        </article>

        <article class="value-card">
            <strong>04</strong>
            <h3>Impact</h3>
            <p>
                We focus on practical action and outcomes that improve
                lives and strengthen communities.
            </p>
        </article>

    </div>

</section>


{{-- =========================================================
     HOW WE WORK
     ========================================================= --}}

<section class="about-approach">

    <div class="about-approach-content">

        <span>HOW WE WORK</span>

        <h2>
            From Ideas To Meaningful Action
        </h2>

        <p>
            We listen to communities, identify opportunities and work with
            partners to develop initiatives that respond to real needs.
        </p>

        <div class="approach-steps">

            <div>
                <strong>01</strong>
                <div>
                    <h3>Listen</h3>
                    <p>Understanding people, communities and their needs.</p>
                </div>
            </div>

            <div>
                <strong>02</strong>
                <div>
                    <h3>Connect</h3>
                    <p>Bringing people, organizations and resources together.</p>
                </div>
            </div>

            <div>
                <strong>03</strong>
                <div>
                    <h3>Act</h3>
                    <p>Turning ideas and resources into practical initiatives.</p>
                </div>
            </div>

            <div>
                <strong>04</strong>
                <div>
                    <h3>Impact</h3>
                    <p>Creating meaningful and sustainable community outcomes.</p>
                </div>
            </div>

        </div>

    </div>

    <div class="about-approach-image">

        <img
            src="{{ asset('images/hero.jpg') }}"
            alt="Inspiration House working with communities"
        >

    </div>

</section>


{{-- =========================================================
     GET INVOLVED
     ========================================================= --}}

<section class="home-cta">

    <div class="home-cta-content">

        <span>BE PART OF THE JOURNEY</span>

        <h2>
            There Is A Place For You In The Work.
        </h2>

        <p>
            Whether you want to partner, volunteer, give or support an
            initiative, there are many ways to contribute.
        </p>

        <div class="cta-actions">

            <a href="#">
                Partner With Us
            </a>

            <a href="https://www.zeffy.com/en-US/donation-form/df23e329-052a-49c4-8c06-178fb0558678">
                Donate
            </a>

            <a href="#">
                Volunteer
            </a>

        </div>

    </div>

</section>

@endsection