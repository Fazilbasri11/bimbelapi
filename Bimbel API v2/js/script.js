$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:false,
        margin:15,
        padding: 10,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
    
            },
            600:{
                items:3,

            },
            1000:{
                items:4,
            }
        }
    })
})