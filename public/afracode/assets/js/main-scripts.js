(function ($) {
    "use strict";

    var fn = {
        // Launch Functions
        Launch: function () {
            fn.Test();
            fn.Sticky();
            fn.Sidenav();
            fn.Carousel();
        },
        Test: function () {
            console.log("Worked!");
        },
        Sticky: function () {
            var header = $(".app-header.fixed");
            $(window).scroll(function () {
                if ($(this).scrollTop() > header.height()) {
                    header.addClass("sticky");
                } else {
                    header.removeClass("sticky");
                }
            });
        },
        Sidenav: function () {
            var button = $(".button-display-sidenav");
            var sidenav = $(".app-sidenav");

            button.on("click", function (e) {
                e.preventDefault();
                sidenav.addClass("active");
            });
            sidenav.on("click", ".button-close-sidenav, .sidenav-close", function () {
                sidenav.removeClass("active");
            });
        },
        Carousel: function () {
            var mySwiper = new Swiper(".el-swiper-blog-15", {
                loop: false,
                navigation: {
                    nextEl: ".el-slider-next",
                    prevEl: ".el-slider-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1.2,
                        spaceBetween: 12,
                    },
                    576: {
                        slidesPerView: 1.5,
                        spaceBetween: 12,
                    },
                    768: {
                        slidesPerView: 1.8,
                        spaceBetween: 18,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 18,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 18,
                    },
                },
            });
            var mySwiper = new Swiper(".el-swiper-portfolio-15", {
                loop: false,
                navigation: {
                    nextEl: ".el-slider-next",
                    prevEl: ".el-slider-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1.2,
                        spaceBetween: 12,
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 12,
                    },
                    768: {
                        slidesPerView: 2.3,
                        spaceBetween: 18,
                    },
                    992: {
                        slidesPerView: 3.3,
                        spaceBetween: 18,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 18,
                    },
                },
            });
            var mySwiper = new Swiper(".swiper-testimonial", {
                loop: true,
                spaceBetween: 30,
                breakpoints: {
                    0: {
                        slidesPerView: 1.1,
                        spaceBetween: 12,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 45,
                    },
                },
            });
            var swiper = new Swiper(".el-swiper-mousewheel", {
                direction: "vertical",
                slidesPerView: 1,
                fade: true,
                spaceBetween: 0,
                mousewheel: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        },
    };

    // Windows.On.Load
    $(window).on("load", function () {});

    // Document.Ready
    $(document).ready(function () {
        fn.Launch();
    });
})(jQuery);
