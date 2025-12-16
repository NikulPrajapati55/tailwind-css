$(document).ready(function () {
    function updateDateTime() {
        const now = new Date();

        const dateEl = document.getElementById("date");
        const timeEl = document.getElementById("time");

        if (!dateEl || !timeEl) return; // <-- prevents error

        dateEl.textContent = now.toLocaleDateString(undefined, {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        });

        timeEl.textContent = now.toLocaleTimeString(undefined, {
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
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
            },
        },
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
        },
    });

    // 👉 Animate slides
    function animateSingleSlide(activeIndex) {
        const slides = document.querySelectorAll(
            ".multiple-slide-carousel .swiper-slide"
        );

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
    gsap.registerPlugin(ScrollTrigger);

    // 1. Hero Animation
    gsap.from(".hero-content > *", {
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power3.out",
        delay: 0.2,
    });

    gsap.from(".hero-image", {
        x: 50,
        opacity: 0,
        duration: 1.2,
        ease: "power3.out",
        delay: 0.5,
    });

    // 2. About Section Animation
    gsap.from(".about-img-wrapper", {
        scrollTrigger: {
            trigger: "#about",
            start: "top 80%",
        },
        x: -50,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
    });

    gsap.from(".about-content > *", {
        scrollTrigger: {
            trigger: "#about",
            start: "top 75%",
        },
        y: 30,
        opacity: 0,
        duration: 0.8,
        stagger: 0.1,
        ease: "power3.out",
    });

    // 3. Services Cards (Staggered)
    gsap.from(".service-card", {
        scrollTrigger: {
            trigger: "#services",
            start: "top 70%",
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: "back.out(1.7)",
    });

    // 4. Team Members (Staggered)
    gsap.from(".team-card", {
        scrollTrigger: {
            trigger: "#team",
            start: "top 75%",
        },
        scale: 0.9,
        opacity: 0,
        duration: 0.6,
        stagger: 0.15,
        ease: "power2.out",
    });

    // 5. Testimonials
    gsap.from(".testimonial-card", {
        scrollTrigger: {
            trigger: "#testimonials",
            start: "top 80%",
        },
        x: 30,
        opacity: 0,
        duration: 1,
        stagger: 0.3,
        ease: "power3.out",
    });

    // 6. Contact Form Reveal
    gsap.from("#contact form", {
        scrollTrigger: {
            trigger: "#contact",
            start: "top 70%",
        },
        y: 40,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out",
    });
});
