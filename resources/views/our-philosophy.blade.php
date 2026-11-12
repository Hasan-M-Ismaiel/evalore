@extends('layouts.app')

@section('title', 'Our Philosophy | Evalore')

@section('content')

<!-- About Page HTML Code -->

<main class="ev-philosophy-page">

    <!-- HERO -->
    <section class="ev-ph-hero">

        <div class="ev-ph-hero-image"></div>
        <div class="ev-ph-hero-overlay"></div>

        <div class="ev-ph-hero-content">
            <span class="ev-ph-eyebrow">THE EVALORÉ STANDARD</span>

            <h1>Beauty Begins<br><em>with Care.</em></h1>

            <div class="ev-ph-line"></div>

            <p>
                A thoughtful approach to beauty,<br>
                quality and everyday self-care.
            </p>
        </div>

        <div class="ev-ph-hero-bottom">
            <span>OUR PHILOSOPHY & QUALITY</span>
            <span>CARE IN EVERY DETAIL</span>
        </div>

    </section>


    <!-- INTRODUCTION -->
    <section class="ev-ph-intro">

        <div class="ev-ph-intro-inner">

            <span class="ev-ph-kicker">WHAT GUIDES US</span>

            <h2>
                Beauty is a personal experience<br>
                shaped by <em>everyday care.</em>
            </h2>

            <div class="ev-ph-gold-line"></div>

            <p>
                At Evaloré, beauty is a personal experience shaped by the
                small moments of care we give ourselves every day.
                We believe that thoughtful products, considered ingredients
                and meaningful routines can make these moments more enjoyable.
            </p>

            <span class="ev-ph-intro-signature">
                A little care. A lasting feeling.
            </span>

        </div>

    </section>


    <!-- OUR FOUR PRINCIPLES -->
    <section class="ev-ph-principles">

        <div class="ev-ph-principles-heading">
            <span class="ev-ph-kicker">THE VALUES BEHIND OUR WORK</span>

            <h2>Four principles.<br>
                <em>One philosophy.</em>
            </h2>

            <p>
                The ideas that shape the way we think about
                beauty and create our products.
            </p>
        </div>


        <div class="ev-ph-principles-grid">

            <!-- PRINCIPLE 01 -->
            <article class="ev-ph-principle">
                <div class="ev-ph-principle-top">
                    <span>01</span>
                    <div class="ev-ph-principle-icon">
                        <span>✳</span>
                    </div>
                </div>

                <span class="ev-ph-principle-label">OUR INSPIRATION</span>

                <h3>Inspired<br><em>by Nature</em></h3>

                <p>
                    We draw inspiration from botanical ingredients
                    and beauty traditions, bringing their influence
                    into our approach to modern personal care.
                </p>
            </article>


            <!-- PRINCIPLE 02 -->
            <article class="ev-ph-principle">
                <div class="ev-ph-principle-top">
                    <span>02</span>
                    <div class="ev-ph-principle-icon">
                        <span>◇</span>
                    </div>
                </div>

                <span class="ev-ph-principle-label">OUR APPROACH</span>

                <h3>Thoughtfully<br><em>Developed</em></h3>

                <p>
                    We believe every product should have a clear purpose
                    and a carefully considered formulation.
                </p>
            </article>


            <!-- PRINCIPLE 03 -->
            <article class="ev-ph-principle">
                <div class="ev-ph-principle-top">
                    <span>03</span>
                    <div class="ev-ph-principle-icon">
                        <span>✧</span>
                    </div>
                </div>

                <span class="ev-ph-principle-label">OUR COMMITMENT</span>

                <h3>Made<br><em>with Care</em></h3>

                <p>
                    Developed and manufactured in the UAE, our products
                    reflect our focus on quality, consistency
                    and attention to detail.
                </p>
            </article>


            <!-- PRINCIPLE 04 -->
            <article class="ev-ph-principle">
                <div class="ev-ph-principle-top">
                    <span>04</span>
                    <div class="ev-ph-principle-icon">
                        <span>○</span>
                    </div>
                </div>

                <span class="ev-ph-principle-label">OUR PURPOSE</span>

                <h3>Beauty for<br><em>Everyday Life</em></h3>

                <p>
                    From simple routines to indulgent rituals,
                    we aim to make self-care enjoyable and accessible.
                </p>
            </article>

        </div>

    </section>


    <!-- PHILOSOPHY STATEMENT -->
    <section class="ev-ph-statement">

        <div class="ev-ph-statement-image">
            <img src="{{ asset('assets/images/nature.jpg') }}"
                alt="Nature-inspired beauty and self-care">

            <div class="ev-ph-statement-image-caption">
                <span>THE EVALORÉ PHILOSOPHY</span>
                <strong>Care is in the details.</strong>
            </div>
        </div>

        <div class="ev-ph-statement-content">

            <span class="ev-ph-kicker">A COMMITMENT THAT CONTINUES</span>

            <h2>Creating beauty with <em>purpose.</em></h2>

            <div class="ev-ph-gold-line"></div>

            <p>
                Our commitment is to keep creating beauty products
                that bring together quality, botanical inspiration
                and everyday elegance.
            </p>

            <p>
                We see every product as an opportunity to make
                everyday personal care a more thoughtful experience.
            </p>

            <div class="ev-ph-statement-signature">
                <span></span>
                <strong>Quality in thought. Care in creation.</strong>
            </div>

        </div>

    </section>


    <!-- MANUFACTURING & QUALITY -->
    <section class="ev-ph-manufacturing">

        <div class="ev-ph-manufacturing-heading">
            <span class="ev-ph-kicker">FROM CONCEPT TO CREATION</span>

            <h2>Manufacturing <em>& Quality</em></h2>

            <p>
                Thoughtful production. Consistency. Attention to detail.
            </p>
        </div>


        <div class="ev-ph-manufacturing-main">

            <div class="ev-ph-manufacturing-image">
                <img src="{{ asset('assets/images/uae.jpg') }}"
                    alt="Evaloré product manufacturing">

                <div class="ev-ph-manufacturing-image-label">
                    <span>OUR ORIGIN</span>
                    <strong>United Arab Emirates</strong>
                </div>
            </div>


            <div class="ev-ph-manufacturing-content">

                <span class="ev-ph-kicker">MADE IN THE UAE</span>

                <h3>Carefully considered<br>
                    <em>at every stage.</em>
                </h3>

                <div class="ev-ph-gold-line"></div>

                <p>
                    Evaloré products are developed and manufactured
                    in the United Arab Emirates.
                </p>

                <p>
                    We value thoughtful production practices,
                    consistency and care at every stage of the
                    product experience.
                </p>

                <p>
                    Our approach reflects the importance we place
                    on creating products with a clear identity
                    and a considered place in everyday beauty routines.
                </p>

                <div class="ev-ph-origin-mark">
                    <span>DEVELOPED & MANUFACTURED</span>
                    <strong>UNITED ARAB EMIRATES</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- OUR QUALITY APPROACH -->
    <section class="ev-ph-quality">

        <div class="ev-ph-quality-heading">
            <span class="ev-ph-kicker">OUR QUALITY APPROACH</span>

            <h2>Attention to detail<br>
                <em>makes a difference.</em>
            </h2>

            <p>
                Quality is not simply a statement.
                It is an approach reflected in the way we think
                about our products and their experience.
            </p>
        </div>


        <div class="ev-ph-quality-grid">

            <div class="ev-ph-quality-item">
                <span>01</span>
                <h3>Product Development</h3>
                <p>
                    A clear product purpose and a considered
                    approach to formulation.
                </p>
            </div>

            <div class="ev-ph-quality-item">
                <span>02</span>
                <h3>Ingredient Consideration</h3>
                <p>
                    Attention to the ingredients selected
                    for each product formulation.
                </p>
            </div>

            <div class="ev-ph-quality-item">
                <span>03</span>
                <h3>Production & Consistency</h3>
                <p>
                    A focus on thoughtful production practices
                    and consistency.
                </p>
            </div>

            <div class="ev-ph-quality-item">
                <span>04</span>
                <h3>Product Experience</h3>
                <p>
                    Care in the details that shape the
                    everyday experience of our products.
                </p>
            </div>

        </div>

    </section>


    <!-- CLOSING -->
    <section class="ev-ph-closing">

        <div class="ev-ph-closing-overlay"></div>

        <div class="ev-ph-closing-content">

            <span class="ev-ph-kicker">THE EVALORÉ PROMISE</span>

            <h2>
                Quality in every detail.<br>
                <em>Elegance in every ritual.</em>
            </h2>

            <div class="ev-ph-closing-line"></div>

            <p>
                Inspired by nature, guided by care
                and created for everyday beauty.
            </p>

            <a href="{{ url('/#collection') }}" class="ev-ph-closing-link">
                DISCOVER OUR COLLECTION <span>→</span>
            </a>

        </div>

    </section>

</main>


@endsection