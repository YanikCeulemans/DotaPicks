/**
 * Created with JetBrains PhpStorm.
 * User: yanikceulemans
 * Date: 16/12/13
 * Time: 00:21
 * To change this template use File | Settings | File Templates.
 */

$(function(){
    var heroes = $('.hero-container img'),
        tooltips = $('[data-toggle=tooltip]');
    tooltips.tooltip();
    heroes.click(function(){
        var me = $(this),
            clone = me.clone(),
            id = me.data('id');

        $.getJSON('/counters/' + id, function(data){
            var image, obj;
            for (var i = 0; i < data.length; i++) {
                obj = data[i];
                image = heroes.filter('[data-id=' + obj.id +  ']').clone();
                $('.counters').append(image);
                image.tooltip();
            }
            $('.selected-hero').html(clone);
            clone.tooltip();
        });
    });
});
