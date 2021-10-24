var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:false,
    
    animateOut: 'fadeOut',
    animateIn: 'flipInX',
    margin:30,
    stagePadding:30,
    smartSpeed:2000,
    stagePadding:0,
    mergeFit: true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})