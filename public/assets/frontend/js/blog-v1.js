
//================  BLOG MENU JS  =================//
$(".blogHeader_menu").click(function(){
    $(".blog_mobile_menu").addClass("blog_open");
})


$(".blog_cross_bar").click(function(){
    $(".blog_mobile_menu").removeClass("blog_open");
})




//================  BLOG SLIDER JS  =================//
var swiper = new Swiper(".blog_Swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },

    breakpoints: {

    1024: {
        slidesPerView: 3
    },
    768: {
        slidesPerView: 3
    },
    575: {
        slidesPerView: 2
    },
    320: {
        slidesPerView: 1
    }


    }
});



