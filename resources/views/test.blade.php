<x-app-layout>
    @section('meta')
        <title>Elite UI/UX Design & Development | Nikul Prajapati</title>
        <style>
            .theme2-hide {
                opacity: 1;
            }

            .theme2-float-img {
                filter: grayscale(1);
            }

            .glass-card {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.08);
            }

            .text-gradient {
                background: linear-gradient(to right, #60a5fa, #a78bfa, #f472b6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        </style>
    @endsection

    @section('content')
        <section id="theme2-about" class="relative w-full bg-[#020202] overflow-hidden px-6 py-28">
            <div class="absolute top-20 left-1/4 w-[420px] h-[420px] bg-purple-600/10 blur-[140px] rounded-full"></div>
            <div class="container mx-auto relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-24">

                    <!-- LEFT TEXT -->
                    <div class="lg:col-span-7">
                        <span
                            class="theme2-about-stagger theme2-hide inline-block mb-4 text-xs tracking-[0.3em] uppercase text-gray-500">
                            About Us
                        </span>

                        <h2
                            class="theme2-about-stagger theme2-hide text-4xl md:text-5xl xl:text-6xl font-bold text-white leading-tight mb-6">
                            We design & build<br />
                            <span class="text-gradient">high-impact digital experiences</span>
                        </h2>

                        <p class="theme2-about-stagger theme2-hide text-gray-400 text-lg leading-relaxed max-w-2xl">
                            Our approach blends strategy, design, and engineering to create digital
                            products that are fast, scalable, and visually refined.
                        </p>
                    </div>

                    <!-- RIGHT VISUAL (FILLS EMPTY SPACE) -->
                    <div class="lg:col-span-5 hidden lg:flex items-center justify-center">
                        <div class="glass-card rounded-[2.5rem] p-10 w-full max-w-sm">
                            <p class="text-gray-500 text-xs uppercase tracking-widest mb-3">
                                Experience Driven
                            </p>
                            <h4 class="text-2xl font-bold text-white mb-6">
                                Built for scale.<br />
                                Designed for humans.
                            </h4>

                            <div class="space-y-4">
                                <div class="flex items-center gap-4">
                                    <i class="fa-solid fa-check text-emerald-400"></i>
                                    <span class="text-gray-400 text-sm">Performance focused</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <i class="fa-solid fa-check text-emerald-400"></i>
                                    <span class="text-gray-400 text-sm">UX-first approach</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <i class="fa-solid fa-check text-emerald-400"></i>
                                    <span class="text-gray-400 text-sm">Long-term scalability</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Content grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                    <!-- Left: Features -->
                    <div class="lg:col-span-7 space-y-10">

                        <!-- Feature -->
                        <div class="theme2-about-card theme2-hide glass-card rounded-3xl p-8 flex gap-6">
                            <div
                                class="w-14 h-14 rounded-2xl flex items-center justify-center bg-blue-600/20 text-blue-400 text-xl">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-2">
                                    Performance-First Engineering
                                </h3>
                                <p class="text-gray-400 leading-relaxed">
                                    Lightning-fast load times, optimized assets, and clean
                                    architecture ensure your product performs flawlessly
                                    under real-world traffic.
                                </p>
                            </div>
                        </div>

                        <div class="theme2-about-card theme2-hide glass-card rounded-3xl p-8 flex gap-6">
                            <div
                                class="w-14 h-14 rounded-2xl flex items-center justify-center bg-purple-600/20 text-purple-400 text-xl">
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-2">
                                    Pixel-Perfect UI / UX
                                </h3>
                                <p class="text-gray-400 leading-relaxed">
                                    Every interaction is carefully crafted to feel intuitive,
                                    elegant, and effortless—because great design should never
                                    get in the way.
                                </p>
                            </div>
                        </div>

                        <div class="theme2-about-card theme2-hide glass-card rounded-3xl p-8 flex gap-6">
                            <div
                                class="w-14 h-14 rounded-2xl flex items-center justify-center bg-emerald-600/20 text-emerald-400 text-xl">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-2">
                                    Scalable Architecture
                                </h3>
                                <p class="text-gray-400 leading-relaxed">
                                    Built to grow with your business—modular systems,
                                    maintainable code, and future-proof technology choices.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Right: Stats / Philosophy -->
                    <div class="lg:col-span-5">

                        <div class="theme2-about-card theme2-hide glass-card rounded-[3rem] p-10 space-y-10">

                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-widest mb-2">
                                    Our Philosophy
                                </p>
                                <h4 class="text-2xl font-bold text-white leading-snug">
                                    Design is not decoration.<br />
                                    It’s a strategic advantage.
                                </h4>
                            </div>

                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-10 h-10 rounded-xl glass-card flex items-center justify-center text-blue-400 font-bold">
                                        10x
                                    </div>
                                    <span class="text-gray-400 text-sm">
                                        Faster performance benchmarks
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-10 h-10 rounded-xl glass-card flex items-center justify-center text-purple-400 font-bold">
                                        99%
                                    </div>
                                    <span class="text-gray-400 text-sm">
                                        Client satisfaction rate
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-10 h-10 rounded-xl glass-card flex items-center justify-center text-emerald-400 font-bold">
                                        24/7
                                    </div>
                                    <span class="text-gray-400 text-sm">
                                        Long-term support mindset
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
