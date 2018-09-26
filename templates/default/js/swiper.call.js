$(function(){

	// KV-01
	var mySwiperKv = new Swiper('.lw-swiper-container-kv', {
        pagination: '.lw-paginationkv',
        paginationClickable: '.lw-paginationkv',
        nextButton: '.lw-next',
        prevButton: '.lw-prev',
        spaceBetween: 0,
        loop:true,
        simulateTouch:false,
        autoplay: 5000,
        autoplayDisableOnInteraction:false,
        grabCursor:false
    });


	// 商家推荐
    var mySwiperJoin = new Swiper('.lw-swiper-container-join', {
        spaceBetween: 0,
        loop:true,
        simulateTouch:false,
        nextButton: '.lw-next-join',
        prevButton: '.lw-prev-join'
    });	

    $(".lw-paginationkv").css("margin-left",-($(".lw-paginationkv").width()/2));
});