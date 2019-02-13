$(document).ready(function() {
    // Transition effect for navbar
    $(window).scroll(function() {
        if($(this).scrollTop() > 64) {
            $('#navigation').addClass('navbar-solid');
            $('#navigation').removeClass('navbar-transparent');
        } else {
            $('#navigation').removeClass('navbar-solid');
            $('#navigation').addClass('navbar-transparent');
        }
    });
});
