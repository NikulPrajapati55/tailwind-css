<x-app-layout>
    @section('meta')
        <title>Open Source Tailwind CSS UI Kit | Responsive Themes & Components</title>
        <style>
            /* Liquid floating blobs */
        </style>
    @endsection
    @section('content')

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
