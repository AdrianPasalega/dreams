/**
 * Created by samuelmitra on 3/22/2016.
 */
$('.btn-nav-form').click(function(){
    $('.nav-input').toggleClass('toggle-search').focus();


});



$('.searcher').click(function(){
    $('.search-menu-input').toggleClass('toggle-search').focus();


});

function initialize() {
    var mapProp = {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:7,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);