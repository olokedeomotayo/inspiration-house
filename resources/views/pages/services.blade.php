@extends('layouts.app')

@section('title', 'Our Work | Inspiration House')

@section('description', 'Explore the community development, charity, youth empowerment, education and outreach initiatives of Inspiration House.')

@section('content')

<section class="inner-hero services-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>OUR WORK</span>

        <h1>
            Turning Purpose
            Into Action.
        </h1>

        <p>
            Discover the initiatives and programmes through which
            Inspiration House supports people, strengthens communities
            and creates opportunities.
        </p>

    </div>

</section>


<section class="services-intro">

    <div class="section-heading">

        <span>WHAT WE DO</span>

        <h2>
            Practical Work. Meaningful Impact.
        </h2>

        <p>
            Our work responds to real community needs through initiatives
            focused on people, opportunity, education, support and
            collaboration.
        </p>

    </div>

</section>


<section class="services-grid-section">

    <div class="services-grid">

        <article class="service-card">

            <div class="service-number">01</div>

            <span>COMMUNITY</span>

            <h2>Community Development</h2>

            <p>
                We support initiatives that strengthen communities,
                encourage local participation and improve everyday
                experiences for individuals and families.
            </p>

            <a href="#community-development">
                Explore →
            </a>

        </article>


        <article class="service-card">

            <div class="service-number">02</div>

            <span>SUPPORT</span>

            <h2>Charity & Giving</h2>

            <p>
                We connect resources with people and communities that need
                practical support, creating opportunities for generosity
                to become meaningful action.
            </p>

            <a href="{{ route('donate') }}">
                Support This Work →
            </a>

        </article>


        <article class="service-card">

            <div class="service-number">03</div>

            <span>YOUTH</span>

            <h2>Youth Empowerment</h2>

            <p>
                We create opportunities for young people to develop
                confidence, skills, leadership capacity and a stronger
                sense of possibility.
            </p>

            <a href="#youth-empowerment">
                Explore →
            </a>

        </article>


        <article class="service-card">

            <div class="service-number">04</div>

            <span>EDUCATION</span>

            <h2>Education & Learning</h2>

            <p>
                We support access to knowledge, learning opportunities,
                resources and conversations that encourage personal and
                community development.
            </p>

            <a href="#education-learning">
                Explore →
            </a>

        </article>


        <article class="service-card">

            <div class="service-number">05</div>

            <span>OUTREACH</span>

            <h2>Community Outreach</h2>

            <p>
                We engage communities through outreach activities designed
                to identify needs, build relationships and connect people
                with practical support.
            </p>

            <a href="#community-outreach">
                Explore →
            </a>

        </article>


        <article class="service-card">

            <div class="service-number">06</div>

            <span>PARTNERSHIPS</span>

            <h2>Strategic Partnerships</h2>

            <p>
                We collaborate with organizations, initiatives and
                individuals whose resources and expertise can help create
                greater community impact.
            </p>

            <a href="{{ route('partnerships') }}">
                Partner With Us →
            </a>

        </article>

    </div>

</section>


<section class="services-feature">

    <div class="services-feature-image">

        <img
            src="{{ asset('images/hero.jpg') }}"
            alt="Inspiration House community work"
        >

    </div>

    <div class="services-feature-content">

        <span>OUR APPROACH</span>

        <h2>
            We Focus On People,
            Not Just Projects.
        </h2>

        <p>
            Every initiative begins with people and the communities
            they belong to. We seek to understand real needs before
            connecting the right people, resources and partnerships
            to respond.
        </p>

        <div class="services-points">

            <div>
                <strong>01</strong>
                <span>Understand the need</span>
            </div>

            <div>
                <strong>02</strong>
                <span>Connect the right resources</span>
            </div>

            <div>
                <strong>03</strong>
                <span>Take practical action</span>
            </div>

            <div>
                <strong>04</strong>
                <span>Measure meaningful impact</span>
            </div>

        </div>

    </div>

</section>


<section class="services-current">

    <div class="section-heading">

        <span>CURRENT INITIATIVES</span>

        <h2>
            See What Is Happening
        </h2>

        <p>
            Our programmes and activities continue to evolve as we work
            with communities and partners.
        </p>

    </div>

    <div class="current-grid">

        <article id="community-development">

            <span>ACTIVE</span>

            <h3>
                Community Support Initiative
            </h3>

            <p>
                Practical support and community-focused activities.
            </p>

            <a href="{{ route('contact') }}">
                Get Involved →
            </a>

        </article>


        <article id="youth-empowerment">

            <span>ONGOING</span>

            <h3>
                Youth Empowerment Programme
            </h3>

            <p>
                Creating opportunities for young people to learn and grow.
            </p>

            <a href="{{ route('volunteer') }}">
                Get Involved →
            </a>

        </article>


        <article id="education-learning">

            <span>ONGOING</span>

            <h3>
                Education & Resource Programme
            </h3>

            <p>
                Connecting people with useful learning resources.
            </p>

            <a href="{{ route('blog') }}">
                Explore Resources →
            </a>

        </article>

    </div>

    <div id="community-outreach"></div>

</section>


<section class="home-cta">

    <div class="home-cta-content">

        <span>GET INVOLVED</span>

        <h2>
            Help Turn Good Intentions Into Real Impact.
        </h2>

        <p>
            Partner with us, volunteer your skills, support an initiative
            or contribute resources to help strengthen communities.
        </p>

        <div class="cta-actions">

            <a href="{{ route('partnerships') }}">
                Partner With Us
            </a>

            <a href="{{ route('donate') }}">
                Donate
            </a>

            <a href="{{ route('volunteer') }}">
                Volunteer
            </a>

        </div>

    </div>

</section>

@endsection