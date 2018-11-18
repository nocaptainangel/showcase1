(function () {
    'use strict';

    var html = $('html');
    var header = $('header');
    var headerHeight = header.height();
    var scrollEase = $('.scroll-ease');

    // On window scroll
    $(document).scroll(function () {
        if (header.offset().top === 0) {
            html.addClass('top');
        } else {
            html.removeClass('top');
        }
    });

    // On link scroll ease click, animate the scrolling effect
    scrollEase.click(function (e) {
        e.preventDefault();

        var element = $(this);
        var goToId = element.attr('href');
        var goToElement = $(goToId);
        var body = $('html, body');

        body.stop().animate(
            { scrollTop: goToElement.offset().top - headerHeight },
            'slow',
            'swing'
        );
    });

})();