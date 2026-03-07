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

        <!-- FEATURE CARD SECTION -->
        <section class="relative py-24 bg-[#050510] text-white overflow-hidden">

            <!-- background glow -->
            <div class="absolute inset-0 opacity-40">
                <div
                    class="absolute w-[600px] h-[600px] bg-indigo-600 blur-[140px] rounded-full top-[-200px] left-[-200px]">
                </div>
                <div
                    class="absolute w-[500px] h-[500px] bg-purple-600 blur-[140px] rounded-full bottom-[-200px] right-[-200px]">
                </div>
            </div>

            <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">

                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Want to know <span class="text-indigo-400">about me?</span>
                </h2>

                <p class="text-gray-300 max-w-2xl mx-auto mb-10">
                    I'm Nikul Prajapati, a Laravel web developer who builds modern,
                    fast and scalable web applications using Laravel, Tailwind CSS
                    and modern frontend technologies.
                </p>

                <a href="#about"
                    class="relative inline-flex items-center justify-center
px-10 py-4 rounded-full font-semibold text-black

bg-white/70 backdrop-blur-2xl
border border-white/60

shadow-[0_10px_30px_rgba(0,0,0,0.25)]

before:absolute before:inset-0
before:rounded-full
before:bg-white/40
before:blur-md
before:opacity-40

hover:scale-105 transition duration-300">

                    About Me

                </a>

            </div>

        </section>


    @endsection
</x-app-layout>
