@extends('layouts.app')

@section('title', 'Our Team | Inspiration House')

@section('description', 'Meet the people helping guide Inspiration House and support its mission to strengthen communities and create meaningful impact.')

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
            url('{{ asset('images/youth.jpg') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    "
>

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>OUR TEAM</span>

        <h1>
            People Behind
            The Purpose.
        </h1>

        <p>
            Meet the people helping guide our work, build partnerships
            and support the communities we serve.
        </p>

    </div>

</section>


{{-- =========================================================
     TEAM INTRO
     ========================================================= --}}

<section class="team-intro">

    <div class="section-heading">

        <span>OUR PEOPLE</span>

        <h2>
            Leadership With Purpose.
        </h2>

        <p>
            Inspiration House is powered by people who believe in
            collaboration, service and practical action. Our team works
            alongside communities and partners to turn purpose into
            meaningful outcomes.
        </p>

    </div>

</section>


{{-- =========================================================
     LEADERSHIP
     ========================================================= --}}

<section class="leadership-section">

    <div class="section-heading">

        <span>LEADERSHIP</span>

        <h2>
            Meet Our Leadership Team
        </h2>

        <p>
            Our leadership provides direction, oversight and support
            across the organization's programmes and partnerships.
        </p>

    </div>


    <div class="leadership-grid">

        {{-- LEADER 1 --}}

        <article class="leader-card">

            <div class="leader-image">

                <img
                    src="{{ asset('images/Emmanuel.jpg') }}"
                    alt="Inspiration House leader"
                >

            </div>

            <div class="leader-content">

                <span>FOUNDER / DIRECTOR</span>

                <h3>
                    Emmanuel Baba-Lola
                </h3>

                <p>
                    Emmanuel Baba-Lola is an alumnus of Youth With A Mission (YWAM) Jamaica and was later consecrated a Reverend Gentleman in October 1992 under the hands of the Reverend Isaac O. Crown of the Omega Faith Generation Ministries.
                </p>

                
            </div>

        </article>


        {{-- LEADER 2 --}}

        <article class="leader-card">

            <div class="leader-image">

                <img
                    src="{{ asset('images/Sunday.jpeg') }}"
                    alt="Inspiration House team member"
                >

            </div>

            <div class="leader-content">

                <span>PROGRAMMES DIRECTOR</span>

                <h3>
                    Sunday Oyeleye
                </h3>

                <p>
                    Pastor Sunday Oyeleye is an ordained pastor 
                    and global minister, leading online services and prayer platforms.  
                    He also coordinates outreach at Inspiration House in San Antonio, TX.
                </p>

               

            </div>

        </article>


        {{-- LEADER 3 --}}

        <article class="leader-card">

            <div class="leader-image">

                <img
                    src="{{ asset('images/Enitan.jpeg') }}"
                    alt="Inspiration House team member"
                >

            </div>

            <div class="leader-content">

                <span>PARTNERSHIPS LEAD</span>

                <h3>
                    Eniola Akintokun
                </h3>

                <p>
                    Enitan Bunmi Akintokun, an HND graduate and accountant, entered the non-profit sector in 2018. 
                    She works on projects in community health, women’s empowerment, and support for orphans. 
                </p>

                

            </div>

        </article>


        {{-- LEADER 4 --}}

        <article class="leader-card">

            <div class="leader-image">

                <img
                    src="{{ asset('images/Tope.jpg') }}"
                    alt="Inspiration House team member"
                >

            </div>

            <div class="leader-content">

                <span>COMMUNITY LEAD</span>

                <h3>
                    Tope Umoh
                </h3>

                <p>
                    Temitope Umoh is a missionary, pastor, and counselor in Kenya. 
                    She leads “Women of Power and Purpose” and hosts the daily broadcast, RELEASE. She lives in Nairobi with her husband, coordinating outreach in Kenya and Uganda.
                </p>

                

            </div>

        </article>

    </div>

</section>


{{-- =========================================================
     TEAM VALUES
     ========================================================= --}}

<section class="team-values">

    <div class="team-values-content">

        <span>HOW WE WORK</span>

        <h2>
            We Believe In People
            Working Together.
        </h2>

        <p>
            Strong organizations are built by people who are willing to
            listen, collaborate, learn and take responsibility for the
            work they do.
        </p>

        <div class="team-values-list">

            <div>
                <strong>01</strong>
                <span>Collaboration over isolation</span>
            </div>

            <div>
                <strong>02</strong>
                <span>People before processes</span>
            </div>

            <div>
                <strong>03</strong>
                <span>Action backed by purpose</span>
            </div>

            <div>
                <strong>04</strong>
                <span>Accountability for impact</span>
            </div>

        </div>

    </div>


    <div class="team-values-image">

        <img
            src="{{ asset('images/hero.jpg') }}"
            alt="Inspiration House team working together"
        >

    </div>

</section>


{{-- =========================================================
     JOIN THE TEAM
     ========================================================= --}}

<section class="team-cta">

    <div class="team-cta-content">

        <span>JOIN THE MOVEMENT</span>

        <h2>
            Your Skills Could Help
            Create The Next Impact.
        </h2>

        <p>
            We are always interested in connecting with people who want
            to contribute their time, skills, experience or ideas.
        </p>

        <div class="cta-actions">

            <a href="{{ route('volunteer') }}">
                Get Involved
            </a>

            <a href="{{ route('contact') }}">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection