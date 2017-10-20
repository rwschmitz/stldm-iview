<?php get_header(); ?>


<body>

    <!-- Navigation start -->
    <div class="no-gutters">
        <nav class="nav fixed-top navbar-expand-lg nav-style">

            <!-- Button responsible for opening/closing navbar on mobile -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarInfo" aria-controls="navbarInfo" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">NAV</span>
            </button>

            <!-- Actual navbar links -->
            <div class="justify-content-end collapse navbar-collapse" id="navbarInfo">
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goHome" class="nav-btn underline">home</button></a>
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goMenu" class="nav-btn underline">menu</button></a>
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goSpecials" class="nav-btn underline">specials</button></a>
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goOrder" class="nav-btn underline">order online</button></a>

                <a id="goServices" class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <div id="drop1" class="dropdown">
                        <button class="nav-btn underline">services</button>
                        <div id="subdrop1" class="dropdown-menu">
                            <li><button class="nav-drop-btn underline">Reservations</button></li>
                            <li><button class="nav-drop-btn underline">Banquet Rooms</button></li>
                            <li><button class="nav-drop-btn underline">Gift Certificates</button></li>
                        </div>
                    </div>
                </a>

                <a id="goReviews" class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                        <div id="drop2" class="dropdown">
                            <button class="nav-btn underline">reviews</button>
                            <div id="subdrop2" class="dropdown-menu">
                                <li><button class="nav-drop-btn underline">Testimonals</button></li>
                                <li><button class="nav-drop-btn underline">Review Us</button></li>
                            </div>
                        </div>
                    </a>

                    <a id="goAbout" class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                            <div id="drop3" class="dropdown">
                                <button class="nav-btn underline">about</button>
                                <div id="subdrop3" class="dropdown-menu">
                                    <li><button class="nav-drop-btn underline">Our Story</button></li>
                                    <li><button class="nav-drop-btn underline">Events</button></li>
                                    <li><button class="nav-drop-btn underline">Gallery</button></li>
                                    <li><button class="nav-drop-btn underline">Blog</button></li>
                                </div>
                            </div>
                        </a>

                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goAbout" class="nav-btn underline">contact</button></a>
            </div>
        </nav>
    </div>
    <!-- Navigation end -->

    <!-- Landing page start -->
    <div class="no-gutters landing">

    </div> <!-- End no-gutters -->



<?php get_footer(); ?>