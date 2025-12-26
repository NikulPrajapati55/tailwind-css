$(document).ready(function () {
    const canvas = document.getElementById("bg-canvas");
    const ctx = canvas.getContext("2d");

    let w,
        h,
        particles = [];

    function resize() {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener("resize", resize);

    class Particle {
        constructor() {
            this.x = Math.random() * w;
            this.y = Math.random() * h;
            this.radius = Math.random() * 2 + 1;
            this.speedX = (Math.random() - 0.5) * 0.6;
            this.speedY = (Math.random() - 0.5) * 0.6;
        }

        draw() {
            ctx.beginPath();
            ctx.fillStyle = "rgba(99, 102, 241, .7)"; // indigo glow
            ctx.shadowBlur = 20;
            ctx.shadowColor = "#818cf8";
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fill();
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x < 0 || this.x > w) this.speedX *= -1;
            if (this.y < 0 || this.y > h) this.speedY *= -1;

            this.draw();
        }
    }

    function init() {
        particles = [];
        const amount = Math.floor((w * h) / 15000); // auto scales to screen size
        for (let i = 0; i < amount; i++) particles.push(new Particle());
    }
    init();

    function animate() {
        ctx.clearRect(0, 0, w, h);

        // soft glassy fade motion
        ctx.fillStyle = "rgba(255,255,255,.08)";
        ctx.fillRect(0, 0, w, h);

        particles.forEach((p) => p.update());
        requestAnimationFrame(animate);
    }
    animate();

    gsap.registerPlugin(ScrollTrigger);

    /*******************************************
     * RUN ANIMATIONS ONCE AFTER PAGE LOAD
     *******************************************/
    window.addEventListener("load", () => {
        gsap.set(".reveal", { autoAlpha: 1 });

        /*******************************************
         * RESPONSIVE ANIMATIONS
         *******************************************/
        ScrollTrigger.matchMedia({
            /* ───────────────────────────────
           DESKTOP (1024+)
        ─────────────────────────────── */
            "(min-width: 1024px)": function () {
                /* HERO */
                const heroTl = gsap.timeline({
                    defaults: { ease: "expo.out", duration: 1.2 },
                });

                heroTl
                    .from("#circle-1, #circle-2", {
                        scale: 0.5,
                        opacity: 0,
                        duration: 2,
                        stagger: 0.3,
                    })
                    .from(
                        ".hero-stagger",
                        {
                            y: 60,
                            opacity: 0,
                            stagger: 0.15,
                        },
                        "-=1.2"
                    )
                    .from(
                        "#image-bg",
                        {
                            scale: 0.8,
                            rotation: 10,
                            opacity: 0,
                            ease: "back.out(1.4)",
                        },
                        "-=1"
                    )
                    .from("#hero-image", { x: 100, opacity: 0 }, "-=1")
                    .from(
                        "#badge",
                        {
                            scale: 0,
                            opacity: 0,
                            ease: "back.out(2)",
                        },
                        "-=0.4"
                    )
                    .add(() =>
                        document
                            .getElementById("hero-image")
                            .classList.add("animate-float")
                    );

                /* ABOUT */
                gsap.timeline({
                    scrollTrigger: {
                        trigger: "#about-section",
                        start: "top 75%",
                    },
                })
                    .to("#about-bg-blob", {
                        opacity: 0.6,
                        scale: 1.2,
                        duration: 2,
                    })
                    .from(
                        ".about-stagger",
                        {
                            y: 50,
                            opacity: 0,
                            stagger: 0.2,
                        },
                        "-=1.2"
                    )
                    .from(
                        "#about-img-main",
                        {
                            scale: 0.88,
                            opacity: 0,
                            ease: "back.out(1.4)",
                        },
                        "-=1"
                    )
                    .from(
                        "#about-img-sub",
                        { x: 40, y: -40, opacity: 0 },
                        "-=0.6"
                    );

                /* GLASS SERVICES */
                const glassTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#glass-services",
                        start: "top 75%",
                    },
                    defaults: { ease: "expo.out", duration: 1.3 },
                });

                glassTl
                    .to("#glass-blob-1, #glass-blob-2", {
                        opacity: 0.6,
                        scale: 1.25,
                        duration: 2,
                    })
                    .from(
                        ".glass-stagger",
                        {
                            y: 40,
                            opacity: 0,
                            stagger: 0.18,
                        },
                        "-=1.4"
                    )
                    .from(
                        ".glass-card",
                        {
                            y: 50,
                            opacity: 0,
                            stagger: 0.18,
                            ease: "back.out(1.2)",
                        },
                        "-=1"
                    );

                /* DEV PROFILE */
                gsap.from(".dev-photo", {
                    opacity: 0,
                    y: 70,
                    scale: 0.94,
                    duration: 1.2,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: "#dev-profile",
                        start: "top 70%",
                    },
                });

                gsap.from(".dev-badge", {
                    opacity: 0,
                    y: 40,
                    duration: 0.9,
                    scrollTrigger: {
                        trigger: "#dev-profile",
                        start: "top 65%",
                    },
                });

                gsap.from("#dev-profile .space-y-6 > *", {
                    opacity: 0,
                    y: 35,
                    stagger: 0.16,
                    duration: 0.9,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#dev-profile",
                        start: "top 70%",
                    },
                });
            },

            /* ───────────────────────────────
           MOBILE / TABLET (≤ 1023px)
           NEW — separate lighter animations
        ─────────────────────────────── */
            /* ───────────────────────────────
   MOBILE / TABLET (≤ 1023px)
   opacity same + new motion
─────────────────────────────── */
            "(max-width: 1023px)": function () {
                /************************************
                 * HERO — opacity + scale + lift
                 ************************************/
                const mobileHero = gsap.timeline({
                    defaults: { ease: "power2.out", duration: 0.7 },
                });

                mobileHero
                    .from(".hero-stagger", {
                        opacity: 0,
                        y: 26,
                        scale: 0.98,
                        stagger: 0.12,
                    })
                    .from(
                        "#hero-image",
                        {
                            opacity: 0,
                            y: 34,
                            scale: 0.94,
                            rotate: 2,
                        },
                        "-=0.35"
                    )
                    .from("#badge", {
                        opacity: 0,
                        y: 18,
                        scale: 0.92,
                    });

                /************************************
                 * GENERIC REVEAL — opacity + lift
                 ************************************/
                gsap.utils.toArray(".reveal").forEach((el) => {
                    gsap.from(el, {
                        opacity: 0,
                        y: 24,
                        scale: 0.98,
                        duration: 0.55,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: el,
                            start: "top 92%",
                            toggleActions: "play none none none",
                        },
                    });
                });

                /************************************
                 * GLASS CARDS — opacity + float
                 ************************************/
                gsap.from(".glass-card", {
                    opacity: 0,
                    y: 30,
                    scale: 0.97,
                    duration: 0.6,
                    stagger: 0.14,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#glass-services",
                        start: "top 90%",
                    },
                });

                /************************************
                 * DEV PROFILE — soft parallax
                 ************************************/
                gsap.from(".dev-photo", {
                    opacity: 0,
                    y: 46,
                    scale: 0.95,
                    duration: 0.7,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#dev-profile",
                        start: "top 90%",
                    },
                });

                gsap.from("#dev-profile .space-y-6 > *", {
                    opacity: 0,
                    y: 22,
                    scale: 0.99,
                    stagger: 0.12,
                    duration: 0.6,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#dev-profile",
                        start: "top 94%",
                    },
                });
            },
        });
        /* Why section stagger rise-in */
        gsap.from(".why-stagger", {
            opacity: 0,
            y: 40,
            duration: 1,
            ease: "power2.out",

            scrollTrigger: {
                trigger: "#why-choose",
                start: "top 85%",
            },
        });

        /* Why Cards – soft lift */
        gsap.from(".why-card", {
            opacity: 0,
            y: 50,
            duration: 1.2,
            ease: "power3.out",

            scrollTrigger: {
                trigger: "#why-choose",
                start: "top 80%",
            },
        });

        gsap.from(".showcase-card", {
            opacity: 0,
            y: 70,
            duration: 1.3,
            ease: "power3.out",

            scrollTrigger: {
                trigger: "#showcase-section",
                start: "top 80%",
            },
        });

        gsap.to(".showcase-card", {
            y: -10,
            duration: 3,
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true,
            delay: 1.2,
        });
        gsap.from(".contact-stagger", {
            opacity: 0,
            y: 40,
            duration: 1.1,
            ease: "power2.out",
            stagger: 0.2,
            scrollTrigger: {
                trigger: "#contact-section",
                start: "top 80%",
            },
        });
        gsap.from("#site-footer", {
            opacity: 0,
            y: 40,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#site-footer",
                start: "top 85%",
            },
        });
    });
});
