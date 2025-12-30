$(document).ready(function () {
    const modal = document.getElementById("profileModal");
    const card = document.getElementById("profileCard");
    const openBtn = document.querySelector("[data-open-modal='profileModal']");
    const closeBtn = document.getElementById("closeProfileModal");

    const openModal = () => {
        modal.classList.remove("hidden");

        setTimeout(() => {
            card.classList.remove("scale-90", "opacity-0", "translate-y-6");
            card.classList.add("scale-100", "opacity-100", "translate-y-0");
        }, 40);
    };

    const closeModal = () => {
        card.classList.add("scale-90", "opacity-0", "translate-y-6");
        setTimeout(() => modal.classList.add("hidden"), 250);
    };

    openBtn?.addEventListener("click", openModal);
    closeBtn?.addEventListener("click", closeModal);

    modal?.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });

});
document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", e => {

        const target = link.getAttribute("href");

        if (target === "#" || target === "") return;

        const id = target.substring(1);
        const modal = document.getElementById(id);

        if (modal && modal.hasAttribute("data-modal")) {

            e.preventDefault();

            const card = modal.querySelector(".glass-modal-card");

            modal.classList.remove("hidden");

            requestAnimationFrame(() => {
                card.classList.remove("opacity-0","scale-90","translate-y-5");
            });
        }
    });

});

document.querySelectorAll("[data-close-modal]").forEach(btn => {
    btn.addEventListener("click", e => {
        e.preventDefault();
        const modal = btn.closest("[data-modal]");
        const card = modal.querySelector(".glass-modal-card");
        card.classList.add("opacity-0","scale-90","translate-y-5");
        setTimeout(() => modal.classList.add("hidden"), 250);
        history.replaceState(null, "", " ");
    });

});

