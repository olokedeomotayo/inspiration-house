@extends('layouts.app')

@section('title', 'Contact Us | Inspiration House')

@section('description', 'Get in touch with Inspiration House for partnerships, volunteering, community initiatives, support and general enquiries.')

@section('content')

{{-- =========================================================
     PAGE HERO
     ========================================================= --}}

<section class="inner-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>CONTACT US</span>

        <h1>
            Let's Start
            A Conversation.
        </h1>

        <p>
            Whether you want to partner with us, volunteer, support an
            initiative or simply learn more about our work, we'd love
            to hear from you.
        </p>

    </div>

</section>


{{-- =========================================================
     CONTACT INTRO
     ========================================================= --}}

<section class="contact-section">

    <div class="contact-info">

        <span>GET IN TOUCH</span>

        <h2>
            We'd Love To
            Hear From You.
        </h2>

        <p>
            Reach out to us with your questions, ideas, partnership
            opportunities or enquiries about our work.
        </p>


        <div class="contact-details">

            <div class="contact-detail">

                <strong>EMAIL</strong>

                <a href="mailto:info@inspirationhx.org">
                    info@inspirationhx.org
                </a>

            </div>


            <div class="contact-detail">

                <strong>PHONE</strong>

                <a href="tel:+2340000000000">
                    +234 000 000 0000
                </a>

            </div>


            <div class="contact-detail">

                <strong>LOCATION</strong>

                <p>
                    Nigeria
                </p>

            </div>


            <div class="contact-detail">

                <strong>CONNECT</strong>

                <div class="contact-socials">

                    <a href="#">
                        Facebook
                    </a>

                    <a href="#">
                        Instagram
                    </a>

                    <a href="#">
                        LinkedIn
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         CONTACT FORM
         ===================================================== --}}

    <div class="contact-form-wrapper">

        <div class="contact-form-heading">

            <span>SEND US A MESSAGE</span>

            <h2>
                How Can We Help?
            </h2>

        </div>


        <form action="#" method="POST" class="contact-form">

            @csrf

            <div class="form-row">

                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your full name"
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                    >

                </div>

            </div>


            <div class="form-group">

                <label for="phone">
                    Phone Number
                </label>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="+234..."
                >

            </div>


            <div class="form-group">

                <label for="subject">
                    What Are You Contacting Us About?
                </label>

                <select
                    id="subject"
                    name="subject"
                >

                    <option value="">
                        Select an option
                    </option>

                    <option value="partnership">
                        Partnership
                    </option>

                    <option value="volunteering">
                        Volunteering
                    </option>

                    <option value="donation">
                        Donation & Support
                    </option>

                    <option value="community">
                        Community Initiative
                    </option>

                    <option value="general">
                        General Enquiry
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label for="message">
                    Message
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Tell us how we can help..."
                ></textarea>

            </div>


            <button type="submit">
                Send Message →
            </button>

        </form>

    </div>

</section>


{{-- =========================================================
     PARTNERSHIP CTA
     ========================================================= --}}

<section class="contact-cta">

    <div class="contact-cta-content">

        <span>LOOKING TO COLLABORATE?</span>

        <h2>
            Let's Explore What We Can
            Achieve Together.
        </h2>

        <p>
            If your organization, business or community group would like
            to collaborate with Inspiration House, get in touch and
            let's start a conversation.
        </p>

        <a href="{{ route('partnerships') }}">
            Explore Partnerships →
        </a>
    </div>

</section>

@endsection