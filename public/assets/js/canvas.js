document.addEventListener('DOMContentLoaded', () => {
    // Helper to setup canvas sizing
    const setupCanvas = (id) => {
        const canvas = document.getElementById(id);
        const ctx = canvas.getContext('2d');
        const resize = () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        };
        window.addEventListener('resize', resize);
        resize();
        return { canvas, ctx };
    };

    // --- ANIMATION 1: Blue Floating Bubbles (Bottom to Top) ---
    const anim1 = setupCanvas('modalCanvas1');
    const bubbles = [];
    for(let i = 0; i < 50; i++) {
        bubbles.push({
            x: Math.random() * window.innerWidth,
            y: window.innerHeight + Math.random() * 100,
            r: Math.random() * 5 + 2,
            opacity: Math.random() * 0.5,
            speed: Math.random() * 1 + 0.5
        });
    }

    function drawBubbles() {
        anim1.ctx.clearRect(0, 0, anim1.canvas.width, anim1.canvas.height);
        anim1.ctx.fillStyle = "#C47E6D"; // Matching your button color
        bubbles.forEach(b => {
            anim1.ctx.globalAlpha = b.opacity;
            anim1.ctx.beginPath();
            anim1.ctx.arc(b.x, b.y, b.r, 0, Math.PI * 2);
            anim1.ctx.fill();
            b.y -= b.speed;
            if(b.y < -10) b.y = anim1.canvas.height + 10;
        });
        requestAnimationFrame(drawBubbles);
    }

    // --- ANIMATION 2: Connecting Dots (Constellation Pattern) ---
    const anim2 = setupCanvas('modalCanvas2');
    const points = [];
    for(let i = 0; i < 60; i++) {
        points.push({
            x: Math.random() * window.innerWidth,
            y: Math.random() * window.innerHeight,
            vx: (Math.random() - 0.5) * 0.8,
            vy: (Math.random() - 0.5) * 0.8
        });
    }

    function drawNodes() {
        anim2.ctx.clearRect(0, 0, anim2.canvas.width, anim2.canvas.height);
        anim2.ctx.strokeStyle = "rgba(147, 197, 253, 0.2)"; // Soft Blue
        anim2.ctx.fillStyle = "rgba(147, 197, 253, 0.5)";

        points.forEach((p, i) => {
            p.x += p.vx;
            p.y += p.vy;
            if(p.x < 0 || p.x > anim2.canvas.width) p.vx *= -1;
            if(p.y < 0 || p.y > anim2.canvas.height) p.vy *= -1;

            anim2.ctx.beginPath();
            anim2.ctx.arc(p.x, p.y, 2, 0, Math.PI * 2);
            anim2.ctx.fill();

            for(let j = i + 1; j < points.length; j++) {
                const p2 = points[j];
                const dist = Math.hypot(p.x - p2.x, p.y - p2.y);
                if(dist < 150) {
                    anim2.ctx.beginPath();
                    anim2.ctx.moveTo(p.x, p.y);
                    anim2.ctx.lineTo(p2.x, p2.y);
                    anim2.ctx.stroke();
                }
            }
        });
        requestAnimationFrame(drawNodes);
    }

    // --- ANIMATION 3: Emerald Digital Rain (Matrix Style) ---
    const anim3 = setupCanvas('modalCanvas3');
    const fontSize = 16;
    const columns = Math.floor(window.innerWidth / fontSize);
    const drops = new Array(columns).fill(1);

    function drawRain() {
        anim3.ctx.fillStyle = "rgba(2, 6, 23, 0.1)"; // Slate-950 Fade
        anim3.ctx.fillRect(0, 0, anim3.canvas.width, anim3.canvas.height);
        anim3.ctx.fillStyle = "#10b981"; // Emerald-500
        anim3.ctx.font = fontSize + "px monospace";

        drops.forEach((y, i) => {
            const text = String.fromCharCode(Math.random() * 128);
            anim3.ctx.fillText(text, i * fontSize, y * fontSize);
            if(y * fontSize > anim3.canvas.height && Math.random() > 0.975) drops[i] = 0;
            drops[i]++;
        });
        requestAnimationFrame(drawRain);
    }

    // Start Loops
    drawBubbles();
    drawNodes();
    drawRain();

    // --- GSAP Modal Triggers ---
    const toggleModal = (overlayId, cardId, show) => {
        const overlay = document.getElementById(overlayId);
        const card = document.getElementById(cardId);

        if(show) {
            overlay.classList.remove('hidden');
            gsap.to(overlay, { opacity: 1, duration: 0.4 });
            gsap.to(card, { opacity: 1, y: 0, scale: 1, rotation: 0, duration: 0.6, ease: "back.out(1.7)" });
        } else {
            gsap.to(overlay, { opacity: 0, duration: 0.3, onComplete: () => overlay.classList.add('hidden') });
            gsap.to(card, { opacity: 0, y: 50, scale: 0.9, duration: 0.4 });
        }
    };

    // Button Listeners
    document.getElementById('openModal1').onclick = () => toggleModal('modalOverlay1', 'modalCard1', true);
    document.getElementById('closeModal1').onclick = () => toggleModal('modalOverlay1', 'modalCard1', false);

    document.getElementById('openModal2').onclick = () => toggleModal('modalOverlay2', 'modalCard2', true);
    document.getElementById('closeModal2').onclick = () => toggleModal('modalOverlay2', 'modalCard2', false);

    document.getElementById('openModal3').onclick = () => toggleModal('modalOverlay3', 'modalCard3', true);
    document.getElementById('closeModal3').onclick = () => toggleModal('modalOverlay3', 'modalCard3', false);
});
