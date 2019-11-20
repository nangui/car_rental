(function ($) {
    $(document).ready(function () {
        $('#card-container').lightSlider({
            item: 3,
            loop: false,
            slideMove: 1,
            slideWidth: 360,
            controls: false,
            freeMove: true,
            pager: false,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 600,
            responsive : [
                {
                    breakpoint: 800,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:3,
                        slideMove:1
                    }
                }
            ]
        });
    })
})(jQuery);
