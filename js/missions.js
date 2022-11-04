/** * @file: filename.js 
 * @author: Daniele Pagano 
 * This file control thanks to jquery the buttons show all past/present/future in the page mission.html
 * And the behavior of the page
 */
/** 
 * Jquery functions that listen for the click of the #past/#present/#future and
 * execute the function with the parameters (e).
 * .toogleClass() Specific method of JQuery add or remove the class 'show' from the element '.past'
 * .css add the specify css from the various elements
 */

//Function for the past button
var activePast=0;
(function($){
    $('#past').click(function(e){
        $('.past').toggleClass('show');
    if(activePast == 0){
        $('#past span').css("animation", "roll 1s");
        $('#past span').css("animation-fill-mode", "forwards");
        $('#past').css("background-color","#4BBEFD");
        
        activePast=1;
    }
    else{
        $('#past span').css("animation", "deroll 1s");
        $('#past').css("background-color","#0591F6");
        activePast=0;
    }
})
//Function for the present button
})(jQuery);
var activePresent=0;
(function($){
    $('#present').click(function(e){
        $('.present').toggleClass('show');
    if(activePresent == 0){
        $('#present span').css("animation", "roll 1s");
        $('#present span').css("animation-fill-mode", "forwards");
        $('#present').css("background-color","#E45B6F");
        activePresent=1;
    }
    else{
        $('#present span').css("animation", "deroll 1s");
        $('#present').css("background-color","#A8394A");
        
        activePresent=0;
    }
})
})(jQuery);
//Function for the future button
var activeFuture=0;
(function($){
    $('#future').click(function(e){
        $('.future').toggleClass('show');

    if(activeFuture == 0){
        $('#future span').css("animation", "roll 1s");
        $('#future span').css("animation-fill-mode", "forwards");
        $('#future').css("background-color","#FFB334");
        activeFuture=1;
    }
    else{
        $('#future span').css("animation", "deroll 1s");
        $('#future').css("background-color","#F6772B");
        activeFuture=0;
    }
})
})(jQuery);