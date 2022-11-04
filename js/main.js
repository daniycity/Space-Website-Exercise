/** * @file: filename.js 
 * @author: Daniele Pagano, Oliver Terzo, Matteo Fasano 
 * This file control thanks to jquery the navbar allow us to collapse it, make an overlay and change
 * toggle aspect
 */
/** 
 * Jquery function that listen for the click of the nav-toggle or the overlay and
 * execute the function with the parameters (e).
 * .preventDefault() The default action that belong to the event (e) will not occur
 * .toogleClass() Specific method of JQuery add or remove the class 'active' from the elements '.nav-toggle' ecc.. depending
 * on the class's presence
 */
(function($){
    $('.nav-toggle').click(function(e){
        e.preventDefault();
        $('.nav-toggle').toggleClass('active');
        $('.nav-menu').toggleClass('active');
        $('.nav-overlay').toggleClass('active');
    })
    $('.nav-overlay').click(function(e){
        e.preventDefault();
        $('.nav-toggle').toggleClass('active');
        $('.nav-menu').toggleClass('active');
        $('.nav-overlay').toggleClass('active');
    })
})(jQuery);
