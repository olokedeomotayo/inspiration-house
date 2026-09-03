@extends('layouts.app')

@section('title', 'Donate | Support Inspiration House')

@section('description', 'Support Inspiration House and help strengthen communities, empower young people and create opportunities through your contribution.')

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
            url('{{ asset('images/donate.jpg') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    "
>

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>SUPPORT OUR WORK</span>

        <h1>
            Your Support
            Can Create Change.
        </h1>

        <p>
            Every contribution helps us support people, strengthen
            communities and create opportunities for meaningful impact.
        </p>

    </div>

</section>


{{-- =========================================================
     DONATION INTRO
     ========================================================= --}}

<section class="donation-intro">

    <div class="donation-intro-content">

        <span>MAKE A DIFFERENCE</span>

        <h2>
            Give With Purpose.
        </h2>

        <p>
            Your generosity helps turn ideas into practical action.
            Contributions can support community initiatives, education,
            youth empowerment, outreach and other programmes.
        </p>

        <p>
            Whether you give once or choose to support our work regularly,
            your contribution becomes part of a larger effort to create
            meaningful and sustainable impact.
        </p>

    </div>


    <div class="donation-highlight">

        <span>EVERY CONTRIBUTION MATTERS</span>

        <strong>
            Together,
            we can do more.
        </strong>

    </div>

</section>


{{-- =========================================================
     WHERE YOUR SUPPORT GOES
     ========================================================= --}}

<section class="donation-impact">

    <div class="section-heading">

        <span>YOUR IMPACT</span>

        <h2>
            Where Your Support Can Make A Difference
        </h2>

        <p>
            Contributions help provide resources and opportunities across
            several areas of our work.
        </p>

    </div>


    <div class="donation-impact-grid">

        <article>

            <strong>01</strong>

            <span>COMMUNITY</span>

            <h3>
                Community Development
            </h3>

            <p>
                Supporting practical initiatives that strengthen local
                communities and improve everyday lives.
            </p>

        </article>


        <article>

            <strong>02</strong>

            <span>YOUTH</span>

            <h3>
                Youth Empowerment
            </h3>

            <p>
                Helping create opportunities for young people to develop
                skills, confidence and leadership capacity.
            </p>

        </article>


        <article>

            <strong>03</strong>

            <span>EDUCATION</span>

            <h3>
                Education & Learning
            </h3>

            <p>
                Supporting access to learning opportunities, knowledge
                and useful resources.
            </p>

        </article>


        <article>

            <strong>04</strong>

            <span>SUPPORT</span>

            <h3>
                Charity & Outreach
            </h3>

            <p>
                Providing practical assistance and support to people and
                communities facing difficult circumstances.
            </p>

        </article>

    </div>

</section>


{{-- =========================================================
     DONATION OPTIONS
     ========================================================= --}}

<section class="donation-options">

    <div class="section-heading">

        <span>WAYS TO GIVE</span>

        <h2>
            Choose How You Would Like To Support
        </h2>

    </div>


    <div class="donation-options-grid">

        <article class="donation-option">

            <span>01</span>

            <h3>
                One-Time Donation
            </h3>

            <p>
                Make a single contribution towards the work and initiatives
                that matter to you.
            </p>

            <a href="https://www.zeffy.com/en-US/donation-form/df23e329-052a-49c4-8c06-178fb0558678">
                Donate Now →
            </a>

        </article>


        <article class="donation-option featured">

            <span>02</span>

            <h3>
                Regular Giving
            </h3>

            <p>
                Support our ongoing work with a recurring contribution
                that helps us plan and sustain our programmes.
            </p>

            <a href="/volunteer">
                Become A Regular Supporter →
            </a>

        </article>


        <article class="donation-option">

            <span>03</span>

            <h3>
                Partner With Us
            </h3>

            <p>
                Organizations and businesses can contribute resources,
                expertise or funding towards specific initiatives.
            </p>

            <a href="/partnerships">
                Become A Partner →
            </a>

        </article>

    </div>

</section>


{{-- =========================================================
     TRANSPARENCY
     ========================================================= --}}

<section class="donation-transparency">

    <div class="donation-transparency-image">

        <img
            src="{{ asset('images/donate1.jpg') }}"
            alt="Inspiration House community impact"
        >

    </div>

    <div class="donation-transparency-content">

        <span>GIVING WITH CONFIDENCE</span>

        <h2>
            Your Trust Matters To Us.
        </h2>

        <p>
            We believe supporters deserve to understand how their
            contributions are used. As the organization grows, we are
            committed to responsible stewardship, accountability and
            transparent reporting.
        </p>

        <div class="transparency-points">

            <div>
                <strong>✓</strong>
                <span>Responsible use of resources</span>
            </div>

            <div>
                <strong>✓</strong>
                <span>Community-focused programmes</span>
            </div>

            <div>
                <strong>✓</strong>
                <span>Partnership and accountability</span>
            </div>

            <div>
                <strong>✓</strong>
                <span>Commitment to meaningful impact</span>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FINAL CTA
     ========================================================= --}}

<section class="donation-cta">

    <div class="donation-cta-content">

        <span>READY TO MAKE A DIFFERENCE?</span>

        <h2>
            Every Act Of Giving
            Can Start Something Bigger.
        </h2>

        <p>
            Support Inspiration House and help us continue creating
            opportunities, strengthening communities and making a
            meaningful difference.
        </p>

        <a href="https://www.zeffy.com/en-US/donation-form/df23e329-052a-49c4-8c06-178fb0558678">
            Make A Donation →
        </a>

    </div>

</section>

@endsection