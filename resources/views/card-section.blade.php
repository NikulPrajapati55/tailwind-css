<x-app-layout>
    @section('meta')
        <title>Card Section - Frontend</title>
    @endsection
    @section('content')
        <!-- Features Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <span class="text-sm font-semibold tracking-wider uppercase text-blue-600">Features</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Everything You Need to Succeed</h2>
                    <p class="max-w-2xl mx-auto text-gray-600 mt-4">
                        Our platform is packed with powerful features designed to help you build, grow, and scale your
                        business.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300">
                        <div class="h-48 bg-gradient-to-r from-purple-500 to-indigo-600 flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-6xl"></i>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Lightning Fast</h3>
                            <p class="text-gray-600 mb-4">
                                Optimized for performance with instant load times and smooth animations that delight your
                                users.
                            </p>
                            <a href="#" class="text-blue-600 font-semibold inline-flex items-center">
                                Learn more <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300">
                        <div class="h-48 bg-gradient-to-r from-pink-500 to-red-500 flex items-center justify-center">
                            <i class="fas fa-paint-brush text-white text-6xl"></i>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Beautiful Design</h3>
                            <p class="text-gray-600 mb-4">
                                Stunning templates and customization options to make your project stand out from the crowd.
                            </p>
                            <a href="#" class="text-blue-600 font-semibold inline-flex items-center">
                                Learn more <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300">
                        <div class="h-48 bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white text-6xl"></i>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Secure & Reliable</h3>
                            <p class="text-gray-600 mb-4">
                                Enterprise-grade security and 99.9% uptime guarantee to keep your business running smoothly.
                            </p>
                            <a href="#" class="text-blue-600 font-semibold inline-flex items-center">
                                Learn more <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-[#08090d]">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- GLASS CARD 1 — Frosted Blur + Neon Ring -->
                <div
                    class="relative p-6 rounded-2xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.4)] hover:shadow-[0_15px_50px_rgba(0,0,0,0.6)] transition-all duration-300">
                    <div class="absolute top-3 right-3 w-6 h-6 rounded-full bg-cyan-400 blur-xl opacity-70"></div>

                    <div class="h-40 bg-white/10 rounded-xl border border-white/20 flex items-center justify-center">
                        <i class="fa-solid fa-shield-heart text-cyan-300 text-5xl"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-white">Cardiac Care</h3>
                    <p class="mt-2 text-gray-300">Modern heart monitoring & advanced cardiology support.</p>

                    <button
                        class="mt-4 px-5 py-2 rounded-lg bg-white/10 border border-white/20 text-white hover:bg-white/20 transition-all">
                        Explore
                    </button>
                </div>

                <!-- GLASS CARD 2 — Smoked Glass + Glow Border -->
                <div
                    class="p-6 rounded-2xl bg-black/40 backdrop-blur-xl border border-gray-700/40 shadow-xl hover:border-purple-500 hover:shadow-purple-500/30 transition-all duration-300">
                    <div class="h-40 bg-[#1c1f26] rounded-xl flex items-center justify-center border border-gray-600/40">
                        <i class="fa-solid fa-x-ray text-purple-400 text-5xl"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-white">Radiology</h3>
                    <p class="mt-2 text-gray-300">Digital X-ray & ultra-sharp imaging technologies.</p>

                    <button class="mt-4 px-5 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-500 transition">
                        Explore
                    </button>
                </div>

                <!-- GLASS CARD 3 — Double Glass Layer + Inner Shadow -->
                <div
                    class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-[inset_0_0_20px_rgba(255,255,255,0.08)] hover:shadow-[inset_0_0_30px_rgba(255,255,255,0.15)] transition-all duration-300">
                    <div class="h-40 bg-white/10 rounded-xl border border-white/10 flex items-center justify-center">
                        <i class="fa-solid fa-flask-vial text-emerald-300 text-5xl"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-white">Laboratory Tests</h3>
                    <p class="mt-2 text-gray-300">Advanced pathology with smart digital test accuracy.</p>

                    <button class="mt-4 px-5 py-2 bg-emerald-500 text-black rounded-lg hover:bg-emerald-400 transition">
                        Explore
                    </button>
                </div>

                <!-- GLASS CARD 4 — Crystal Glass + Cyan Edge Glow -->
                <div
                    class="p-6 rounded-2xl bg-white/5 backdrop-blur-2xl border border-white/10 relative hover:border-cyan-400 hover:shadow-[0_0_25px_rgba(0,255,255,0.4)] transition-all duration-300">
                    <div
                        class="h-40 bg-[#111419]/60 backdrop-blur-md rounded-xl border border-cyan-400/20 flex items-center justify-center">
                        <i class="fa-solid fa-syringe text-cyan-300 text-5xl"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-white">Vaccination Center</h3>
                    <p class="mt-2 text-gray-300">Secure & trusted vaccine programs for all ages.</p>

                    <button class="mt-4 px-5 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition">
                        Explore
                    </button>
                </div>

                <!-- GLASS CARD 5 — Dark Blur Glass + Gradient Arc -->
                <div
                    class="p-6 rounded-2xl bg-black/30 backdrop-blur-xl border border-white/10 shadow-lg relative overflow-hidden hover:scale-[1.03] transition-all duration-300">
                    <div
                        class="absolute -top-10 -left-10 w-32 h-32 bg-gradient-to-br from-pink-500 to-orange-400 rounded-full blur-3xl opacity-20">
                    </div>

                    <div class="h-40 bg-white/10 rounded-xl border border-white/10 flex items-center justify-center">
                        <i class="fa-solid fa-hospital-user text-pink-300 text-5xl"></i>
                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-white">Patient Support</h3>
                    <p class="mt-2 text-gray-300">Friendly, trained team assisting patients 24/7.</p>

                    <button class="mt-4 px-5 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-500 transition">
                        Explore
                    </button>
                </div>

            </div>
        </section>



        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- CARD 1 — Gradient Glass Premium -->
                <div
                    class="p-6 rounded-xl bg-white/5 backdrop-blur-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div
                        class="h-40 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-lg flex items-center justify-center text-white text-3xl font-bold">
                        01
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Advanced Diagnostics</h3>
                    <p class="mt-2 text-gray-600">High-tech scanning and AI-powered medical analysis.</p>
                    <button
                        class="mt-4 px-5 py-2 rounded-lg bg-black/60 backdrop-blur-xl text-white border border-white/20 hover:bg-black/80 transition">Learn
                        More</button>
                </div>

                <!-- CARD 2 — Black Glossy Shadow -->
                <div
                    class="p-6 rounded-xl bg-black text-white shadow-[0_10px_30px_rgba(0,0,0,0.4)] hover:scale-[1.03] transition-all duration-300">
                    <div
                        class="h-40 bg-black/40 rounded-lg border border-white/10 flex items-center justify-center text-3xl font-bold">
                        02
                    </div>
                    <h3 class="mt-5 text-xl font-semibold">Emergency Care</h3>
                    <p class="mt-2 text-gray-300">24/7 emergency treatment with rapid action specialists.</p>
                    <button
                        class="mt-4 px-5 py-2 rounded-lg bg-white/10 border border-white/20 hover:bg-white/20 transition">Learn
                        More</button>
                </div>

                <!-- CARD 3 — Soft Pastel Modern -->
                <div
                    class="p-6 rounded-xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200">
                    <div
                        class="h-40 bg-gradient-to-br from-pink-200 to-purple-300 rounded-lg flex items-center justify-center text-3xl font-bold text-gray-700">
                        03
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Full Body Checkup</h3>
                    <p class="mt-2 text-gray-600">Complete wellness screening for all age groups.</p>
                    <button class="mt-4 px-5 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition">Learn
                        More</button>
                </div>

                <!-- CARD 4 — Neon Edge Futuristic -->
                <div
                    class="p-6 rounded-xl bg-gray-900 text-white border border-gray-700 relative group transition-all duration-300">
                    <div
                        class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-cyan-400 transition">
                    </div>
                    <div class="h-40 bg-gray-800 rounded-lg flex items-center justify-center text-3xl font-bold">
                        04
                    </div>
                    <h3 class="mt-5 text-xl font-semibold">Surgery & Operations</h3>
                    <p class="mt-2 text-gray-300">Precision surgery with advanced robotic systems.</p>
                    <button class="mt-4 px-5 py-2 rounded-lg bg-cyan-500 hover:bg-cyan-400 text-gray-900 transition">Learn
                        More</button>
                </div>

                <!-- CARD 5 — Floating Soft Shadow Card -->
                <div
                    class="p-6 rounded-xl bg-white border border-gray-200 shadow-[0_20px_40px_rgba(0,0,0,0.1)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.15)] hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="h-40 bg-gradient-to-br from-green-300 to-green-500 rounded-lg flex items-center justify-center text-3xl font-bold text-gray-900">
                        05
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Medication & Pharmacy</h3>
                    <p class="mt-2 text-gray-600">On-site medical dispensary for instant medication.</p>
                    <button class="mt-4 px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">Learn
                        More</button>
                </div>

            </div>
        </section>
        <section class="py-16 bg-[#0d0f14]">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- CARD 1 — Glass Gradient -->
                <div
                    class="p-6 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="h-40 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-stethoscope text-white text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-white">Advanced Diagnostics</h3>
                    <p class="mt-2 text-gray-300">AI-powered scanning & medical imaging technology.</p>
                    <button
                        class="mt-4 px-5 py-2 rounded-lg bg-white/10 text-white border border-white/20 hover:bg-white/20 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 2 — Black Glossy -->
                <div
                    class="p-6 rounded-xl bg-black/60 text-white border border-white/5 shadow-[0_10px_30px_rgba(0,0,0,0.4)] hover:scale-[1.03] transition">
                    <div class="h-40 bg-black/40 rounded-lg border border-white/10 flex items-center justify-center">
                        <i class="fa-solid fa-truck-medical text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold">Emergency Care</h3>
                    <p class="mt-2 text-gray-300">24/7 rapid emergency response & treatment.</p>
                    <button
                        class="mt-4 px-5 py-2 rounded-lg bg-white/10 border border-white/20 hover:bg-white/20 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 3 — Soft Light on Dark -->
                <div class="p-6 rounded-xl bg-[#141820] text-white border border-gray-700 hover:shadow-2xl transition">
                    <div
                        class="h-40 bg-gradient-to-br from-pink-400 to-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-heart-pulse text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold">Full Body Checkup</h3>
                    <p class="mt-2 text-gray-300">Professional clinical screening for all health levels.</p>
                    <button class="mt-4 px-5 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 4 — Futuristic Neon -->
                <div
                    class="p-6 rounded-xl bg-[#0e1117] text-white border border-gray-800 relative group transition-all duration-300">
                    <div
                        class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-cyan-400 transition">
                    </div>
                    <div class="h-40 bg-gray-800 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-user-doctor text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold">Surgery & Operations</h3>
                    <p class="mt-2 text-gray-300">AI-assisted robotic surgical precision systems.</p>
                    <button class="mt-4 px-5 py-2 rounded-lg bg-cyan-500 hover:bg-cyan-400 text-gray-900 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 5 — Soft Glow Floating -->
                <div
                    class="p-6 rounded-xl bg-[#12161d] text-white border border-gray-700 shadow-[0_20px_40px_rgba(0,0,0,0.35)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.45)] hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="h-40 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-pills text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold">Medical Pharmacy</h3>
                    <p class="mt-2 text-gray-300">Instant medicine access & advanced prescriptions.</p>
                    <button class="mt-4 px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                        Learn More
                    </button>
                </div>

            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- CARD 1 — Strong Blue Gradient Glass -->
                <div
                    class="p-6 rounded-2xl bg-gradient-to-br from-blue-500/40 to-blue-700/40 backdrop-blur-xl shadow-xl border border-white/30 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="h-40 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center border border-white/40 backdrop-blur-lg">
                        <i class="fa-solid fa-stethoscope text-white text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Diagnostics</h3>
                    <p class="mt-2 text-gray-700">Advanced scanning using digital medical technology.</p>
                    <button
                        class="mt-4 px-5 py-2 bg-white/20 backdrop-blur-lg text-blue-900 border border-white/40 rounded-lg hover:bg-white/40 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 2 — Blue Glass + Edge Glow -->
                <div
                    class="p-6 rounded-2xl bg-gradient-to-br from-blue-600/40 to-blue-800/40 backdrop-blur-xl border border-white/30 shadow-lg hover:shadow-blue-500/30 hover:-translate-y-1 transition">
                    <div
                        class="h-40 bg-gradient-to-br from-blue-300 to-blue-500 rounded-xl border border-white/40 flex items-center justify-center backdrop-blur-md">
                        <i class="fa-solid fa-truck-medical text-white text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Emergency Care</h3>
                    <p class="mt-2 text-gray-700">Immediate emergency support available 24/7.</p>
                    <button class="mt-4 px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 3 — Crystal Blue Glass -->
                <div
                    class="p-6 rounded-2xl bg-gradient-to-br from-blue-400/30 to-blue-700/30 backdrop-blur-lg border border-blue-200 shadow-xl hover:-translate-y-1 hover:shadow-2xl transition">
                    <div
                        class="h-40 bg-white/20 backdrop-blur-xl rounded-xl border border-blue-200 flex items-center justify-center">
                        <i class="fa-solid fa-heart-pulse text-blue-900 text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Cardiology</h3>
                    <p class="mt-2 text-gray-700">Heart care with modern digital monitoring.</p>
                    <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-600 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 4 — Thick Glass Gradient -->
                <div
                    class="p-6 rounded-2xl bg-gradient-to-br from-blue-500/30 to-blue-900/40 backdrop-blur-2xl border border-white/30 shadow-lg hover:-translate-y-1 hover:shadow-2xl transition">
                    <div
                        class="h-40 bg-gradient-to-br from-blue-200 to-blue-400 rounded-xl flex items-center justify-center border border-white/40 backdrop-blur-md">
                        <i class="fa-solid fa-syringe text-blue-900 text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Vaccinations</h3>
                    <p class="mt-2 text-gray-700">All essential vaccines with certified quality.</p>
                    <button class="mt-4 px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition">
                        Learn More
                    </button>
                </div>

                <!-- CARD 5 — Strong Blue Frost Glass -->
                <div
                    class="p-6 rounded-2xl bg-gradient-to-br from-blue-600/30 to-blue-900/30 backdrop-blur-xl border border-white/40 shadow-lg hover:-translate-y-1 hover:shadow-2xl transition">
                    <div
                        class="h-40 bg-white/20 backdrop-blur-xl rounded-xl border border-white/40 flex items-center justify-center">
                        <i class="fa-solid fa-pills text-white text-5xl"></i>
                    </div>
                    <h3 class="mt-5 text-xl font-semibold text-gray-900">Pharmacy</h3>
                    <p class="mt-2 text-gray-700">Instant medicines from trusted suppliers.</p>
                    <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-600 transition">
                        Learn More
                    </button>
                </div>

            </div>
        </section>
        <!-- White-Blue Glass Cards on Black Background -->
        <section class="min-h-screen bg-black flex items-center justify-center py-20 px-6">
            <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Card 1 -->
                <div
                    class="backdrop-blur-xl bg-gradient-to-br from-white/10 via-blue-400/20 to-white/10 border border-blue-300/20 shadow-xl p-6 rounded-2xl text-white hover:scale-105 transition-all duration-300">
                    <i class="fa-solid fa-bolt text-blue-300 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Fast Performance</h3>
                    <p class="text-white/80">Experience lightning-fast speed with crystal-clear UI animations.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="backdrop-blur-xl bg-gradient-to-br from-white/10 via-blue-400/20 to-white/10 border border-blue-300/20 shadow-xl p-6 rounded-2xl text-white hover:scale-105 transition-all duration-300">
                    <i class="fa-solid fa-shield-halved text-blue-300 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Secure System</h3>
                    <p class="text-white/80">Your data stays protected with top-tier encrypted frameworks.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="backdrop-blur-xl bg-gradient-to-br from-white/10 via-blue-400/20 to-white/10 border border-blue-300/20 shadow-xl p-6 rounded-2xl text-white hover:scale-105 transition-all duration-300">
                    <i class="fa-solid fa-cloud text-blue-300 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Cloud Powered</h3>
                    <p class="text-white/80">Store, sync, and manage everything across all devices easily.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="backdrop-blur-xl bg-gradient-to-br from-white/10 via-blue-400/20 to-white/10 border border-blue-300/20 shadow-xl p-6 rounded-2xl text-white hover:scale-105 transition-all duration-300">
                    <i class="fa-solid fa-sitemap text-blue-300 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Smart Structure</h3>
                    <p class="text-white/80">Built with scalable architecture for long-term performance.</p>
                </div>

                <!-- Card 5 -->
                <div
                    class="backdrop-blur-xl bg-gradient-to-br from-white/10 via-blue-400/20 to-white/10 border border-blue-300/20 shadow-xl p-6 rounded-2xl text-white hover:scale-105 transition-all duration-300">
                    <i class="fa-solid fa-wand-magic-sparkles text-blue-300 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Modern UI</h3>
                    <p class="text-white/80">Beautiful and minimal user interface design with glassmorphism.</p>
                </div>

                <!-- Card 6 -->
                <div
                    class="backdrop-blur-xl bg-gradient-to-br from-white/10 via-blue-400/20 to-white/10 border border-blue-300/20 shadow-xl p-6 rounded-2xl text-white hover:scale-105 transition-all duration-300">
                    <i class="fa-solid fa-gear text-blue-300 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Easy Control</h3>
                    <p class="text-white/80">Manage everything easily with automated smart controls.</p>
                </div>

            </div>
        </section>
        <hr>
        <section class="bg-black py-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Card 1 -->
                    <div
                        class="backdrop-blur-xl bg-gradient-to-r from-purple-500/30 to-pink-500/30 border border-white/10
                  rounded-3xl p-8 shadow-xl hover:scale-[1.04] transition duration-300">
                        <div class="text-5xl mb-4 text-white/90">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <h3 class="text-2xl text-white font-semibold mb-3">Heart Specialist</h3>
                        <p class="text-gray-300">Advanced cardiology checkups with world-class experts.</p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="backdrop-blur-xl bg-gradient-to-r from-purple-500/30 to-pink-500/30 border border-white/10
                  rounded-3xl p-8 shadow-xl hover:scale-[1.04] transition duration-300">
                        <div class="text-5xl mb-4 text-white/90">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </div>
                        <h3 class="text-2xl text-white font-semibold mb-3">24/7 Emergency</h3>
                        <p class="text-gray-300">Quick and reliable emergency medical support.</p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="backdrop-blur-xl bg-gradient-to-r from-purple-500/30 to-pink-500/30 border border-white/10
                  rounded-3xl p-8 shadow-xl hover:scale-[1.04] transition duration-300">
                        <div class="text-5xl mb-4 text-white/90">
                            <i class="fa-solid fa-flask-vial"></i>
                        </div>
                        <h3 class="text-2xl text-white font-semibold mb-3">Lab Diagnostics</h3>
                        <p class="text-gray-300">High-accuracy laboratory tests with modern equipment.</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- ====== Cards Section Start -->
  <section class="bg-gray-300 pb-10 pt-20 lg:pb-20 lg:pt-[120px] ">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div
            class="mb-10 overflow-hidden rounded-lg bg-white shadow-1 duration-300 hover:shadow-3 dark:bg-dark-2 dark:shadow-card dark:hover:shadow-3">
            <img src="https://cdn.tailgrids.com/assets/images/application/cards/card-01/image-01.jpg" alt="image" class="w-full" />
            <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
              <h3>
                <a href="javascript:void(0)"
                  class="mb-4 block text-xl font-semibold text-dark hover:text-primary sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] dark:text-white">
                  50+ Best creative website themes & templates
                </a>
              </h3>
              <p class="mb-7 text-base leading-relaxed text-body-color dark:text-dark-6">
                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                elit. Lorem consectetur adipiscing elit.
              </p>

              <a href="javascript:void(0)"
                class="inline-block rounded-full border border-gray-3 px-7 py-2 text-base font-medium text-body-color transition hover:border-primary hover:bg-primary hover:text-white dark:border-dark-3 dark:text-dark-6">
                View Details
              </a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div
            class="mb-10 overflow-hidden rounded-lg bg-white shadow-1 duration-300 hover:shadow-3 dark:bg-dark-2 dark:shadow-card dark:hover:shadow-3">
            <img src="https://cdn.tailgrids.com/assets/images/application/cards/card-01/image-02.jpg" alt="image" class="w-full" />
            <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
              <h3>
                <a href="javascript:void(0)"
                  class="mb-4 block text-xl font-semibold text-dark hover:text-primary sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] dark:text-white">
                  The ultimate UX and UI guide to card design
                </a>
              </h3>
              <p class="mb-7 text-base leading-relaxed text-body-color">
                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                elit. Lorem consectetur adipiscing elit.
              </p>

              <a href="javascript:void(0)"
                class="inline-block rounded-full border border-gray-3 px-7 py-2 text-base font-medium text-body-color transition hover:border-primary hover:bg-primary hover:text-white dark:border-dark-3 dark:text-dark-6">
                View Details
              </a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div
            class="mb-10 overflow-hidden rounded-lg bg-white shadow-1 duration-300 hover:shadow-3 dark:bg-dark-2 dark:shadow-card dark:hover:shadow-3">
            <img src="https://cdn.tailgrids.com/assets/images/application/cards/card-01/image-03.jpg" alt="image" class="w-full" />
            <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
              <h3>
                <a href="javascript:void(0)"
                  class="mb-4 block text-xl font-semibold text-dark hover:text-primary sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] dark:text-white">
                  Creative Card Component designs graphic elements
                </a>
              </h3>
              <p class="mb-7 text-base leading-relaxed text-body-color">
                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                elit. Lorem consectetur adipiscing elit.
              </p>

              <a href="javascript:void(0)"
                class="inline-block rounded-full border border-gray-3 px-7 py-2 text-base font-medium text-body-color transition hover:border-primary hover:bg-primary hover:text-white dark:border-dark-3 dark:text-dark-6">
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Cards Section End -->
    @endsection
</x-app-layout>
