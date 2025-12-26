$(document).ready(function () {

     const menuBtn = document.getElementById("menuBtn");
  const closeMenu = document.getElementById("closeMenu");
  const mobileMenu = document.getElementById("mobileMenu");

  menuBtn.onclick = () => mobileMenu.classList.remove("translate-x-full");
  closeMenu.onclick = () => mobileMenu.classList.add("translate-x-full");
    // 1. DATE & TIME
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
    setInterval(updateDateTime, 1000); // Added interval so it actually updates
    updateDateTime();

    // 2. SWIPER CAROUSELS
    if (document.querySelector(".multiple-slide-carousel")) {
        new Swiper(".multiple-slide-carousel", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    }

    if (document.querySelector(".cubeswiper")) {
        new Swiper(".cubeswiper", {
            effect: "cube",
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            autoplay: { delay: 2500, disableOnInteraction: false },
        });
    }

    // 3. GSAP ANIMATIONS
    gsap.registerPlugin(ScrollTrigger);

    // Hero, About, Services, Team, etc. (Keeping your logic here)
    // ... [Your GSAP ScrollTrigger code remains the same] ...

    // 4. LOGIN MODAL LOGIC
    const openLogin = document.getElementById("openLogin");
    const closeLogin = document.getElementById("closeLogin");
    const loginModal = document.getElementById("loginModal");
    const loginContent = document.getElementById("modalContent");

    if (openLogin && loginModal) {
        openLogin.addEventListener("click", () => {
            loginModal.style.display = "flex";
            gsap.fromTo(
                loginModal,
                { opacity: 0 },
                { opacity: 1, duration: 0.3 }
            );
            gsap.fromTo(
                loginContent,
                { scale: 0.5, y: 100, opacity: 0 },
                { scale: 1, y: 0, opacity: 1, duration: 0.6, ease: "expo.out" }
            );
        });

        closeLogin.addEventListener("click", () => {
            gsap.to(loginContent, { scale: 0.8, opacity: 0, duration: 0.3 });
            gsap.to(loginModal, {
                opacity: 0,
                duration: 0.4,
                onComplete: () => {
                    loginModal.style.display = "none";
                },
            });
        });
    }

    // 5. CONTACT POPUP (Modal 1)
    const openBtn1 = document.getElementById("openModal1");
    const closeBtn1 = document.getElementById("closeModal1");
    const overlay1 = document.getElementById("modalOverlay1");
    const card1 = document.getElementById("modalCard1");
    const canvas1 = document.getElementById("modalCanvas1");

    if (openBtn1 && canvas1) {
        const ctx1 = canvas1.getContext("2d");
        let contactParticles = []; // Renamed to avoid clash
        let animationId1;

        class ContactParticle {
            // Renamed class
            constructor() {
                this.init();
            }
            init() {
                this.x = Math.random() * canvas1.width;
                this.y = Math.random() * canvas1.height;
                this.size = Math.random() * 1.5 + 0.5;
                this.speedX = Math.random() * 0.4 - 0.2;
                this.speedY = Math.random() * 0.4 - 0.2;
                this.alpha = Math.random() * 0.5 + 0.1;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x > canvas1.width || this.x < 0) this.speedX *= -1;
                if (this.y > canvas1.height || this.y < 0) this.speedY *= -1;
            }
            draw() {
                ctx1.fillStyle = `rgba(196, 126, 109, ${this.alpha})`;
                ctx1.beginPath();
                ctx1.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx1.fill();
            }
        }

        function initCanvas1() {
            canvas1.width = window.innerWidth;
            canvas1.height = window.innerHeight;
            contactParticles = [];
            for (let i = 0; i < 100; i++)
                contactParticles.push(new ContactParticle());
        }

        function animate1() {
            ctx1.clearRect(0, 0, canvas1.width, canvas1.height);
            contactParticles.forEach((p, index) => {
                p.update();
                p.draw();
                for (let j = index; j < contactParticles.length; j++) {
                    const dx = p.x - contactParticles[j].x;
                    const dy = p.y - contactParticles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 120) {
                        ctx1.strokeStyle = `rgba(196, 126, 109, ${
                            0.15 - dist / 800
                        })`;
                        ctx1.lineWidth = 0.5;
                        ctx1.beginPath();
                        ctx1.moveTo(p.x, p.y);
                        ctx1.lineTo(
                            contactParticles[j].x,
                            contactParticles[j].y
                        );
                        ctx1.stroke();
                    }
                }
            });
            animationId1 = requestAnimationFrame(animate1);
        }

        function toggleModal1(show) {
            if (show) {
                overlay1.classList.remove("hidden");
                initCanvas1();
                animate1();
                setTimeout(() => {
                    overlay1.classList.add("opacity-100");
                    card1.classList.replace("translate-y-10", "translate-y-0");
                    card1.classList.replace("opacity-0", "opacity-100");
                }, 20);
            } else {
                overlay1.classList.remove("opacity-100");
                card1.classList.replace("translate-y-0", "translate-y-10");
                card1.classList.replace("opacity-100", "opacity-0");
                setTimeout(() => {
                    overlay1.classList.add("hidden");
                    cancelAnimationFrame(animationId1);
                }, 500);
            }
        }

        openBtn1.addEventListener("click", () => toggleModal1(true));
        closeBtn1.addEventListener("click", () => toggleModal1(false));
        overlay1.addEventListener("click", (e) => {
            if (e.target === overlay1) toggleModal1(false);
        });
        window.addEventListener("resize", initCanvas1);
    }

    // --- Modal 2 Variables ---
    const openBtn2 = document.getElementById("openModal2");
    const closeBtn2 = document.getElementById("closeModal2");
    const overlay2 = document.getElementById("modalOverlay2");
    const card2 = document.getElementById("modalCard2");
    const canvas2 = document.getElementById("modalCanvas2");

    if (openBtn2 && canvas2) {
        const ctx2 = canvas2.getContext("2d");
        let bubbleParticles = [];
        let animationId2;

        class Bubble {
            constructor() {
                this.init();
            }
            init() {
                this.x = Math.random() * canvas2.width;
                this.y = Math.random() * canvas2.height + canvas2.height; // Start below screen
                this.size = Math.random() * 15 + 5;
                this.speedY = Math.random() * 1 + 0.5;
                this.opacity = Math.random() * 0.3 + 0.1;
                this.wobble = Math.random() * 0.02;
                this.wobbleSpeed = Math.random() * 2;
            }
            update() {
                this.y -= this.speedY;
                this.x += Math.sin(this.wobbleSpeed) * 0.5;
                this.wobbleSpeed += this.wobble;

                if (this.y < -20) this.init(); // Reset to bottom
            }
            draw() {
                ctx2.fillStyle = `rgba(147, 197, 253, ${this.opacity})`; // Light Blue
                ctx2.beginPath();
                ctx2.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx2.fill();
                // Subtle glow
                ctx2.strokeStyle = `rgba(255, 255, 255, ${this.opacity / 2})`;
                ctx2.stroke();
            }
        }

        function initCanvas2() {
            canvas2.width = window.innerWidth;
            canvas2.height = window.innerHeight;
            bubbleParticles = [];
            for (let i = 0; i < 50; i++) bubbleParticles.push(new Bubble());
        }

        function animate2() {
            ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
            bubbleParticles.forEach((p) => {
                p.update();
                p.draw();
            });
            animationId2 = requestAnimationFrame(animate2);
        }

        function toggleModal2(show) {
            if (show) {
                overlay2.classList.remove("hidden");
                initCanvas2();
                animate2();
                setTimeout(() => {
                    overlay2.classList.add("opacity-100");
                    card2.classList.replace("scale-90", "scale-100");
                    card2.classList.replace("opacity-0", "opacity-100");
                }, 20);
            } else {
                overlay2.classList.remove("opacity-100");
                card2.classList.replace("scale-100", "scale-90");
                card2.classList.replace("opacity-100", "opacity-0");
                setTimeout(() => {
                    overlay2.classList.add("hidden");
                    cancelAnimationFrame(animationId2);
                }, 500);
            }
        }

        openBtn2.addEventListener("click", () => toggleModal2(true));
        closeBtn2.addEventListener("click", () => toggleModal2(false));
        overlay2.addEventListener("click", (e) => {
            if (e.target === overlay2) toggleModal2(false);
        });
        window.addEventListener("resize", initCanvas2);
    }

    // --- Modal 3 Variables ---
    const openBtn3 = document.getElementById("openModal3");
    const closeBtn3 = document.getElementById("closeModal3");
    const overlay3 = document.getElementById("modalOverlay3");
    const card3 = document.getElementById("modalCard3");
    const canvas3 = document.getElementById("modalCanvas3");

    if (openBtn3 && canvas3) {
        const ctx3 = canvas3.getContext("2d");
        let streams = [];
        let animationId3;

        class DataStream {
            constructor() {
                this.init();
            }
            init() {
                this.x = Math.random() * canvas3.width;
                this.y = Math.random() * -canvas3.height;
                this.speed = Math.random() * 4 + 2;
                this.length = Math.random() * 100 + 50;
                this.opacity = Math.random() * 0.5 + 0.1;
                this.width = Math.random() * 2 + 0.5;
            }
            update() {
                this.y += this.speed;
                if (this.y > canvas3.height) {
                    this.init();
                    this.y = -this.length;
                }
            }
            draw() {
                let gradient = ctx3.createLinearGradient(
                    this.x,
                    this.y,
                    this.x,
                    this.y + this.length
                );
                gradient.addColorStop(0, "transparent");
                gradient.addColorStop(1, `rgba(16, 185, 129, ${this.opacity})`);

                ctx3.strokeStyle = gradient;
                ctx3.lineWidth = this.width;
                ctx3.beginPath();
                ctx3.moveTo(this.x, this.y);
                ctx3.lineTo(this.x, this.y + this.length);
                ctx3.stroke();
            }
        }

        function initCanvas3() {
            canvas3.width = window.innerWidth;
            canvas3.height = window.innerHeight;
            streams = [];
            for (let i = 0; i < 80; i++) streams.push(new DataStream());
        }

        function animate3() {
            ctx3.fillStyle = "rgba(2, 6, 23, 0.2)"; // Fading trail effect
            ctx3.fillRect(0, 0, canvas3.width, canvas3.height);
            streams.forEach((s) => {
                s.update();
                s.draw();
            });
            animationId3 = requestAnimationFrame(animate3);
        }

        function toggleModal3(show) {
            if (show) {
                overlay3.classList.remove("hidden");
                initCanvas3();
                animate3();
                setTimeout(() => {
                    overlay3.classList.add("opacity-100");
                    // Unique animation: Slightly rotates and scales up
                    card3.classList.replace("-rotate-1", "rotate-0");
                    card3.classList.replace("scale-95", "scale-100");
                    card3.classList.replace("opacity-0", "opacity-100");
                }, 20);
            } else {
                overlay3.classList.remove("opacity-100");
                card3.classList.replace("rotate-0", "-rotate-1");
                card3.classList.replace("scale-100", "scale-95");
                card3.classList.replace("opacity-100", "opacity-0");
                setTimeout(() => {
                    overlay3.classList.add("hidden");
                    cancelAnimationFrame(animationId3);
                }, 500);
            }
        }

        openBtn3.addEventListener("click", () => toggleModal3(true));
        closeBtn3.addEventListener("click", () => toggleModal3(false));
        overlay3.addEventListener("click", (e) => {
            if (e.target === overlay3) toggleModal3(false);
        });
        window.addEventListener("resize", initCanvas3);
    }
    const openBtn4 = document.getElementById("openModal4");
    const closeBtn4 = document.getElementById("closeModal4");
    const overlay4 = document.getElementById("modalOverlay4");
    const card4 = document.getElementById("modalCard4");
    const canvas4 = document.getElementById("modalCanvas4");

    if (openBtn4 && canvas4) {
        const ctx4 = canvas4.getContext("2d");
        let animationId4;
        let tick = 0;

        function drawSilk() {
            ctx4.clearRect(0, 0, canvas4.width, canvas4.height);

            // Darkened Vignette Background
            const bgGrad = ctx4.createRadialGradient(
                canvas4.width / 2,
                canvas4.height / 2,
                0,
                canvas4.width / 2,
                canvas4.height / 2,
                canvas4.width
            );
            bgGrad.addColorStop(0, "#0a0a0a");
            bgGrad.addColorStop(1, "#000000");
            ctx4.fillStyle = bgGrad;
            ctx4.fillRect(0, 0, canvas4.width, canvas4.height);

            // Drawing 4 distinct silk layers
            for (let i = 0; i < 4; i++) {
                ctx4.beginPath();
                ctx4.lineWidth = i === 3 ? 2 : 1;
                // Gold tones with varying opacity
                ctx4.strokeStyle = `rgba(212, 175, 55, ${0.05 + i * 0.04})`;

                for (let x = 0; x <= canvas4.width; x += 10) {
                    // Wave formula using sine and cosine for natural flow
                    let y =
                        canvas4.height / 2 +
                        Math.sin(x * 0.005 + tick + i * 1.5) * 60 +
                        Math.cos(x * 0.002 + tick * 0.8) * 120;

                    if (x === 0) ctx4.moveTo(x, y);
                    else ctx4.lineTo(x, y);
                }
                ctx4.stroke();
            }

            tick += 0.008; // Slower, more "expensive" feeling movement
            animationId4 = requestAnimationFrame(drawSilk);
        }

        function initCanvas4() {
            canvas4.width = window.innerWidth;
            canvas4.height = window.innerHeight;
        }

        function toggleModal4(show) {
            if (show) {
                overlay4.classList.remove("hidden");
                initCanvas4();
                drawSilk();
                setTimeout(() => {
                    overlay4.classList.add("opacity-100");
                    card4.classList.replace("translate-x-20", "translate-x-0");
                    card4.classList.replace("opacity-0", "opacity-100");
                }, 50);
            } else {
                overlay4.classList.remove("opacity-100");
                card4.classList.replace("translate-x-0", "translate-x-20");
                card4.classList.replace("opacity-100", "opacity-0");
                setTimeout(() => {
                    overlay4.classList.add("hidden");
                    cancelAnimationFrame(animationId4);
                }, 700);
            }
        }

        openBtn4.addEventListener("click", () => toggleModal4(true));
        closeBtn4.addEventListener("click", () => toggleModal4(false));
        overlay4.addEventListener("click", (e) => {
            if (e.target === overlay4) toggleModal4(false);
        });
        window.addEventListener("resize", initCanvas4);
    }


});
