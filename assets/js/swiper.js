var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 5,
    // init: false,

    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        '@0.00': {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        '@0.75': {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        '@1.00': {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        '@1.50': {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    }
});