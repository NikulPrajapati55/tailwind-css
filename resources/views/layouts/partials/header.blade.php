<header class="bg-[#0f1b2c]">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-2">
            <img src="{{ asset('assets/img/logo/logo.jpg') }}" class="h-12 rounded" />
            <span class="text-white font-bold tracking-wider">Hi Codes</span>
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden lg:flex items-center gap-10 text-white font-semibold ">

            <li class="group relative py-2">
                <button class="flex items-center gap-1">
                    <i class="fa-solid fa-layer-group text-indigo-400"></i>
                    Sections
                    <i class="fa-solid fa-chevron-down text-gray-400 group-hover:rotate-180 duration-200"></i>
                </button>

                <!-- Dropdown -->
                <div
                    class="absolute z-[100] mt-3 hidden group-hover:block w-60 bg-gray-800 rounded-2xl shadow-2xl border border-white/10">
                    <ul class="p-3 space-y-2">

                        <li>
                            <a href="{{ route('aboutsection') }}"
                                class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/10">
                                <i class="fa-solid fa-circle-info text-indigo-400"></i>
                                About Section
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('teamsection') }}"
                                class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/10">
                                <i class="fa-solid fa-users-gear text-indigo-400"></i>
                                Team Section
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('cardsection') }}"
                                class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/10">
                                <i class="fa-regular fa-address-card text-indigo-400"></i>
                                Card Section
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('formsection') }}"
                                class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/10">
                                <i class="fa-solid fa-file-lines text-indigo-400"></i>
                                Form Section
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('popup') }}"
                                class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/10">
                                <i class="fa-solid fa-bell text-indigo-400"></i>
                                Popup Section
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li><a href="{{ route('swiper') }}">Swiper</a></li>
            <li class="group relative py-2">
                <button class="flex items-center gap-1 text-white font-semibold">
                    <i class="fa-solid fa-palette text-indigo-400"></i>
                    Themes
                    <i class="fa-solid fa-chevron-down text-gray-400 group-hover:rotate-180 duration-200"></i>
                </button>

                <div
                    class="absolute mt-3 z-10 hidden group-hover:block w-64 bg-gray-800 rounded-2xl border border-white/10 shadow-2xl">
                    <ul class="p-3 space-y-2">

                        <li>
                            <a href="{{ route('theme1') }}"
                                class="flex gap-3 items-center p-2 rounded-lg hover:bg-white/10">
                                <i class="fa-solid fa-layer-group text-indigo-400"></i>
                                Theme 1
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="https://www.instagram.com/hii.codes/" target="_blank" class="flex items-center gap-2">
                    <i class="fa-brands fa-instagram text-pink-400"></i>
                    Follow
                </a>
            </li>

            <!-- Login Button -->
            <li>
                <a href="{{ route('login') }}"
                    class="px-4 py-2 rounded-full bg-indigo-600 hover:bg-indigo-500 shadow-lg">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>
                    Login / Sign Up
                </a>
            </li>

        </ul>

        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="lg:hidden text-white text-2xl">
            <i class="fa-solid fa-bars"></i>
        </button>

    </nav>

    <!-- Mobile Drawer -->
    <div id="mobileMenu"
        class="fixed top-0 right-0 h-full w-72 bg-[#0f1b2c] border-l border-white/10 shadow-2xl translate-x-full duration-300 lg:hidden z-50 overflow-y-scroll">

        <div class="flex justify-between items-center px-6 py-4">
            <h2 class="text-white font-bold">Menu</h2>

            <button id="closeMenu" class="text-2xl text-gray-300">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <ul class="px-4 space-y-2 text-white font-semibold">
            <li class="mt-1">Sections</li>
            <li><a href="{{ route('aboutsection') }}" class="block p-2 rounded hover:bg-white/10">About</a></li>
            <li><a href="{{ route('teamsection') }}" class="block p-2 rounded hover:bg-white/10">Team</a></li>
            <li><a href="{{ route('cardsection') }}" class="block p-2 rounded hover:bg-white/10">Card</a></li>
            <li><a href="{{ route('formsection') }}" class="block p-2 rounded hover:bg-white/10">Form</a></li>
            <li><a href="{{ route('popup') }}" class="block p-2 rounded hover:bg-white/10">Popup</a></li>
            <li><a href="{{ route('swiper') }}" class="block p-2 rounded hover:bg-white/10">Swiper</a></li>
            <li><a href="{{ route('theme1') }}" class="block p-2 rounded hover:bg-white/10">Theme 1</a></li>

            <li class="pt-3">
                <a href="https://www.instagram.com/hii.codes/" target="_blank" class="flex gap-2 items-center p-2">
                    <i class="fa-brands fa-instagram text-pink-400"></i>
                    Follow Us
                </a>
            </li>

            <li class="pt-2">
                <a href="{{ route('login') }}" class="block p-2 rounded bg-indigo-600 text-center hover:bg-indigo-500">
                    Login / Sign Up
                </a>
            </li>

        </ul>
    </div>

</header>
