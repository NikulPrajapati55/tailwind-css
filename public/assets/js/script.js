$(document).ready(function () {

    /*************************************************
     * MOBILE MENU (SAFE)
     *************************************************/
    const menuBtn = document.getElementById("menuBtn");
    const closeMenu = document.getElementById("closeMenu");
    const mobileMenu = document.getElementById("mobileMenu");

    if (menuBtn && mobileMenu) {
        menuBtn.onclick = () =>
            mobileMenu.classList.remove("translate-x-full");
    }

    if (closeMenu && mobileMenu) {
        closeMenu.onclick = () =>
            mobileMenu.classList.add("translate-x-full");
    }

    /*************************************************
     * DATE & TIME (SAFE)
     *************************************************/
    function updateDateTime() {
        const dateEl = document.getElementById("date");
        const timeEl = document.getElementById("time");
        if (!dateEl || !timeEl) return;

        const now = new Date();
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
    setInterval(updateDateTime, 1000);

    /*************************************************
     * SWIPER (SAFE)
     *************************************************/
    if (typeof Swiper !== "undefined") {

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
    }

    /*************************************************
     * GSAP + SCROLLTRIGGER (SAFE)
     *************************************************/
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    function exists(selector) {
        return document.querySelector(selector);
    }

    /*************************************************
     * LOGIN MODAL (SAFE)
     *************************************************/
    const openLogin = document.getElementById("openLogin");
    const closeLogin = document.getElementById("closeLogin");
    const loginModal = document.getElementById("loginModal");
    const loginContent = document.getElementById("modalContent");

    if (openLogin && closeLogin && loginModal && loginContent) {
        openLogin.addEventListener("click", () => {
            loginModal.style.display = "flex";
            gsap.fromTo(loginModal, { opacity: 0 }, { opacity: 1, duration: 0.3 });
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
                onComplete: () => (loginModal.style.display = "none"),
            });
        });
    }

    /*************************************************
     * MODAL 1–4 (PATTERN-SAFE)
     *************************************************/
    function safeModal({
        openBtn,
        closeBtn,
        overlay,
        card,
        canvas,
        init,
        animate,
        closeDelay = 500
    }) {
        if (!openBtn || !closeBtn || !overlay || !card || !canvas) return;

        let animationId;

        function show() {
            overlay.classList.remove("hidden");
            init();
            animate();
            setTimeout(() => {
                overlay.classList.add("opacity-100");
                card.classList.remove("opacity-0");
                card.classList.add("opacity-100");
            }, 20);
        }

        function hide() {
            overlay.classList.remove("opacity-100");
            card.classList.remove("opacity-100");
            card.classList.add("opacity-0");
            setTimeout(() => {
                overlay.classList.add("hidden");
                cancelAnimationFrame(animationId);
            }, closeDelay);
        }

        openBtn.addEventListener("click", show);
        closeBtn.addEventListener("click", hide);
        overlay.addEventListener("click", (e) => {
            if (e.target === overlay) hide();
        });

        return (id) => (animationId = id);
    }

    /*************************************************
     * ABOUT SECTION (SAFE)
     *************************************************/
    if (exists("#about-section")) {
        gsap.timeline({
            scrollTrigger: {
                trigger: "#about-section",
                start: "top 75%",
            },
        })
            .to("#about-bg-blob", { opacity: 0.6, scale: 1.2, duration: 2 })
            .from(".about-stagger", {
                y: 50,
                opacity: 0,
                stagger: 0.2,
                duration: 1,
                ease: "power3.out",
            }, "-=1.5")
            .from("#about-img-main", {
                scale: 0.9,
                opacity: 0,
                duration: 1.5,
            }, "-=1.2")
            .from("#about-img-sub", {
                x: 40,
                y: 40,
                opacity: 0,
                duration: 1.5,
            }, "-=1");
    }

    /*************************************************
     * DEV PROFILE (SAFE)
     *************************************************/
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
    }
});
