$(document).ready(function () {

   function updateDateTime() {
    const now = new Date();

    const dateEl = document.getElementById('date');
    const timeEl = document.getElementById('time');

    if (!dateEl || !timeEl) return;  // <-- prevents error

    dateEl.textContent = now.toLocaleDateString(undefined, {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    });

    timeEl.textContent = now.toLocaleTimeString(undefined, {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    });
}
 // Swiper Init
var swiper = new Swiper(".multiple-slide-carousel", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        1200: { slidesPerView: 3, spaceBetween: 30 },
        1028: { slidesPerView: 2, spaceBetween: 20 },
        990: { slidesPerView: 1, spaceBetween: 0 },
    },

    on: {
        init() {
            animateSingleSlide(this.activeIndex);
        },
        slideChangeTransitionStart() {
            animateSingleSlide(this.activeIndex);
        }
    }
});
// 👉 First Swiper (multiple-slide-carousel)
var multiSwiper = new Swiper(".multiple-slide-carousel", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        1200: { slidesPerView: 3, spaceBetween: 30 },
        1028: { slidesPerView: 2, spaceBetween: 20 },
        990: { slidesPerView: 1, spaceBetween: 0 },
    },

    on: {
        init: function () {
            animateSingleSlide(this.activeIndex);
        },
        slideChange: function () {
            animateSingleSlide(this.activeIndex);
        },
    }
});


// 👉 Animate slides
function animateSingleSlide(activeIndex) {
    const slides = document.querySelectorAll(".multiple-slide-carousel .swiper-slide");

    slides.forEach((slide, index) => {
        if (index === activeIndex || index === activeIndex + 1) {
            gsap.fromTo(
                slide,
                { opacity: 0, y: 30, scale: 0.92 },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.6,
                    ease: "power2.out",
                }
            );
        }
    });
}


// 👉 Second Swiper (Cube Effect)
var cubeSwiper = new Swiper(".cubeswiper", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    speed: 1000,
    cubeEffect: {
        shadow: false,
        slideShadows: true,
        shadowOffset: 10,
        shadowScale: 0.94,
    },
    autoplay: {
        delay: 2600,
        pauseOnMouseEnter: true,
    },
});


});
