$(document).ready(function() {

    $('.errorMarker').each(function(){

        $(this).data('title', $(this).attr('title'));
        $(this).removeAttr('title');

    });

    $('.errorMarker').mouseover(function() {

        $('.errorMarker').next('.tooltip').remove();

        // create the tooltip
        if($(this).data('title') != ""){
            $(this).after('<span class="tooltip">' + $(this).data('title') + '</span>');
        }

        var left = $(this).position().left + $(this).width() + 4;
        var top = $(this).position().top +18;
        $(this).next().css('left',left);
        $(this).next().css('top',top);

    });

    $('.errorMarker').click(function(){

        $(this).mouseover();

        $(this).next().animate({opacity: 0.9},{duration: 4000, complete: function(){
            $(this).fadeOut(1000);
        }});

    });

    $('.errorMarker').mouseout(function(){

        $(this).next('.tooltip').remove();

    });

});
