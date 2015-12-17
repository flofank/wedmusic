/**
 * Created by flofank on 18.08.2015.
 */
$('a[href*=#]').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - 40
    }, 1000);
    return false;
});