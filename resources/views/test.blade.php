<x-app-layout>
    @section('meta')
        <title>test</title>
        <title>About Our Vision | Nikul Prajapati</title>
        <meta name="description"
            content="Detailed insight into our development philosophy, performance metrics, and creative process." />
    @endsection

    @section('content')





        <section class="relative min-h-screen bg-white flex items-center py-10 lg:py-20 overflow-hidden px-6 lg:px-20">

            <div class="container mx-auto grid lg:grid-cols-12 gap-12 items-center relative z-10">
                <div class="lg:col-span-8 hero-image-wrapper relative group">
                    <div
                        class="relative overflow-hidden rounded-3xl  shadow-2xl border border-white/10">
                        <img id="random-hero-img" src="{{ asset('assets/img/banner/banner-img-3.jpg') }}" alt="Modern Tech"
                            class="hero-img-element w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    </div>
                </div>
                <div class=" lg:col-span-4 lg:-ml-[100px] z-2 hero-content bg-white rounded-3xl  border border-black/10 p-8">
                    <div
                        class="inline-block px-4 py-1.5 mb-6 text-sm font-semibold tracking-wide text-blue-400 uppercase bg-blue-400/10 rounded-full">
                        New Feature Released
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold text-black leading-tight mb-6">
                        Capture the <span class="text-blue-500">Moment</span> in Real-Time.
                    </h1>
                    <p class="text-slate-800 text-lg mb-8 max-w-lg">
                        Using dynamic imagery and smooth motion to tell your story. This layout uses GSAP for sequencing and
                        Tailwind for rapid UI styling.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="cta-btn bg-blue-600 hover:bg-blue-700 text-black px-8 py-4 rounded-xl font-semibold transition-all hover:scale-105 active:scale-95">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
