(function($) {

	"use strict";



	jQuery(document).ready(function($){



        



        // $("a").on('click', function (event) {

        //     if (this.hash !== "") {

        //         event.preventDefault();

        //         var hash = this.hash;

        //         $('html, body').animate({

        //             scrollTop: $(hash).offset().top

        //         }, 800, function () {

        //             window.location.hash = hash;

        //         });

        //     }

        // });



        $(".menu-trigger").on("click", function () {

            $(".off-canvas-menu,.off-canvas-overlay").removeClass("active");

            $(".off-canvas-menu,.off-canvas-overlay").addClass("active");

        });



        $(".menu-close").on("click", function () {

            $(".off-canvas-menu,.off-canvas-overlay").removeClass("active");

        });



        $(".off-canvas-overlay").on("click", function () {

            $(".off-canvas-menu,.off-canvas-overlay").removeClass("active");

        });

        /*$(".single-service-box").hover(function () {

            $(".single-service-box").removeClass("active");
            $(this).addClass("active");
        });*/

        /*$('.single-service-box').on('click', function () {

            var service_colored_icon = $(this).find('.service_colored_icon').val();
            alert(service_colored_icon);

        });*/

        $( ".single-service-box" ).hover(
            function() {

                var service_colored_icon = $(this).find('.service_colored_icon').val();
                var service_featured_icon = $(this).find('.service_featured_icon').val();
                if(service_colored_icon != ''){
                    $(this).find('img').attr('src', service_colored_icon);                    
                }else{
                    $(this).find('img').attr('src', service_featured_icon);
                }

            }, function() {
                var service_featured_icon = $(this).find('.service_featured_icon').val();
                $(this).find('img').attr('src', service_featured_icon);
            }
        );



        /* LOGO CAROUSEL JS */

        $(".logo-carousel").owlCarousel({

            loop: true,

            autoplay: false,

            lazyLoad: true,

            dots: false,

            animateOut: 'fadeOut',

            animateIn: 'fadeIn',

            nav: true,

            navText: ["<i class='thin-icon thin-left-icon'></i>", "<i class='thin-icon thin-right-icon'></i>"],

            responsiveClass: true,

            responsive: {

                0: {



                    margin: 20,

                    items: 2

                },

                480: {



                    margin: 30,

                    items: 3

                },

                768: {



                    margin: 30,

                    items: 3

                },

                992: {



                    margin: 40,

                    items: 5

                },

                1200: {



                    margin: 40,

                    items: 5

                }

            }

        });



        $('.single-logo-item').on('click', function () {

            $('.single-logo-item').removeClass('active');

            $(this).addClass('active');

        });





        //Map Intgration

        // var latitude = parseFloat($(".googleMap3").attr("latitude"));

        // var longitude = parseFloat($(".googleMap3").attr("longitude"));



        // var centerPosition = {

        //     lat: latitude,

        //     lng: longitude

        // };

        

        // $('.googleMap3')

        // .gmap3({

        //     zoom: 15,

        //     center: centerPosition,

        //     mapTypeId: "shadeOfBlue",

        //     mapTypeControlOptions: {

        //         mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfBlue"]

        //     }

        // })

        // .styledmaptype(

        //     "shadeOfBlue",

        //     [

        //     {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":100},{"color":"#ffffff"},{"lightness":100}]},

        //     {"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#224188"},{"lightness":16}]},

        //     {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},

        //     {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#224188"},{"lightness":20}]},

        //     {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#224188"},{"lightness":17},{"weight":1.2}]},

        //     {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#224188"},{"lightness":20}]},

        //     {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#224188"},{"lightness":21}]},

        //     {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#224188"},{"lightness":17}]},

        //     {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#224188"},{"lightness":29},{"weight":0.2}]},

        //     {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#224188"},{"lightness":18}]},

        //     {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#224188"},{"lightness":16}]},

        //     {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#224188"},{"lightness":19}]},

        //     {"featureType":"water","elementType":"geometry","stylers":[{"color":"#224188"},{"lightness":17}]}

        //     ],

        //     {name: "Shades of Blue"}

        //  )

        // .marker({

        //     position: centerPosition,

        //     icon: 'http://maps.google.com/mapfiles/marker_green.png'

        // })

        // .then(function (infowindow) {

        //     infowindow.open(this.get(0));

        // });

        

        









		

	});



	jQuery(window).load(function($){



	});

})(jQuery);