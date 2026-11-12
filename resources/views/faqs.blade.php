@extends('layouts.app')

@section('title', 'FAQs | Evalore')

@section('content')

<main>

<!-- =========================================
     EVALORE - FREQUENTLY ASKED QUESTIONS
========================================= -->

    <section class="ev-faq-section" id="faq">

        <div class="ev-faq-container">

            <!-- Section Heading -->
            <div class="ev-faq-heading">
                <span class="ev-faq-eyebrow">HERE TO HELP</span>

                <h2>Frequently Asked <em>Questions</em></h2>

                <p>
                    Everything you need to know about Evaloré,
                    our collections and your beauty rituals.
                </p>

                <div class="ev-faq-heading-line"></div>
            </div>


            <!-- FAQ Content -->
            <div class="ev-faq-list">

                <!-- FAQ 01 -->
                <details class="ev-faq-item">
                    <summary>
                        <span class="ev-faq-number">01</span>
                        <span class="ev-faq-question">
                            Where are Evaloré products made?
                        </span>
                        <span class="ev-faq-icon"></span>
                    </summary>

                    <div class="ev-faq-answer">
                        <p>
                            Evaloré products are developed and manufactured
                            in the United Arab Emirates.
                        </p>
                    </div>
                </details>


                <!-- FAQ 02 -->
                <details class="ev-faq-item">
                    <summary>
                        <span class="ev-faq-number">02</span>
                        <span class="ev-faq-question">
                            What products are available now?
                        </span>
                        <span class="ev-faq-icon"></span>
                    </summary>

                    <div class="ev-faq-answer">
                        <p>
                            Our first launch is the Luxury Moroccan Bath
                            Collection, available in three botanical-inspired
                            variants: Aker Fassi, Blue Nila and Emarati Sidr.
                        </p>
                    </div>
                </details>


                <!-- FAQ 03 -->
                <details class="ev-faq-item">
                    <summary>
                        <span class="ev-faq-number">03</span>
                        <span class="ev-faq-question">
                            Where can I buy Evaloré?
                        </span>
                        <span class="ev-faq-icon"></span>
                    </summary>

                    <div class="ev-faq-answer">
                        <p>
                            Our launch products are available through Amazon UAE.
                            Visit our collection pages to find direct purchasing
                            links for each variant.
                        </p>

                        <a href="{{ url('/#collection') }}"
                            class="ev-faq-inline-link">
                            EXPLORE OUR COLLECTIONS <span>↗</span>
                        </a>
                    </div>
                </details>


                <!-- FAQ 04 -->
                <details class="ev-faq-item">
                    <summary>
                        <span class="ev-faq-number">04</span>
                        <span class="ev-faq-question">
                            How often should I use the Moroccan Soap?
                        </span>
                        <span class="ev-faq-icon"></span>
                    </summary>

                    <div class="ev-faq-answer">
                        <p>
                            The suggested ritual is two to three times per week,
                            depending on skin tolerance. Follow the product label
                            and avoid aggressive exfoliation.
                        </p>
                    </div>
                </details>


                <!-- FAQ 05 -->
                <details class="ev-faq-item">
                    <summary>
                        <span class="ev-faq-number">05</span>
                        <span class="ev-faq-question">
                            Are Evaloré products suitable for sensitive skin?
                        </span>
                        <span class="ev-faq-icon"></span>
                    </summary>

                    <div class="ev-faq-answer">
                        <p>
                            Skin tolerance varies. Review the complete ingredient
                            list and patch-test before use. Discontinue use if
                            irritation occurs.
                        </p>
                    </div>
                </details>


                <!-- FAQ 06 -->
                <details class="ev-faq-item">
                    <summary>
                        <span class="ev-faq-number">06</span>
                        <span class="ev-faq-question">
                            Will more products be introduced?
                        </span>
                        <span class="ev-faq-icon"></span>
                    </summary>

                    <div class="ev-faq-answer">
                        <p>
                            Yes. Evaloré plans to expand into additional skincare,
                            body care and hair care categories, continuing to
                            bring nature-inspired beauty into everyday life.
                        </p>
                    </div>
                </details>

            </div>


            <!-- Bottom Note -->
            <div class="ev-faq-bottom">
                <span>STILL HAVE A QUESTION?</span>
                <a href="#contact">
                    GET IN TOUCH <span>↗</span>
                </a>
            </div>

        </div>

    </section>
</main>


@endsection