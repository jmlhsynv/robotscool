$(window).scroll(function(){
    if ($(this).scrollTop() > 10) {
       $('.navbar').addClass('light-bg');
    } else {
       $('.navbar').removeClass('light-bg');
    }
});

$(document).ready(function(){

    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    	nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
        dots: false,
        pauseOnHover: false,
        responsive: [ {
            breakpoint: 600,
            settings: {
                slidesToShow: 1
            }
        }]
    });
      $('.partners-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
    $('.aboutus').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-long-arrow-alt-left"></i></button>',
    	nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-long-arrow-alt-right"></i></button>',
        dots: false,
        pauseOnHover: false,
        responsive: [ {
            breakpoint: 600,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});