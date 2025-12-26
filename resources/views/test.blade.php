<x-app-layout>
    @section('meta')
        <title>test</title>
        <title>About Our Vision | Nikul Prajapati</title>
        <meta name="description"
            content="Detailed insight into our development philosophy, performance metrics, and creative process." />
    @endsection

    @section('content')
        {{-- <canvas id="bg-canvas"></canvas> --}}


            {{-- <section id="counters" class="py-12 bg-slate-900">
                <div class="container mx-auto px-6 lg:px-20">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 py-10">
                        <div class="text-center space-y-2 reveal counter-stagger">
                            <h2 class="text-5xl lg:text-6xl font-black text-white counter-value" data-target="50">0</h2>
                            <p class="text-indigo-400 font-bold uppercase tracking-widest text-xs">Global Clients</p>
                        </div>
                        <div class="text-center space-y-2 reveal counter-stagger">
                            <h2 class="text-5xl lg:text-6xl font-black text-white counter-value" data-target="120">0</h2>
                            <p class="text-indigo-400 font-bold uppercase tracking-widest text-xs">Projects Completed</p>
                        </div>
                        <div class="text-center space-y-2 reveal counter-stagger">
                            <h2 class="text-5xl lg:text-6xl font-black text-white counter-value" data-target="5">0</h2>
                            <p class="text-indigo-400 font-bold uppercase tracking-widest text-xs">Years Experience</p>
                        </div>
                        <div class="text-center space-y-2 reveal counter-stagger">
                            <h2 class="text-5xl lg:text-6xl font-black text-white counter-value" data-target="99">0</h2>
                            <p class="text-indigo-400 font-bold uppercase tracking-widest text-xs">Cup of Coffee / Day</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-24 px-6 lg:px-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                        <div
                            class="lg:col-span-7 bg-indigo-50 rounded-[50px] p-10 lg:p-16 flex flex-col justify-center reveal">
                            <h2 class="text-4xl lg:text-5xl font-black text-slate-900 mb-6">Our Philosophy</h2>
                            <div class="space-y-6 text-lg text-slate-600 leading-relaxed">
                                <p>
                                    In an era of templates and "good enough," we choose to be <strong>meticulous</strong>.
                                    We believe that the backend should be as clean as the UI is beautiful.
                                </p>
                                <p>
                                    Every project starts with a deep dive into user psychology. We ask "Why?" before we ask
                                    "How?".
                                    This results in interfaces that aren't just pretty—they are <strong>conversion
                                        engines</strong>.
                                </p>
                            </div>
                            <div class="mt-10 flex gap-4">
                                <div
                                    class="px-6 py-3 bg-white rounded-2xl shadow-sm border border-slate-200 font-bold text-slate-900">
                                    Pixel Perfect</div>
                                <div
                                    class="px-6 py-3 bg-white rounded-2xl shadow-sm border border-slate-200 font-bold text-slate-900">
                                    Clean Code</div>
                            </div>
                        </div>

                        <div class="lg:col-span-5 grid grid-cols-1 gap-8">
                            <div class="bg-slate-900 rounded-[50px] p-10 text-white relative overflow-hidden group reveal">
                                <div class="relative z-10">
                                    <h3 class="text-2xl font-bold mb-4">Innovation First</h3>
                                    <p class="text-slate-400 text-sm">We spend 20% of our time researching emerging tech
                                        like AI Integration and WebGL to keep our clients ahead.</p>
                                </div>
                                <div
                                    class="absolute -bottom-10 -right-10 text-9xl opacity-10 group-hover:rotate-12 transition-transform">
                                    🚀</div>
                            </div>

                            <div
                                class="bg-gradient-to-br from-purple-600 to-indigo-700 rounded-[50px] p-10 text-white reveal">
                                <h3 class="text-2xl font-bold mb-4">Community Focused</h3>
                                <p class="text-indigo-100 text-sm leading-relaxed">
                                    We believe in open-source. This theme itself is a gift to the developer community to
                                    help others build faster and better.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="py-24 bg-white relative">
                <div class="container mx-auto px-6 lg:px-20 text-center">
                    <h2 class="text-5xl font-black text-slate-900 mb-16">The Pillars of <span
                            class="gradient-text">Success</span></h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                        <div
                            class="group p-10 rounded-[45px] border-2 border-slate-100 hover:border-indigo-600 transition-all duration-500 reveal glass-stagger">
                            <div
                                class="w-20 h-20 bg-indigo-50 rounded-3xl flex items-center justify-center text-4xl mb-8 mx-auto group-hover:scale-110 transition-transform">
                                ⚡</div>
                            <h4 class="text-2xl font-black mb-4">Speed</h4>
                            <p class="text-slate-500">Fast loading isn't a feature; it's a requirement. We optimize for Core
                                Web Vitals from day one.</p>
                        </div>

                        <div
                            class="group p-10 rounded-[45px] border-2 border-slate-100 hover:border-purple-600 transition-all duration-500 reveal glass-stagger">
                            <div
                                class="w-20 h-20 bg-purple-50 rounded-3xl flex items-center justify-center text-4xl mb-8 mx-auto group-hover:scale-110 transition-transform">
                                🎨</div>
                            <h4 class="text-2xl font-black mb-4">Aesthetics</h4>
                            <p class="text-slate-500">Design that evokes emotion. We use depth, glassmorphism, and motion to
                                tell your story.</p>
                        </div>

                        <div
                            class="group p-10 rounded-[45px] border-2 border-slate-100 hover:border-pink-600 transition-all duration-500 reveal glass-stagger">
                            <div
                                class="w-20 h-20 bg-pink-50 rounded-3xl flex items-center justify-center text-4xl mb-8 mx-auto group-hover:scale-110 transition-transform">
                                🛡️</div>
                            <h4 class="text-2xl font-black mb-4">Security</h4>
                            <p class="text-slate-500">Using Laravel's top-tier security features to ensure your data and
                                your users are always safe.</p>
                        </div>
                    </div>
                </div>
            </section> --}}
    @endsection
</x-app-layout>
