var swiper = new Swiper('.slider', {
    loop: true,
    // autoHeight: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true,
});
galleryTop.controller.control = galleryThumbs;
galleryThumbs.controller.control = galleryTop;

document.querySelectorAll('.message-phone').forEach(phone => {
    phone.maskItWith('+7 (NNN) NNN-NN-NN');
});
