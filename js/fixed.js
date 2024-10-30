/**
 * @author - sergmoro1@ya.ru
 * @license - MIT
 *
 * Fixing the place of block of order sum.
 *
 */
$(document).ready(function($) {
    $nav = $('.fixed-div');
    if ($nav) {
        $nav.css('width', $nav.outerWidth());
        $window = $(window);
        $h = $nav.offset().top;
        $window.scroll(function () {
            if ($window.scrollTop() > $h) {
                $nav.addClass('fixed');
            } else {
                $nav.removeClass('fixed');
            }
        });
    }
});
