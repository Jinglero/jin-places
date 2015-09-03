/*var maplace = new Maplace({
    map_div: '#gmap-mixed',
    controls_div: '#controls-mixed',
    controls_type: 'list',
    controls_on_map: false
});

jQuery('#tabs a').click(function(e) {
    e.preventDefault();
    var index = jQuery(this).attr('data-load');
    showGroup(index);
});

function showGroup(index) {
    var el = jQuery('#g'+index);
    jQuery('#tabs li').removeClass('active');
    jQuery(el).parent().addClass('active');
    jQuery.getJSON('http://localhost/cortinas_industriales/ta/wp/wp-content/plugins/jin-places/static/data.json', { type: index }, function(data) {
        //loads data into the map
        maplace.Load({
            locations: data.locations,
            view_all_text: data.title,
            type: data.type,
            force_generate_controls: true
        });
    });
}

showGroup(0);*/
jQuery(function(){
var maplace = new Maplace(); 
maplace.Load(); 
});