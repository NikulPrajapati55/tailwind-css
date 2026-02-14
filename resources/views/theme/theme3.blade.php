<x-app-layout>
    @section('meta')

        <title>SmileBright Dental | Modern Family Dentistry & Cosmetic Care</title>
<meta name="title" content="SmileBright Dental | Modern Family Dentistry & Cosmetic Care" />
<meta name="description" content="Premium dental care in Ahmedabad. Specializing in painless laser dentistry, Invisalign, and cosmetic veneers with a spa-like experience." />
<meta name="keywords" content="dentist in ahmedabad, cosmetic dentist gujarat, dental implants ahmedabad, invisalign india, smile makeover, Nikul Prajapati, dental ui theme" />
<meta name="author" content="Nikul Prajapati" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:type" content="website" />
<meta property="og:url" content="https://your-github-username.github.io/your-repo-name/" />
<meta property="og:title" content="SmileBright Dental | Modern UI/UX Theme" />
<meta property="og:description" content="A creative, responsive dental clinic theme built with Tailwind CSS. Perfect for modern medical practices." />
<meta property="og:image" content="https://github.com/NikulPrajapati55/tailwind-css/public/theme-3.jpg" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://github.com/NikulPrajapati55/tailwind-css" />
<meta property="twitter:title" content="SmileBright Dental | Modern Family Dentistry" />
<meta property="twitter:description" content="Transforming smiles with modern technology and a gentle touch." />
<meta property="twitter:image" content="https://github.com/NikulPrajapati55/tailwind-css/public/theme-3.jpg" />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
            .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.1); }
            .text-gradient { background: linear-gradient(to right, #60a5fa, #22d3ee); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
            .bento-card { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
            .bento-card:hover { transform: translateY(-10px); }
              @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
        </style>
    @endsection

    @section('content')
    <section class="relative min-h-screen bg-[#020617] flex items-center overflow-hidden py-4 lg:py-0">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] -mr-40 -mt-40"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <span class="px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-bold tracking-widest uppercase mb-6 inline-block">
                        Est. 2004 • Ahmedabad
                    </span>
                    <h1 class="text-6xl md:text-8xl font-extrabold text-white leading-none mb-8">
                        Art of the <br><span class="text-gradient">Perfect Smile.</span>
                    </h1>
                    <p class="text-gray-400 text-lg md:text-xl max-w-lg mb-10 mx-auto lg:mx-0">
                        Experience dental care redefined through digital precision and a spa-like atmosphere.
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                        <a href="#contact" class="px-8 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-500 shadow-xl shadow-blue-600/20 transition-all">Book Consultation</a>
                        <a href="#services" class="px-8 py-4 glass text-white font-bold rounded-2xl hover:bg-white/10 transition-all">Our Services</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10 rounded-[3rem] overflow-hidden border-8 border-white/5 shadow-2xl">
                        <img src="{{ asset('assets/img/about/about-img-14.jpg') }}" alt="Creative Dental" class="w-full h-[600px] object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 glass p-6 rounded-3xl z-20 animate-bounce-slow">
                        <div class="flex items-center gap-4">
                            <div class="text-4xl">⭐</div>
                            <div>
                                <p class="text-white font-bold text-xl">4.9/5</p>
                                <p class="text-gray-400 text-sm">2,500+ Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-60 -translate-x-1/2 -translate-y-1/2"></div>

    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16">

            <div class="w-full lg:w-1/2 relative">
                <div class="relative z-10">
                    <img src="{{ asset('assets/img/about/about-img-15.jpg') }}"
                         alt="Our Clinic"
                         class="rounded-[3rem] shadow-2xl w-full h-[500px] object-cover">
                </div>

                <div class="absolute -bottom-10 -right-6 md:right-10 z-20 bg-white p-8 rounded-[2rem] shadow-xl border border-blue-50 max-w-[280px] animate-float">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                            <i class="fa-solid fa-award text-xl"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 leading-tight">National Health <br>Excellence 2025</h4>
                    </div>
                    <p class="text-gray-500 text-sm">Recognized for pioneering laser-assisted dental surgeries in Gujarat.</p>
                </div>

                <div class="absolute -top-6 -left-6 text-blue-200 opacity-50">
                    <div class="grid grid-cols-4 gap-2">
                        <div class="w-2 h-2 bg-current rounded-full"></div>
                        </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="inline-block px-4 py-1 rounded-lg bg-blue-50 text-blue-600 font-bold text-sm uppercase tracking-widest mb-6">
                    Who We Are
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-8 leading-tight">
                    Crafting Healthy Smiles <br> With <span class="text-blue-600 italic">Human Touch.</span>
                </h2>
                <p class="text-gray-600 text-lg mb-10 leading-relaxed">
                    Since 2004, BrightSmile has been more than just a clinic. We are a team of artists and scientists dedicated to the philosophy that dental care should be 100% stress-free and life-changing.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 shrink-0 bg-slate-50 group-hover:bg-blue-600 rounded-2xl flex items-center justify-center text-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-microscope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Advanced Tech</h4>
                            <p class="text-gray-500 text-sm leading-snug">Precision 3D imaging for faster recovery.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 shrink-0 bg-slate-50 group-hover:bg-blue-600 rounded-2xl flex items-center justify-center text-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-user-doctor text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Expert Team</h4>
                            <p class="text-gray-500 text-sm leading-snug">MD specialists with global experience.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 shrink-0 bg-slate-50 group-hover:bg-blue-600 rounded-2xl flex items-center justify-center text-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-couch text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Spa Comfort</h4>
                            <p class="text-gray-500 text-sm leading-snug">Massage chairs and sedation options.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 shrink-0 bg-slate-50 group-hover:bg-blue-600 rounded-2xl flex items-center justify-center text-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-shield-heart text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Safety First</h4>
                            <p class="text-gray-500 text-sm leading-snug">Exceeding ISO sterilization protocols.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex items-center gap-6 p-6 bg-slate-900 rounded-3xl">
                    <div>
                        <p class="text-white font-bold italic text-lg">"Your smile is our greatest reward."</p>
                        <p class="text-blue-400 text-sm font-medium">Nikul Prajapti</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="services" class="py-24 bg-[#050A15] relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-cyan-500/10 rounded-full blur-[100px]"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-xl">
                <span class="text-blue-500 font-bold tracking-[0.2em] uppercase text-sm">Specialized Care</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mt-4">Dental Artistry <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">& Precision.</span></h2>
            </div>
            <p class="text-gray-400 max-w-xs text-sm md:text-base border-l-2 border-blue-600 pl-6">
                Using AI-guided diagnostics and painless laser technology to redefine your clinical experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

            <div class="md:col-span-8 group relative overflow-hidden rounded-[3rem] bg-slate-900 border border-white/5 h-[400px] flex items-end p-10">
                <img src="{{ asset('assets/img/about/about-img-16.jpg') }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#050A15] via-transparent to-transparent"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-600/40">
                        <i class="fa-solid fa-wand-magic-sparkles text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-2">Cosmetic Veneers</h3>
                    <p class="text-gray-300 max-w-sm text-sm md:text-base">Custom-sculpted porcelain layers designed to match your facial symmetry perfectly.</p>
                </div>
                <div class="absolute top-10 right-10">
                    <span class="text-white/10 text-7xl font-black group-hover:text-blue-500/20 transition-colors">01</span>
                </div>
            </div>

            <div class="md:col-span-4 group bg-gradient-to-br from-slate-900 to-[#0a1120] border border-white/5 rounded-[3rem] p-10 hover:border-blue-500/30 transition-all flex flex-col justify-between">
                <div class="w-14 h-14 bg-white/5 group-hover:bg-blue-600 rounded-2xl flex items-center justify-center text-blue-400 group-hover:text-white transition-all duration-500">
                    <i class="fa-solid fa-teeth text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white mb-3 mt-12">Invisalign®</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Virtually invisible aligners that straighten your teeth without the "metal-mouth" look.</p>
                </div>
                <div class="mt-8">
                    <a href="#" class="text-blue-400 font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                        Explore <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>

            <div class="md:col-span-4 group bg-slate-900/50 backdrop-blur-md border border-white/5 rounded-[3rem] p-8 hover:bg-slate-900 transition-all">
                <div class="w-12 h-12 bg-cyan-500/20 text-cyan-400 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-screwdriver text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Painless Implants</h3>
                <p class="text-gray-400 text-sm">Titanium replacements that feel and function like natural roots.</p>
            </div>

            <div class="md:col-span-4 group bg-slate-900/50 backdrop-blur-md border border-white/5 rounded-[3rem] p-8 hover:bg-slate-900 transition-all">
                <div class="w-12 h-12 bg-purple-500/20 text-purple-400 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-bolt-lightning text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Laser Whitening</h3>
                <p class="text-gray-400 text-sm">Achieve 8 shades of brightness in a single relaxing session.</p>
            </div>

            <div class="md:col-span-4 group bg-gradient-to-tr from-blue-600 to-cyan-500 rounded-[3rem] p-8 text-white relative overflow-hidden">
                <i class="fa-solid fa-face-smile absolute -bottom-4 -right-4 text-8xl opacity-10 group-hover:rotate-12 transition-transform"></i>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-child-reaching text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Kids' Corner</h3>
                    <p class="text-blue-50 text-sm">Making first visits fun and fearless for our youngest patients.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-1/4 -right-20 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-70"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 leading-tight">
                Where Technology Meets <br><span class="text-blue-600">Pure Comfort.</span>
            </h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full mb-6"></div>
            <p class="text-gray-500 text-lg">
                We believe a dental visit should feel like a spa day. Here’s why thousands of families in Ahmedabad trust BrightSmile.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">

            <div class="space-y-12">
                <div class="flex flex-col items-center lg:items-end text-center lg:text-right group">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">AI-Guided Precision</h3>
                    <p class="text-gray-500 leading-relaxed">
                        We use digital smile design and AI diagnostics to predict results before we even start.
                    </p>
                </div>

                <div class="flex flex-col items-center lg:items-end text-center lg:text-right group">
                    <div class="w-16 h-16 bg-cyan-50 text-cyan-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Painless Philosophy</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Say goodbye to needles. Our laser-assisted treatments ensure a 100% pain-free experience.
                    </p>
                </div>
            </div>

            <div class="relative group order-first lg:order-none">
                <div class="absolute inset-0 bg-blue-600 rounded-[4rem] rotate-3 scale-95 opacity-10 group-hover:rotate-6 transition-transform duration-500"></div>
                <div class="relative z-10 p-4 bg-white rounded-[4rem] shadow-2xl border border-slate-100">
                    <img src="{{ asset('assets/img/about/about-img-17.jpg') }}"
                         alt="High Tech Dental Care"
                         class="rounded-[3rem] w-full h-[500px] object-cover">
                </div>

                <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-slate-900 text-white px-8 py-4 rounded-2xl shadow-xl flex items-center gap-4 whitespace-nowrap z-20">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full border-2 border-slate-900 bg-blue-500 flex items-center justify-center text-[10px]"><i class="fa-solid fa-star"></i></div>
                        <div class="w-8 h-8 rounded-full border-2 border-slate-900 bg-cyan-500 flex items-center justify-center text-[10px]"><i class="fa-solid fa-star"></i></div>
                    </div>
                    <span class="font-bold text-sm">Voted #1 Clinic in Gujarat</span>
                </div>
            </div>

            <div class="space-y-12">
                <div class="flex flex-col items-center lg:items-start text-center lg:text-left group">
                    <div class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Lifetime Support</h3>
                    <p class="text-gray-500 leading-relaxed">
                        We don't just treat; we care. Every implant and veneer comes with a lifetime clinical guarantee.
                    </p>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left group">
                    <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-purple-600 group-hover:text-white transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">ISO Gold Standards</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Our sterilization lab exceeds international safety protocols for your complete protection.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="contact" class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-64 bg-[#050A15]"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Get in Touch</h2>
            <p class="text-blue-300 font-medium tracking-wide uppercase text-sm">Your new smile is just one click away</p>
        </div>

        <div class="bg-white rounded-[3rem] shadow-2xl shadow-blue-900/10 overflow-hidden flex flex-col lg:flex-row border border-slate-100">

            <div class="lg:w-2/5 bg-[#050A15] p-10 lg:p-16 text-white relative overflow-hidden">
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-blue-600/20 rounded-full blur-[80px]"></div>

                <h3 class="text-3xl font-bold mb-8">Contact Information</h3>

                <div class="space-y-10 relative z-10">
                    <div class="flex items-start gap-6 group">
                        <div class="w-14 h-14 shrink-0 bg-blue-600/10 border border-blue-500/20 rounded-2xl flex items-center justify-center text-blue-400 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-location-dot text-xl"></i>
                        </div>
                        <div>
                            <p class="text-blue-400 text-sm font-bold uppercase tracking-widest mb-1">Visit Us</p>
                            <p class="text-gray-300 text-lg">123 Dental Plaza, Satellite,<br>Ahmedabad, GJ 380015</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-6 group">
                        <div class="w-14 h-14 shrink-0 bg-blue-600/10 border border-blue-500/20 rounded-2xl flex items-center justify-center text-blue-400 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-phone-volume text-xl"></i>
                        </div>
                        <div>
                            <p class="text-blue-400 text-sm font-bold uppercase tracking-widest mb-1">Call Anytime</p>
                            <p class="text-gray-300 text-lg">+91 98765 43210</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-6 group">
                        <div class="w-14 h-14 shrink-0 bg-blue-600/10 border border-blue-500/20 rounded-2xl flex items-center justify-center text-blue-400 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-envelope-open-text text-xl"></i>
                        </div>
                        <div>
                            <p class="text-blue-400 text-sm font-bold uppercase tracking-widest mb-1">Email Us</p>
                            <p class="text-gray-300 text-lg">hello@brightsmile.com</p>
                        </div>
                    </div>
                </div>

                <div class="mt-16 flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="lg:w-3/5 p-10 lg:p-16 bg-white">
                <form action="#" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 uppercase tracking-wider ml-1">Full Name</label>
                            <input type="text" placeholder="Nikul Patel" class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 uppercase tracking-wider ml-1">Phone Number</label>
                            <input type="tel" placeholder="+91 00000 00000" class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider ml-1">Select Service</label>
                        <select class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-500 transition-all outline-none appearance-none cursor-pointer">
                            <option>Cosmetic Dentistry</option>
                            <option>Invisalign® Treatment</option>
                            <option>Laser Whitening</option>
                            <option>General Checkup</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 uppercase tracking-wider ml-1">Your Message</label>
                        <textarea placeholder="Tell us how we can help..." class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-500 transition-all outline-none h-32"></textarea>
                    </div>

                    <button class="w-full py-5 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-700 transition-all transform hover:-translate-y-1 shadow-xl shadow-blue-600/20 uppercase tracking-[0.2em]">
                        Send Booking Request
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <h3 class="text-3xl font-extrabold text-slate-900 mb-6">Frequently <br>Asked Questions</h3>
                <p class="text-gray-500 mb-8">Find quick answers to common concerns about treatments, insurance, and bookings.</p>
                <div class="w-20 h-1.5 bg-blue-600 rounded-full"></div>
            </div>

            <div class="space-y-4">
                <div class="group border border-slate-200 rounded-3xl overflow-hidden hover:border-blue-500 transition-colors">
                    <button class="w-full flex justify-between items-center p-6 text-left" onclick="toggleFaq(1)">
                        <span class="font-bold text-slate-800">Do you offer 0% EMI options?</span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i id="faq-icon-1" class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div id="faq-content-1" class="hidden px-6 pb-6 text-gray-500 leading-relaxed">
                        Yes! We provide flexible EMI plans with 0% interest for major procedures like Implants and Invisalign. Contact us for the latest tie-ups with banks.
                    </div>
                </div>

                <div class="group border border-slate-200 rounded-3xl overflow-hidden hover:border-blue-500 transition-colors">
                    <button class="w-full flex justify-between items-center p-6 text-left" onclick="toggleFaq(2)">
                        <span class="font-bold text-slate-800">Is laser treatment painful?</span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i id="faq-icon-2" class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div id="faq-content-2" class="hidden px-6 pb-6 text-gray-500 leading-relaxed">
                        Not at all. Laser dentistry minimizes the need for anesthesia and stitches, resulting in a virtually pain-free experience and faster healing times.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script>
         function toggleFaq(id) {
        const content = document.getElementById(`faq-content-${id}`);
        const icon = document.getElementById(`faq-icon-${id}`);

        content.classList.toggle('hidden');
        if (content.classList.contains('hidden')) {
            icon.classList.replace('fa-minus', 'fa-plus');
        } else {
            icon.classList.replace('fa-plus', 'fa-minus');
        }
    }
        function toggleFaq(id) {
            const panel = document.getElementById(`faq-${id}`);
            const icon = document.getElementById(`icon-${id}`);
            panel.classList.toggle('hidden');
            icon.textContent = panel.classList.contains('hidden') ? '+' : '−';
        }
    </script>
    @endsection
</x-app-layout>
