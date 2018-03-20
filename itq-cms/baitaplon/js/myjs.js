/**
 * Created by LongVu1509 on 3/29/2016.
 */
$(document).ready(function(){

        $('img').addClass('img-responsive');
        $( '#mi-slider' ).catslider();
    $('.nav.navbar-nav.text-menu li').hover(function(){
        $(this).find('ul:first').slideDown()
    },function(){
        $(this).find('ul:first').fadeOut();
    });

});