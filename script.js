var swiper= new Swiper(".mySwiper", {
    slidesPerView: 1,
    centeredSlides:true,
    loop:true,
    spaceBetween: 30,
    grabCursor:true,
    navigaton: {
        nextEl:'.swiper-button-next',
        prevEl:'.swiper-button-prev'
    },
    breakpoints : {
        991: {
            slidesPerView: 3
        }
    }

});

