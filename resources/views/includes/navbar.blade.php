<!-- EVALORE NAVBAR -->
<nav class="evalore-navbar" id="ftco-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="evalore-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}"
                alt="Evaloré">
        </a>

        <!-- Mobile Toggle -->
        <button class="evalore-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#evalore-nav"
            aria-controls="evalore-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navigation -->
        <div class="navbar-collapse" id="evalore-nav">

            <ul class="evalore-nav-links">

                <li>
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>

                <li class="evalore-dropdown">
                    <a href="#" class="dropdown-trigger {{ request()->routeIs('our-products') ? 'active' : '' }}">
                        Our Products
                        <span class="fa fa-angle-down"></span>
                    </a>

                    <div class="evalore-dropdown-menu">
                        <a href="{{ url('/#collection') }}">
                            Moroccan Soap
                        </a>
                    </div>
                </li>
                
                <!-- <li>
                    <a href=" " class="{{ request()->routeIs('our-story') ? 'active' : '' }}">Our Story</a>
                </li> -->

                <li>
                    <a href="{{ url('/#where-to-buy') }}">Where To Buy</a>
                </li>

                <li>
                    <a href="{{ url('/#contact') }}">Support</a>
                </li>

            </ul>

        </div>
    </div>
</nav>