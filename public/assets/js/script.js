$(document).ready(function () {

    function updateDateTime() {
        const now = new Date();
        const dateEl = document.getElementById("date");
        const timeEl = document.getElementById("time");

        if (!dateEl || !timeEl) return;

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
    updateDateTime();


   // Multiple Slide Carousel
var swiperMultiple = new Swiper(".multiple-slide-carousel", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    }
});

// Cube Swiper
var swiperCube = new Swiper(".cubeswiper", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});



    gsap.registerPlugin(ScrollTrigger);

    if (document.querySelector(".hero-image") || document.querySelector(".hero-content")) {
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
    }

    if (document.querySelector("#about")) {
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
    }

    if (document.querySelector("#services")) {
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
    }

    if (document.querySelector("#team")) {
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
    }

    if (document.querySelector("#testimonials")) {
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
    }

    if (document.querySelector("#contact")) {
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
    }

 document.addEventListener('DOMContentLoaded', () => {
            const openBtn = document.getElementById('openLogin');
            const closeBtn = document.getElementById('closeLogin');
            const modal = document.getElementById('loginModal');
            const modalContent = document.getElementById('modalContent');

            // --- 1. Registration Card Entrance ---
            gsap.from("#registerCard", {
                duration: 1.2,
                opacity: 0,
                scale: 0.8,
                y: 40,
                ease: "back.out(1.7)"
            });

            // --- 2. Modal Popup Logic ---
            openBtn.addEventListener('click', () => {
                modal.style.display = 'flex';
                gsap.fromTo(modal, {opacity: 0}, {opacity: 1, duration: 0.3});
                gsap.fromTo(modalContent,
                    {scale: 0.5, y: 100, opacity: 0},
                    {scale: 1, y: 0, opacity: 1, duration: 0.6, ease: "expo.out"}
                );
            });

            closeBtn.addEventListener('click', () => {
                gsap.to(modalContent, {scale: 0.8, opacity: 0, duration: 0.3});
                gsap.to(modal, {opacity: 0, duration: 0.4, onComplete: () => {
                    modal.style.display = 'none';
                }});
            });

            // --- 3. Particle Background ---
            const canvas = document.getElementById('particle-canvas');
            const ctx = canvas.getContext('2d');
            let particles = [];

            function resize() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            window.addEventListener('resize', resize);
            resize();

            class Particle {
                constructor() {
                    this.init();
                }
                init() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 1.5;
                    this.speedX = Math.random() * 0.4 - 0.2;
                    this.speedY = Math.random() * 0.4 - 0.2;
                    this.opacity = Math.random() * 0.5;
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                        this.init();
                    }
                }
                draw() {
                    ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            for (let i = 0; i < 100; i++) particles.push(new Particle());

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach(p => {
                    p.update();
                    p.draw();
                });
                requestAnimationFrame(animate);
            }
            animate();
        });
         const openBtn = document.getElementById('openLogin');
            const closeBtn = document.getElementById('closeLogin');
            const modal = document.getElementById('loginModal');
            const modalContent = document.getElementById('modalContent');

            // --- 1. Registration Card Entrance ---
            gsap.from("#registerCard", {
                duration: 1.2,
                opacity: 0,
                scale: 0.8,
                y: 40,
                ease: "back.out(1.7)"
            });

            // --- 2. Modal Popup Logic ---
            openBtn.addEventListener('click', () => {
                modal.style.display = 'flex';
                gsap.fromTo(modal, {opacity: 0}, {opacity: 1, duration: 0.3});
                gsap.fromTo(modalContent,
                    {scale: 0.5, y: 100, opacity: 0},
                    {scale: 1, y: 0, opacity: 1, duration: 0.6, ease: "expo.out"}
                );
            });

            closeBtn.addEventListener('click', () => {
                gsap.to(modalContent, {scale: 0.8, opacity: 0, duration: 0.3});
                gsap.to(modal, {opacity: 0, duration: 0.4, onComplete: () => {
                    modal.style.display = 'none';
                }});
            });

            // --- 3. Particle Background ---
            const canvas = document.getElementById('particle-canvas');
            const ctx = canvas.getContext('2d');
            let particles = [];

            function resize() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            window.addEventListener('resize', resize);
            resize();

            class Particle {
                constructor() {
                    this.init();
                }
                init() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 1.5;
                    this.speedX = Math.random() * 0.4 - 0.2;
                    this.speedY = Math.random() * 0.4 - 0.2;
                    this.opacity = Math.random() * 0.5;
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                        this.init();
                    }
                }
                draw() {
                    ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            for (let i = 0; i < 100; i++) particles.push(new Particle());

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach(p => {
                    p.update();
                    p.draw();
                });
                requestAnimationFrame(animate);
            }
            animate();
});
