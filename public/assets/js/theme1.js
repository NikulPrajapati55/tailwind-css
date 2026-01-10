$(document).ready(function () {
    /*************************************************
     * CANVAS BACKGROUND (SAFE)
     *************************************************/
    const canvas = document.getElementById("bg-canvas");

    if (canvas) {
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
                ctx.fillStyle = "rgba(99, 102, 241, .7)";
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
            const amount = Math.floor((w * h) / 15000);
            for (let i = 0; i < amount; i++) particles.push(new Particle());
        }
        init();

        function animate() {
            ctx.clearRect(0, 0, w, h);
            ctx.fillStyle = "rgba(255,255,255,.08)";
            ctx.fillRect(0, 0, w, h);
            particles.forEach((p) => p.update());
            requestAnimationFrame(animate);
        }
        animate();
    }

    /*************************************************
     * GSAP + SCROLLTRIGGER (SAFE)
     *************************************************/
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // Utility helper
    function exists(selector) {
        return document.querySelector(selector);
    }

    window.addEventListener("load", () => {
        if ($(".reveal").length) {
            gsap.set(".reveal", { autoAlpha: 1 });
        }

        ScrollTrigger.matchMedia({
            /**************** DESKTOP ****************/
            "(min-width: 1024px)": function () {
                /* HERO */
                if (exists("#hero-image")) {
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
                        .add(() => {
                            const img = document.getElementById("hero-image");
                            if (img) img.classList.add("animate-float");
                        });
                }

                /* ABOUT */
                if (exists("#about-section")) {
                    gsap.timeline({
                        scrollTrigger: {
                            trigger: "#about-section",
                            start: "top 75%",
                        },
                    })
                        .from(".about-stagger", {
                            y: 50,
                            opacity: 0,
                            stagger: 0.2,
                        })
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
                            {
                                x: 40,
                                y: -40,
                                opacity: 0,
                            },
                            "-=0.6"
                        );
                }

                /* GLASS SERVICES */
                if (exists("#glass-services")) {
                    gsap.timeline({
                        scrollTrigger: {
                            trigger: "#glass-services",
                            start: "top 75%",
                        },
                        defaults: { ease: "expo.out", duration: 1.3 },
                    })
                        .from(".glass-stagger", {
                            y: 40,
                            opacity: 0,
                            stagger: 0.18,
                        })
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
                }

                /* DEV PROFILE */
                if (exists("#dev-profile")) {
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
                }
            },

            /**************** MOBILE ****************/
            "(max-width: 1023px)": function () {
                if (exists("#hero-image")) {
                    gsap.from(".hero-stagger", {
                        opacity: 0,
                        y: 26,
                        scale: 0.98,
                        stagger: 0.12,
                    });

                    gsap.from("#hero-image", {
                        opacity: 0,
                        y: 34,
                        scale: 0.94,
                        rotate: 2,
                    });

                    gsap.from("#badge", {
                        opacity: 0,
                        y: 18,
                        scale: 0.92,
                    });
                }

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
                        },
                    });
                });

                if (exists("#glass-services")) {
                    gsap.from(".glass-card", {
                        opacity: 0,
                        y: 30,
                        scale: 0.97,
                        duration: 0.6,
                        stagger: 0.14,
                        scrollTrigger: {
                            trigger: "#glass-services",
                            start: "top 90%",
                        },
                    });
                }
            },
        });

        /* WHY SECTION */
        if (exists("#why-choose")) {
            gsap.from(".why-stagger", {
                opacity: 0,
                y: 40,
                duration: 1,
                scrollTrigger: {
                    trigger: "#why-choose",
                    start: "top 85%",
                },
            });

            gsap.from(".why-card", {
                opacity: 0,
                y: 50,
                duration: 1.2,
                scrollTrigger: {
                    trigger: "#why-choose",
                    start: "top 80%",
                },
            });
        }

        /* SHOWCASE */
        if (exists("#showcase-section")) {
            gsap.from(".showcase-card", {
                opacity: 0,
                y: 70,
                duration: 1.3,
                scrollTrigger: {
                    trigger: "#showcase-section",
                    start: "top 80%",
                },
            });

            gsap.to(".showcase-card", {
                y: -10,
                duration: 3,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: 1.2,
            });
        }

        /* CONTACT */
        if (exists("#contact-section")) {
            gsap.from(".contact-stagger", {
                opacity: 0,
                y: 40,
                duration: 1.1,
                stagger: 0.2,
                scrollTrigger: {
                    trigger: "#contact-section",
                    start: "top 80%",
                },
            });
        }

        /* FOOTER */
        if (exists("#site-footer")) {
            gsap.from("#site-footer", {
                opacity: 0,
                y: 40,
                duration: 1,
                scrollTrigger: {
                    trigger: "#site-footer",
                    start: "top 85%",
                },
            });
        }
    });
    /* =====================================
 * THEME2 – ABOUT SECTION ANIMATION
 * ===================================== */
if (typeof gsap !== "undefined") {

    gsap.from(".theme2-about-stagger", {
        opacity: 0,
        y: 40,
        duration: 1.2,
        stagger: 0.2,
        ease: "power3.out",
        scrollTrigger: {
            trigger: "#theme2-about",
            start: "top 80%"
        }
    });

    gsap.from(".theme2-about-card", {
        opacity: 0,
        y: 50,
        duration: 1.3,
        stagger: 0.15,
        ease: "power3.out",
        scrollTrigger: {
            trigger: "#theme2-about",
            start: "top 75%"
        }
    });
}


});
