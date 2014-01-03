/**
 * Created with JetBrains PhpStorm.
 * User: yanikceulemans
 * Date: 16/12/13
 * Time: 00:21
 * To change this template use File | Settings | File Templates.
 */

$(function(){
    var heroes = $('.hero-container img');

    /**
     * Get hero images based on a collection of objects that have an id property
     * @param coll {Array} of jquery objects
     * @returns {Array}
     */
    function getHeroesImages(coll){
        var images = [], obj;
        for (var i = 0; i < coll.length; i++) {
            obj = coll[i];
            images.push(heroes.filter('[data-id=' + obj.id + ']').clone());
        }
        return images;
    }

    /**
     * Initialises bootstrap tooltips by means of a jquery css selector
     * @param selector {String}[Optional]
     */
    function initializeTooltips(selector){
        var tooltips;
        selector = selector || '[data-toggle=tooltip]';
        tooltips = $(selector);
        tooltips.tooltip();
    }

    heroes.click(function(){
        var me = $(this),
            clone = me.clone(),
            id = me.data('id'),
            countersContainer = $('.counters'),
            combosContainer = $('.combos'),
            selectedHeroContainer = $('.selected-hero');

        countersContainer.empty();
        combosContainer.empty();

        $.getJSON('/relatedHeroes/' + id, function(data){
            countersContainer.append(getHeroesImages(data.counters));
            combosContainer.append(getHeroesImages(data.combos));
            selectedHeroContainer.html(clone);
            initializeTooltips('.selected-hero-container [data-toggle=tooltip]');
        });
    });

    initializeTooltips();
});
