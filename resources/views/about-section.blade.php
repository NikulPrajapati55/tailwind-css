<x-app-layout>
    @section('meta')
        <title>About Section | Tailwind CSS Frontend</title>

        <meta name="description"
            content="About section built using Tailwind CSS and Laravel. Clean UI components, modern frontend practices, and reusable layouts.">

        <meta name="keywords" content="about section, tailwind css, frontend developer, laravel ui, web developer">

        <meta name="author" content="Nikul Prajapati">
        <meta name="robots" content="index, follow">

        <meta property="og:title" content="About Section | Tailwind CSS Frontend">
        <meta property="og:description"
            content="Learn more about this Tailwind CSS frontend project and reusable UI components built with Laravel.">
        <meta property="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="About Section | Tailwind CSS Frontend">
        <meta name="twitter:description"
            content="Tailwind CSS based About section with modern UI and clean frontend structure.">
        <meta name="author" content="Nikul Prajapati">
    @endsection

    @section('content')
        <section id="about-banner"
            class="relative min-h-[85vh] flex items-center justify-center px-6 pt-20 pb-20 overflow-hidden">

            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/img/banner/banner-img-4.jpg') }}" alt="Professional Workspace Background"
                    class="absolute inset-0 w-full h-full object-cover  opacity-90">

                <div class="absolute inset-0 bg-gradient-to-b from-white via-white/80 to-white"></div>
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-indigo-50/30 via-transparent to-transparent">
                </div>

                <div class="absolute top-20 right-[5%] w-80 h-80 bg-purple-300/30 rounded-full blur-[120px] animate-pulse">
                </div>
                <div class="absolute bottom-10 left-[5%] w-[500px] h-[500px] bg-indigo-200/40 rounded-full blur-[130px]">
                </div>
            </div>

            <div class="container mx-auto text-center relative z-10">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/80 backdrop-blur-md border border-slate-200 shadow-xl mb-10 reveal hero-stagger">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-xs font-black text-slate-700 uppercase tracking-widest">Available for New
                        Masterpieces</span>
                </div>

                <h1
                    class="text-6xl lg:text-[110px] font-black text-slate-900 leading-[0.85] mb-12 reveal hero-stagger tracking-tighter">
                    Engineering <br>
                    <span class="gradient-text">Digital</span>
                    Masterpieces.
                </h1>

                <div class="max-w-3xl mx-auto space-y-8 reveal hero-stagger">
                    <p class="text-xl lg:text-2xl text-slate-900 leading-relaxed font-medium">
                        We don't just build websites; we architect high-performance digital ecosystems. By merging
                        <span
                            class="text-indigo-900 font-bold underline decoration-indigo-200 decoration-4 underline-offset-4">Laravel's
                            robust backend</span>
                        with <span
                            class="text-purple-900 font-bold underline decoration-purple-200 decoration-4 underline-offset-4">GSAP's
                            cinematic motion</span>.
                    </p>

                    <p class="text-sm font-bold text-slate-700 uppercase tracking-[0.3em]">
                        Trusted by 50+ Global Innovators
                    </p>
                </div>
            </div>

            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce opacity-70">
                <div class="w-1 h-12 bg-gradient-to-b from-indigo-600 to-transparent rounded-full"></div>
            </div>
        </section>
        <section class="py-12 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 items-center">
                    <div class="relative px-4 md:px-0">
                        <img src="{{ asset('assets/img/about/about-img-6.jpg') }}" class="rounded-xl w-full" alt="">
                        <div
                            class="absolute -bottom-6 -right-4 md:-bottom-10 md:-right-10 w-2/3 border-[6px] md:border-[12px] border-white rounded-xl shadow-2xl">
                            <img src="{{ asset('assets/img/about/about-img-7.jpg') }}" class="rounded-lg w-full"
                                alt="">
                        </div>
                        <div
                            class="absolute top-1/2 left-0 md:left-[80px] -translate-y-1/2 -translate-x-1/2 w-24 h-24 md:w-36 md:h-36 bg-[#7c877f] text-white rounded-full flex flex-col items-center justify-center text-center border-4 md:border-[6px] border-white shadow-xl z-20">
                            <span class="text-xl md:text-3xl font-bold">15+</span>
                            <p class="text-[8px] md:text-[10px] uppercase font-bold leading-tight">Years Of<br>Experience
                            </p>
                        </div>
                    </div>

                    <div class="about__content mt-12 lg:mt-0">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-8 h-[2px] bg-[#7c877f]"></span>
                            <span class="text-[#7c877f] font-bold uppercase tracking-widest text-xs md:text-sm">About
                                Us</span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-extrabold text-[#111111] leading-tight mb-6">
                            Our passion for design, your <br> <span class="text-gray-400">vision realized</span>
                        </h2>
                        <p class="text-gray-600 leading-relaxed mb-8 text-sm md:text-base">
                            Our dedicated team of designers works closely with you to understand your vision and bring it to
                            life with thoughtful attention to detail.
                        </p>
                        <ul class="space-y-3 mb-10">
                            <li class="flex items-center gap-3 text-gray-700 font-medium text-sm md:text-base">
                                <span
                                    class="w-5 h-5 bg-[#7c877f] rounded-full flex-shrink-0 flex items-center justify-center text-white text-[10px]">✓</span>
                                creative expertise
                            </li>
                            <li class="flex items-center gap-3 text-gray-700 font-medium text-sm md:text-base">
                                <span
                                    class="w-5 h-5 bg-[#7c877f] rounded-full flex-shrink-0 flex items-center justify-center text-white text-[10px]">✓</span>
                                client-centered approach
                            </li>
                        </ul>

                        <div class="relative inline-block group w-full sm:w-auto">
                            <div
                                class="absolute -top-1 -left-1 w-full h-full bg-[#FCDB66] rounded-2xl md:rounded-r-[100px] md:rounded-bl-[100px] md:rounded-tl-none -z-10 transition-transform">
                            </div>
                            <div
                                class="bg-[#111111] p-6 md:p-8 md:pr-12 rounded-2xl md:rounded-r-[100px] md:rounded-bl-[100px] md:rounded-tl-none flex flex-col sm:flex-row items-center gap-6 md:gap-10 text-white">
                                <div class="flex items-start">
                                    <span class="text-5xl md:text-6xl font-bold text-[#FCDB66]">30</span>
                                    <span class="text-2xl md:text-3xl font-bold text-[#FCDB66] mt-1">+</span>
                                </div>
                                <div class="text-center sm:text-left">
                                    <p class="text-xs md:text-sm font-semibold text-gray-300 leading-snug mb-4">Industrial
                                        Years of Experience</p>
                                    <a href="#"
                                        class="inline-flex items-center bg-[#FCDB66] text-black px-5 py-2 rounded-full text-xs font-bold hover:bg-yellow-500 transition-colors">
                                        More Details
                                        <span
                                            class="ml-3 bg-black text-white w-6 h-6 rounded-full flex items-center justify-center text-[8px]">●●</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-20 bg-[#111111]">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-24 items-center">
                    <div class="relative z-[1] order-2 lg:order-1">
                        <img class="rounded-2xl rounded-bl-[80px] md:rounded-bl-[220px] w-full relative z-[2]"
                            src="{{ asset('assets/img/about/about-img-5.jpg') }}" alt="">
                        <img class="absolute -bottom-6 -left-4 md:-bottom-[30px] md:-left-[30px] z-[-1] w-24 md:w-auto"
                            src="{{ asset('assets/img/icon/shape-image.png') }}" alt="">
                    </div>

                    <div class="about__content text-white order-1 lg:order-2">
                        <div class="flex gap-2 items-center mb-5">
                            <img class="w-4 h-4" src="{{ asset('assets/img/vector/Vector-2.png') }}" alt="">
                            <p class="text-white text-base md:text-lg font-bold">About Your Agency</p>
                        </div>
                        <h2 class="text-3xl md:text-[40px] font-semibold leading-tight mb-8">
                            Empowering Businesses with Innovation and Success.
                        </h2>

                        <div
                            class="w-full lg:w-[600px] p-6 md:p-8 bg-[#111111] relative lg:z-30 grid grid-cols-1 sm:grid-cols-2 mt-10 lg:-ml-[200px] rounded-3xl lg:rounded-[220px] lg:rounded-tl-none border-amber-300 border-2 md:border-[6px] shadow-lg">
                            <div
                                class="flex flex-col justify-center items-center sm:items-start border-b sm:border-b-0 sm:border-r border-amber-300/30 pb-4 sm:pb-0">
                                <span class="text-5xl md:text-[60px] text-amber-300 font-bold">30 <sup>+</sup></span>
                                <p class="font-bold text-sm text-white">Years of Exp.</p>
                            </div>
                            <div class="pt-4 sm:pt-0 sm:pl-6 text-center sm:text-left">
                                <img src="{{ asset('assets/img/vector/icon-1.png') }}" class="mx-auto sm:mx-0"
                                    alt="">
                                <p class="mt-4 text-white text-sm">Our expert team delivers practical insights and support.
                                </p>
                                <button
                                    class="mt-5 px-6 py-2 text-sm font-semibold text-black bg-amber-300 rounded-full hover:bg-amber-400 transition">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-20 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <div class="relative px-8 lg:px-0">
                        <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-3xl shadow-xl w-full"
                            alt="">
                        <img src="{{ asset('assets/img/about/2.jpg') }}"
                            class="absolute -top-6 -left-6 md:-top-10 md:-left-[60px] rounded-3xl shadow-xl border-4 border-white w-[60%] md:w-[70%]">
                        <div
                            class="absolute -top-10 right-0 w-20 h-20 md:w-28 md:h-28 rounded-full bg-purple-600 text-white flex items-center justify-center text-center text-[10px] md:text-sm font-semibold shadow-lg border-4 border-white rotate-12">
                            Contact Us
                        </div>
                    </div>

                    <div class="mt-10 lg:mt-0">
                        <p class="text-purple-600 font-semibold mb-3">About Us</p>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                            Trusted partners in building event experiences
                        </h2>
                        <p class="text-gray-600 text-sm md:text-lg leading-relaxed mb-6">
                            We combine creativity, strategy, and seamless execution to deliver events that make a powerful
                            and lasting impression.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full flex-shrink-0 flex items-center justify-center bg-purple-600 text-white text-xs">
                                    ✓</div>
                                <p class="text-gray-700 text-sm md:text-base">Creative strategy & planning</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full flex-shrink-0 flex items-center justify-center bg-purple-600 text-white text-xs">
                                    ✓</div>
                                <p class="text-gray-700 text-sm md:text-base">Purpose-driven experiences</p>
                            </div>
                        </div>

                        <div
                            class="bg-gray-100 rounded-2xl p-4 md:p-6 flex flex-col md:flex-row items-center justify-between gap-4 mb-8 text-center md:text-left">
                            <p class="font-semibold text-gray-700 text-sm md:text-base">Trusted by Thousands</p>
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=3"
                                    class="w-8 h-8 md:w-10 md:h-10 rounded-full border-2 border-white">
                                <img src="https://i.pravatar.cc/40?img=14"
                                    class="w-8 h-8 md:w-10 md:h-10 rounded-full -ml-3 border-2 border-white">
                                <img src="https://i.pravatar.cc/40?img=22"
                                    class="w-8 h-8 md:w-10 md:h-10 rounded-full -ml-3 border-2 border-white">
                                <div
                                    class="bg-purple-600 text-white rounded-full text-[10px] font-bold w-8 h-8 md:w-10 md:h-10 flex items-center justify-center -ml-3">
                                    50+</div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-6 items-center">
                            <a href="#"
                                class="w-full sm:w-auto text-center px-8 py-3 rounded-full bg-purple-600 text-white font-semibold shadow-md">More
                                About Us</a>
                            <div class="text-center sm:text-left">
                                <span class="block font-semibold text-gray-800 text-sm">Email To Book Events</span>
                                <span class="text-gray-500 text-sm">info@domainname.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-20 bg-[#0d0d0d] text-white">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <div class="text-center lg:text-left">
                        <h2 class="text-4xl md:text-[55px] lg:text-[65px] font-semibold leading-tight mb-6">
                            Meet Your Financial <br class="hidden md:block"> Partner in Growth
                        </h2>
                        <p class="text-base md:text-xl opacity-90 leading-relaxed mb-10">
                            With over 18 years of experience helping businesses unlock financial clarity and growth, I guide
                            every step.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div
                                class="backdrop-blur-xl bg-white/5 border border-white/10 rounded-2xl p-6 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-blue-500/10 blur-xl">
                                </div>
                                <div class="relative">
                                    <h3 class="text-lg font-semibold mb-2">Growth Strategy</h3>
                                    <p class="text-3xl md:text-4xl font-bold text-[#FCDB66]">Top Rated</p>
                                </div>
                            </div>
                            <div
                                class="rounded-2xl p-6 bg-gradient-to-br from-blue-600/20 to-purple-600/20 border border-white/10 backdrop-blur-md">
                                <h4 class="text-2xl font-bold mb-2">18+ Years</h4>
                                <p class="opacity-80 text-sm">Experience in financial planning and strategy.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="rounded-3xl overflow-hidden shadow-2xl w-full max-w-md lg:max-w-none">
                            <img class="w-full h-auto object-cover" src="{{ asset('assets/img/about/1.png') }}"
                                alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
