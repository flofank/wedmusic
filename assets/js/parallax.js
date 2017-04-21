/**
 * Created by flofa_000 on 10.02.2017.
 */
var parallaxIntensity = 80;
var maxDiff = $(window).height();

function calcParallax() {
    $(".image_spacer").each(function() {
        var perc = ($(this).position().top - $(window).scrollTop()) / maxDiff;
        var offset = perc * parallaxIntensity;
        $(this).css("background-position-y", offset);
    });
}

$(window).scroll(calcParallax);
calcParallax();