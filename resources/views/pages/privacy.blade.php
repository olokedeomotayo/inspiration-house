@extends('layouts.app')

@section('title', 'Privacy Policy | Inspiration House')

@section('description', 'Read the Inspiration House privacy policy and learn how we collect, use and protect information.')

@section('content')

<section class="inner-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>LEGAL & PRIVACY</span>

        <h1>
            Privacy Policy
        </h1>

        <p>
            How Inspiration House collects, uses and protects information
            when you interact with our website and services.
        </p>

    </div>

</section>


<section class="legal-section">

    <div class="legal-content">

        <span>LAST UPDATED</span>

        <h2>
            Your Privacy Matters
        </h2>

        <p>
            Inspiration House respects your privacy and is committed to
            handling personal information responsibly. This policy explains
            how information may be collected and used when you visit our
            website, contact us, volunteer, donate or interact with our
            activities.
        </p>


        <h3>1. Information We May Collect</h3>

        <p>
            Depending on how you interact with us, we may collect information
            such as your name, email address, telephone number, organization,
            communication preferences and information you voluntarily provide
            through forms or other interactions.
        </p>


        <h3>2. How We Use Information</h3>

        <p>
            Information may be used to respond to enquiries, process
            requests, communicate with supporters, coordinate volunteering
            and partnerships, improve our website and support our programmes.
        </p>


        <h3>3. Donations</h3>

        <p>
            Where donations are processed through third-party payment
            providers, payment information may be handled directly by the
            relevant payment provider according to its own privacy and
            security policies.
        </p>


        <h3>4. Website Information</h3>

        <p>
            We may collect technical information such as browser type,
            device information, pages visited and general website usage
            information to help maintain and improve our website.
        </p>


        <h3>5. Information Sharing</h3>

        <p>
            We do not intend to sell personal information. Information may
            be shared with service providers or partners where reasonably
            necessary to provide a requested service, operate the website
            or fulfil a legitimate organizational purpose.
        </p>


        <h3>6. Data Security</h3>

        <p>
            We take reasonable measures to protect information against
            unauthorized access, misuse, alteration or disclosure. However,
            no internet-based system can guarantee absolute security.
        </p>


        <h3>7. Third-Party Services</h3>

        <p>
            Our website may contain links to external websites or use
            third-party services. We are not responsible for the privacy
            practices of external websites and encourage you to review their
            respective privacy policies.
        </p>


        <h3>8. Your Choices</h3>

        <p>
            You may contact us if you want to ask about information we hold
            about you, request correction of inaccurate information or
            withdraw certain communications where applicable.
        </p>


        <h3>9. Changes To This Policy</h3>

        <p>
            This privacy policy may be updated from time to time as our
            website, services and legal requirements evolve. The latest
            version will be published on this page.
        </p>


        <h3>10. Contact Us</h3>

        <p>
            If you have questions about this Privacy Policy or how your
            information is handled, please contact Inspiration House through
            our
            <a href="{{ route('contact') }}">
                Contact Us
            </a>
            page.
        </p>

    </div>

</section>


<section class="home-cta">

    <div class="home-cta-content">

        <span>QUESTIONS?</span>

        <h2>
            We're Happy To Help.
        </h2>

        <p>
            If you have any questions about privacy or how we handle your
            information, get in touch with us.
        </p>

        <div class="cta-actions">

            <a href="{{ route('contact') }}">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection