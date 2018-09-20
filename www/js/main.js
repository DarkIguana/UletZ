/* 
 * мобильное меню, выползание блока
 */
$(function () {
    $(".menuToggle").on('click', function () {

        $('.menu').slideToggle(500, function () {
            if ($(this).css('display') === 'none') {
                $(this).removeAttr('style');
            }
        });
    });
});
/* 
 * мобильное меню, анимация
 */

$(function () {
    function init() {
        $('[data-behaviour="toggle-menu-icon"]').on('click', toggleMenuIcon);
    }
    ;

    function toggleMenuIcon() {
        $(this).toggleClass('menu-icon--open');
    }
    ;

    init()
});
