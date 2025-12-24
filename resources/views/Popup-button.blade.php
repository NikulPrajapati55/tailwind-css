<x-app-layout>
    @section('meta')
       <title>Premium Luxury Modals | Tailwind CSS & Canvas Animations</title>
    <meta name="title" content="Premium Luxury Modals | Tailwind CSS & Canvas Animations">
    <meta name="description" content="A collection of elite popup modals for Laravel & Tailwind. Featuring Silk Wave animations, Gold Metallic UI, and Emerald Digital Rain.">
    <meta name="keywords" content="Tailwind CSS Modal, Canvas Animation, Glassmorphism, Laravel UI, Luxury Web Design, Silk Wave, Nikul Prajapati">
    <meta name="author" content="Nikul Prajapati">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Premium Luxury Modals - Tailwind & Canvas">
    <meta property="og:description" content="Copy-paste high-end modal components with unique silk and particle animations for professional web apps.">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Premium Luxury Modals - Tailwind & Canvas">
    <meta property="twitter:description" content="Elevate your SaaS UI with unique silk animations and luxury gold design components.">
    @endsection
    @section('content')
        <div
            class="w-full flex  flex-wrap items-center gap-2 justify-center h-[85vh] bg-gradient-to-tr from-gray-900 via-black to-gray-900 relative overflow-hidden">

            <button id="openModal1"
                class="px-6 py-3 bg-[#C47E6D] hover:bg-[#a55c52] text-white font-semibold rounded-full shadow-lg transition-colors z-10">
                Open Contact Popup 1
            </button>

            <button id="openModal2"
                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full shadow-lg transition-colors z-10">
                Open Contact Popup 2
            </button>
            <button id="openModal3"
                class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full shadow-lg transition-colors z-10">
                Open Contact Popup 3
            </button>
        </div>

        <div id="modalOverlay1"
            class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-500 backdrop-blur-sm">

            <canvas id="modalCanvas1" class="absolute inset-0 w-full  bg-black/80"></canvas>

            <div id="modalCard1"
                class="relative w-[90%] max-w-[600px] transform translate-y-10 opacity-0 transition-all duration-700 ease-out bg-[#0a0a0a]/60 border border-white/10 rounded-3xl premium-glow z-10 overflow-hidden">

                <button id="closeModal1" style="font-size: 40px"
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

                        <button type="submit"
                            class="w-full mt-4 bg-[#C47E6D] text-black font-semibold py-3 rounded-xl
         hover:bg-[#d58f7c] transition">
                            Submit
                        </button>

                    </form>
                </div>
            </div>
        </div>

        <div id="modalOverlay2"
            class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-500 backdrop-blur-md">

            <canvas id="modalCanvas2" class="absolute inset-0 w-full bg-blue-900/40"></canvas>

            <div id="modalCard2"
                class="relative w-[90%] max-w-[500px] transform scale-90 opacity-0 transition-all duration-500 ease-out bg-white/10 border border-white/20 rounded-3xl backdrop-blur-xl shadow-2xl z-10 overflow-hidden">

                <button id="closeModal2" style="font-size: 40px"
                    class="absolute top-5 right-6 text-white/70 hover:text-blue-300 transition-colors">&times;</button>

                <div class="p-8">
                    <div class="mb-8 text-center">
                        <h2 class="text-3xl font-extrabold text-white tracking-tight">Join the Cloud</h2>
                        <p class="text-blue-100/70 text-sm mt-1">Experience the new blue glass interface</p>
                        <div class="h-1 w-16 bg-blue-400 mx-auto mt-4 rounded-full"></div>
                    </div>

                    <form class="space-y-5">
                        <input type="text" placeholder="Username"
                            class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-blue-200/50 outline-none focus:ring-2 focus:ring-blue-400/50 transition-all">

                        <input type="email" placeholder="Email"
                            class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-blue-200/50 outline-none focus:ring-2 focus:ring-blue-400/50 transition-all">

                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-3 rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:-translate-y-1">
                            Get Started
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div id="modalOverlay3"
            class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-500 backdrop-blur-md">

            <canvas id="modalCanvas3" class="absolute inset-0 w-full bg-slate-950/90"></canvas>

            <div id="modalCard3"
                class="relative w-[95%] max-w-[550px] transform -rotate-1 scale-95 opacity-0 transition-all duration-500 ease-out bg-emerald-950/40 border border-emerald-500/30 rounded-[2rem] shadow-[0_0_40px_rgba(16,185,129,0.2)] z-10 overflow-hidden">

                <button id="closeModal3" style="font-size: 40px"
                    class="absolute top-5 right-6 text-emerald-400 hover:text-white transition-colors">&times;</button>

                <div class="p-10">
                    <div class="mb-8">
                        <h2 class="text-3xl font-black text-emerald-400 tracking-widest uppercase">Contact Now</h2>
                    </div>

                    <form class="space-y-4">
                        <div class="relative">
                            <input type="text" placeholder="Name"
                                class="w-full bg-black/40 border border-emerald-500/20 rounded-lg px-4 py-4 text-emerald-400 placeholder-emerald-900 outline-none focus:border-emerald-400 focus:ring-1 focus:ring-emerald-400 transition-all font-mono">
                        </div>
                        <div class="relative">
                            <input type="email" placeholder="Email Address"
                                class="w-full bg-black/40 border border-emerald-500/20 rounded-lg px-4 py-4 text-emerald-400 placeholder-emerald-900 outline-none focus:border-emerald-400 focus:ring-1 focus:ring-emerald-400 transition-all font-mono">
                        </div>
                        <div class="relative">
                            <input type="number" placeholder="Phone Number"
                                class="w-full bg-black/40 border border-emerald-500/20 rounded-lg px-4 py-4 text-emerald-400 placeholder-emerald-900 outline-none focus:border-emerald-400 focus:ring-1 focus:ring-emerald-400 transition-all font-mono">
                        </div>

                        <textarea placeholder="Message..." rows="3"
                            class="w-full bg-black/40 border border-emerald-500/20 rounded-lg px-4 py-4 text-emerald-400 placeholder-emerald-900 outline-none focus:border-emerald-400 transition-all font-mono resize-none"></textarea>

                        <button type="submit"
                            class="w-full bg-emerald-500 text-black font-bold py-4 rounded-lg hover:bg-emerald-400 shadow-[0_0_20px_rgba(16,185,129,0.4)] transition-all uppercase tracking-widest">
                            Authorize
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
