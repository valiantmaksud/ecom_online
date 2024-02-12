
//================  RELATED PRODUCT SLIDER JS  =================//
var swiper = new Swiper(".related_swiper", {
  slidesPerView: 4,
  spaceBetween: 20,
  slidesPerGroup: 1,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,

  },
  autoplay:
  {
    delay: 9000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {

    1024: {
      slidesPerView: 4
    },
    768: {
      slidesPerView: 3
    },
    575: {
      slidesPerView: 2
    },
    320: {
      slidesPerView: 2
    }


  }

});




//================  WISHLIST SLIDER JS  =================//
var swiper = new Swiper(".wishlist_Swiper", {
  slidesPerView: 5,
  spaceBetween: 15,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },


  breakpoints: {
    1399: {
      slidesPerGroup: 4
    },

    1024: {
      slidesPerView: 4
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




//================  BANNER SLIDER JS  =================//
var swiper = new Swiper(".banner_swiper", {
  loop: true,
  effect: "fade",
  // direction:'vertical',
  slidesPerView: 1,
  slidesPerGroup: 1,
  setWrapperSize:true,
  autoplay:
  {
    delay: 2500
  },
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev"
  // }
  breakpoints: {
    1399: {
      slidesPerGroup: 1,
      spaceBetween: 40
    },

    1024: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    575: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    }
  }
});
var swiper = new Swiper(".video_swiper", {
  spaceBetween: 30,
  loop: true,
  effect: "fade",
  // direction: 'vertical',
  autoplay:
  {
    delay: 30000
  },
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev"
  // }
});


//================  GALLERY SLIDER JS  =================//
var swiper = new Swiper(".gallery_swiper", {
  slidesPerView: 4,
  spaceBetween: 20,
  slidesPerGroup: 1,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,

  },
  autoplay:
  {
    delay: 9000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {

    1024: {
      slidesPerView: 4
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





//================  CUSTOMER REVIEW SLIDER JS  =================//
var swiper = new Swiper(".review_Swiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  autoplay:
  {
    delay: 2000,
  }
});





//================  FOOTER SLIDER JS  =================//
var swiper = new Swiper(".footer_swiper", {
  slidesPerView: 7,
  slidesPerGroup: 1,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
  autoplay:
  {
    delay: 2000,
  },
  breakpoints: {
    1024: {
      slidesPerView: 7
    },
    768: {
      slidesPerView: 4
    },
    575: {
      slidesPerView: 3
    },
    320: {
      slidesPerView: 2
    }
  }


});





//================  PRODUCT DETAILS SLIDER JS  =================//
var swiper = new Swiper(".myproduct", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});


var swiper2 = new Swiper(".myproduct2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});



