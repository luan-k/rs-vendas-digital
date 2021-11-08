import $ from "jquery";
$(document).ready(function () {
  $(".promotionalslider_wrapper").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay: true,
    dots: false,
    arrows: true,
    prevArrow:
      '<button class="slide-arrow slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow:
      '<button class="slide-arrow slick-next"><i class="fas fa-chevron-right"></i></button>',
    pauseOnHover: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
/* 
$(".logo-carousel").slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 1000,
  arrows: true,
  prevArrow:
    '<button class="slide-arrow slick-prev"><i class="fas fa-chevron-left"></i></button>',
  nextArrow:
    '<button class="slide-arrow slick-next"><i class="fas fa-chevron-right"></i></button>',
  dots: false,
  pauseOnHover: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});
 */
