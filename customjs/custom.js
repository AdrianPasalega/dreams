/**
 * Created by samuelmitra on 3/22/2016.
 */

$('.btn-nav-form').click(function(){
    $('.nav-input').toggleClass('toggle-search').focus();


});



$('.searcher').click(function(){
    $('.search-menu-input').toggleClass('toggle-search').focus();
    $('.placeholder-for-searcher').toggleClass('show-text');

});




if ($("#resource-list li").length > 5){
    $("#resource-list").removeClass('res-meta');
    $("#resource-list").addClass('res-meta-6');
}




var position, direction, previous;

$(window).scroll(function(){
  if($(this).scrollTop() > 100){ $('.back-to-top').addClass('slide-in');}else{$('.back-to-top').removeClass('slide-in');}
 /*   if( $(this).scrollTop() >= position ){
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
    }*/
    position = $(this).scrollTop();
});

$('.back-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

$(".search-menu-input").bind("change paste keyup", function() {
    $(".placeholder-for-searcher").hide();
    if($(this).val() == "") {
        $(".placeholder-for-searcher").css("display","inline-block");
    }
});

$(".search-menu-input").bind("change paste keyup", function() {
    $(".placeholder-for-searcher").hide();
    if($(this).val() == "") {
        $(".placeholder-for-searcher").css("display","inline-block");
    }
});

$("#inputEmail3").bind("change paste keyup", function() {
    $(".placeholder-for-footer").hide();
    if($(this).val() == "") {
        $(".placeholder-for-footer").css("display","inline-block");
    }
});



$(".single-stc .nav-breadcrumbs span").last().text("Comment Manager");


