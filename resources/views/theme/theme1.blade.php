<x-app-layout>
    @section('meta')
        <title>Theme 1</title>
        <meta name="title" content="Tailwind + GSAP Homepage Theme" />
        <meta name="description"
            content="Free open-source animated homepage theme built using Tailwind CSS and GSAP. Clean UI, responsive layout, and reusable components." />
        <meta name="keywords"
            content="tailwind css theme, gsap animation, landing page template, homepage ui, open source web template" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Tailwind + GSAP Homepage Theme" />
        <meta property="og:description" content="Free open-source homepage theme with animations and responsive design." />
        <meta name="twitter:card" content="summary_large_image" />

        <meta name="author" content="Nikul Prajapati" />
    @endsection
    @section('content')
        <canvas id="bg-canvas"></canvas>
        <div class="bg-white selection:bg-indigo-100">
            <div class="bg-slate-50/50 overflow-x-hidden">
                <section id="hero"
                    class="relative min-h-screen flex items-center justify-center px-6 lg:px-20 py-12 overflow-hidden">

                    <div id="circle-1"
                        class="absolute -top-20 -left-20 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-0 reveal">
                    </div>
                    <div id="circle-2"
                        class="absolute top-1/2 -right-20 w-80 h-80 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-0 reveal">
                    </div>

                    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                        <div class="z-10 order-2 lg:order-1">
                            <div
                                class="inline-block px-4 py-1.5 mb-6 text-sm font-bold tracking-widest text-indigo-600 uppercase bg-white border border-indigo-100 shadow-sm rounded-full reveal hero-stagger">
                                ✨ New Era of Design
                            </div>
                            <h1
                                class="text-6xl lg:text-8xl font-black text-slate-900 leading-[1.1] mb-6 reveal hero-stagger">
                                Create
                                <span class="gradient-text">Magic</span>
                                <br> Effortlessly.
                            </h1>
                            <p class="text-xl text-slate-600 max-w-xl mb-10 leading-relaxed reveal hero-stagger">
                                Transform your ideas into professional layouts in seconds. Use our Canva-inspired motion
                                engine to bring your website to life.
                            </p>
                            <div class="flex flex-wrap gap-5 reveal hero-stagger">
                                <button
                                    class="px-10 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                                    Start Designing
                                </button>
                                <button
                                    class="px-10 py-4 bg-white text-slate-900 border border-slate-200 rounded-2xl font-bold hover:bg-slate-50 transition-all">
                                    View Demo
                                </button>
                            </div>
                        </div>

                        <div class="relative order-1 lg:order-2 flex justify-center items-center">
                            <div id="image-bg"
                                class="absolute inset-0 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 rounded-[40px] shadow-2xl reveal">
                            </div>

                            <div id="hero-image"
                                class="relative z-10 w-full max-w-md overflow-hidden rounded-[30px] shadow-2xl border-[12px] border-white reveal">
                                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1200&auto=format&fit=crop"
                                    alt="Abstract Art" class="w-full h-[550px] object-cover">

                                <div id="badge"
                                    class="absolute bottom-8 left-2 bg-white p-4 rounded-2xl shadow-2xl reveal">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center shadow-lg shadow-green-200">
                                            <span class="text-white font-bold">✓</span>
                                        </div>
                                        <div>
                                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Status
                                            </p>
                                            <p class="text-sm font-bold text-slate-900">Design Ready</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section id="about-section"
            class="relative min-h-screen flex items-center justify-center px-6 lg:px-20 py-20 bg-white overflow-hidden">

            <div id="about-bg-blob"
                class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-pink-50 rounded-full filter blur-3xl opacity-0 reveal">
            </div>

            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

                <div class="relative order-2 lg:order-1 flex justify-center">
                    <div id="about-img-main"
                        class="relative z-20 w-full max-w-sm rounded-[40px] overflow-hidden shadow-2xl border-8 border-white reveal">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop"
                            alt="Team working" class="w-full h-[450px] object-cover">
                    </div>

                    <div id="about-img-sub"
                        class="absolute -top-12 -right-4 lg:-right-12 z-30 w-48 h-48 rounded-[30px] overflow-hidden shadow-2xl border-4 border-white reveal">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=400&auto=format&fit=crop"
                            alt="Design process" class="w-full h-full object-cover">
                    </div>

                    <div id="exp-badge"
                        class="absolute -bottom-6 -left-6 lg:-left-12 z-40 bg-indigo-600 p-8 rounded-[30px] shadow-2xl border-4 border-white reveal">
                        <p class="text-4xl font-black text-white">10+</p>
                        <p class="text-xs font-bold text-indigo-100 uppercase tracking-widest">Years Exp.</p>
                    </div>
                </div>

                <div class="z-10 order-1 lg:order-2 space-y-8">
                    <div class="reveal about-stagger">
                        <span class="text-indigo-600 font-bold uppercase tracking-widest text-sm">About Our Vision</span>
                        <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mt-2 leading-tight">
                            We bring <span class="gradient-text">Creativity</span> to your fingertips.
                        </h2>
                    </div>

                    <div class="space-y-4 reveal about-stagger">
                        <p class="text-lg text-slate-600 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-6 reveal about-stagger">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 font-bold">
                                ✓</div>
                            <span class="font-bold text-slate-800">Fast UI/UX</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 font-bold">
                                ✓</div>
                            <span class="font-bold text-slate-800">Clean Code</span>
                        </div>
                    </div>

                    <div class="reveal about-stagger">
                        <button
                            class="group flex items-center gap-3 text-lg font-bold text-slate-900 hover:text-indigo-600 transition-colors">
                            Learn more about us
                            <span
                                class="w-12 h-12 bg-slate-900 group-hover:bg-indigo-600 text-white rounded-full flex items-center justify-center transition-all">→</span>
                        </button>
                    </div>
                </div>

            </div>
        </section>
        <section id="glass-services"
            class="relative flex items-center justify-center px-6 lg:px-20 py-20 bg-white overflow-hidden">
            <div id="glass-blob-1"
                class="absolute top-1/4 -left-20 w-96 h-96 bg-indigo-50 rounded-full filter blur-[100px] opacity-0 reveal">
            </div>
            <div id="glass-blob-2"
                class="absolute bottom-1/4 -right-20 w-96 h-96 bg-purple-50 rounded-full filter blur-[100px] opacity-0 reveal">
            </div>
            <div class="container mx-auto z-10">
                <div class="max-w-3xl  reveal glass-stagger mb-16 sm:mb-0">
                    <span
                        class="text-indigo-600 font-bold uppercase tracking-widest text-xs px-3 py-1 bg-indigo-50 rounded-full">Our
                        Expertise</span>
                    <h2 class="text-5xl lg:text-7xl font-black text-slate-900 mt-6 leading-tight">
                        Design that <span class="gradient-text">Moves</span>.
                    </h2>
                    <p class="text-slate-500 mt-6 text-lg max-w-xl leading-relaxed">
                        We bridge the gap between imagination and reality with pixel-perfect designs and high-performance
                        development.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div
                        class="glass-card reveal group relative bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 hover:shadow-2xl hover:shadow-indigo-200 transition-all duration-500">
                        <div class="p-4 md:p-6">
                            <div class="w-full h-56 rounded-[35px] overflow-hidden mb-8 shadow-inner">
                                <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?q=80&w=800&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    alt="UI Design">
                            </div>
                            <div class="px-2">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-2xl">🎨</span>
                                    <h3 class="text-2xl font-black text-slate-900">Visual Identity</h3>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed mb-8">
                                    We create cohesive brand systems that resonate with your audience. From typography to
                                    color theory, we ensure your brand stands out in a crowded digital landscape.
                                </p>
                                <button
                                    class="w-full py-4 bg-slate-900 text-white font-bold rounded-[25px] hover:bg-indigo-600 transition-all shadow-lg">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>

                    <div
                        class="glass-card reveal group relative bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 hover:shadow-2xl hover:shadow-purple-200 transition-all duration-500">
                        <div class="p-4 md:p-6">
                            <div class="w-full h-56 rounded-[35px] overflow-hidden mb-8 shadow-inner">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    alt="Web Dev">
                            </div>
                            <div class="px-2">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-2xl">💻</span>
                                    <h3 class="text-2xl font-black text-slate-900">Web Experience</h3>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed mb-8">
                                    High-speed, SEO-optimized websites built with the latest technologies. We focus on
                                    performance, accessibility, and conversion-driven user interfaces.
                                </p>
                                <button
                                    class="w-full py-4 bg-slate-900 text-white font-bold rounded-[25px] hover:bg-purple-600 transition-all shadow-lg">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>

                    <div
                        class="glass-card reveal group relative bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 hover:shadow-2xl hover:shadow-pink-200 transition-all duration-500">
                        <div class="p-4 md:p-6">
                            <div class="w-full h-56 rounded-[35px] overflow-hidden mb-8 shadow-inner">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=800&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    alt="Growth">
                            </div>
                            <div class="px-2">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-2xl">📈</span>
                                    <h3 class="text-2xl font-black text-slate-900">Digital Growth</h3>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed mb-8">
                                    Data-backed strategies to scale your business. We optimize your digital presence to
                                    ensure you're not just reaching people, but the right people.
                                </p>
                                <button
                                    class="w-full py-4 bg-slate-900 text-white font-bold rounded-[25px] hover:bg-pink-600 transition-all shadow-lg">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="dev-profile"
            class="relative flex items-center justify-center px-6 lg:px-20 py-20 bg-white overflow-hidden">

            <!-- Soft Gradient Blobs -->
            <div class="absolute -top-10 left-0 w-[420px] h-[420px] bg-indigo-200 rounded-full blur-[120px] opacity-60">
            </div>
            <div class="absolute bottom-0 right-0 w-[420px] h-[420px] bg-pink-200 rounded-full blur-[120px] opacity-60">
            </div>

            <div class="container mx-auto max-w-6xl z-10">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                    <!-- IMAGE -->
                    <div class="relative flex justify-center">
                        <div
                            class="w-[420px] h-[480px] rounded-[40px] overflow-hidden shadow-2xl border-[10px] border-white bg-white dev-photo">
                            <img src="https://images.unsplash.com/photo-1604079628040-94301bb21b91?q=80&w=900&auto=format&fit=crop"
                                class="w-full h-full object-cover" />
                        </div>

                        <!-- Floating Experience Badge -->
                        <div class="absolute -bottom-6 -right-4 bg-slate-900 px-6 py-4 rounded-3xl shadow-2xl dev-badge">
                            <p class="text-4xl font-black text-white leading-none">5+</p>
                            <p class="text-[10px] tracking-widest text-slate-300 uppercase font-bold mt-1">
                                Years Experience
                            </p>
                        </div>
                    </div>

                    <!-- DETAILS PANEL -->
                    <div class="space-y-6">

                        <span
                            class="text-indigo-600 font-bold uppercase tracking-widest text-xs px-3 py-1 bg-indigo-50 rounded-full">
                            Lead Developer Profile
                        </span>

                        <h2 class="text-5xl lg:text-6xl font-black text-slate-900 leading-tight">
                            Nikul <span class="gradient-text">Prajapati</span>
                        </h2>

                        <p class="text-indigo-600 font-bold uppercase tracking-wide">
                            Full-Stack Laravel Developer • UI/UX Engineer
                        </p>

                        <p class="text-slate-600 text-lg leading-relaxed max-w-xl">
                            Blending modern UI motion, scalable backend architecture and performance-driven
                            design to build immersive digital products and clean web experiences.
                        </p>

                        <!-- SKILL TAGS -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-4 pt-2">
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-600 font-bold">✓</span> Laravel & REST APIs
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-600 font-bold">✓</span> Tailwind UI / UX
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-600 font-bold">✓</span> GSAP Animations
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-600 font-bold">✓</span> Performance Optimization
                            </div>
                        </div>

                        <!-- ACTION BUTTONS -->
                        <div class="flex flex-wrap gap-5 reveal hero-stagger">
                            <button
                                class="px-10 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                                View Portfolio
                            </button>
                            <button
                                class="px-10 py-4 bg-white text-slate-900 border border-slate-200 rounded-2xl font-bold hover:bg-slate-50 transition-all">
                                Contact Developer
                            </button>
                        </div>

                        <!-- SOCIAL ROW -->
                        <div class="flex gap-4 pt-3">
                            <a class="text-slate-600 hover:text-indigo-600 font-semibold">GitHub</a>
                            <a class="text-slate-600 hover:text-indigo-600 font-semibold">LinkedIn</a>
                            <a class="text-slate-600 hover:text-indigo-600 font-semibold">Instagram</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="why-choose"
            class="relative flex items-center justify-center px-6 lg:px-20 py-20 bg-white overflow-hidden">

            <!-- Background Glow Blobs -->
            <div class="absolute -top-10 left-0 w-[420px] h-[420px] bg-indigo-200 rounded-full blur-[120px] opacity-60">
            </div>
            <div class="absolute bottom-0 right-0 w-[420px] h-[420px] bg-pink-200 rounded-full blur-[120px] opacity-60">
            </div>

            <div class="container mx-auto z-10">

                <!-- Section Header -->
                <div class="max-w-3xl mx-auto text-center why-stagger">
                    <span
                        class="text-indigo-600 font-bold uppercase tracking-widest text-xs px-3 py-1 bg-indigo-50 rounded-full">
                        Why Choose Us
                    </span>

                    <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mt-4 leading-tight">
                        We Build <span class="gradient-text">Experience</span> — Not Just Websites
                    </h2>

                    <p class="text-slate-500 text-lg leading-relaxed max-w-2xl mx-auto mt-4">
                        Performance-first development, motion-driven UI and clean scalable architecture.
                    </p>
                </div>

                <!-- Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">

                    <!-- Card 1 -->
                    <div
                        class="why-card group bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 shadow-lg hover:shadow-indigo-200 hover:-translate-y-1 transition-all duration-500">
                        <div class="p-4 sm:p-6">

                            <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center mb-6">
                                <i class="fa-solid fa-bolt text-indigo-600 text-2xl"></i>
                            </div>

                            <h3 class="text-2xl font-black text-slate-900 mb-3">
                                High Performance
                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed">
                                Optimized code, fast APIs, image compression & Core Web Vitals focused builds.
                            </p>

                            <button
                                class="w-full mt-6 py-3 bg-slate-900 text-white font-bold rounded-[25px] hover:bg-indigo-600 transition-all">
                                Learn More
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="why-card group bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 shadow-lg hover:shadow-purple-200 hover:-translate-y-1 transition-all duration-500">
                        <div class="p-4 sm:p-6">

                            <div class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center mb-6">
                                <i class="fa-solid fa-wand-magic-sparkles text-purple-600 text-2xl"></i>
                            </div>

                            <h3 class="text-2xl font-black text-slate-900 mb-3">
                                Modern UI / UX Motion
                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed">
                                GSAP animations, interactive components & immersive user experience.
                            </p>

                            <button
                                class="w-full mt-6 py-3 bg-slate-900 text-white font-bold rounded-[25px] hover:bg-purple-600 transition-all">
                                Learn More
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="why-card group bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 shadow-lg hover:shadow-pink-200 hover:-translate-y-1 transition-all duration-500">
                        <div class="p-4 sm:p-6">

                            <div class="w-16 h-16 rounded-2xl bg-pink-100 flex items-center justify-center mb-6">
                                <i class="fa-solid fa-code-branch text-pink-600 text-2xl"></i>
                            </div>

                            <h3 class="text-2xl font-black text-slate-900 mb-3">
                                Clean Scalable Code
                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed">
                                Maintainable architecture with Laravel best-practices & modular structure.
                            </p>

                            <button
                                class="w-full mt-6 py-3 bg-slate-900 text-white font-bold rounded-[25px] hover:bg-pink-600 transition-all">
                                Learn More
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="showcase-section"
            class="relative flex items-center justify-center px-6 lg:px-20 py-20 bg-white overflow-hidden">

            <!-- Glow blobs -->
            <div class="absolute -top-10 left-0 w-[420px] h-[420px] bg-indigo-200 rounded-full blur-[120px] opacity-60">
            </div>
            <div class="absolute bottom-0 right-0 w-[420px] h-[420px] bg-pink-200 rounded-full blur-[120px] opacity-60">
            </div>

            <div class="container mx-auto z-10">

                <!-- Header -->
                <div class="max-w-3xl mx-auto text-center mb-14">
                    <span
                        class="text-indigo-600 font-bold uppercase tracking-widest text-xs px-3 py-1 bg-indigo-50 rounded-full">
                        Creative Showcase
                    </span>

                    <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mt-4 leading-tight">
                        Crafted With <span class="gradient-text">Passion</span>
                    </h2>
                </div>

                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                    <!-- Card 1 -->
                    <div
                        class="showcase-card group bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 shadow-xl hover:shadow-indigo-200 transition-all duration-500">

                        <div class="overflow-hidden rounded-[35px] h-72 relative">
                            <img src="https://picsum.photos/800/400" alt="Random Developer Image">

                        </div>

                        <div class="p-6">
                            <h3 class="text-3xl font-black text-slate-900 mb-3">
                                Modern Web Experience
                            </h3>

                            <p class="text-slate-600 leading-relaxed">
                                Interactive layouts, smooth animations and performance-first design.
                            </p>

                            <button
                                class="mt-6 w-full py-3 bg-slate-900 text-white rounded-[25px] font-bold hover:bg-indigo-600 transition-all">
                                Explore More
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="showcase-card group bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-2 shadow-xl hover:shadow-indigo-200 transition-all duration-500">

                        <div class="overflow-hidden rounded-[35px] h-72 relative">
                            <img src="https://picsum.photos/800/400" alt="Random Developer Image">

                        </div>

                        <div class="p-6">
                            <h3 class="text-3xl font-black text-slate-900 mb-3">
                                Creative UI / UX Motion
                            </h3>

                            <p class="text-slate-600 leading-relaxed">
                                Micro-interactions, depth effects and GSAP powered storytelling.
                            </p>

                            <button
                                class="mt-6 w-full py-3 bg-slate-900 text-white rounded-[25px] font-bold hover:bg-pink-600 transition-all">
                                View Details
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="contact-section"
            class="relative flex items-center justify-center px-6 lg:px-20 py-24 bg-white overflow-hidden">

            <!-- Glow Blobs -->
            <div class="absolute -top-10 left-0 w-[420px] h-[420px] bg-indigo-200 rounded-full blur-[120px] opacity-60">
            </div>
            <div class="absolute bottom-0 right-0 w-[420px] h-[420px] bg-pink-200 rounded-full blur-[120px] opacity-60">
            </div>

            <div class="container mx-auto max-w-5xl z-10 grid grid-cols-1 lg:grid-cols-2 gap-12">

                <!-- LEFT PANEL -->
                <div class="space-y-6 reveal contact-stagger">

                    <span
                        class="text-indigo-600 font-bold uppercase tracking-widest text-xs px-3 py-1 bg-indigo-50 rounded-full">
                        Let's Work Together
                    </span>

                    <h2 class="text-5xl lg:text-6xl font-black text-slate-900 leading-tight">
                        Have a Project in <span class="gradient-text">Mind?</span>
                    </h2>

                    <p class="text-slate-600 text-lg leading-relaxed max-w-md">
                        Whether you're building a product, redesigning a brand, or scaling a startup —
                        I craft modern UI motion, scalable Laravel architecture and performance-first web experiences.
                    </p>

                    <!-- HIGHLIGHT CARDS -->
                    <div class="grid grid-cols-2 gap-4 pt-3">

                        <div class="bg-white/50 border-2 border-slate-900 rounded-3xl p-4">
                            <p class="text-3xl font-black text-indigo-600 leading-none">20+</p>
                            <p class="text-xs uppercase font-bold tracking-widest text-slate-500 mt-1">
                                Completed Projects
                            </p>
                        </div>

                        <div class="bg-white/50 border-2 border-slate-900 rounded-3xl p-4">
                            <p class="text-3xl font-black text-indigo-600 leading-none">5 yrs</p>
                            <p class="text-xs uppercase font-bold tracking-widest text-slate-500 mt-1">
                                Experience
                            </p>
                        </div>

                    </div>

                    <!-- SOCIAL -->
                    <div class="flex gap-4 pt-2">
                        <a href="{{ $config['git'] }}"
                            class="text-slate-700 hover:text-indigo-600 font-semibold">GitHub</a>
                        <a href="{{ $config['linkedin'] }}"
                            class="text-slate-700 hover:text-indigo-600 font-semibold">LinkedIn</a>
                        <a href="{{ $config['insta'] }}"
                            class="text-slate-700 hover:text-indigo-600 font-semibold">Instagram</a>
                    </div>

                </div>

                <!-- CONTACT FORM CARD -->
                <div
                    class="bg-white/40 backdrop-blur-md rounded-[45px] border-2 border-slate-900 p-6 shadow-2xl reveal contact-stagger">

                    <h3 class="text-3xl font-black text-slate-900 mb-4">
                        Send a Message
                    </h3>

                    <p class="text-slate-600 mb-6">
                        Share project details — I usually reply within 24 hours.
                    </p>

                    <form class="space-y-5">

                        <div>
                            <label class="text-sm font-bold text-slate-700">Your Name</label>
                            <input type="text"
                                class="w-full mt-2 rounded-2xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none"
                                placeholder="John Doe">
                        </div>

                        <div>
                            <label class="text-sm font-bold text-slate-700">Email Address</label>
                            <input type="email"
                                class="w-full mt-2 rounded-2xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none"
                                placeholder="john@email.com">
                        </div>

                        <div>
                            <label class="text-sm font-bold text-slate-700">Project Details</label>
                            <textarea rows="4"
                                class="w-full mt-2 rounded-2xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-400 outline-none"
                                placeholder="Tell me about your project..."></textarea>
                        </div>

                        <button
                            class="w-full py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-indigo-600 hover:-translate-y-1 transition-all shadow-lg">
                            Send Message
                        </button>

                    </form>
                </div>

            </div>
        </section>
    @endsection
</x-app-layout>
