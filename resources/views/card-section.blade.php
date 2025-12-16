<x-app-layout>
    @section('meta')
        <title>Card Section - Frontend</title>
    @endsection
    @section('content')
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-white font-sans text-gray-900">

            <div class="max-w-7xl mx-auto mb-20 text-center">
                <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">
                    Crafted for <span class="text-indigo-600 relative inline-block">
                        Excellence
                        <svg class="absolute bottom-1 left-0 w-full h-2 text-indigo-200 -z-10" viewBox="0 0 100 10"
                            preserveAspectRatio="none">
                            <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="6" fill="none" />
                        </svg>
                    </span>
                </h2>
                <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                    Explore our diverse range of categories. Designed with clarity and precision to highlight what matters
                    most.
                </p>
            </div>

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <div
                    class="group relative flex flex-col bg-white border border-gray-100 rounded-[2rem] shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://picsum.photos/seed/workspace/800/600" alt="Workspace"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                        <div
                            class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-indigo-700 shadow-sm">
                            Productivity
                        </div>
                    </div>

                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-indigo-600 transition-colors">
                            Modern Workspaces
                        </h3>
                        <p class="text-gray-500 leading-relaxed mb-8 line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>

                        <div class="mt-auto flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-sm font-medium text-gray-400">June 24, 2024</span>
                            <a href="#"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 text-gray-900 transition-all duration-300 group-hover:w-28 group-hover:bg-indigo-600 group-hover:text-white">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                                <span
                                    class="hidden group-hover:block ml-2 text-sm font-semibold whitespace-nowrap">Read</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative flex flex-col bg-white border border-gray-100 rounded-[2rem] shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://picsum.photos/seed/creative/800/600" alt="Creative"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                        <div
                            class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-rose-600 shadow-sm">
                            Design
                        </div>
                    </div>

                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-rose-600 transition-colors">
                            Creative Solutions
                        </h3>
                        <p class="text-gray-500 leading-relaxed mb-8 line-clamp-3">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>

                        <div class="mt-auto flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-sm font-medium text-gray-400">June 20, 2024</span>
                            <a href="#"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 text-gray-900 transition-all duration-300 group-hover:w-28 group-hover:bg-rose-600 group-hover:text-white">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                                <span
                                    class="hidden group-hover:block ml-2 text-sm font-semibold whitespace-nowrap">Read</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative flex flex-col bg-white border border-gray-100 rounded-[2rem] shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://picsum.photos/seed/strategy/800/600" alt="Strategy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                        <div
                            class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-emerald-600 shadow-sm">
                            Business
                        </div>
                    </div>

                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-emerald-600 transition-colors">
                            Strategic Growth
                        </h3>
                        <p class="text-gray-500 leading-relaxed mb-8 line-clamp-3">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit.
                        </p>

                        <div class="mt-auto flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-sm font-medium text-gray-400">June 18, 2024</span>
                            <a href="#"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 text-gray-900 transition-all duration-300 group-hover:w-28 group-hover:bg-emerald-600 group-hover:text-white">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                                <span
                                    class="hidden group-hover:block ml-2 text-sm font-semibold whitespace-nowrap">Read</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative min-h-screen py-20 px-4 sm:px-6 lg:px-8 bg-slate-900 overflow-hidden font-sans">

            <div class="absolute top-0 right-1/4 w-96 h-96 bg-cyan-600/20 rounded-full blur-3xl -z-10"></div>
            <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl -z-10"></div>

            <div class="max-w-7xl mx-auto mb-16 text-center z-10 relative">
                <span class="text-cyan-400 font-semibold tracking-wider uppercase text-sm drop-shadow-md">World-Class
                    Care</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mt-2 mb-4 tracking-tight">Medical Services</h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    Combining advanced technology with compassionate care. Explore our specialized departments designed for
                    your well-being.
                </p>
            </div>

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">

                <div
                    class="flex flex-col group bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-rose-500/20 hover:border-rose-500/30">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://picsum.photos/seed/heart/800/600" alt="Cardiology"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>

                        <div
                            class="absolute -bottom-6 right-6 h-12 w-12 bg-rose-500 rounded-lg shadow-lg flex items-center justify-center transform group-hover:rotate-6 transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="p-6 pt-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-rose-400 transition-colors">
                            Cardiology</h3>
                        <p class="text-slate-400 text-sm mb-4 font-medium uppercase tracking-wide">Heart & Vascular Care</p>

                        <p class="text-slate-300 mb-6 flex-grow leading-relaxed">
                            Comprehensive care for heart conditions using state-of-the-art diagnostic tools. From prevention
                            to complex surgery.
                        </p>

                        <div class="h-px w-full bg-white/10 mb-4"></div>

                        <div class="flex items-center justify-between mt-auto">
                            <span
                                class="text-xs font-semibold text-rose-400 bg-rose-400/10 px-2 py-1 rounded border border-rose-400/20">24/7
                                Available</span>
                            <a href="#"
                                class="text-white hover:text-rose-400 text-sm font-semibold flex items-center gap-2 group-hover:gap-3 transition-all">
                                Details <span class="text-lg">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="flex flex-col group bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-cyan-500/20 hover:border-cyan-500/30">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://picsum.photos/seed/brain/800/600" alt="Neurology"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>

                        <div
                            class="absolute -bottom-6 right-6 h-12 w-12 bg-cyan-500 rounded-lg shadow-lg flex items-center justify-center transform group-hover:rotate-6 transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="p-6 pt-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">Neurology
                        </h3>
                        <p class="text-slate-400 text-sm mb-4 font-medium uppercase tracking-wide">Brain & Spine Center</p>

                        <p class="text-slate-300 mb-6 flex-grow leading-relaxed">
                            Advanced treatment for neurological disorders. Expert care for stroke, epilepsy, and spine
                            health using MRI technology.
                        </p>

                        <div class="h-px w-full bg-white/10 mb-4"></div>

                        <div class="flex items-center justify-between mt-auto">
                            <span
                                class="text-xs font-semibold text-cyan-400 bg-cyan-400/10 px-2 py-1 rounded border border-cyan-400/20">Top
                                Rated</span>
                            <a href="#"
                                class="text-white hover:text-cyan-400 text-sm font-semibold flex items-center gap-2 group-hover:gap-3 transition-all">
                                Details <span class="text-lg">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="flex flex-col group bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-blue-500/20 hover:border-blue-500/30">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://picsum.photos/seed/ambulance/800/600" alt="Emergency"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>

                        <div
                            class="absolute -bottom-6 right-6 h-12 w-12 bg-blue-600 rounded-lg shadow-lg flex items-center justify-center transform group-hover:rotate-6 transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="p-6 pt-8 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-400 transition-colors">Emergency
                        </h3>
                        <p class="text-slate-400 text-sm mb-4 font-medium uppercase tracking-wide">Trauma & Urgent Care</p>

                        <p class="text-slate-300 mb-6 flex-grow leading-relaxed">
                            Rapid response teams ready for critical situations. Equipped with modern life-support systems
                            and trauma specialists.
                        </p>

                        <div class="h-px w-full bg-white/10 mb-4"></div>

                        <div class="flex items-center justify-between mt-auto">
                            <span
                                class="text-xs font-semibold text-red-400 bg-red-400/10 px-2 py-1 rounded border border-red-400/20 animate-pulse">Urgent</span>
                            <a href="#"
                                class="text-white hover:text-blue-400 text-sm font-semibold flex items-center gap-2 group-hover:gap-3 transition-all">
                                Contact <span class="text-lg">→</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="min-h-screen py-20 px-4 sm:px-6 lg:px-8">

            <div class="max-w-7xl mx-auto mb-16 text-center">
                <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm">Our Blog</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 mb-4">Latest Insights</h2>
                <p class="text-xl text-gray-500 max-w-2xl mx-auto">
                    Discover the latest trends, strategies, and stories from our team. Curated for designers and
                    developers.
                </p>
            </div>

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <article
                    class="flex flex-col bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/tech/800/600" alt="Technology"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div
                            class="absolute top-4 left-4 bg-indigo-600 text-white text-xs font-bold uppercase px-3 py-1 rounded-full shadow-md">
                            Technology
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span><svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 5 min read</span>
                            <span class="mx-2">•</span>
                            <span>Oct 12, 2023</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 leading-tight hover:text-indigo-600 transition cursor-pointer">
                            The Future of Artificial Intelligence in Design
                        </h3>
                        <p class="text-gray-600 mb-6 flex-grow">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <div class="flex items-center justify-between mt-auto border-t pt-4 border-gray-100">
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full object-cover mr-3"
                                    src="https://randomuser.me/api/portraits/women/44.jpg" alt="Author">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Sarah Jenkins</p>
                                    <p class="text-xs text-gray-500">Lead Designer</p>
                                </div>
                            </div>
                            <a href="#"
                                class="text-indigo-600 hover:text-indigo-800 font-medium text-sm flex items-center group">
                                Read More
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/nature/800/600" alt="Nature"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div
                            class="absolute top-4 left-4 bg-emerald-500 text-white text-xs font-bold uppercase px-3 py-1 rounded-full shadow-md">
                            Lifestyle
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span><svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 3 min read</span>
                            <span class="mx-2">•</span>
                            <span>Oct 10, 2023</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 leading-tight hover:text-emerald-600 transition cursor-pointer">
                            Finding Balance in a Remote World
                        </h3>
                        <p class="text-gray-600 mb-6 flex-grow">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                        </p>
                        <div class="flex items-center justify-between mt-auto border-t pt-4 border-gray-100">
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full object-cover mr-3"
                                    src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Mark Thompson</p>
                                    <p class="text-xs text-gray-500">Wellness Coach</p>
                                </div>
                            </div>
                            <a href="#"
                                class="text-emerald-600 hover:text-emerald-800 font-medium text-sm flex items-center group">
                                Read More
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/arch/800/600" alt="Architecture"
                            class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div
                            class="absolute top-4 left-4 bg-orange-500 text-white text-xs font-bold uppercase px-3 py-1 rounded-full shadow-md">
                            Architecture
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span><svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 8 min read</span>
                            <span class="mx-2">•</span>
                            <span>Sep 28, 2023</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 leading-tight hover:text-orange-600 transition cursor-pointer">
                            Minimalist Structures in Urban Spaces
                        </h3>
                        <p class="text-gray-600 mb-6 flex-grow">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit.
                        </p>
                        <div class="flex items-center justify-between mt-auto border-t pt-4 border-gray-100">
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full object-cover mr-3"
                                    src="https://randomuser.me/api/portraits/women/65.jpg" alt="Author">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Emily Chen</p>
                                    <p class="text-xs text-gray-500">Architect</p>
                                </div>
                            </div>
                            <a href="#"
                                class="text-orange-600 hover:text-orange-800 font-medium text-sm flex items-center group">
                                Read More
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

            </div>
        </section>
        <section class="relative min-h-screen py-20 px-4 sm:px-6 lg:px-8 bg-slate-900 overflow-hidden font-sans">

            <div class="absolute top-0 left-1/4 w-96 h-96 bg-indigo-600/30 rounded-full blur-3xl -z-10"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-emerald-600/20 rounded-full blur-3xl -z-10"></div>

            <div class="max-w-7xl mx-auto mb-16 text-center z-10 relative">
                <span class="text-emerald-400 font-semibold tracking-wider uppercase text-sm drop-shadow-md">Dark Mode
                    Design</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mt-2 mb-4 tracking-tight">Glass UI Cards</h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    A modern dark UI featuring frosted glass effects, high contrast typography, and smooth
                    micro-interactions.
                </p>
            </div>

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">

                <article
                    class="flex flex-col group bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-emerald-500/20 hover:border-white/20">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/cyberpunk/800/600" alt="Cyberpunk City"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div
                            class="absolute top-4 left-4 bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Cyberpunk
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-sm text-slate-400 mb-3">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 4 min read</span>
                            <span class="mx-2 text-slate-600">•</span>
                            <span>Nov 24, 2023</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-white mb-3 leading-tight group-hover:text-emerald-400 transition-colors">
                            Neon Lights & Nightlife
                        </h3>
                        <p class="text-slate-300 mb-6 flex-grow leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                            vestibulum. Cras venenatis euismod malesuada.
                        </p>

                        <div class="h-px w-full bg-gradient-to-r from-transparent via-white/20 to-transparent mb-4"></div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-gradient-to-tr from-emerald-400 to-indigo-500 p-[1px]">
                                    <img class="h-full w-full rounded-full object-cover border-2 border-slate-900"
                                        src="https://randomuser.me/api/portraits/women/63.jpg" alt="Author">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">Alice V.</p>
                                </div>
                            </div>
                            <a href="#"
                                class="text-emerald-400 hover:text-emerald-300 text-sm font-semibold flex items-center gap-1 transition-all group-hover:gap-2">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col group bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-indigo-500/20 hover:border-white/20">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/code/800/600" alt="Code Screen"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div
                            class="absolute top-4 left-4 bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Development
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-sm text-slate-400 mb-3">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 6 min read</span>
                            <span class="mx-2 text-slate-600">•</span>
                            <span>Nov 20, 2023</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-white mb-3 leading-tight group-hover:text-indigo-400 transition-colors">
                            The Art of Clean Code
                        </h3>
                        <p class="text-slate-300 mb-6 flex-grow leading-relaxed">
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco.
                        </p>

                        <div class="h-px w-full bg-gradient-to-r from-transparent via-white/20 to-transparent mb-4"></div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-gradient-to-tr from-indigo-400 to-purple-500 p-[1px]">
                                    <img class="h-full w-full rounded-full object-cover border-2 border-slate-900"
                                        src="https://randomuser.me/api/portraits/men/85.jpg" alt="Author">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">David K.</p>
                                </div>
                            </div>
                            <a href="#"
                                class="text-indigo-400 hover:text-indigo-300 text-sm font-semibold flex items-center gap-1 transition-all group-hover:gap-2">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col group bg-white/5 backdrop-blur-lg border border-white/10 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-purple-500/20 hover:border-white/20">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/abstract/800/600" alt="Abstract Art"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <div
                            class="absolute top-4 left-4 bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Design
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center text-sm text-slate-400 mb-3">
                            <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 3 min read</span>
                            <span class="mx-2 text-slate-600">•</span>
                            <span>Nov 15, 2023</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-white mb-3 leading-tight group-hover:text-purple-400 transition-colors">
                            Designing for the Future
                        </h3>
                        <p class="text-slate-300 mb-6 flex-grow leading-relaxed">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum.
                        </p>

                        <div class="h-px w-full bg-gradient-to-r from-transparent via-white/20 to-transparent mb-4"></div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-9 w-9 rounded-full bg-gradient-to-tr from-purple-400 to-pink-500 p-[1px]">
                                    <img class="h-full w-full rounded-full object-cover border-2 border-slate-900"
                                        src="https://randomuser.me/api/portraits/women/33.jpg" alt="Author">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">Sarah M.</p>
                                </div>
                            </div>
                            <a href="#"
                                class="text-purple-400 hover:text-purple-300 text-sm font-semibold flex items-center gap-1 transition-all group-hover:gap-2">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

            </div>
        </section>

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
                            <img src="https://cdn.tailgrids.com/assets/images/application/cards/card-01/image-01.jpg"
                                alt="image" class="w-full" />
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
                            <img src="https://cdn.tailgrids.com/assets/images/application/cards/card-01/image-02.jpg"
                                alt="image" class="w-full" />
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
                            <img src="https://cdn.tailgrids.com/assets/images/application/cards/card-01/image-03.jpg"
                                alt="image" class="w-full" />
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
