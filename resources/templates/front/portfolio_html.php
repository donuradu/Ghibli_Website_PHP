<!-- Portfolio -->
<section id="portfolio">
    <div class="content-box-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="vertical-heading">
                        <h5>Discover</h5>
                        <h2>Our <br>Amazing <strong>Work</strong></h2>
                    </div>
                </div>

                <!-- HTML for filter buttons -->
                <div class="col-md-12">

                    <!-- Portfolio items filter -->
                    <div id="isotope-filters">
                        <!-- "data-filter" is a data attribute which adds additional information to the button element -->
                        <!-- NOTE: This is only specific to the isotope JS plugin -->
                        <!-- '*' to select all -->
                        <!-- "active" class will make it so the "All" filter will be active by default,
                        also using jQuery to implement this feature -->
                        <button data-filter="*" class="btn active"><span>All</span></button>

                        <!-- Filter all the items which have class logo -->
                        <button data-filter=".action" class="btn"><span>Action</span></button>
                        <button data-filter=".historical" class="btn"><span>Historical</span></button>
                        <button data-filter=".romance" class="btn"><span>Romance</span></button>
                        <button data-filter=".adventure" class="btn"><span>Adventure</span></button>
                        <button data-filter=".military" class="btn"><span>Military</span></button>

                        <button data-filter=".fantasy" class="btn"><span>Fantasy</span></button>
                        <button data-filter=".supernatural" class="btn"><span>Supernatural</span></button>
                        <button data-filter=".comedy" class="btn"><span>Comedy</span></button>
                        <button data-filter=".drama" class="btn"><span>Drama</span></button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Items Wrapper -->
        <section id="portfolio-wrapper">

            <div class="container-fluid">

                <!-- For an unknown reason, the BS grid doesn't work if there's an additional div between the row div and col div, which is what I would have done and attach the id "isotope-container" -->
                <div class="row no-gaps" id="isotope-container">
                    <div class="col-md-2 adventure fantasy">
                        <!-- Portfolio Item 01 -->
                        <div class="portfolio-item">
                            <!-- Clicking on the img will take the user to a larger sized image -->
                            <a href="img/ghibli-films/nausicaa-film.png" title="Nausicaä of the Valley of the Wind">
                                <img src="img/ghibli-films/nausicaa-film.png" class="img-responsive img-fluid" alt="Nausicaa-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>Nausicaä of the Valley of the Wind</h3>
                                        <p>1984</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 adventure supernatural drama fantasy">
                        <!-- Portfolio Item 02 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/spirited-film.png" title="Spirited Away">
                                <img src="img/ghibli-films/spirited-film.png" class="img-responsive img-fluid" alt="Spirited-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>Spirited Away</h3>
                                        <p>2001</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 adventure fantasy romance action">
                        <!-- Portfolio Item 03 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/castle-sky-film.png" title="Castle in the Sky">
                                <img src="img/ghibli-films/castle-sky-film.png" class="img-responsive img-fluid" alt="Castle-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>Castle in the Sky</h3>
                                        <p>1986</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 drama historical military">
                        <!-- Portfolio Item 04 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/fireflies-film.png" title="Grave of the Fireflies">
                                <img src="img/ghibli-films/fireflies-film.png" class="img-responsive img-fluid" alt="Fireflies-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>Grave of the Fireflies</h3>
                                        <p>1988</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 comedy supernatural">
                        <!-- Portfolio Item 05 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/totoro-film.png" title="My Neighbor Totoro">
                                <img src="img/ghibli-films/totoro-film.png" class="img-responsive img-fluid" alt="Totoro-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>My Neighbor Totoro</h3>
                                        <p>1988</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 comedy drama fantasy romance">
                        <!-- Portfolio Item 06 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/kikis-film.png" title="Kiki's Delivery Service">
                                <img src="img/ghibli-films/kikis-film.png" class="img-responsive img-fluid" alt="Kikis-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>Kiki's Delivery Service</h3>
                                        <p>1989</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 action military adventure drama historical comedy">
                        <!-- Portfolio Item 07 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/porco-film.png" title="Porco Rosso">
                                <img src="img/ghibli-films/porco-film.png" class="img-responsive img-fluid" alt="Porco-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <!-- Item Header -->
                                        <h3>Porco Rosso</h3>
                                        <p>1992</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 drama romance">
                        <!-- Portfolio Item 08 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/whisper-film.png" title="Whisper of the Heart">
                                <img src="img/ghibli-films/whisper-film.png" class="img-responsive img-fluid" alt="Whisper-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <h3>Whisper of the Heart</h3>
                                        <p>1995</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 action adventure fantasy">
                        <!-- Portfolio Item 09 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/mononoke-film.png" title="Princess Mononoke">
                                <img src="img/ghibli-films/mononoke-film.png" class="img-responsive img-fluid" alt="Mononoke-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <h3>Princess Mononoke</h3>
                                        <p>1997</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 adventure drama fantasy romance military supernatural">
                        <!-- Portfolio Item 10 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/howls-film.png" title="Howl's Moving Castle">
                                <img src="img/ghibli-films/howls-film.png" class="img-responsive img-fluid" alt="Howls-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <h3>Howl's Moving Castle</h3>
                                        <p>2004</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 military historical romance">
                        <!-- Portfolio Item 11 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/windrises-film.png" title="The Wind Rises">
                                <img src="img/ghibli-films/windrises-film.png" class="img-responsive img-fluid" alt="WindRises-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <h3>The Wind Rises</h3>
                                        <p>2013</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 drama">
                        <!-- Portfolio Item 12 -->
                        <div class="portfolio-item">
                            <a href="img/ghibli-films/pompoko-film.png" title="Pom Poko">
                                <img src="img/ghibli-films/pompoko-film.png" class="img-responsive img-fluid" alt="PomPoko-BG">
                                <!-- Overlay for the portfolio item -->
                                <div class="portfolio-item-overlay">
                                    <div class="portfolio-item-details text-center">
                                        <h3>Pom Poko</h3>
                                        <p>1994</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
