<!-- EVALORE FOOTER -->
<footer class="ev-footer" id="contact">

    <div class="ev-footer-main">
        <div class="container">

            <div class="ev-footer-grid">

                <!-- Brand -->
                <div class="ev-footer-brand">

                    <a href="{{ url('/') }}" class="ev-footer-logo">
                        <img src="{{ asset('assets/images/logo.png') }}"
                            alt="Evaloré Logo">
                    </a>

                    <p>
                        Discover the beauty of Moroccan bathing rituals
                        with Evaloré. Explore our collection of Moroccan
                        black soap, body serums, and exfoliating essentials,
                        inspired by traditional care rituals.
                    </p>

                    <div class="ev-footer-social">
                        <span>FOLLOW OUR JOURNEY</span>

                        <div class="ev-social-links">
                            <a href="https://www.instagram.com/evalore.beauty/" aria-label="Instagram">IG</a>
                            <!-- <a href="#" aria-label="Facebook">FB</a> -->
                            <a href="https://www.linkedin.com/company/evalor%C3%A9/home/" aria-label="LinkedIn">IN</a>
                        </div>
                    </div>

                </div>

                <!-- Explore -->
                <div class="ev-footer-column">

                    <h3>Explore</h3>

                    <ul>
                        <li><a href="{{ route('our-story') }}">Our Story</a></li>
                        <li><a href="{{ url('/#why-evalore') }}">Our Ingredients</a></li>
                        <li><a href="{{ url('/#collection') }}">Our Collection</a></li>
                        <li><a href="{{ url('/#where-to-buy') }}">Where To Buy</a></li>
                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    </ul>

                </div>

                <!-- Collections -->
                <div class="ev-footer-column">

                    <h3>Our Collections</h3>

                    <ul>
                        <li>
                            <a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3KSWNPF/ref=sr_1_36?th=1"
                                target="_blank" rel="noopener noreferrer">
                                Blue Nila
                            </a>
                        </li>

                        <li>
                            <a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L65PCW/ref=sr_1_36"
                                target="_blank" rel="noopener noreferrer">
                                Aker Fassi
                            </a>
                        </li>

                        <li>
                            <a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L81TK2/ref=sr_1_36?th=1"
                                target="_blank" rel="noopener noreferrer">
                                Emarati Sidr
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- Discover -->
                <div class="ev-footer-discover">

                    <span class="ev-footer-eyebrow">
                        THE EVALORÉ EXPERIENCE
                    </span>

                    <h3>
                        Beauty in every
                        <em>little ritual.</em>
                    </h3>

                    <p>
                        Thoughtful ingredients, timeless inspirations
                        and beautiful everyday experiences.
                    </p>

                    <a href="{{ url('/#collection') }}" class="ev-footer-cta">
                        Discover Our Collection
                        <span>&rarr;</span>
                    </a>

                </div>

            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="ev-footer-bottom">
        <div class="container">

            <div class="ev-footer-bottom-inner">

                <p>
                    &copy; {{ date('Y') }} Evaloré.
                    All rights reserved.
                </p>

                <span class="ev-footer-motto">
                    THOUGHTFUL INGREDIENTS. BEAUTIFUL EXPERIENCES.
                </span>

                <a href="#top" class="ev-footer-back">
                    BACK TO TOP <span>&uarr;</span>
                </a>

            </div>

        </div>
    </div>

</footer>