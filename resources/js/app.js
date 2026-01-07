import "./bootstrap";

var bannerSwiper = new Swiper(".bannerSwiper", {
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
 
var searchedSwiper = new Swiper(".mostSearchedSwiper", {
    slidesPerView: 1.2, 
    spaceBetween: 15,
    navigation: {
        nextEl: ".next-searched",
        prevEl: ".prev-searched",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});


var latestSwiper = new Swiper(".latestCarSwiper", {
    slidesPerView: 1.2, 
    spaceBetween: 15,
    navigation: {
        nextEl: ".next-latest",
        prevEl: ".prev-latest",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});
