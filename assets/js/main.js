$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 1000,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600:{
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });
});