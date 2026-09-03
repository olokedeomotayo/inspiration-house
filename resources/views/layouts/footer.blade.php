<footer class="site-footer">

    <div class="footer-main">

        <div class="footer-brand">
            <img
                src="{{ asset('images/Inspirationhx_logo.png') }}"
                alt="Inspiration House"
            >

            <p>
                Building stronger communities,
                creating opportunities and making
                a lasting difference.
            </p>
        </div>

        <div class="footer-column">
            <h3>Quick Links</h3>

            <a href="{{ url('/') }}">Home</a>
            <a href="#">About Us</a>
            <a href="#">Our Work</a>
            <a href="#">Gallery</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="footer-column">
            <h3>Partnerships</h3>

            <a href="#">Acts 1038</a>
            <a href="#">Mission Aid Network</a>
            <a href="#">Jesus Army Global</a>
            <a href="#">Children Emergency Relief Funds</a>
        </div>

        <div class="footer-column">
            <h3>Resources</h3>

            <a href="#">Blog</a>
            <a href="#">Audio Sermons</a>
            <a href="#">Gallery</a>
        </div>

    </div>

    <div class="footer-contact">

        <div>
            <strong>Get Involved</strong>
            <p>Partner with us and help create meaningful community impact.</p>
        </div>

        <a href="#">Donate</a>

    </div>

    <div class="footer-bottom">
        <p>
            © {{ date('Y') }} Inspiration House. All Rights Reserved.
        </p>

        <div>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
        </div>
    </div>

</footer>