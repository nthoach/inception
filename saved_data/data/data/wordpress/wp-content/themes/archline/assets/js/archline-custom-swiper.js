document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
  });
  const swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 0,
    slidesPerView: 1,
    loop: true,
    thumbs: {
      swiper: swiper,
    },
    effect: "fade",   
    fadeEffect: {
        crossFade: true, 
    },
  });
});



