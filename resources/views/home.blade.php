<x-app-layout>
    @section('meta')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home | Tailwind CSS Frontend UI Components</title>
        <meta name="description"
            content="Modern frontend UI components built using Tailwind CSS and Laravel — including hero banners, card sections, swiper sliders, and team profiles. Clean, reusable and production-ready layouts for developers.">
        <meta name="keywords"
            content="tailwind css frontend, laravel ui components, hero section, card section, swiper slider, team section, modern web design, frontend developer">
        <meta name="author" content="Nikul Prajapati">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Home | Tailwind CSS Frontend UI Components">
        <meta property="og:description"
            content="Collection of reusable Tailwind CSS frontend components — hero banners, sliders, cards, and team sections built with Laravel and modern UI practices.">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Home | Tailwind CSS Frontend UI Components">
        <meta name="twitter:description"
            content="Full-featured Tailwind CSS UI component collection — hero, cards, swiper slider, and team layouts with Laravel integration.">
    @endsection

    @section('content')
        <!-- HERO 1 -->


        <section class="section py-10 md:py-20 min-h-[70vh] md:h-[88vh] flex items-center justify-center bg-cover bg-center"
            style="background-image: url('{{ asset('assets/img/banner/sample-1.webp') }}')">
            <div class="max-w-7xl mx-auto px-4 w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 place-items-center gap-10">
                    <div class="section__content text-center md:text-left">
                        <h1 class="text-white mb-4 font-semibold text-4xl md:text-6xl leading-tight">
                            Lorem ipsum dolor sit amet.
                        </h1>
                        <p class="text-white text-base md:text-lg opacity-90">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, minus! Vitae eos vero
                            ullam odit recusandae.
                        </p>
                        <button
                            class="mt-6 group relative overflow-hidden rounded-full bg-indigo-600 px-8 py-4 text-white shadow-xl transition-all duration-300 hover:bg-indigo-700">
                            <div
                                class="absolute top-0 -left-[100%] h-full w-full skew-x-12 bg-gradient-to-r from-transparent via-white/30 to-transparent transition-all duration-700 group-hover:left-[100%]">
                            </div>
                            <span class="relative z-10 flex items-center justify-center gap-2 font-semibold">
                                Get Started
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor"
                                    class="h-5 w-5 group-hover:translate-x-1 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="hidden md:block"></div>
                </div>
            </div>
        </section>

        <section class="bg-[#111111] text-white min-h-screen flex items-center relative overflow-hidden py-16 md:py-0">
            <div class="absolute top-10 right-10 opacity-10 pointer-events-none">
                <svg width="80" height="80" viewBox="0 0 100 100" stroke="white" stroke-width="2">
                    <path d="M10 10 L30 30 M50 10 L70 30 M90 10 L110 30 M10 50 L30 70 M50 50 L70 70" />
                </svg>
            </div>
            <div class="container mx-auto px-6 lg:px-16 flex flex-col lg:flex-row items-center gap-16 z-10">
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif font-medium leading-tight mb-6">
                        Find your quality <span class="relative inline-block">leads
                            <svg class="absolute w-full h-2 md:h-3 bottom-1 md:bottom-2 left-0 text-pink-500 -z-10"
                                viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="none" />
                            </svg>
                        </span> in <br class="hidden md:block"> single click.
                    </h1>
                    <p class="text-gray-400 text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0">
                        Turn your business into a sales machine today <span class="text-white font-semibold">3x
                            faster</span> revenue.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center lg:items-start gap-6 mb-12">
                        <a href="#"
                            class="group flex items-center gap-3 px-8 py-4 border border-yellow-400 text-yellow-400 rounded-full hover:bg-yellow-400 hover:text-black transition-all">
                            <span class="font-semibold">Request a demo</span>
                            <svg class="h-5 w-5 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" />
                            </svg>
                        </a>
                        <span class="text-gray-400 text-sm">Already using Jano? <a href="#"
                                class="text-yellow-400 hover:underline">Sign in</a></span>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start gap-5">
                        <div class="text-4xl md:text-5xl font-serif text-white">A+</div>
                        <div class="text-left">
                            <div class="text-lg font-semibold text-white leading-none">Rating</div>
                            <div class="text-gray-500 text-xs md:text-sm">Avg rating 4.8 makes us world best apps.</div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative h-[400px] md:h-[600px] flex items-center justify-center">
                    <div
                        class="absolute right-0 bottom-0 w-48 h-[350px] md:w-80 md:h-[520px] bg-[#fddea6] rounded-t-full overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80"
                            class="w-full h-full object-cover mix-blend-multiply opacity-80" alt="">
                    </div>
                    <div
                        class="absolute top-10 left-4 md:left-20 lg:left-0 w-36 h-36 md:w-56 md:h-56 bg-[#fbcfe8] rounded-tl-[40px] md:rounded-tl-[80px] rounded-br-[40px] md:rounded-br-[80px] overflow-hidden border-2 md:border-4 border-[#111111] z-10">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80"
                            class="w-full h-full object-cover mix-blend-multiply opacity-80" alt="">
                    </div>
                    <div
                        class="absolute bottom-10 left-10 md:left-32 w-28 h-28 md:w-44 md:h-44 bg-[#99f6e4] rounded-full overflow-hidden border-2 md:border-4 border-[#111111] z-20">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=800&q=80"
                            class="w-full h-full object-cover mix-blend-multiply opacity-80" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="min-h-[60vh] md:h-[84vh] flex items-center bg-cover bg-center bg-fixed py-20"
            style="background-image: url('{{ asset('assets/img/banner/banner-img-1.jpg') }}')">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="text-center md:text-left">
                        <p class="text-white mb-2 uppercase tracking-widest text-sm font-bold">Excellent</p>
                        <h1 class="text-4xl md:text-6xl lg:text-[80px] font-bold text-white leading-tight mb-4">
                            Stronger.<br>Healthier. You.
                        </h1>
                        <p class="text-white text-base md:text-lg max-w-md mx-auto md:mx-0">
                            Transform your body and mindset with expert online coaching. Personalized training, real
                            results.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="flex flex-col lg:flex-row gap-12 lg:gap-20 py-20 px-6 lg:px-24 items-center justify-between bg-white">
            <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                <div
                    class="flex items-center p-1.5 rounded-full border border-slate-200 text-gray-500 text-[10px] md:text-xs mb-6">
                    <div class="flex -space-x-2 mr-3">
                        <img class="size-6 md:size-8 rounded-full border-2 border-white"
                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=50" alt="">
                        <img class="size-6 md:size-8 rounded-full border-2 border-white"
                            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=50" alt="">
                    </div>
                    <p>Join community of 1m+ founders</p>
                </div>
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-medium leading-tight text-slate-900 mb-6">
                    Intelligent AI tools built to help.
                </h1>
                <p class="text-sm md:text-base text-slate-600 max-w-lg mb-8">
                    Unlock smarter workflows with AI tools designed to boost productivity and simplify tasks.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <button
                        class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-md px-8 py-3 transition-transform active:scale-95">Get
                        started</button>
                    <button
                        class="flex items-center gap-2 border border-slate-300 rounded-md px-6 py-3 hover:bg-slate-50 transition">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5M2 6h14v12H2z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Watch demo</span>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/hero-section-showcase-4.png"
                    class="w-full max-w-md lg:max-w-lg shadow-2xl rounded-2xl" alt="hero">
            </div>
        </section>

        <section class="relative bg-cover bg-center py-20 px-6"
            style="background-image: url('{{ asset('assets/img/banner/banner-img-4.jpg') }}')">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-32 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-6xl lg:text-[70px] font-bold text-white leading-[1.1] mb-6">
                        Best intelligent in transforms business.
                    </h1>
                    <p class="text-white opacity-90 text-base md:text-lg mb-10 max-w-xl mx-auto lg:mx-0">
                        Your growth is our mission. Neotix helps startup and enterprise unlock their full potential.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <button
                            class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-full font-semibold shadow-lg transition flex items-center justify-center gap-2">Get
                            Started Now <span>↗</span></button>
                        <button
                            class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition flex items-center justify-center gap-2">Let’s
                            Talk <span>↗</span></button>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <img class="max-h-[350px] md:max-h-[480px] rounded-2xl shadow-2xl w-full object-cover"
                        src="{{ asset('assets/img/hero/hero-1.jpg') }}" alt="">
                    <div
                        class="hidden sm:block absolute -left-10 top-1/2 -translate-y-1/2 w-64 p-6 bg-white/10 backdrop-blur-xl border border-white/20 text-white rounded-2xl shadow-2xl">
                        <h5 class="font-bold">Hii Add Some text</h5>
                        <p class="text-xs opacity-70">Custom description text goes here.</p>
                    </div>
                    <div
                        class="absolute bottom-4 right-4 px-6 py-3 bg-white/20 backdrop-blur-lg border border-white/30 text-white rounded-xl">
                        <h5 class="font-bold text-sm">Nikul Prajapati</h5>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="py-20 bg-slate-50 bg-[url('https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/bg-with-grid.png')] bg-cover">
            <div class="max-w-7xl mx-auto px-6 flex flex-col-reverse lg:flex-row gap-16 items-center">
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <h1
                        class="text-3xl md:text-5xl lg:text-6xl font-semibold leading-tight bg-gradient-to-r from-slate-900 to-[#6D8FE4] bg-clip-text text-dark mb-6">
                        Build Skills That Get You Hired
                    </h1>
                    <p class="text-slate-600 text-sm md:text-base mb-8 max-w-lg mx-auto lg:mx-0">
                        Join a world-class journey built to turn you into a tech professional.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 mb-10">
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-md shadow-lg transition">Get
                            Started</button>
                        <button
                            class="border border-indigo-400 text-indigo-600 px-6 py-3 rounded-md hover:bg-indigo-50 transition">Our
                            courses</button>
                    </div>
                    <div class="flex flex-col items-center lg:items-start gap-4">
                        <div class="flex -space-x-3">
                            <img class="size-10 rounded-full border-2 border-white shadow-sm"
                                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=100"
                                alt="">
                            <img class="size-10 rounded-full border-2 border-white shadow-sm"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=100"
                                alt="">
                            <img class="size-10 rounded-full border-2 border-white shadow-sm"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=100"
                                alt="">
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="flex justify-center lg:justify-start text-orange-400 mb-1">★★★★★</div>
                            <p class="text-xs text-slate-500 font-medium">Trusted by 1,000+ developers</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/users-group.png"
                        class="w-full h-auto" alt="">
                </div>
            </div>
        </section>

        <section class="py-20 px-6 max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <div class="w-full lg:w-1/2 order-2 lg:order-1 text-center lg:text-left">
                <h1 class="text-4xl md:text-6xl font-serif font-bold leading-tight mb-6">
                    Live With <span class="text-indigo-900 block md:inline">Creative Soul</span>
                </h1>
                <p class="text-gray-700 text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0">
                    ArtistryHaus curates a collection that transforms your home into a personal gallery.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-12">
                    <button class="bg-indigo-900 text-white px-8 py-4 rounded-lg hover:shadow-xl transition">Shop
                        Artworks</button>
                    <button
                        class="border border-gray-300 text-gray-700 px-8 py-4 rounded-lg hover:bg-slate-50 transition">Browse
                        Styles</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    <div><span class="text-2xl font-bold text-indigo-900 block">30+</span><span
                            class="text-xs text-gray-500 uppercase font-bold">Featured Artists</span></div>
                    <div><span class="text-2xl font-bold text-indigo-900 block">200+</span><span
                            class="text-xs text-gray-500 uppercase font-bold">Curated Pieces</span></div>
                    <div class="col-span-2 md:col-span-1"><span
                            class="text-2xl font-bold text-indigo-900 block">Global</span><span
                            class="text-xs text-gray-500 uppercase font-bold">Network</span></div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 order-1 lg:order-2 relative">
                <div
                    class="rounded-2xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img src="https://images.unsplash.com/photo-1497032205916-ac775f0649ae" class="w-full object-cover"
                        alt="">
                </div>
                <div
                    class="absolute -top-6 -right-2 md:-right-6 bg-white p-3 md:p-5 rounded-xl shadow-xl w-32 md:w-40 border border-slate-100">
                    <h4 class="font-bold text-indigo-950 text-sm md:text-base">Original</h4>
                    <p class="text-[10px] md:text-xs text-slate-500">Unique pieces only</p>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
