/**
 * Created with JetBrains PhpStorm.
 * User: yanikceulemans
 * Date: 16/12/13
 * Time: 00:21
 * To change this template use File | Settings | File Templates.
 */

$(function(){
    var heroes = $('img[data-toggle=tooltip]'),
        selectedHero = $('.selected-hero');
    heroes.tooltip();
    heroes.click(function(){
        var clone = $(this).clone();
        selectedHero.html(clone);
        clone.tooltip();


    });
});
