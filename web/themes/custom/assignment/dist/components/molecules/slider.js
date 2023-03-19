"use strict";
(($) => {
    $(function ($) {
        function slickCarousal() {
            $('.cards-view-container').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true,
                mobileFirst: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false,
                        },
                    },
                ],
            });
        }
        slickCarousal();
        $('.quicktabs-loaded').click(function () {
            $('.cards-view-container').slick('unslick');
            slickCarousal();
            $('.cards-view-container').hide().fadeIn();
        });
    });
})(jQuery);

//# sourceMappingURL=../../maps/molecules/slider.js.map
