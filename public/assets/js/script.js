$(document).ready(function () {
    // 1. DATE & TIME
    function updateDateTime() {
        const now = new Date();
        const dateEl = document.getElementById("date");
        const timeEl = document.getElementById("time");
        if (!dateEl || !timeEl) return;
        dateEl.textContent = now.toLocaleDateString(undefined, { weekday: "long", year: "numeric", month: "long", day: "numeric" });
        timeEl.textContent = now.toLocaleTimeString(undefined, { hour: "2-digit", minute: "2-digit", second: "2-digit" });
    }
    setInterval(updateDateTime, 1000); // Added interval so it actually updates
    updateDateTime();

    // 2. SWIPER CAROUSELS
    if (document.querySelector(".multiple-slide-carousel")) {
        new Swiper(".multiple-slide-carousel", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
            breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    }

    if (document.querySelector(".cubeswiper")) {
        new Swiper(".cubeswiper", {
            effect: "cube",
            grabCursor: true,
            cubeEffect: { shadow: true, slideShadows: true, shadowOffset: 20, shadowScale: 0.94 },
            autoplay: { delay: 2500, disableOnInteraction: false },
        });
    }

    // 3. GSAP ANIMATIONS
    gsap.registerPlugin(ScrollTrigger);

    // Hero, About, Services, Team, etc. (Keeping your logic here)
    // ... [Your GSAP ScrollTrigger code remains the same] ...

    // 4. LOGIN MODAL LOGIC
    const openLogin = document.getElementById('openLogin');
    const closeLogin = document.getElementById('closeLogin');
    const loginModal = document.getElementById('loginModal');
    const loginContent = document.getElementById('modalContent');

    if (openLogin && loginModal) {
        openLogin.addEventListener('click', () => {
            loginModal.style.display = 'flex';
            gsap.fromTo(loginModal, { opacity: 0 }, { opacity: 1, duration: 0.3 });
            gsap.fromTo(loginContent, { scale: 0.5, y: 100, opacity: 0 }, { scale: 1, y: 0, opacity: 1, duration: 0.6, ease: "expo.out" });
        });

        closeLogin.addEventListener('click', () => {
            gsap.to(loginContent, { scale: 0.8, opacity: 0, duration: 0.3 });
            gsap.to(loginModal, { opacity: 0, duration: 0.4, onComplete: () => { loginModal.style.display = 'none'; } });
        });
    }

    // 5. CONTACT POPUP (Modal 1)
    const openBtn1 = document.getElementById('openModal1');
    const closeBtn1 = document.getElementById('closeModal1');
    const overlay1 = document.getElementById('modalOverlay1');
    const card1 = document.getElementById('modalCard1');
    const canvas1 = document.getElementById('modalCanvas1');

    if (openBtn1 && canvas1) {
        const ctx1 = canvas1.getContext('2d');
        let contactParticles = []; // Renamed to avoid clash
        let animationId1;

        class ContactParticle { // Renamed class
            constructor() { this.init(); }
            init() {
                this.x = Math.random() * canvas1.width;
                this.y = Math.random() * canvas1.height;
                this.size = Math.random() * 1.5 + 0.5;
                this.speedX = Math.random() * 0.4 - 0.2;
                this.speedY = Math.random() * 0.4 - 0.2;
                this.alpha = Math.random() * 0.5 + 0.1;
            }
            update() {
                this.x += this.speedX; this.y += this.speedY;
                if (this.x > canvas1.width || this.x < 0) this.speedX *= -1;
                if (this.y > canvas1.height || this.y < 0) this.speedY *= -1;
            }
            draw() {
                ctx1.fillStyle = `rgba(196, 126, 109, ${this.alpha})`;
                ctx1.beginPath(); ctx1.arc(this.x, this.y, this.size, 0, Math.PI * 2); ctx1.fill();
            }
        }

        function initCanvas1() {
            canvas1.width = window.innerWidth;
            canvas1.height = window.innerHeight;
            contactParticles = [];
            for (let i = 0; i < 100; i++) contactParticles.push(new ContactParticle());
        }

        function animate1() {
            ctx1.clearRect(0, 0, canvas1.width, canvas1.height);
            contactParticles.forEach((p, index) => {
                p.update(); p.draw();
                for (let j = index; j < contactParticles.length; j++) {
                    const dx = p.x - contactParticles[j].x;
                    const dy = p.y - contactParticles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 120) {
                        ctx1.strokeStyle = `rgba(196, 126, 109, ${0.15 - dist / 800})`;
                        ctx1.lineWidth = 0.5; ctx1.beginPath(); ctx1.moveTo(p.x, p.y); ctx1.lineTo(contactParticles[j].x, contactParticles[j].y); ctx1.stroke();
                    }
                }
            });
            animationId1 = requestAnimationFrame(animate1);
        }

        function toggleModal1(show) {
            if (show) {
                overlay1.classList.remove('hidden');
                initCanvas1(); animate1();
                setTimeout(() => {
                    overlay1.classList.add('opacity-100');
                    card1.classList.replace('translate-y-10', 'translate-y-0');
                    card1.classList.replace('opacity-0', 'opacity-100');
                }, 20);
            } else {
                overlay1.classList.remove('opacity-100');
                card1.classList.replace('translate-y-0', 'translate-y-10');
                card1.classList.replace('opacity-100', 'opacity-0');
                setTimeout(() => {
                    overlay1.classList.add('hidden');
                    cancelAnimationFrame(animationId1);
                }, 500);
            }
        }

        openBtn1.addEventListener('click', () => toggleModal1(true));
        closeBtn1.addEventListener('click', () => toggleModal1(false));
        overlay1.addEventListener('click', (e) => { if (e.target === overlay1) toggleModal1(false); });
        window.addEventListener('resize', initCanvas1);
    }
});
