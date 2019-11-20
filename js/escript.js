
var nav_footer = $('.navbar-footer');
var viewportWidth = $(window).width();
var title = $('.title');

$(window).resize(function () {
    if (viewportWidth > 720) {
        $(nav_footer).removeClass("mt-2").addClass("mt-5");
        $(title).removeClass("h2").addClass("display-4");
    }
    if (viewportWidth < 720){
        $(nav_footer).removeClass("mt-5").addClass("mt-2");
        $(title).removeClass("display-4").addClass("h2");
    }
});



$(document).ready(function (){
    if(viewportWidth > 720) {
        $(nav_footer).removeClass("mt-2").addClass("mt-5");
        $(title).removeClass("h2").addClass("display-4");
    } else {
        $(nav_footer).removeClass("mt-5").addClass("mt-2");
        $(title).removeClass("display-4").addClass("h2");
    }

    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });
});
