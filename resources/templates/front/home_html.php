<!-- Home -->
<section id="home">

    <!-- Background Video -->
    <!-- autoplay will automatically play the video -->
    <!-- NEED to have "muted", because chrome disables videos from playing otherwise -->
    <!-- The poster is the src of the img that will show up if the video doesn't load -->

    <video id="home-bg-video" autoplay loop muted poster="video/Ghibli.jpg">
        <!-- The source element allows you to specify alternative video formats, that the browser can choose from -->
        <!-- The browser will use the first one from a recognized format -->

        <source src="video/Ghibli.mp4" type="video/mp4">
        <source src="video/Ghibli.ogv" type="video/ogg">
        <source src="video/Ghibli.webm" type="video/webm">

    </video>


    <!-- Overlay -->
    <div id="home-overlay"></div>

    <!-- Home Content -->
    <div id="home-content">

        <!-- text-center is a BS class that center-aligns text -->
        <div id="home-content-inner" class="text-center">

            <!-- Headings -->
            <div id="home-heading">

                <h1 id="home-heading-1">Welcome</h1><br>
                <h1 id="home-heading-2"><span id="heading-to">to </span><span id="home-text-ghibli">Studio Ghibli</span></h1>

                <!-- Button -->
                <div id="home-btn">
                    <!-- "title" attribute shows text when you hover over the specific text -->
                    <!-- "btn" is a bootstrap button class -->
                    <a class="btn btn-general btn-home" href="#about" title="Start Now" role="button">Start Now</a>
                </div>
            </div>
        </div>

    </div>
    <!-- Home Content Ends -->

    <!-- Down Arrow -->
    <!-- When user clicks on this link, he will be taken to the about section -->
    <a href="#about" id="down-arrow">
        <i class="fa fa-angle-down"></i>
    </a>

</section>