(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        //for counter up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });


        /*---------------------------------------------*
        * Carousel
        ---------------------------------------------*/
        $('#Carousel').carousel({
                interval: 5000,
                item: 2
            })
            /*------------------------*/

    });

    /*---------------------------------------------*
        * STICKY scroll
    ---------------------------------------------*/

    $.localScroll();

    /**************************/


    jQuery(window).load(function () {


    });



}(jQuery));
