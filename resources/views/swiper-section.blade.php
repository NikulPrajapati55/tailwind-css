<x-app-layout>
    @section('meta')
        <title>Swiper section</title>
    @endsection
    @section('content')
        <section class="bg-[#212428] py-10">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-20">
                    <div>
                        <h4 class="text-lg text-[#ed5f38] font-bold">CREATIVE SERVICE</h4>
                        <h2 class="text-[48px] leading-[58px] text-white font-bold mt-2 mb-3">
                            What can i do for service clients you
                        </h2>
                    </div>
                    <div>
                        <p class="text-[18px] text-white font-bold">
                            Promote your blog posts, case studies, and product announcements with
                            branded videos. Keep customers coming back with best effort service.
                        </p>
                    </div>
                </div>
                <div class="w-full relative mt-10">
                    <div class="swiper multiple-slide-carousel relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div
                                    class="bg-[#1f2125] p-8 rounded-2xl h-[420px] border border-[#2b2e33]
                        flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20
                        transition-all hover:-translate-y-2">
                                    <img src="{{ asset('assets/img/about/1.jpg') }}"
                                        class="rounded-xl mb-5 w-full h-[250px] object-cover">
                                    <h3 class="text-xl font-bold text-white mb-2">General Health Checkup</h3>
                                    <p class="text-gray-400 text-sm">
                                        Complete medical examination to ensure overall body health and early diagnosis.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-[#1f2125] p-8 rounded-2xl h-[420px] border border-[#2b2e33]
                        flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20
                        transition-all hover:-translate-y-2">
                                    <img src="{{ asset('assets/img/about/1.jpg') }}"
                                        class="rounded-xl mb-5 w-full h-[250px] object-cover">
                                    <h3 class="text-xl font-bold text-white mb-2">Surgical Care</h3>
                                    <p class="text-gray-400 text-sm">
                                        Modern surgical procedures with expert surgeons.
                                    </p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="bg-[#1f2125] p-8 rounded-2xl h-[420px] border border-[#2b2e33]
                        flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20
                        transition-all hover:-translate-y-2">
                                    <img src="{{ asset('assets/img/about/1.jpg') }}"
                                        class="rounded-xl mb-5 w-full h-[250px] object-cover">
                                    <h3 class="text-xl font-bold text-white mb-2">Pediatric Treatment</h3>
                                    <p class="text-gray-400 text-sm">
                                        Care for children including wellness checkups & diagnosis.
                                    </p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="bg-[#1f2125] p-8 rounded-2xl h-[420px] border border-[#2b2e33]
                        flex flex-col items-center text-center shadow-lg hover:shadow-indigo-500/20
                        transition-all hover:-translate-y-2">
                                    <img src="{{ asset('assets/img/about/1.jpg') }}"
                                        class="rounded-xl mb-5 w-full h-[250px] object-cover">
                                    <h3 class="text-xl font-bold text-white mb-2">Orthopedic Consultation</h3>
                                    <p class="text-gray-400 text-sm">
                                        Treatment for bones, muscles & joints by specialists.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="absolute flex justify-center items-center left-0 right-0 mx-auto w-fit bottom-12 z-50">

                            <div
                                class="swiper-button-prev group !p-2 flex justify-center items-center border border-indigo-600
                    !w-12 !h-12 rounded-full transition-all duration-500 hover:bg-indigo-600 !-translate-x-16">
                                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                    <path d="M10 12L6 8l4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div
                                class="swiper-button-next group !p-2 flex justify-center items-center border border-indigo-600
                    !w-12 !h-12 rounded-full transition-all duration-500 hover:bg-indigo-600 !translate-x-16">
                                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                    <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class=" bg-[#162561]  grid lg:grid-cols-2 gap-12 p-10 lg:p-20 items-center">
            <div class="text-white space-y-6">
                <h1 class="font-[Comfortaa] text-4xl md:text-5xl font-bold leading-tight">
                    Let's Travel The World Together!
                </h1>
                <p class="text-lg opacity-90">
                    Our tours are designed to transport you to the heart of the world's most captivating destinations…
                </p>
                <button
                    class="bg-gray-200 text-[#202134] px-5 py-2 rounded-lg font-semibold hover:bg-[#6f7aa6] hover:text-white transition">
                    Explore Tours
                </button>
            </div>
            <div class="swiper cubeswiper w-[350px] h-[450px] md:w-[400px] md:h-[500px]">
                <div class="swiper-wrapper">

                    <!-- CARD 1 -->
                    <div class="swiper-slide rounded-2xl overflow-hidden border border-white/30">
                        <img class="w-full h-full object-cover"
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/49db1b5f-09f6-4433-be57-51687585600c" />
                    </div>

                    <!-- CARD 2 -->
                    <div class="swiper-slide rounded-2xl overflow-hidden border border-white/30">
                        <img class="w-full h-full object-cover"
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/2d165721-fe2e-4cf0-a63e-20bc5bc3f847" />
                    </div>

                    <!-- CARD 3 -->
                    <div class="swiper-slide rounded-2xl overflow-hidden border border-white/30">
                        <img class="w-full h-full object-cover"
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/d311d1de-7382-4c03-b083-5f7e88458158" />
                    </div>

                    <!-- CARD 4 -->
                    <div class="swiper-slide rounded-2xl overflow-hidden border border-white/30">
                        <img class="w-full h-full object-cover"
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/be223a30-52d1-4a0b-8d57-2e52f02e2245" />
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>

