/**
 * Created by samuelmitra on 3/22/2016.
 */

console.log('a');
$('.btn-nav-form').click(function(){
    $('.nav-input').toggleClass('toggle-search').focus();


});



$('.searcher').click(function(){
    $('.search-menu-input').toggleClass('toggle-search').focus();


});




if ($("#resource-list li").length > 5){
    $("#resource-list").removeClass('res-meta');
    $("#resource-list").addClass('res-meta-6');
}




var position, direction, previous;

$(window).scroll(function(){
  if($(this).scrollTop() > 100){ $('.back-to-top').addClass('display');}else{$('.back-to-top').removeClass('display');}
    if( $(this).scrollTop() >= position ){
        direction = 'down';
        if(direction !== previous){
            $('.back-to-top').addClass('slide-out');

            previous = direction;
        }
    } else {
        direction = 'up';
        if(direction !== previous){
            $('.back-to-top').removeClass('slide-out');

            previous = direction;
        }
    }
    position = $(this).scrollTop();
});




