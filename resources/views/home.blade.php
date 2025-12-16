<x-app-layout>
    @section('meta')
        <title>home</title>
    @endsection

    @section('content')
        <!-- HERO 1 -->


        <section class="section py-20 h-[88vh] place-content-center"
            style="background-image: url('{{ asset('assets/img/banner/sample-1.webp') }}')">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 place-items-center">
                    <div class="section__content">
                        <h1 class="text-white mb-3 font-semibold text-6xl">
                            Lorem ipsum dolor sit amet.
                        </h1>
                        <p class="text-white ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, minus!
                            Vitae eos vero ullam odit recusandae dignissimos, architecto sunt provident!</p>
                        <button
                            class="mt-3 group relative overflow-hidden rounded-full bg-indigo-600 px-8 py-4 text-white shadow-xl transition-all duration-300 hover:bg-indigo-700 hover:shadow-2xl hover:shadow-indigo-500/40 hover:-translate-y-1 active:translate-y-0 active:scale-95">
                            <div
                                class="absolute top-0 -left-[100%] h-full w-full skew-x-12 bg-gradient-to-r from-transparent via-white/30 to-transparent transition-all duration-700 ease-in-out group-hover:left-[100%]">
                            </div>

                            <span class="relative z-10 flex items-center gap-2 font-semibold tracking-wide">
                                Get Started

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor"
                                    class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-[#111111] text-white min-h-screen flex items-center relative overflow-hidden font-sans">

            <div class="absolute top-20 right-20 opacity-20 pointer-events-none">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" stroke="white" stroke-width="2">
                    <path d="M10 10 L30 30 M50 10 L70 30 M90 10 L110 30" />
                    <path d="M10 50 L30 70 M50 50 L70 70 M90 50 L110 70" />
                </svg>
            </div>

            <div class="container mx-auto px-6 lg:px-16 py-12 flex flex-col lg:flex-row items-center z-10">

                <div class="lg:w-1/2 mb-16 lg:mb-0 relative z-20">
                    <h1 class="text-5xl lg:text-7xl font-serif font-medium leading-tight mb-6">
                        Find your <br>
                        quality <span class="relative inline-block">leads
                            <svg class="absolute w-full h-3 bottom-2 left-0 text-pink-500 -z-10" viewBox="0 0 100 10"
                                preserveAspectRatio="none">
                                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="none" />
                            </svg>
                        </span> in <br>
                        single click.
                    </h1>

                    <p class="text-gray-400 text-lg mb-10 max-w-lg leading-relaxed">
                        Turn your business into a sales machine today <span class="text-white font-semibold">3x
                            faster</span> revenue than the other market.
                    </p>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mb-16">
                        <a href="#"
                            class="group flex items-center gap-3 px-8 py-4 border border-yellow-400 text-yellow-400 rounded-full transition-all hover:bg-yellow-400 hover:text-black">
                            <span class="font-semibold">Request a demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <span class="text-gray-400 text-sm">Already using Jano? <a href="#"
                                class="text-yellow-400 hover:underline">Sign in</a></span>
                    </div>

                    <div class="flex items-center gap-5">
                        <div class="text-5xl font-serif text-white">A+</div>
                        <div>
                            <div class="text-lg font-semibold text-white">Rating</div>
                            <div class="text-gray-500 text-sm">Avg rating 4.8 makes us world best apps.</div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 relative h-[600px] w-full flex items-center justify-center lg:justify-end">

                    <div
                        class="absolute right-0 bottom-0 w-72 h-[480px] lg:w-80 lg:h-[520px] bg-[#fddea6] rounded-t-full overflow-hidden z-0 border-b-0">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Man in Yellow"
                            class="w-full h-full object-cover mix-blend-multiply opacity-90 hover:scale-105 transition-transform duration-700">
                    </div>

                    <div
                        class="absolute top-10 right-48 lg:right-64 w-56 h-56 bg-[#fbcfe8] rounded-tl-[80px] rounded-br-[80px] overflow-hidden z-10 shadow-2xl border-4 border-[#111111]">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Woman in Pink"
                            class="w-full h-full object-cover mix-blend-multiply opacity-90 hover:scale-105 transition-transform duration-700">
                    </div>

                    <div
                        class="absolute bottom-20 right-56 lg:right-72 w-44 h-44 bg-[#99f6e4] rounded-full overflow-hidden z-20 shadow-2xl border-4 border-[#111111]">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Man in Green"
                            class="w-full h-full object-cover mix-blend-multiply opacity-90 hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </section>

        <section class="h-[84vh] flex items-center"
            style="background-image: url('{{ asset('assets/img/banner/banner-img-1.jpg') }}');    background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-30">
                    <div class="">
                        <p class="text-white mb-2">Excellent</p>
                        <h1 class="text-[30px] font-bold text-white sm:text-[60px] lg:text-[80px] leading-[1.1]">Stronger.
                            Healthier. You.
                        </h1>
                        <p class="text-white text-lg">Transform your body and mindset with expert online coaching.
                            Personalized
                            training, real results, and full support — wherever you are.</p>
                    </div>
                </div>

            </div>
        </section>
        <section
            class="flex flex-col max-md:gap-20 md:flex-row pb-10 items-center justify-between mt-20 px-4 md:px-16 lg:px-24 xl:px-32">
            <div class="flex flex-col items-center md:items-start">
                <div
                    class="flex flex-wrap items-center justify-center p-1.5 rounded-full border border-slate-400 text-gray-500 text-xs">
                    <div class="flex items-center">
                        <img class="size-7 rounded-full border-3 border-white"
                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=50" alt="userImage1">
                        <img class="size-7 rounded-full border-3 border-white -translate-x-2"
                            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=50" alt="userImage2">
                        <img class="size-7 rounded-full border-3 border-white -translate-x-4"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=50&h=50&auto=format&fit=crop"
                            alt="userImage3">
                    </div>
                    <p class="-translate-x-2">Join community of 1m+ founders </p>
                </div>
                <h1
                    class="text-center md:text-left text-5xl leading-[68px] md:text-6xl md:leading-[84px] font-medium max-w-xl text-slate-900">
                    Intelligent AI tools built to help.
                </h1>
                <p class="text-center md:text-left text-sm text-slate-700 max-w-lg mt-2">
                    Unlock smarter workflows with AI tools designed to boost productivity, simplify tasks and help you do
                    more with less effort.
                </p>
                <div class="flex items-center gap-4 mt-8 text-sm">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white active:scale-95 rounded-md px-7 h-11">
                        Get started
                    </button>
                    <button
                        class="flex items-center gap-2 border border-slate-600 active:scale-95 hover:bg-white/10 transition text-slate-600 rounded-md px-6 h-11">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-video-icon lucide-video">
                            <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5" />
                            <rect x="2" y="6" width="14" height="12" rx="2" />
                        </svg>
                        <span>Watch demo</span>
                    </button>
                </div>
            </div>
            <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/hero-section-showcase-4.png"
                alt="hero" class="max-w-xs sm:max-w-sm lg:max-w-md transition-all duration-300">
        </section>
        <section class="section" style="background-image: url('{{ asset('assets/img/banner/banner-img-4.jpg') }}')">
            <div class="max-w-7xl mx-auto py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-40">
                    <div>
                        <h1 class="text-[80px] font-bold mb-5 leading-[76px] text-white">Best intelligent in transforms
                            business.</h1>
                        <p class="text-white">Your growth is our mission. Neotix helps startup and enterprise unlock their
                            full potential.</p>
                        <div class="flex items-center gap-4 mt-5"> <button
                                class="px-6 py-3 rounded-full bg-gradient-to-r from-orange-500 to-orange-600
               text-white font-semibold shadow-lg hover:opacity-90
               flex items-center gap-2 transition">
                                Get Started Now
                                <span class="text-lg">↗</span>
                            </button>
                            <button
                                class="px-6 py-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20
               text-white font-semibold shadow-md hover:bg-white/20
               flex items-center gap-2 transition">
                                Let’s Talk
                                <span class="text-lg">↗</span>
                            </button>
                        </div>
                    </div>
                    <div class="relative w-max">
                        <img class="max-h-[480px] rounded-[16px]" src="{{ asset('assets/img/hero/hero-1.jpg') }}"
                            alt="">
                        <div
                            class="absolute w-[300px] h-[100px] top-50 -left-[100px] p-10 bg-white/10 backdrop-blur-md border border-white/20
               text-white font-semibold shadow-md rounded-[16px]">
                            <h5>Hii Add Some text </h5>
                        </div>
                        <div
                            class="absolute w-[300px] h-[50px] bottom-0 right-0 p-4 flex justify-center items-center bg-white/10 backdrop-blur-md border border-white/20
               text-white font-semibold shadow-md rounded-[16px]">
                            <h5>Nikul Prajapati</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="pb-32 md:pb-44 bg-[url('https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/bg-with-grid.png')] bg-cover bg-center bg-no-repeat text-slate-800 text-sm">
            <div class="flex flex-col-reverse gap-10 md:flex-row px-4 md:px-16 lg:px-24 xl:px-32 mt-12 md:mt-32">
                <div class="max-md:text-center">
                    <h5
                        class="text-4xl md:text-6xl/[76px] font-semibold max-w-xl bg-gradient-to-r from-slate-900 to-[#6D8FE4] text-transparent bg-clip-text">
                        Build Skills That Get You Hired
                    </h5>

                    <p class="text-sm md:text-base max-w-lg mt-6 max-md:px-2 text-slate-600">
                        Join a world-class, personalized learning journey built to turn you into a high-performing tech
                        professional — and get hired by top product companies.
                    </p>
                    <div class="flex items-center gap-4 mt-6">
                        <button
                            class="px-8 py-3 rounded-md bg-indigo-600 hover:bg-indigo-700 text-white active:scale-95 transition-all"
                            type="button">
                            Get Started
                        </button>
                        <button
                            class="px-5 py-3 rounded-md bg-white text-indigo-600 border border-indigo-400 flex items-center gap-2 hover:bg-indigo-600/5 active:scale-95 transition-all"
                            type="button">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.68395 9.89231C6.62515 9.66436 6.50633 9.45634 6.33987 9.28988C6.17341 9.12341 5.96538 9.0046 5.73743 8.94579L1.69644 7.90377C1.6275 7.8842 1.56682 7.84267 1.52362 7.7855C1.48041 7.72832 1.45703 7.65861 1.45703 7.58694C1.45703 7.51527 1.48041 7.44556 1.52362 7.38839C1.56682 7.33121 1.6275 7.28969 1.69644 7.27012L5.73743 6.22743C5.9653 6.16868 6.17327 6.04997 6.33973 5.88363C6.50618 5.71729 6.62504 5.5094 6.68395 5.28157L7.72598 1.24058C7.74535 1.17137 7.78683 1.11039 7.84409 1.06695C7.90136 1.02351 7.97126 1 8.04313 1C8.11501 1 8.18491 1.02351 8.24217 1.06695C8.29943 1.11039 8.34092 1.17137 8.36029 1.24058L9.40166 5.28157C9.46046 5.50952 9.57928 5.71755 9.74574 5.88401C9.9122 6.05047 10.1202 6.16928 10.3482 6.22809L14.3892 7.26946C14.4587 7.28863 14.5199 7.33006 14.5636 7.38741C14.6073 7.44476 14.6309 7.51486 14.6309 7.58694C14.6309 7.65903 14.6073 7.72912 14.5636 7.78647C14.5199 7.84382 14.4587 7.88526 14.3892 7.90442L10.3482 8.94579C10.1202 9.0046 9.9122 9.12341 9.74574 9.28988C9.57928 9.45634 9.46046 9.66436 9.40166 9.89231L8.35963 13.9333C8.34026 14.0025 8.29878 14.0635 8.24151 14.1069C8.18425 14.1504 8.11435 14.1739 8.04247 14.1739C7.9706 14.1739 7.9007 14.1504 7.84344 14.1069C7.78617 14.0635 7.74469 14.0025 7.72532 13.9333L6.68395 9.89231Z"
                                    stroke="#4F39F6" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3105 1.66016V4.29487" stroke="#4F39F6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.6328 2.97656H11.998" stroke="#4F39F6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M2.76953 10.8809V12.1982" stroke="#4F39F6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M3.42673 11.541H2.10938" stroke="#4F39F6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span>Our courses</span>
                        </button>
                    </div>
                    <div class="flex items-center mt-9">
                        <div class="flex -space-x-3.5 pr-3">
                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=200"
                                alt="image"
                                class="size-10 border-2 border-white rounded-full hover:-translate-y-px transition z-1">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=200"
                                alt="image"
                                class="size-10 border-2 border-white rounded-full hover:-translate-y-px transition z-[2]">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=200&h=200&auto=format&fit=crop"
                                alt="image"
                                class="size-10 border-2 border-white rounded-full hover:-translate-y-px transition z-[3]">
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&auto=format&fit=crop&q=60"
                                alt="image"
                                class="size-10 border-2 border-white rounded-full hover:-translate-y-px transition z-[4]">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=200&auto=format&fit=crop&q=60"
                                alt="image"
                                class="size-10 border-2 border-white rounded-full hover:-translate-y-px transition z-[4]">
                        </div>
                        <div>
                            <div class="flex items-center gap-px">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.85536 0.463527C6.00504 0.00287118 6.65674 0.00287028 6.80642 0.463526L7.82681 3.60397C7.89375 3.80998 8.08572 3.94946 8.30234 3.94946H11.6044C12.0888 3.94946 12.2901 4.56926 11.8983 4.85397L9.22687 6.79486C9.05162 6.92219 8.97829 7.14787 9.04523 7.35388L10.0656 10.4943C10.2153 10.955 9.68806 11.338 9.2962 11.0533L6.62478 9.11244C6.44954 8.98512 6.21224 8.98512 6.037 9.11244L3.36558 11.0533C2.97372 11.338 2.44648 10.955 2.59616 10.4943L3.61655 7.35388C3.68349 7.14787 3.61016 6.92219 3.43491 6.79486L0.763497 4.85397C0.37164 4.56927 0.573027 3.94946 1.05739 3.94946H4.35944C4.57606 3.94946 4.76803 3.80998 4.83497 3.60397L5.85536 0.463527Z"
                                        fill="#FF8F20" />
                                </svg>
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.85536 0.463527C6.00504 0.00287118 6.65674 0.00287028 6.80642 0.463526L7.82681 3.60397C7.89375 3.80998 8.08572 3.94946 8.30234 3.94946H11.6044C12.0888 3.94946 12.2901 4.56926 11.8983 4.85397L9.22687 6.79486C9.05162 6.92219 8.97829 7.14787 9.04523 7.35388L10.0656 10.4943C10.2153 10.955 9.68806 11.338 9.2962 11.0533L6.62478 9.11244C6.44954 8.98512 6.21224 8.98512 6.037 9.11244L3.36558 11.0533C2.97372 11.338 2.44648 10.955 2.59616 10.4943L3.61655 7.35388C3.68349 7.14787 3.61016 6.92219 3.43491 6.79486L0.763497 4.85397C0.37164 4.56927 0.573027 3.94946 1.05739 3.94946H4.35944C4.57606 3.94946 4.76803 3.80998 4.83497 3.60397L5.85536 0.463527Z"
                                        fill="#FF8F20" />
                                </svg>
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.85536 0.463527C6.00504 0.00287118 6.65674 0.00287028 6.80642 0.463526L7.82681 3.60397C7.89375 3.80998 8.08572 3.94946 8.30234 3.94946H11.6044C12.0888 3.94946 12.2901 4.56926 11.8983 4.85397L9.22687 6.79486C9.05162 6.92219 8.97829 7.14787 9.04523 7.35388L10.0656 10.4943C10.2153 10.955 9.68806 11.338 9.2962 11.0533L6.62478 9.11244C6.44954 8.98512 6.21224 8.98512 6.037 9.11244L3.36558 11.0533C2.97372 11.338 2.44648 10.955 2.59616 10.4943L3.61655 7.35388C3.68349 7.14787 3.61016 6.92219 3.43491 6.79486L0.763497 4.85397C0.37164 4.56927 0.573027 3.94946 1.05739 3.94946H4.35944C4.57606 3.94946 4.76803 3.80998 4.83497 3.60397L5.85536 0.463527Z"
                                        fill="#FF8F20" />
                                </svg>
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.85536 0.463527C6.00504 0.00287118 6.65674 0.00287028 6.80642 0.463526L7.82681 3.60397C7.89375 3.80998 8.08572 3.94946 8.30234 3.94946H11.6044C12.0888 3.94946 12.2901 4.56926 11.8983 4.85397L9.22687 6.79486C9.05162 6.92219 8.97829 7.14787 9.04523 7.35388L10.0656 10.4943C10.2153 10.955 9.68806 11.338 9.2962 11.0533L6.62478 9.11244C6.44954 8.98512 6.21224 8.98512 6.037 9.11244L3.36558 11.0533C2.97372 11.338 2.44648 10.955 2.59616 10.4943L3.61655 7.35388C3.68349 7.14787 3.61016 6.92219 3.43491 6.79486L0.763497 4.85397C0.37164 4.56927 0.573027 3.94946 1.05739 3.94946H4.35944C4.57606 3.94946 4.76803 3.80998 4.83497 3.60397L5.85536 0.463527Z"
                                        fill="#FF8F20" />
                                </svg>
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.85536 0.463527C6.00504 0.00287118 6.65674 0.00287028 6.80642 0.463526L7.82681 3.60397C7.89375 3.80998 8.08572 3.94946 8.30234 3.94946H11.6044C12.0888 3.94946 12.2901 4.56926 11.8983 4.85397L9.22687 6.79486C9.05162 6.92219 8.97829 7.14787 9.04523 7.35388L10.0656 10.4943C10.2153 10.955 9.68806 11.338 9.2962 11.0533L6.62478 9.11244C6.44954 8.98512 6.21224 8.98512 6.037 9.11244L3.36558 11.0533C2.97372 11.338 2.44648 10.955 2.59616 10.4943L3.61655 7.35388C3.68349 7.14787 3.61016 6.92219 3.43491 6.79486L0.763497 4.85397C0.37164 4.56927 0.573027 3.94946 1.05739 3.94946H4.35944C4.57606 3.94946 4.76803 3.80998 4.83497 3.60397L5.85536 0.463527Z"
                                        fill="#FF8F20" />
                                </svg>
                            </div>
                            <p class="text-sm text-slate-500">Used by 1,000+ people</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:max-w-xs lg:max-w-lg">
                    <img class="w-full h-auto"
                        src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/hero/users-group.png"
                        alt="">
                </div>
            </div>
        </section>


        <section class="relative bg-gradient-to-br from-purple-900 via-indigo-800 to-blue-900 text-white overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('https://grainy-gradients.vercel.app/noise.svg')]">
                </div>
            </div>

            <div class="container mx-auto px-6 py-24 relative z-10">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-12 lg:mb-0">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                            Build Amazing <span class="gradient-text bg-gradient-to-r from-pink-500 to-yellow-500">Digital
                                Experiences</span>
                        </h1>
                        <p class="text-xl text-blue-100 mb-8 max-w-lg">
                            Our platform helps you create stunning websites and applications with minimal effort and maximum
                            creativity.
                        </p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <button
                                class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white px-8 py-4 rounded-xl font-bold hover:from-pink-600 hover:to-yellow-600 transition-all transform hover:scale-105 shadow-lg">
                                Get Started Free
                            </button>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <div
                                class="absolute -top-10 -left-10 w-32 h-32 bg-pink-500 rounded-full filter blur-3xl opacity-30">
                            </div>
                            <div
                                class="absolute -bottom-10 -right-10 w-32 h-32 bg-blue-500 rounded-full filter blur-3xl opacity-30">
                            </div>
                            <img src="https://media.istockphoto.com/id/1399565382/photo/young-happy-mixed-race-businessman-standing-with-his-arms-crossed-working-alone-in-an-office.jpg?s=612x612&w=0&k=20&c=buXwOYjA_tjt2O3-kcSKqkTp2lxKWJJ_Ttx2PhYe3VM="
                                alt="Hero Image" class="relative z-10 w-full floating">
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-50 to-transparent"></div>
        </section>
        <section
            class="min-h-screen pt-24 pb-12 px-6 md:px-12 flex flex-col lg:flex-row items-center justify-between max-w-7xl mx-auto">
            <div class="lg:w-1/2 mb-16 lg:mb-0 lg:pr-12 animate-slide-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold leading-tight mb-6">
                    <span class="block">Live With</span>
                    <span class="block text-art-plum">Creative Soul</span>
                </h1>
                <p class="text-lg text-gray-700 mb-8 max-w-lg">
                    ArtistryHaus curates a collection of evocative art pieces, decor, and furniture that transform your home
                    into a personal gallery.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button
                        class="px-8 py-4 bg-art-plum text-white rounded-lg hover:bg-art-plum/90 transition-all duration-300 transform hover:-translate-y-1">
                        Shop Artworks
                    </button>
                    <button
                        class="px-8 py-4 border border-gray-300 text-gray-700 rounded-lg hover:bg-white transition-all duration-300">
                        Browse Styles
                    </button>
                </div>
                <div class="mt-12 flex items-center space-x-8">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-art-plum">30+</span>
                        <span class="text-gray-700">Featured Artists</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-art-plum">200+</span>
                        <span class="text-gray-700">Curated Pieces</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-art-plum">Global</span>
                        <span class="text-gray-700">Artist Network</span>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 relative animate-slide-up delay-200">
                <div
                    class="relative rounded-2xl overflow-hidden shadow-xl transform rotate-1 hover:rotate-0 transition-transform duration-500">
                    <img class="w-full h-auto object-cover"
                        src="https://images.unsplash.com/photo-1497032205916-ac775f0649ae" alt="Modern artwork display">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                </div>
                <div class="absolute -top-6 -left-6 bg-white p-4 rounded-lg shadow-md w-40 animate-slide-up delay-300">
                    <h4 class="font-bold text-art-ink">Original</h4>
                    <p class="text-sm text-gray-600">One-of-a-kind pieces</p>
                </div>
                <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-md w-40 animate-slide-up delay-400">
                    <h4 class="font-bold text-art-ink">Expressive</h4>
                    <p class="text-sm text-gray-600">Curated for emotion</p>
                </div>
            </div>
        </section>

        <section class="py-10">
            <div class="mx-auto max-w-7xl">
                <div>
                    <div class="bg-gray-100 relative rounded-sm overflow-hidden mt-4 py-10">
                        <div class="grid md:grid-cols-2 items-center max-md:gap-10 py-32 border-y-8 border-orange-400">
                            <div class="text-center px-6">
                                <h2 class="font-extrabold text-5xl text-orange-500 leading-tight"><span
                                        class="text-slate-900">Special</span> Offer</h2>
                                <h6 class="text-2xl text-slate-900 mt-2">Limited Time Deal</h6>
                                <p class="text-slate-900 text-base leading-relaxed mt-4">Discover amazing discounts and
                                    deals. Don't miss out on our exclusive offers for a limited time.</p>

                                <button type="button"
                                    class="bg-gradient-to-r hover:bg-gradient-to-l from-orange-400 to-orange-600 hover:bg-orange-500 text-white tracking-wide font-medium text-[15px] py-3 px-6 rounded-lg w-max cursor-pointer mt-12">
                                    Get Started
                                </button>
                            </div>

                            <div
                                class="bg-gradient-to-tr from-orange-400 to-orange-600 rounded-tl-full rounded-bl-full w-full h-max">
                                <div class="p-2">
                                    <img src="https://readymadeui.com/team-image.webp"
                                        class="h-64 w-64 rounded-full object-cover border-4 border-white"
                                        alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-10">
            <div class="max-w-7xl mx-auto">
                <div class="bg-gray-50 relative shadow-lg shadow-[#e9d9f3] mx-auto rounded overflow-hidden">
                    <div class="grid md:grid-cols-2 max-md:gap-6 py-32">
                        <div class="text-center p-6 flex flex-col justify-center items-center">
                            <h2 class="font-extrabold text-5xl text-[#4e0083] leading-tight"><span
                                    class="text-slate-900">Special</span> Offer</h2>
                            <h6 class="text-lg text-slate-900 mt-4">Discover amazing discounts, for limited time</h6>

                            <button type="button"
                                class="bg-[#4e0083] hover:bg-[#4f0083cc] text-white tracking-wide font-medium text-sm py-3 px-6 rounded-xl cursor-pointer mt-10">
                                Get Started
                            </button>

                            <ul class="flex flex-wrap justify-center gap-6 mt-8">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#4e0083'
                                        viewBox="0 0 482.6 482.6">
                                        <path
                                            d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                                            data-original="#000000" />
                                    </svg>
                                    <a href="javascript:void(0)" class="text-[#4e0083] text-sm ml-2">180-548-2588</a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#4e0083'
                                        viewBox="0 0 479.058 479.058">
                                        <path
                                            d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                            data-original="#000000" />
                                    </svg>
                                    <a href="javascript:void(0)" class="text-[#4e0083] text-sm ml-2">info@example.com</a>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="flex justify-end items-center p-2 bg-gradient-to-b from-[#4e0083] to-[#796089] rounded-bl-[230px] w-full h-full">
                            <div class="h-72 w-72 rounded-full bg-gradient-to-tr from-[#4e0083] to-[#c19ed6] p-5">
                                <img src="https://readymadeui.com/team-image.webp"
                                    class="w-full h-full rounded-full object-cover border-8 border-white"
                                    alt="img" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -top-[50px] -left-[50px] w-28 h-28 rounded-full bg-[#4e0083] opacity-40 shadow-lg">
                    </div>
                    <div class="absolute -top-10 -left-10 w-28 h-28 rounded-full bg-[#4e0083] opacity-40 shadow-lg"></div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
