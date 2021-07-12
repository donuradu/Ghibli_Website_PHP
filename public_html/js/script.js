/* ==================================================
                    Preloader
===================================================*/


//'load' - make sure that website is fully loaded
$(window).on('load', function () {
    //hide the animating image
    $("#status").fadeOut();
    //hide the white background of "preloader"
    //fade out with a delay of 350 milliseconds
    $("#preloader").delay(350).fadeOut('slow');

}); //Will monitor the load event for our browser window

/* ==================================================
                    Team
===================================================*/

/* Long form: (document).ready(function() { } ); */
/* Adds owl-carousel */
$(function () {
    /* Select the parent div with the "owl-carousel" class */
    $("#team-members").owlCarousel({
        /* Object properties */
        items: 2,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        /* Passing array */
        navText: ['<i class="fa fa-angle-left" style="font-size: 40px; color: #212226; background: none; border-color: transparent;"></i>',
                  '<i class="fa fa-angle-right" style="font-size: 40px; color: #212226; background: none; border-color: transparent;"></i>']

    }); 

});

/* ==================================================
                    Responsive Tabs
===================================================*/
$(function () {
    $("#services-tabs").responsiveTabs({
        animation: 'slide'
    });

});

/* ==================================================
                    Portfolio (Isotope)
===================================================*/

/* Windows on-load method, which will run only after all the content is loaded. */
/* Want images to load first, and then apply jQuery code */
$(window).on('load', function () {

    // Initialize the Isotope plugin, and attach it to #isotope-container
    $("#isotope-container").isotope({
    });

    // filter items on button click
    $("#isotope-filters").on('click', 'button', function () {
        // get filter value, and store the returned attribute value of button
        var filterValue = $(this).attr('data-filter');

        // filter portfolio items
        $("#isotope-container").isotope({
            // passing a JS object here
            filter: filterValue
        });

        // find() - looks for a method that has an active class, inside "#isotope-filters"
        // remove the active class
        $("#isotope-filters").find('.active').removeClass('active');

        // active button
        $(this).addClass('active');

    });
});

/* ==================================================
                    Magnifier
===================================================*/

$(function () {
    // attach magnific-popup plugin to div with id "portfolio-wrapper"
    $("#portfolio-wrapper").magnificPopup({

        // select anchor child items
        delegate: 'a', // child item selector, by clicking on it, the popup will open
        type: 'image',
        // enable the gallery option
        gallery: {
            enabled: true
        }
    });
});
















