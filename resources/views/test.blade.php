<x-app-layout>
    @section('meta')
        <title>Open Source Tailwind CSS UI Kit | Responsive Themes & Components</title>
        <style>
        </style>
    @endsection
    @section('content')
        <section class="relative py-24 bg-gradient-to-br from-slate-50 via-white to-blue-50 overflow-hidden">
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-200/40 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200/40 blur-3xl rounded-full"></div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight">
                        Premium Platform Features
                    </h2>
                    <p class="mt-4 text-gray-500 max-w-xl mx-auto">
                        Modern SaaS interface inspired by Apple & Stripe with liquid glass UI.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div
                        class="card-animate-gradient group relative rounded-3xl p-[1px] bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 animate-gradient">
                        <div
                            class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 p-8 shadow-xl transition duration-300">
                            <div class="reflection-1 absolute inset-0 opacity-0 group-hover:opacity-100 transition"></div>

                            <div
                                class="mb-6 w-14 h-14 rounded-xl flex items-center justify-center bg-blue-100 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h11M9 21V3m12 7h-5" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                Advanced Analytics
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Powerful insights with real-time dashboards designed for modern SaaS applications.
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-animate-gradient group relative rounded-3xl p-[1px] bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 animate-gradient">
                        <div
                            class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 p-8 shadow-xl transition duration-300">
                            <div class="reflection-1 absolute inset-0 opacity-0 group-hover:opacity-100 transition"></div>
                            <div
                                class="mb-6 w-14 h-14 rounded-xl flex items-center justify-center bg-purple-100 text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                User Management
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Manage users, permissions, and teams with a scalable system.
                            </p>

                        </div>
                    </div>
                    <div
                        class="card-animate-gradient group relative rounded-3xl p-[1px] bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400 animate-gradient">
                        <div
                            class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 p-8 shadow-xl transition duration-300">
                            <div class="reflection-1 absolute inset-0 opacity-0 group-hover:opacity-100 transition"></div>
                            <div
                                class="mb-6 w-14 h-14 rounded-xl flex items-center justify-center bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 3v3m4.5-3v3M4.5 9h15" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                API Integrations
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Connect your platform with external services using powerful APIs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-28 crystal-bg text-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-5xl font-bold orbitron">Crystal UI Gallery</h2>
                    <p class="text-slate-300 mt-4">Glassmorphism image showcase with hover glow</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="crystal-card">
                        <div class="crystal-img-wrap">
                            <img src="{{ asset('assets/img/about/about-img-8.jpg') }}" />
                        </div>
                        <div class="content">
                            <h3>Future Interface</h3>
                            <p>Modern glass UI design</p>
                        </div>
                        <div class="mouse-glow"></div>
                    </div>
                    <div class="crystal-card">
                        <div class="crystal-img-wrap">
                            <img src="{{ asset('assets/img/about/about-img-8.jpg') }}" />
                        </div>
                        <div class="content">
                            <h3>AI System</h3>
                            <p>Next generation interface</p>
                        </div>
                        <div class="mouse-glow"></div>
                    </div>
                    <div class="crystal-card">
                        <div class="crystal-img-wrap">
                            <img src="{{ asset('assets/img/about/about-img-8.jpg') }}" />
                        </div>
                        <div class="content">
                            <h3>Space Vision</h3>
                            <p>Futuristic UI inspiration</p>
                        </div>
                        <div class="mouse-glow"></div>
                    </div>
                </div>
            </div>
        </section>
        <style>


        </style>
        <script>
            document.querySelectorAll(".crystal-card").forEach(card => {

                card.addEventListener("mousemove", e => {

                    const rect = card.getBoundingClientRect()

                    const x = e.clientX - rect.left
                    const y = e.clientY - rect.top

                    card.querySelector(".mouse-glow").style.setProperty("--x", x + "px")
                    card.querySelector(".mouse-glow").style.setProperty("--y", y + "px")

                })

            })
        </script>
    @endsection
</x-app-layout>
