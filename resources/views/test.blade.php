<x-app-layout>
    @section('meta')
        <title>Open Source Tailwind CSS UI Kit | Responsive Themes & Components</title>
       <style>
            /* Liquid floating blobs */
        </style>
    @endsection
    @section('content')
        <section class="relative py-24 overflow-hidden bg-[#04040f] text-white">

            <div class="absolute inset-0 opacity-40">
                <div class="absolute w-[700px] h-[700px] bg-purple-600 rounded-full blur-[140px] top-[-200px] left-[-200px]">
                </div>
                <div
                    class="absolute w-[600px] h-[600px] bg-indigo-600 rounded-full blur-[140px] bottom-[-150px] right-[-150px]">
                </div>
            </div>
            <div class="relative z-10 max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">
                <div class="text-center lg:text-left">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Build <span class="text-indigo-400">Ultra Modern</span>
                        Web Experiences
                    </h2>
                    <p class="text-gray-300 mb-8 text-lg max-w-xl mx-auto lg:mx-0">
                        Create beautiful landing pages with liquid glass UI,
                        smooth animations and powerful frameworks.
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                        <button class="px-7 py-3 bg-indigo-600 rounded-xl hover:bg-indigo-700 transition">
                            Start Project
                        </button>
                        <button
                            class="px-7 py-3 backdrop-blur-xl bg-white/10 border border-white/20 rounded-xl hover:bg-white/20 transition">
                            View Demo
                        </button>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <img src="{{ asset('assets/img/about/about-img-19.jpg') }}"
                        class="rounded-2xl shadow-2xl border border-white/10 w-full max-w-lg">
                    <div
                        class="absolute -top-8 -left-8 backdrop-blur-xl bg-white/10 border border-white/20 rounded-xl p-4 shadow-xl floating">
                        <div class="text-sm text-gray-300">Performance</div>
                        <div class="text-xl font-bold">98%</div>
                    </div>
                    <div
                        class="absolute -bottom-8 -right-8 backdrop-blur-xl bg-white/10 border border-white/20 rounded-xl p-4 shadow-xl floating">
                        <div class="text-sm text-gray-300">Speed</div>
                        <div class="text-xl font-bold">Fast</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FEATURE CARD SECTION -->
        <section class="relative py-24 bg-[#050510] text-white overflow-hidden">

            <!-- Background Glow -->
            <div class="absolute inset-0 opacity-40">
                <div
                    class="absolute w-[600px] h-[600px] bg-indigo-600 rounded-full blur-[140px] top-[-200px] left-[-200px]">
                </div>
                <div
                    class="absolute w-[500px] h-[500px] bg-purple-600 rounded-full blur-[140px] bottom-[-200px] right-[-200px]">
                </div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6">

                <h2 class="text-4xl font-bold text-center mb-16">
                    Premium <span class="text-indigo-400">Experience</span>
                </h2>

                <div class="grid md:grid-cols-3 gap-8">

                    <!-- CARD -->
                    <div
                        class="group backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-8 hover:-translate-y-3 transition duration-500 shadow-xl">

                        <div class="text-4xl mb-4">✨</div>

                        <h3 class="text-xl font-semibold mb-3">
                            Modern Interface
                        </h3>

                        <p class="text-gray-300 mb-6">
                            Beautiful user interface with smooth animations, glass effects,
                            and responsive layouts for modern websites.
                        </p>

                        <button
                            class="px-6 py-3 rounded-xl backdrop-blur-lg bg-white/20 border border-white/40 text-white hover:bg-white/30 transition">
                            Learn More
                        </button>

                    </div>


                    <!-- CARD -->
                    <div
                        class="group backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-8 hover:-translate-y-3 transition duration-500 shadow-xl">

                        <div class="text-4xl mb-4">⚡</div>

                        <h3 class="text-xl font-semibold mb-3">
                            High Performance
                        </h3>

                        <p class="text-gray-300 mb-6">
                            Optimized architecture and modern technologies ensure
                            fast loading and smooth performance.
                        </p>

                        <button
                            class="px-6 py-3 rounded-xl backdrop-blur-lg bg-white/20 border border-white/40 text-white hover:bg-white/30 transition">
                            Discover
                        </button>

                    </div>


                    <!-- CARD -->
                    <div
                        class="group backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-8 hover:-translate-y-3 transition duration-500 shadow-xl">
                        <div class="text-4xl mb-4">🔒</div>
                        <h3 class="text-xl font-semibold mb-3">
                            Secure Platform
                        </h3>
                        <p class="text-gray-300 mb-6">
                            Built with modern security practices to keep
                            data protected and systems reliable.
                        </p>
                        <button
                            class="px-6 py-3 rounded-xl backdrop-blur-lg bg-white/20 border border-white/40 text-white hover:bg-white/30 transition">
                            Explore
                        </button>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
