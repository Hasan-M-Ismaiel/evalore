@extends('layouts.app')

@section('title', 'Our story | Evalore')

@section('content')

<!-- About Page HTML Code -->
<main class="ev-story-page">

    <!-- Story Hero -->
    <section class="ev-story-hero">
        <div class="ev-story-hero-image"></div>
        <div class="ev-story-hero-overlay"></div>

        <div class="ev-story-hero-content">
            <span class="ev-story-eyebrow">THE STORY OF EVALORÉ</span>
            <h1>Where Nature<br><em>Inspires Beauty</em></h1>
            <div class="ev-story-hero-line"></div>
            <p>Every beautiful story begins with inspiration.<br>Ours begins with nature.</p>
        </div>

        <div class="ev-story-hero-bottom">
            <span>OUR STORY</span>
        </div>
    </section>


    <!-- The Beginning -->
    <section class="ev-story-beginning">
        <div class="ev-story-beginning-inner">

            <div class="ev-story-section-label">
                <span>THE BEGINNING</span>
            </div>

            <div class="ev-story-beginning-content">
                <div class="ev-story-beginning-heading">
                    <span class="ev-story-kicker">A BELIEF THAT INSPIRES US</span>
                    <h2>Beauty is more than <em>appearance.</em></h2>
                </div>

                <div class="ev-story-beginning-text">
                    <p class="ev-story-lead">
                        Every beautiful story begins with inspiration.
                        Ours begins with nature.
                    </p>

                    <p>
                        At Evaloré, we believe beauty is more than appearance.
                        It is about feeling confident, embracing individuality
                        and making time to care for yourself.
                    </p>

                    <p>
                        Our story is inspired by the timeless relationship
                        between nature and beauty. Across generations and
                        cultures, botanical ingredients have been part of
                        cherished personal-care traditions.
                    </p>

                    <p>
                        Aloe vera, olive oil and vitamin E continue to inspire
                        the way we think about modern skincare.
                    </p>
                </div>
            </div>

        </div>
    </section>


    <!-- Nature Inspiration -->
    <!-- <section class="ev-story-nature">
        <div class="ev-story-nature-image">
            <img src="{{ asset('assets/images/nature.jpg') }}"
                alt="Nature-inspired beauty and botanical ingredients">
            <div class="ev-story-nature-image-caption">
                <span>THE BEAUTY OF NATURE</span>
                <p>Rooted in nature.<br>Inspired by tradition.</p>
            </div>
        </div>

        <div class="ev-story-nature-content">
            <span class="ev-story-kicker">OUR INSPIRATION</span>

            <h2>A timeless connection between <em>nature and beauty.</em></h2>

            <div class="ev-story-gold-line"></div>

            <p>
                Evaloré was created with a vision to bring this inspiration
                into everyday beauty through thoughtfully developed cosmetics,
                carefully considered ingredients and elegant presentation.
            </p>

            <p>
                We draw inspiration from the ingredients and traditions
                that have accompanied personal care across generations,
                bringing their spirit into a contemporary beauty experience.
            </p>

            <div class="ev-story-nature-note">
                <span>OUR PHILOSOPHY</span>
                <strong>Thoughtful ingredients.<br>Beautiful experiences.</strong>
            </div>
        </div>

    </section> -->

    <!-- Our ingredients -->
    @include('includes.sections.ingredient-section')

    <!-- Our Identity -->
    <section class="ev-story-identity">

        <div class="ev-story-identity-content">
            <div class="ev-story-section-label">
                <span>OUR IDENTITY</span>
            </div>

            <span class="ev-story-kicker">THE MEANING BEHIND OUR SYMBOL</span>

            <h2>Rooted in nature.<br><em>Part of who we are.</em></h2>

            <div class="ev-story-gold-line"></div>

            <p>
                At the heart of our identity is aloe vera.
                The green leaves in the Evaloré logo represent this key
                ingredient across our products and express our connection
                to nature.
            </p>

            <p>
                More than a visual element, this symbol reflects the
                inspiration behind our approach to beauty and personal care.
            </p>
        </div>

        <div class="ev-story-identity-image">
            <img src="{{ asset('assets/images/aloevera_.png') }}"
                alt="Aloe vera leaves">
            <div class="ev-story-identity-image-label">
                <span>ALOE VERA</span>
                <span>A SYMBOL OF OUR INSPIRATION</span>
            </div>
        </div>

    </section>


    <!-- Made in UAE -->
    <section class="ev-story-origin">
        <div class="ev-story-origin-image">
            <img src="{{ asset('assets/images/uae.jpg') }}"
                alt="Botanical ingredients and modern beauty formulation">
        </div>

        <div class="ev-story-origin-content">
            <span class="ev-story-kicker">OUR ORIGIN</span>

            <h2>Inspired by tradition.<br><em>Created in the UAE.</em></h2>

            <div class="ev-story-gold-line"></div>

            <p>
                Developed and manufactured in the United Arab Emirates,
                Evaloré combines modern cosmetic formulation with inspiration
                drawn from traditional beauty rituals.
            </p>

            <div class="ev-story-origin-stamp">
                <span>DEVELOPED & MANUFACTURED</span>
                <strong>UNITED ARAB EMIRATES</strong>
                <span>MADE WITH PURPOSE</span>
            </div>
        </div>
    </section>


    <!-- Our Vision -->
    <section class="ev-story-vision">
        <div class="ev-story-vision-inner">

            <div class="ev-story-section-label">
                <span>LOOKING AHEAD</span>
            </div>

            <span class="ev-story-kicker">THE JOURNEY CONTINUES</span>

            <h2>Our first chapter is only <em>the beginning.</em></h2>

            <p class="ev-story-vision-intro">
                Our journey begins with the Luxury Moroccan Bath Collection,
                celebrating the richness of Moroccan bathing traditions
                and distinctive botanicals.
            </p>

            <div class="ev-story-vision-divider"></div>

            <p class="ev-story-vision-text">
                But this is only the beginning. Our vision extends to
                skincare, body care, hair care and a growing world of
                beauty essentials.
            </p>

            <div class="ev-story-vision-categories">
                <div>
                    <span>01</span>
                    <strong>SKINCARE</strong>
                </div>
                <div>
                    <span>02</span>
                    <strong>BODY CARE</strong>
                </div>
                <div>
                    <span>03</span>
                    <strong>HAIR CARE</strong>
                </div>
                <div>
                    <span>04</span>
                    <strong>BEAUTY ESSENTIALS</strong>
                </div>
            </div>

            <a href="{{ url('/#collection') }}" class="ev-story-vision-link">
                DISCOVER OUR COLLECTION
                <span>→</span>
            </a>

        </div>
    </section>


    <!-- Closing -->
    <section class="ev-story-closing">
        <div class="ev-story-closing-overlay"></div>

        <div class="ev-story-closing-content">
            <span class="ev-story-kicker">THE EVALORÉ PHILOSOPHY</span>

            <h2>Because beauty deserves care,<br>
                and every day deserves<br>
                <em>a touch of elegance.</em>
            </h2>

            <div class="ev-story-closing-line"></div>

            <p>EVALORÉ</p>
            <span>INSPIRED BY NATURE. CREATED FOR BEAUTY.</span>
        </div>
    </section>

</main>

@endsection