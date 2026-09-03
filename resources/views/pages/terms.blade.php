@extends('layouts.app')

@section('title', 'Terms of Use | Inspiration House')

@section('description', 'Read the terms governing your use of the Inspiration House website.')

@section('content')

<section class="inner-hero">

    <div class="inner-hero-overlay"></div>

    <div class="inner-hero-content">

        <span>LEGAL & INFORMATION</span>

        <h1>
            Terms of Use
        </h1>

        <p>
            The terms and conditions that apply when you access and use
            the Inspiration House website.
        </p>

    </div>

</section>


<section class="legal-section">

    <div class="legal-content">

        <span>WEBSITE TERMS</span>

        <h2>
            Using Our Website
        </h2>

        <p>
            By accessing or using the Inspiration House website, you agree
            to use the website responsibly and in accordance with these
            terms. If you do not agree with these terms, please discontinue
            use of the website.
        </p>


        <h3>1. About The Website</h3>

        <p>
            The Inspiration House website provides information about our
            organization, programmes, initiatives, partnerships, events,
            resources and opportunities to get involved.
        </p>


        <h3>2. Acceptable Use</h3>

        <p>
            You agree not to use the website for unlawful purposes, attempt
            to gain unauthorized access to systems or information, interfere
            with website functionality or knowingly introduce malicious
            software or harmful content.
        </p>


        <h3>3. Website Content</h3>

        <p>
            We make reasonable efforts to keep information on the website
            accurate and current. However, information may change over time
            and we do not guarantee that every item of content will always
            be complete, accurate or up to date.
        </p>


        <h3>4. Intellectual Property</h3>

        <p>
            Unless otherwise stated, content published on this website,
            including text, graphics, logos, photographs and other materials,
            belongs to Inspiration House or is used with appropriate
            permission.
        </p>

        <p>
            Content should not be reproduced, distributed or commercially
            exploited without appropriate authorization.
        </p>


        <h3>5. External Links</h3>

        <p>
            Our website may contain links to websites operated by third
            parties. These links are provided for convenience or additional
            information. We are not responsible for the content, availability
            or policies of external websites.
        </p>


        <h3>6. Donations & Payments</h3>

        <p>
            Where donations or payments are processed through third-party
            payment providers, those transactions may be subject to the
            provider's own terms, conditions and policies.
        </p>


        <h3>7. Volunteering & Applications</h3>

        <p>
            Submitting a volunteer, partnership or other enquiry through
            the website does not automatically guarantee acceptance,
            participation or appointment. Applications may be reviewed
            according to the requirements of the relevant initiative.
        </p>


        <h3>8. Limitation Of Liability</h3>

        <p>
            To the extent permitted by applicable law, Inspiration House
            will not be responsible for losses arising from reliance on
            website content, interruptions to website availability or
            external websites and services.
        </p>


        <h3>9. Changes To These Terms</h3>

        <p>
            We may update these terms when necessary to reflect changes
            to the website, our activities or applicable requirements.
            Updated terms will be published on this page.
        </p>


        <h3>10. Governing Law</h3>

        <p>
            These terms shall be interpreted in accordance with applicable
            laws and regulations governing Inspiration House and its
            activities.
        </p>


        <h3>11. Contact</h3>

        <p>
            If you have questions about these Terms of Use, please contact
            us through our
            <a href="{{ route('contact') }}">
                Contact Us
            </a>
            page.
        </p>

    </div>

</section>


<section class="home-cta">

    <div class="home-cta-content">

        <span>NEED MORE INFORMATION?</span>

        <h2>
            Have A Question About Our Website?
        </h2>

        <p>
            We're happy to help clarify anything about using the
            Inspiration House website.
        </p>

        <div class="cta-actions">

            <a href="{{ route('contact') }}">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection