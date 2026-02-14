<x-app-layout>
    @section('meta')
        <title>Theme 2</title>
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
<meta property="og:image" content="https://github.com/NikulPrajapati55/tailwind-css/public/assets/img/theme/theme-2.jpg" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://github.com/NikulPrajapati55/tailwind-css" />
<meta property="twitter:title" content="SmileBright Dental | Modern Family Dentistry" />
<meta property="twitter:description" content="Transforming smiles with modern technology and a gentle touch." />
<meta property="twitter:image" content="https://github.com/NikulPrajapati55/tailwind-css/public/assets/img/theme/theme-2.jpg" />
    @endsection
    @section('content')
        <!-- Banner Section -->
        <section class="relative bg-blue-600 text-white overflow-hidden">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/img/banner/banner-img-5.jpg') }}"
                    alt="Dental Clinic Background" class="w-full h-full object-cover opacity-20">
            </div>
            <div class="container mx-auto px-6 py-24 relative z-10">
                <div class="max-w-3xl">
                    <span
                        class="inline-block py-1 px-3 rounded-full bg-blue-500/50 border border-blue-400 text-sm font-semibold mb-4 backdrop-blur-sm">
                        Welcome to DentCare
                    </span>
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Your Perfect Smile <br> Starts Here
                    </h1>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                        Experience world-class dental care with our team of experts. We use advanced technology to ensure
                        your treatment is comfortable and effective.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#"
                            class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full shadow-lg hover:bg-blue-50 transition duration-300 text-center">
                            Book Appointment
                        </a>
                        <a href="#"
                            class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white/10 transition duration-300 text-center">
                            View Services
                        </a>
                    </div>

                    <div class="mt-12 grid grid-cols-3 gap-6 border-t border-blue-500/50 pt-8">
                        <div>
                            <p class="text-3xl font-bold">15k+</p>
                            <p class="text-blue-200 text-sm">Happy Patients</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold">15+</p>
                            <p class="text-blue-200 text-sm">Years Experience</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold">24/7</p>
                            <p class="text-blue-200 text-sm">Emergency Care</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-100 rounded-full -z-10"></div>
                        <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-teal-100 rounded-full -z-10"></div>
                        <img src="{{ asset('assets/img/about/about-img-17.jpg') }}"
                            alt="Dental Team" class="rounded-2xl shadow-2xl w-full object-cover h-[500px]">
                        <div class="absolute bottom-8 left-8 bg-white p-6 rounded-xl shadow-lg max-w-xs hidden md:block">
                            <div class="flex items-center gap-4 mb-2">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-800">Certified Clinic</p>
                                    <p class="text-xs text-gray-500">ISO 9001:2015 Certified</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">About Us</h4>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">We Care About Your <span
                                class="text-blue-600">Dental Health</span></h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            At DentCare, we believe that a healthy smile is the foundation of a happy life. Our
                            state-of-the-art facility is equipped with the latest dental technology to provide you with the
                            best possible care. From routine check-ups to complex cosmetic procedures, our experienced team
                            is dedicated to your comfort and well-being.
                        </p>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            We understand that visiting the dentist can be stressful for some. That's why we've created a
                            relaxing environment and offer personalized treatment plans tailored to your specific needs.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Modern Equipment</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Qualified Doctors</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Painless Procedures</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-1 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Affordable Pricing</span>
                            </div>
                        </div>

                        <a href="#"
                            class="inline-flex items-center justify-center px-8 py-3 text-base font-medium text-white bg-blue-600 rounded-full hover:bg-blue-700 transition duration-300 shadow-md">
                            Learn More About Us
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Our Services</h4>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Comprehensive Dental Solutions</h2>
                    <p class="text-gray-600 leading-relaxed">
                        From routine check-ups to advanced cosmetic procedures, we offer a full range of dental services
                        to keep your smile healthy and beautiful.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Card 1 -->
                    <div
                        class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group border border-gray-100">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Cosmetic Dentistry</h3>
                        <p class="text-gray-600 mb-4">Enhance your smile with whitening, veneers, and bonding treatments
                            designed for you.</p>
                        <a href="#"
                            class="text-blue-600 font-semibold hover:text-blue-700 inline-flex items-center transition duration-300">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- Service Card 2 -->
                    <div
                        class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group border border-gray-100">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">General Dentistry</h3>
                        <p class="text-gray-600 mb-4">Regular exams, cleanings, and preventative care to maintain optimal
                            oral health.</p>
                        <a href="#"
                            class="text-blue-600 font-semibold hover:text-blue-700 inline-flex items-center transition duration-300">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- Service Card 3 -->
                    <div
                        class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group border border-gray-100">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Dental Implants</h3>
                        <p class="text-gray-600 mb-4">Permanent solutions for missing teeth that look, feel, and function
                            like natural teeth.</p>
                        <a href="#"
                            class="text-blue-600 font-semibold hover:text-blue-700 inline-flex items-center transition duration-300">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-20 bg-white overflow-hidden">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Text Content -->
                    <div class="order-2 lg:order-1">
                        <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Why Choose Us</h4>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Experience the Difference in <span
                                class="text-blue-600">Dental Care</span></h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            We combine advanced technology with a compassionate approach to provide you with the best dental
                            experience possible. Here is why thousands of patients trust us with their smiles.
                        </p>

                        <div class="space-y-8">
                            <!-- Feature 1 -->
                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 bg-teal-50 rounded-2xl flex items-center justify-center text-teal-600 flex-shrink-0 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Safety First</h4>
                                    <p class="text-gray-600">We adhere to the strictest sterilization protocols to ensure
                                        your safety and peace of mind.</p>
                                </div>
                            </div>
                            <!-- Feature 2 -->
                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 flex-shrink-0 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">No Wait Policy</h4>
                                    <p class="text-gray-600">We respect your time. Our efficient scheduling ensures you are
                                        seen on time, every time.</p>
                                </div>
                            </div>
                            <!-- Feature 3 -->
                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 flex-shrink-0 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Transparent Pricing</h4>
                                    <p class="text-gray-600">No hidden fees. We provide clear cost estimates before any
                                        treatment begins.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="relative order-1 lg:order-2">
                        <div
                            class="absolute -top-10 -right-10 w-40 h-40 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                        </div>
                        <div
                            class="absolute -bottom-10 -left-10 w-40 h-40 bg-teal-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                        </div>
                        <img src="{{ asset('assets/img/about/about-img-14.jpg') }}"
                            alt="Dental Consultation"
                            class="relative rounded-2xl shadow-2xl w-full object-cover h-[600px] z-10">

                        <!-- Floating Card -->
                        <div
                            class="absolute bottom-10 -left-10 z-20 bg-white p-6 rounded-xl shadow-xl max-w-xs hidden lg:block border-l-4 border-blue-600">
                            <div class="flex items-center gap-4">
                                <div class="flex -space-x-3">
                                    <img class="w-10 h-10 rounded-full border-2 border-white"
                                        src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=64&h=64"
                                        alt="User">
                                    <img class="w-10 h-10 rounded-full border-2 border-white"
                                        src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=64&h=64"
                                        alt="User">
                                    <img class="w-10 h-10 rounded-full border-2 border-white"
                                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=64&h=64"
                                        alt="User">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">500+ Reviews</p>
                                    <div class="flex text-yellow-400 text-xs">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Common Questions</h4>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Find answers to the most common questions about our dental services and procedures.
                    </p>
                </div>

                <div class="max-w-3xl mx-auto space-y-4">
                    <!-- FAQ Item 1 -->
                    <details class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                            <span class="text-lg font-bold text-gray-900">Do you accept new patients?</span>
                            <span class="transition group-open:rotate-180 text-blue-600">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="text-gray-600 px-6 pb-6 leading-relaxed">
                            Yes! We are always welcoming new patients to our dental family. You can book your first
                            appointment online or give us a call.
                        </div>
                    </details>

                    <!-- FAQ Item 2 -->
                    <details class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                            <span class="text-lg font-bold text-gray-900">Do you accept dental insurance?</span>
                            <span class="transition group-open:rotate-180 text-blue-600">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="text-gray-600 px-6 pb-6 leading-relaxed">
                            We accept most major insurance plans. Please contact our office with your insurance details, and
                            we will verify your coverage for you.
                        </div>
                    </details>

                    <!-- FAQ Item 3 -->
                    <details class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6">
                            <span class="text-lg font-bold text-gray-900">What should I do in a dental emergency?</span>
                            <span class="transition group-open:rotate-180 text-blue-600">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="text-gray-600 px-6 pb-6 leading-relaxed">
                            If you have a dental emergency, please call our emergency line immediately. We offer 24/7
                            emergency care for severe pain, broken teeth, or other urgent issues.
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Get in Touch</h4>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">We'd Love to Hear <br> From You
                        </h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Have questions or need to schedule an appointment? Fill out the form, and our team will get back
                            to you as soon as possible.
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">Our Location</h5>
                                    <p class="text-gray-600">123 Dental Street, Smile City, SC 12345</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">Phone Number</h5>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">Email Address</h5>
                                    <p class="text-gray-600">hello@dentcare.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-gray-50 p-8 rounded-3xl shadow-lg border border-gray-100">
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition duration-200 bg-white"
                                        placeholder="John">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition duration-200 bg-white"
                                        placeholder="Doe">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition duration-200 bg-white"
                                    placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea rows="4"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition duration-200 bg-white"
                                    placeholder="How can we help you?"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition duration-300 shadow-lg transform hover:-translate-y-1">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>
