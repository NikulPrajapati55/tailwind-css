<x-app-layout>
    @section('meta')
        <title>About Section - Frontend</title>
    @endsection
    @section('content')
        <section class="py-10 bg-white">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <img src="{{ asset('assets/img/about/1.jpg') }}" class="rounded-3xl shadow-xl w-[90%]">
                    <img src="{{ asset('assets/img/about/2.jpg') }}"
                        class="absolute -top-10 -left-[100px] rounded-3xl shadow-xl border-4 border-white w-[70%]">
                    <div
                        class="absolute -top-10 right-0 w-28 h-28 rounded-full bg-purple-600 text-white
                        flex items-center justify-center text-center text-sm font-semibold
                        shadow-lg border-4 border-white rotate-12">
                        Contact Us
                    </div>
                    <div class="absolute -bottom-6 -left-4 w-20 h-20 opacity-40">
                        <svg width="100%" height="100%" viewBox="0 0 100 100">
                            <circle cx="10" cy="10" r="4" fill="#805ad5" />
                            <circle cx="30" cy="10" r="4" fill="#805ad5" />
                            <circle cx="50" cy="10" r="4" fill="#805ad5" />
                            <circle cx="70" cy="10" r="4" fill="#805ad5" />
                            <circle cx="90" cy="10" r="4" fill="#805ad5" />

                            <circle cx="10" cy="30" r="4" fill="#805ad5" />
                            <circle cx="30" cy="30" r="4" fill="#805ad5" />
                            <circle cx="50" cy="30" r="4" fill="#805ad5" />
                            <circle cx="70" cy="30" r="4" fill="#805ad5" />
                            <circle cx="90" cy="30" r="4" fill="#805ad5" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-purple-600 font-semibold mb-3">About Us</p>
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        Your trusted partners in building exceptional event experiences
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        We combine creativity, strategy, and seamless execution to deliver events that make
                        a powerful and lasting impression. From planning to production, our team works closely
                        with you to craft experiences that inspire audiences and elevate your brand.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full flex items-center justify-center bg-purple-600 text-white">
                                ✓
                            </div>
                            <p class="text-gray-700">Creating purpose-driven experiences</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full flex items-center justify-center bg-purple-600 text-white">
                                ✓
                            </div>
                            <p class="text-gray-700">Creative strategy & planning</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-2xl p-6 flex items-center justify-between mb-8">
                        <p class="font-semibold text-gray-700">
                            Trusted by Thousands of Attendees Across Our Events
                        </p>
                        <div class="flex items-center">
                            <img src="https://i.pravatar.cc/40?img=3"
                                class="w-10 h-10 rounded-full -ml-2 border-2 border-white">
                            <img src="https://i.pravatar.cc/40?img=14"
                                class="w-10 h-10 rounded-full -ml-2 border-2 border-white">
                            <img src="https://i.pravatar.cc/40?img=22"
                                class="w-10 h-10 rounded-full -ml-2 border-2 border-white">
                            <img src="https://i.pravatar.cc/40?img=44"
                                class="w-10 h-10 rounded-full -ml-2 border-2 border-white">
                            <div
                                class="bg-purple-600 text-white rounded-full text-xs font-bold w-10 h-10 flex items-center justify-center -ml-2">
                                50+
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4 items-center">
                        <a href="#" class="px-6 py-3 rounded-full bg-purple-600 text-white font-semibold shadow-md">
                            More About Us
                        </a>
                        <div class="flex flex-col">
                            <span class="font-semibold text-gray-800">Email To Book Events</span>
                            <span class="text-gray-500">info@domainname.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden bg-white pb-8 pt-8 lg:pb-[40px] lg:pt-[40px] dark:bg-dark">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap items-center justify-between">
                    <div class="w-full px-4 lg:w-6/12">
                        <div class="-mx-3 flex items-center sm:-mx-4">
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="py-3 sm:py-4">
                                    <img src="https://cdn.tailgrids.com/assets/images/marketing/about/about-01/image-1.jpg"
                                        alt="" class="w-full rounded-2xl" />
                                </div>
                                <div class="py-3 sm:py-4">
                                    <img src="https://cdn.tailgrids.com/assets/images/marketing/about/about-01/image-2.jpg"
                                        alt="" class="w-full rounded-2xl" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="relative z-10 my-4">
                                    <img src="https://cdn.tailgrids.com/assets/images/marketing/about/about-01/image-3.jpg"
                                        alt="" class="w-full rounded-2xl" />
                                    <span class="absolute -bottom-7 -right-7 z-[-1]">
                                        <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="1.66667" cy="104" r="1.66667"
                                                transform="rotate(-90 1.66667 104)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="104" r="1.66667"
                                                transform="rotate(-90 16.3333 104)" fill="#3056D3" />
                                            <circle cx="31" cy="104" r="1.66667"
                                                transform="rotate(-90 31 104)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="104" r="1.66667"
                                                transform="rotate(-90 45.6667 104)" fill="#3056D3" />
                                            <circle cx="60.3334" cy="104" r="1.66667"
                                                transform="rotate(-90 60.3334 104)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="104" r="1.66667"
                                                transform="rotate(-90 88.6667 104)" fill="#3056D3" />
                                            <circle cx="117.667" cy="104" r="1.66667"
                                                transform="rotate(-90 117.667 104)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="104" r="1.66667"
                                                transform="rotate(-90 74.6667 104)" fill="#3056D3" />
                                            <circle cx="103" cy="104" r="1.66667"
                                                transform="rotate(-90 103 104)" fill="#3056D3" />
                                            <circle cx="132" cy="104" r="1.66667"
                                                transform="rotate(-90 132 104)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 1.66667 89.3333)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 16.3333 89.3333)" fill="#3056D3" />
                                            <circle cx="31" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 31 89.3333)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="89.3333" r="1.66667"
                                                transform="rotate(-90 45.6667 89.3333)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 60.3333 89.3338)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 88.6667 89.3338)" fill="#3056D3" />
                                            <circle cx="117.667" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 117.667 89.3338)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 74.6667 89.3338)" fill="#3056D3" />
                                            <circle cx="103" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 103 89.3338)" fill="#3056D3" />
                                            <circle cx="132" cy="89.3338" r="1.66667"
                                                transform="rotate(-90 132 89.3338)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="74.6673" r="1.66667"
                                                transform="rotate(-90 1.66667 74.6673)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 1.66667 31.0003)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 16.3333 74.6668)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 16.3333 31.0003)" fill="#3056D3" />
                                            <circle cx="31" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 31 74.6668)" fill="#3056D3" />
                                            <circle cx="31" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 31 31.0003)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 45.6667 74.6668)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="31.0003" r="1.66667"
                                                transform="rotate(-90 45.6667 31.0003)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 60.3333 74.6668)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 60.3333 30.9998)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 88.6667 74.6668)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 88.6667 30.9998)" fill="#3056D3" />
                                            <circle cx="117.667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 117.667 74.6668)" fill="#3056D3" />
                                            <circle cx="117.667" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 117.667 30.9998)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 74.6667 74.6668)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 74.6667 30.9998)" fill="#3056D3" />
                                            <circle cx="103" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 103 74.6668)" fill="#3056D3" />
                                            <circle cx="103" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 103 30.9998)" fill="#3056D3" />
                                            <circle cx="132" cy="74.6668" r="1.66667"
                                                transform="rotate(-90 132 74.6668)" fill="#3056D3" />
                                            <circle cx="132" cy="30.9998" r="1.66667"
                                                transform="rotate(-90 132 30.9998)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 1.66667 60.0003)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 1.66667 16.3333)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 16.3333 60.0003)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 16.3333 16.3333)" fill="#3056D3" />
                                            <circle cx="31" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 31 60.0003)" fill="#3056D3" />
                                            <circle cx="31" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 31 16.3333)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 45.6667 60.0003)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 45.6667 16.3333)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 60.3333 60.0003)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 60.3333 16.3333)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 88.6667 60.0003)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 88.6667 16.3333)" fill="#3056D3" />
                                            <circle cx="117.667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 117.667 60.0003)" fill="#3056D3" />
                                            <circle cx="117.667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 117.667 16.3333)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 74.6667 60.0003)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 74.6667 16.3333)" fill="#3056D3" />
                                            <circle cx="103" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 103 60.0003)" fill="#3056D3" />
                                            <circle cx="103" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 103 16.3333)" fill="#3056D3" />
                                            <circle cx="132" cy="60.0003" r="1.66667"
                                                transform="rotate(-90 132 60.0003)" fill="#3056D3" />
                                            <circle cx="132" cy="16.3333" r="1.66667"
                                                transform="rotate(-90 132 16.3333)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 1.66667 45.3333)" fill="#3056D3" />
                                            <circle cx="1.66667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 1.66667 1.66683)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 16.3333 45.3333)" fill="#3056D3" />
                                            <circle cx="16.3333" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 16.3333 1.66683)" fill="#3056D3" />
                                            <circle cx="31" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 31 45.3333)" fill="#3056D3" />
                                            <circle cx="31" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 31 1.66683)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="45.3333" r="1.66667"
                                                transform="rotate(-90 45.6667 45.3333)" fill="#3056D3" />
                                            <circle cx="45.6667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 45.6667 1.66683)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 60.3333 45.3338)" fill="#3056D3" />
                                            <circle cx="60.3333" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 60.3333 1.66683)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 88.6667 45.3338)" fill="#3056D3" />
                                            <circle cx="88.6667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 88.6667 1.66683)" fill="#3056D3" />
                                            <circle cx="117.667" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 117.667 45.3338)" fill="#3056D3" />
                                            <circle cx="117.667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 117.667 1.66683)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 74.6667 45.3338)" fill="#3056D3" />
                                            <circle cx="74.6667" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 74.6667 1.66683)" fill="#3056D3" />
                                            <circle cx="103" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 103 45.3338)" fill="#3056D3" />
                                            <circle cx="103" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 103 1.66683)" fill="#3056D3" />
                                            <circle cx="132" cy="45.3338" r="1.66667"
                                                transform="rotate(-90 132 45.3338)" fill="#3056D3" />
                                            <circle cx="132" cy="1.66683" r="1.66667"
                                                transform="rotate(-90 132 1.66683)" fill="#3056D3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div class="mt-10 lg:mt-0">
                            <span class="mb-4 block text-lg font-semibold text-primary">
                                Why Choose Us
                            </span>
                            <h2 class="mb-5 text-3xl font-bold text-dark sm:text-[40px]/[48px] ">
                                Make your customers happy by giving services.
                            </h2>
                            <p class="mb-5 text-base text-body-color dark:text-dark-6">
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.
                                The point of using Lorem Ipsum is that it has a more-or-less.
                            </p>
                            <p class="mb-8 text-base text-body-color dark:text-dark-6">
                                A domain name is one of the first steps to establishing your
                                brand. Secure a consistent brand image with a domain name that
                                matches your business.
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-primary px-7 py-3 text-center text-base font-medium text-white hover:bg-primary/90">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-10 bg-[#0d0d0d] text-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

                    <!-- LEFT CONTENT -->
                    <div>
                        <h2 class="text-[55px] md:text-[65px] font-semibold leading-[1.1] mb-6">
                            Meet Your Financial<br>Partner in Growth
                        </h2>

                        <p class="text-xl opacity-90 leading-relaxed">
                            With over 18 years of experience helping businesses unlock financial clarity and
                            growth, I bring personalized strategy, practical insights, and ongoing support.
                            Whether you're just starting out or scaling fast, I'm here to guide every step.
                        </p>

                        <!-- CARD GRID -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-10">

                            <!-- GLASS CARD -->
                            <div
                                class="backdrop-blur-xl bg-white/5
                        border border-white/10
                        shadow-[0_0_30px_rgba(255,255,255,0.1)]
                        rounded-2xl p-6 text-center relative overflow-hidden">

                                <!-- gradient glow layer -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-purple-500/10 via-pink-500/10 to-blue-500/10 blur-xl">
                                </div>

                                <!-- content -->
                                <div class="relative">
                                    <h3 class="text-xl font-semibold mb-3 tracking-wide">Current Date & Time</h3>
                                    <div id="date" class="text-lg leading-relaxed font-medium opacity-90"></div>
                                    <div id="time" class="text-4xl mt-2 font-semibold"></div>
                                </div>
                            </div>

                            <!-- FEATURE CARD -->
                            <div
                                class="rounded-2xl p-6 bg-gradient-to-br from-blue-600/20 to-purple-600/20 border border-white/10 backdrop-blur-md shadow-lg">
                                <h4 class="text-2xl font-bold mb-2">18+ Years</h4>
                                <p class="opacity-80 text-lg">Experience in financial planning and growth strategy.</p>
                            </div>

                        </div>
                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="flex justify-center">
                        <div class="rounded-3xl overflow-hidden shadow-2xl hover:scale-[1.02] transition-all duration-300">
                            <img class="w-full h-auto" src="{{ asset('assets/img/about/1.png') }}" alt="About Image">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-10">
            <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- LEFT SIDE IMAGES -->
                <div class="space-y-8">

                    <!-- Top row -->
                    <div class="flex gap-6">
                        <!-- Image 1 -->
                        <div class="w-1/2 h-48 rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/img/about/about-img-1.jpg') }}"
                                class="w-full h-full object-cover" />
                        </div>

                        <!-- Image 2 -->
                        <div class="w-1/2 h-48 rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/img/about/about-img-3.jpg') }}"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>

                    <!-- Bottom big image -->
                    <div class="w-full h-60 rounded-xl overflow-hidden shadow-xl">
                        <img src="{{ asset('assets/img/about/about-img-2.jpg') }}" class="w-full h-full object-cover" />
                    </div>

                </div>

                <!-- RIGHT SIDE CONTENT -->
                <div class="space-y-6">

                    <!-- Label -->
                    <span
                        class="inline-block px-4 py-1 rounded-md border border-purple-500 text-purple-600 text-sm font-semibold">
                        ABOUT THIS EVENT
                    </span>

                    <!-- Heading -->
                    <h2 class="text-4xl font-bold leading-tight">
                        Business Conference<br>
                        For Solving Problems
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600">
                        Join 500 others in Manhattan, NY for a full day of inspiring keynotes and new connections at the
                        premier conference for software Product Managers.
                    </p>

                    <!-- Features -->
                    <div class="grid grid-cols-2 gap-6">

                        <!-- Feature 1 -->
                        <div class="flex items-start gap-3">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-xl">👥</span>
                            </div>
                            <p class="font-semibold leading-tight">
                                6,000+ People<br>
                                <span class="text-gray-600 font-normal">In Person Meet-up</span>
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xl">⭐</span>
                            </div>
                            <p class="font-semibold leading-tight">
                                Connect with<br>
                                <span class="text-gray-600 font-normal">Industry Leaders</span>
                            </p>
                        </div>

                    </div>

                    <!-- Text -->
                    <p class="text-gray-600 leading-relaxed">
                        When an unknown printer took a galley type and scrambled a specimen book, it survived not only five
                        centuries but also the leap into electronic typesetting.
                    </p>

                    <!-- Button -->
                    <button
                        class="px-6 py-3 bg-pink-500 text-white font-semibold rounded-xl shadow hover:bg-pink-600 transition">
                        Read More →
                    </button>
                </div>
            </div>
        </section>
        <section class="section py-10">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <div class="relative">
                        <img class="rounded-[16px] w-full" src="{{ asset('assets/img/about/about-img-4.jpg') }}"
                            alt="">
                        <div
                            class="absolute w-[250px] bottom-0 left-0 rounded-[16px] px-[28px] py-[20px]
                            border-2 border-white bg-white shadow-lg">
                            <span class="text-lg font-bold flex items-center gap-2">
                                <i class="fa-solid fa-award text-blue-600"></i>
                                Experiences
                            </span>
                            <h4 class="font-bold text-[45px] leading-none mt-1">13+</h4>
                            <span class="text-md text-gray-600">Decades of Experience, Endless Innovation</span>
                        </div>
                    </div>
                    <div class="relative flex flex-col gap-8">
                        <div>
                            <span class="text-sm text-blue-600 font-semibold tracking-wide flex items-center gap-2">
                                <i class="fa-solid fa-circle-info"></i> Get to Know Us
                            </span>

                            <h2 class="text-4xl font-bold leading-tight text-gray-900 mt-2">
                                Empowering Businesses with Innovation,<br>
                                Expertise, and Success.
                            </h2>
                            <p class="text-gray-600 max-w-lg mt-3">
                                We help organizations grow faster with modern technologies, expert strategy,
                                and a partnership built on trust and innovation.
                            </p>
                        </div>
                        <div class="flex items-center gap-6">
                            <a href="#"
                                class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg
                  font-semibold hover:bg-blue-700 transition shadow-md">
                                Learn More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <div class="flex items-center gap-4">
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition text-xl">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-400 transition text-xl">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-pink-600 transition text-xl">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-700 transition text-xl">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <div
                                class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm hover:shadow-md transition">
                                <div class="p-3 bg-blue-600 text-white rounded-lg inline-flex">
                                    <i class="fa-solid fa-lightbulb text-xl"></i>
                                </div>
                                <h3 class="text-xl font-bold mt-4">Our Vision</h3>
                                <p class="text-gray-600 text-sm mt-1">
                                    Building the future with smart and scalable technologies.
                                </p>
                            </div>
                            <div
                                class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm hover:shadow-md transition">
                                <div class="p-3 bg-green-600 text-white rounded-lg inline-flex">
                                    <i class="fa-solid fa-users text-xl"></i>
                                </div>
                                <h3 class="text-xl font-bold mt-4">Team</h3>
                                <p class="text-gray-600 text-sm mt-1">
                                    A group of experienced and passionate professionals.
                                </p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6 mt-4">
                            <div class="bg-white rounded-xl p-6 border border-gray-200 text-center shadow-sm">
                                <h3 class="text-4xl font-bold text-blue-600">250+</h3>
                                <p class="text-gray-500 text-sm mt-1">Projects Completed</p>
                            </div>
                            <div class="bg-white rounded-xl p-6 border border-gray-200 text-center shadow-sm">
                                <h3 class="text-4xl font-bold text-blue-600">50+</h3>
                                <p class="text-gray-500 text-sm mt-1">Active Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
