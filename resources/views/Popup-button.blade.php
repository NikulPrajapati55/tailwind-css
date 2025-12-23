<x-app-layout>
    @section('meta')
        <title>Popup Button Section - Frontend</title>

        <meta name="keywords"
            content="Laravel popup modal, Tailwind CSS modal, canvas animation popup, contact popup Laravel, SaaS UI components">
        <meta name="author" content="Nikul Prajapati">
    @endsection
    @section('content')
        <div
            class="w-full flex items-center justify-center min-h-screen bg-gradient-to-tr from-gray-900 via-black to-gray-900 relative overflow-hidden">

            <button id="openModal"
                class="px-6 py-3 bg-[#C47E6D] hover:bg-[#a55c52] text-white font-semibold rounded-full shadow-lg transition-colors z-10">
                Open Contact Popup
            </button>
        </div>

        <div id="modalOverlay"
            class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-500 backdrop-blur-sm">

            <canvas id="modalCanvas" class="absolute inset-0 w-full  bg-black/80"></canvas>

            <div id="modalCard"
                class="relative w-[90%] max-w-[600px] transform translate-y-10 opacity-0 transition-all duration-700 ease-out bg-[#0a0a0a]/60 border border-white/10 rounded-3xl premium-glow z-10 overflow-hidden">

                <button id="closeModal" style="font-size: 40px"
                    class="absolute top-5 right-6 text-white  hover:text-[#C47E6D]  transition-colors">&times;</button>

                <div class="p-6">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-white tracking-tight">Let's Contact</h2>
                        <div class="h-1 w-12 bg-[#C47E6D] mt-2 rounded-full"></div>
                    </div>

                    <form class="space-y-4">
                        <div class="group">
                            <input type="text" placeholder="Your Name"
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all">
                        </div>


                        <div class="group">
                            <input type="email" placeholder="Email Address"
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all">
                        </div>
                        <div class="group">
                            <input type="number" placeholder="Your Phone Number"
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all">
                        </div>

                        <textarea placeholder="Tell us about your requirements..." rows="4"
                            class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all resize-none"></textarea>

                        <button type="submit" href="#"
                            class="text-decoration-none primary_btn d-inline-block mt-3">Submit<span>
                            </span></button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const openBtn = document.getElementById('openModal');
            const closeBtn = document.getElementById('closeModal');
            const overlay = document.getElementById('modalOverlay');
            const card = document.getElementById('modalCard');
            const canvas = document.getElementById('modalCanvas');
            const ctx = canvas.getContext('2d');

            let particles = [];
            let animationId;

            class Particle {
                constructor() {
                    this.init();
                }
                init() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 1.5 + 0.5;
                    this.speedX = Math.random() * 0.4 - 0.2;
                    this.speedY = Math.random() * 0.4 - 0.2;
                    this.alpha = Math.random() * 0.5 + 0.1;
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    if (this.x > canvas.width || this.x < 0) this.speedX *= -1;
                    if (this.y > canvas.height || this.y < 0) this.speedY *= -1;
                }
                draw() {
                    ctx.fillStyle = `rgba(196, 126, 109, ${this.alpha})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            function initCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                particles = [];
                for (let i = 0; i < 100; i++) particles.push(new Particle());
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach((p, index) => {
                    p.update();
                    p.draw();
                    for (let j = index; j < particles.length; j++) {
                        const dx = p.x - particles[j].x;
                        const dy = p.y - particles[j].y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 120) {
                            ctx.strokeStyle = `rgba(196, 126, 109, ${0.15 - dist/800})`;
                            ctx.lineWidth = 0.5;
                            ctx.beginPath();
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.stroke();
                        }
                    }
                });
                animationId = requestAnimationFrame(animate);
            }

            function toggleModal(show) {
                if (show) {
                    overlay.classList.remove('hidden');
                    initCanvas();
                    animate();
                    setTimeout(() => {
                        overlay.classList.add('opacity-100');
                        card.classList.replace('translate-y-10', 'translate-y-0');
                        card.classList.replace('opacity-0', 'opacity-100');
                    }, 20);
                } else {
                    overlay.classList.remove('opacity-100');
                    card.classList.replace('translate-y-0', 'translate-y-10');
                    card.classList.replace('opacity-100', 'opacity-0');
                    setTimeout(() => {
                        overlay.classList.add('hidden');
                        cancelAnimationFrame(animationId);
                    }, 500);
                }
            }

            openBtn.addEventListener('click', () => toggleModal(true));
            closeBtn.addEventListener('click', () => toggleModal(false));
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) toggleModal(false);
            });
            window.addEventListener('resize', initCanvas);
        </script>
    @endsection
</x-app-layout>
