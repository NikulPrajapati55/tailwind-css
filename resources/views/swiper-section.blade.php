<x-app-layout>
    @section('meta')

<title>Swiper Section | Tailwind CSS Frontend</title>

<meta name="description"
      content="Responsive Swiper slider section built with Tailwind CSS and Laravel. Clean animations, reusable UI components, and modern frontend design.">

<meta name="keywords"
      content="swiper slider, tailwind css swiper, laravel ui components, slider section, frontend developer, modern ui">

<meta name="author" content="Nikul Prajapati">
<meta name="robots" content="index, follow">


<!-- Open Graph -->
<meta property="og:title" content="Swiper Section | Tailwind CSS Frontend">
<meta property="og:description"
      content="Interactive Swiper slider section with Tailwind CSS and Laravel — clean UI, smooth animations, and reusable components.">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Swiper Section | Tailwind CSS Frontend">
<meta name="twitter:description"
      content="Tailwind CSS based Swiper slider with modern UI, smooth transitions, and reusable Laravel components.">

    @endsection
    @section('content')
        <section class="bg-[#212428] py-10 md:py-20 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 md:gap-20">
            <div class="text-center md:text-left">
                <h4 class="text-base md:text-lg text-[#ed5f38] font-bold uppercase tracking-wider">CREATIVE SERVICE</h4>
                <h2 class="text-3xl md:text-5xl lg:text-[48px] lg:leading-[58px] text-white font-bold mt-2 mb-3">
                    What can I do for <br class="hidden md:block"> service clients?
                </h2>
            </div>
            <div class="text-center md:text-left">
                <p class="text-base md:text-[18px] text-gray-300 font-medium leading-relaxed">
                    Promote your blog posts, case studies, and product announcements with
                    branded videos. Keep customers coming back with best effort service.
                </p>
            </div>
        </div>

        <div class="w-full relative mt-12 md:mt-20">
            <div class="swiper multiple-slide-carousel relative pb-24">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-[#1f2125] p-6 md:p-8 rounded-2xl h-auto md:h-[420px] border border-[#2b2e33] flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20 transition-all hover:-translate-y-2">
                            <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-xl mb-5 w-full h-[200px] md:h-[250px] object-cover">
                            <h3 class="text-lg md:text-xl font-bold text-white mb-2">General Health Checkup</h3>
                            <p class="text-gray-400 text-sm">Complete medical examination to ensure overall body health and early diagnosis.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-[#1f2125] p-6 md:p-8 rounded-2xl h-auto md:h-[420px] border border-[#2b2e33] flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20 transition-all hover:-translate-y-2">
                            <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-xl mb-5 w-full h-[200px] md:h-[250px] object-cover">
                            <h3 class="text-lg md:text-xl font-bold text-white mb-2">General Health Checkup</h3>
                            <p class="text-gray-400 text-sm">Complete medical examination to ensure overall body health and early diagnosis.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-[#1f2125] p-6 md:p-8 rounded-2xl h-auto md:h-[420px] border border-[#2b2e33] flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20 transition-all hover:-translate-y-2">
                            <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-xl mb-5 w-full h-[200px] md:h-[250px] object-cover">
                            <h3 class="text-lg md:text-xl font-bold text-white mb-2">General Health Checkup</h3>
                            <p class="text-gray-400 text-sm">Complete medical examination to ensure overall body health and early diagnosis.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-[#1f2125] p-6 md:p-8 rounded-2xl h-auto md:h-[420px] border border-[#2b2e33] flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20 transition-all hover:-translate-y-2">
                            <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-xl mb-5 w-full h-[200px] md:h-[250px] object-cover">
                            <h3 class="text-lg md:text-xl font-bold text-white mb-2">General Health Checkup</h3>
                            <p class="text-gray-400 text-sm">Complete medical examination to ensure overall body health and early diagnosis.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-[#1f2125] p-6 md:p-8 rounded-2xl h-auto md:h-[420px] border border-[#2b2e33] flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20 transition-all hover:-translate-y-2">
                            <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-xl mb-5 w-full h-[200px] md:h-[250px] object-cover">
                            <h3 class="text-lg md:text-xl font-bold text-white mb-2">General Health Checkup</h3>
                            <p class="text-gray-400 text-sm">Complete medical examination to ensure overall body health and early diagnosis.</p>
                        </div>
                    </div>
                    </div>

                <div class="absolute flex justify-center items-center left-0 right-0 mx-auto w-fit bottom-0 md:bottom-4 z-50">
                    <div class="swiper-button-prev group !static !p-2 flex justify-center items-center border border-indigo-600 !w-12 !h-12 rounded-full transition-all duration-500 hover:bg-indigo-600 mr-4">
                        <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" fill="none" viewBox="0 0 16 16">
                            <path d="M10 12L6 8l4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="swiper-button-next group !static !p-2 flex justify-center items-center border border-indigo-600 !w-12 !h-12 rounded-full transition-all duration-500 hover:bg-indigo-600 ml-4">
                        <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" fill="none" viewBox="0 0 16 16">
                            <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#162561] grid grid-cols-1 lg:grid-cols-2 gap-12 p-8 md:p-16 lg:p-20 items-center overflow-hidden">
    <div class="text-white space-y-6 text-center lg:text-left order-2 lg:order-1">
        <h1 class="font-[Comfortaa] text-3xl md:text-5xl font-bold leading-tight">
            Let's Travel The <br class="hidden md:block"> World Together!
        </h1>
        <p class="text-base md:text-lg opacity-90 max-w-xl mx-auto lg:mx-0">
            Our tours are designed to transport you to the heart of the world's most captivating destinations. Experience travel like never before.
        </p>
        <button class="bg-gray-200 text-[#202134] px-8 py-3 rounded-lg font-bold hover:bg-[#6f7aa6] hover:text-white transition-all transform active:scale-95">
            Explore Tours
        </button>
    </div>

    <div class="flex justify-center items-center order-1 lg:order-2">
        <div class="swiper cubeswiper w-[280px] h-[380px] sm:w-[350px] sm:h-[450px] md:w-[400px] md:h-[500px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide rounded-2xl overflow-hidden border border-white/30 shadow-2xl">
                    <img class="w-full h-full object-cover" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/49db1b5f-09f6-4433-be57-51687585600c" />
                </div>
                <div class="swiper-slide rounded-2xl overflow-hidden border border-white/30 shadow-2xl">
                    <img class="w-full h-full object-cover" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/2d165721-fe2e-4cf0-a63e-20bc5bc3f847" />
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
</x-app-layout>

