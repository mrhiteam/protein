$(document).ready(function(){

    $('.tabs__link').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('.tabs__link').removeClass('current');
        $('.tabs__content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })
});