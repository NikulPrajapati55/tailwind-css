<x-app-layout>
@section('meta')
<title>Team Section | Frontend UI & Tailwind CSS</title>

<meta name="description"
      content="Modern Team Section built using Tailwind CSS and Laravel. Clean profile cards, responsive grid layout, and reusable frontend UI components.">

<meta name="keywords"
      content="team section, tailwind css team cards, team profiles ui, laravel frontend, responsive team layout, web developer portfolio">

<meta name="author" content="Nikul Prajapati">
<meta name="robots" content="index, follow">

<meta property="og:title" content="Team Section | Frontend UI & Tailwind CSS">
<meta property="og:description"
      content="Responsive Team Section with Tailwind CSS and Laravel — clean profile cards, modern UI, and reusable frontend components.">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Team Section | Frontend UI & Tailwind CSS">
<meta name="twitter:description"
      content="Tailwind CSS powered Team Section with responsive profile cards and reusable Laravel UI components.">

@endsection
@section('content')
<section id="dev-profile" class="relative py-10 lg:py-20 bg-white overflow-hidden px-6 lg:px-24">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                    <div class="lg:col-span-5 relative">
                        <div class="absolute -inset-10 bg-blue-50/50 rounded-full blur-3xl -z-10"></div>

                        <div
                            class="relative rounded-[3rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] border-4 border-white">
                            <img src="{{ asset('assets/img/dev/dev.jpg') }}" alt="Nikul Prajapati Laravel Developer"
                                class="w-full aspect-[4/5] object-cover" />

                            <div
                                class="dev-badge absolute top-8 -right-4 bg-blue-600 text-white p-6 rounded-2xl shadow-xl">
                                <p class="text-2xl font-bold">10+</p>
                                <p class="text-[10px] uppercase tracking-widest font-bold opacity-80">Years Exp.</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 space-y-6">
                        <div class="reveal">
                            <span class="text-blue-600 font-bold uppercase tracking-[0.3em] text-xs">The Visionary</span>
                            <h2 class="text-5xl lg:text-7xl font-bold text-slate-900 mt-4 leading-tight">
                                Crafting pixels <br> with <span class="italic font-serif text-blue-500">Purpose.</span>
                            </h2>
                        </div>

                        <p class="text-slate-600 text-xl lg:text-2xl leading-relaxed max-w-2xl">
                            I'm a digital architect specializing in high-performance interfaces. My goal is to bridge the
                            gap between complex backend logic and elegant front-end motion.
                        </p>

                        <div class="grid grid-cols-2 gap-6 pt-4">
                            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                                <h4 class="text-slate-900 font-bold text-lg mb-1">Architecture</h4>
                                <p class="text-slate-500 text-sm">Clean, scalable Laravel & Node structures.</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                                <h4 class="text-slate-900 font-bold text-lg mb-1">Animation</h4>
                                <p class="text-slate-500 text-sm">Complex GSAP timelines & Canvas physics.</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 pt-6">
                            <a href="#" class="text-slate-400 hover:text-blue-600 transition-colors text-2xl">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="text-slate-400 hover:text-blue-600 transition-colors text-2xl">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-slate-400 hover:text-blue-600 transition-colors text-2xl">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <div class="h-px w-20 bg-slate-200 ml-4"></div>
                            <span class="text-slate-900 font-bold uppercase tracking-widest text-xs">Follow Story</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
{{-- team section 1 --}}

<h1 class="text-3xl font-medium text-slate-800 text-center">Meet Our Team</h1>
<p class="text-slate-500 text-center">The people behind the product, passionate about what they do.</p>
<div class="flex flex-wrap items-center justify-center gap-6 mt-12">
    <div class="max-w-80 bg-black text-white rounded-2xl">
        <div class="relative -mt-px overflow-hidden rounded-2xl">
            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=600" alt="" class="h-[270px] w-full rounded-2xl hover:scale-105 transition-all duration-300 object-cover object-top">
            <div class="absolute bottom-0 z-10 h-60 w-full bg-gradient-to-t pointer-events-none from-black to-transparent"></div>
        </div>
        <div class="px-4 pb-6 text-center">
            <p class="mt-4 text-lg">John Doe</p>
            <p class="text-sm font-medium bg-gradient-to-r from-[#8B5CF6] via-[#9938CA] to-[#E0724A] text-transparent bg-clip-text">Content Marketing</p>
        </div>
    </div>
    <div class="max-w-80 bg-black text-white rounded-2xl">
        <div class="relative -mt-px overflow-hidden rounded-2xl">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=600" alt="" class="h-[270px] w-full rounded-2xl hover:scale-105 transition-all duration-300 object-cover object-top">
            <div class="absolute bottom-0 z-10 h-60 w-full bg-gradient-to-t pointer-events-none from-black to-transparent"></div>
        </div>
        <div class="px-4 pb-6 text-center">
            <p class="mt-4 text-lg">John Doe</p>
            <p class="text-sm font-medium bg-gradient-to-r from-[#8B5CF6] via-[#9938CA] to-[#E0724A] text-transparent bg-clip-text">Content Marketing</p>
        </div>
    </div>
    <div class="max-w-80 bg-black text-white rounded-2xl">
        <div class="relative -mt-px overflow-hidden rounded-2xl">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=600&h=600&auto=format&fit=crop" alt="" class="h-[270px] w-full rounded-2xl hover:scale-105 transition-all duration-300 object-cover object-top">
            <div class="absolute bottom-0 z-10 h-60 w-full bg-gradient-to-t pointer-events-none from-black to-transparent"></div>
        </div>
        <div class="px-4 pb-6 text-center">
            <p class="mt-4 text-lg">John Doe</p>
            <p class="text-sm font-medium bg-gradient-to-r from-[#8B5CF6] via-[#9938CA] to-[#E0724A] text-transparent bg-clip-text">Content Marketing</p>
        </div>
    </div>
</div>


<!-- ====== Team Section Start -->
  <section class="pb-10 pt-20 lg:pb-20 lg:pt-[120px] dark:bg-dark">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mx-auto mb-[60px] max-w-[510px] text-center">
            <span class="mb-2 block text-lg font-semibold text-primary">
              Our Team
            </span>
            <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark sm:text-4xl md:text-[40px]">
              Our Awesome Team
            </h2>
            <p class="text-base text-body-color dark:text-dark-6">
              There are many variations of passages of Lorem Ipsum available
              but the majority have suffered alteration in some form.
            </p>
          </div>
        </div>
      </div>

      <div class="-mx-4 flex flex-wrap justify-center">
        <div class="w-full px-4 md:w-1/2 xl:w-1/4">
          <div class="mx-auto mb-10 w-full max-w-[370px]">
            <div class="relative overflow-hidden rounded-lg">
              <img src="https://cdn.tailgrids.com/assets/images/marketing/team/team-01/image-01.jpg" alt="image" class="w-full" />
              <div class="absolute bottom-5 left-0 w-full text-center">
                <div class="relative mx-5 overflow-hidden rounded-lg bg-white px-3 py-5 dark:bg-dark-2">
                  <h3 class="text-base font-semibold text-dark ">
                    Coriss Ambady
                  </h3>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    Web Developer
                  </p>
                  <div>
                    <span class="absolute bottom-0 left-0">
                      <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="45" r="45" fill="#13C296" fill-opacity="0.11" />
                      </svg>
                    </span>
                    <span class="absolute right-0 top-0">
                      <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="0.706257" cy="24.3533" r="0.646687" transform="rotate(-90 0.706257 24.3533)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="24.3533" r="0.646687" transform="rotate(-90 6.39669 24.3533)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="24.3533" r="0.646687" transform="rotate(-90 12.0881 24.3533)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="24.3533" r="0.646687" transform="rotate(-90 17.7785 24.3533)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="18.6624" r="0.646687" transform="rotate(-90 0.706257 18.6624)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="18.6624" r="0.646687" transform="rotate(-90 6.39669 18.6624)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="18.6624" r="0.646687" transform="rotate(-90 12.0881 18.6624)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="18.6624" r="0.646687" transform="rotate(-90 17.7785 18.6624)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="12.9717" r="0.646687" transform="rotate(-90 0.706257 12.9717)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="12.9717" r="0.646687" transform="rotate(-90 6.39669 12.9717)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="12.9717" r="0.646687" transform="rotate(-90 12.0881 12.9717)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="12.9717" r="0.646687" transform="rotate(-90 17.7785 12.9717)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="7.28077" r="0.646687" transform="rotate(-90 0.706257 7.28077)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="7.28077" r="0.646687" transform="rotate(-90 6.39669 7.28077)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="7.28077" r="0.646687" transform="rotate(-90 12.0881 7.28077)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="7.28077" r="0.646687" transform="rotate(-90 17.7785 7.28077)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="1.58989" r="0.646687" transform="rotate(-90 0.706257 1.58989)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="1.58989" r="0.646687" transform="rotate(-90 6.39669 1.58989)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="1.58989" r="0.646687" transform="rotate(-90 12.0881 1.58989)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="1.58989" r="0.646687" transform="rotate(-90 17.7785 1.58989)"
                          fill="#3056D3" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/4">
          <div class="mx-auto mb-10 w-full max-w-[370px]">
            <div class="relative overflow-hidden rounded-lg">
              <img src="https://cdn.tailgrids.com/assets/images/marketing/team/team-01/image-02.jpg" alt="image" class="w-full" />
              <div class="absolute bottom-5 left-0 w-full text-center">
                <div class="relative mx-5 overflow-hidden rounded-lg bg-white px-3 py-5 dark:bg-dark-2">
                  <h3 class="text-base font-semibold text-dark ">
                    Glorius Cristian
                  </h3>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    App Developer
                  </p>
                  <div>
                    <span class="absolute bottom-0 left-0">
                      <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="45" r="45" fill="#13C296" fill-opacity="0.11" />
                      </svg>
                    </span>
                    <span class="absolute right-0 top-0">
                      <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="0.706257" cy="24.3533" r="0.646687" transform="rotate(-90 0.706257 24.3533)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="24.3533" r="0.646687" transform="rotate(-90 6.39669 24.3533)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="24.3533" r="0.646687" transform="rotate(-90 12.0881 24.3533)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="24.3533" r="0.646687" transform="rotate(-90 17.7785 24.3533)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="18.6624" r="0.646687" transform="rotate(-90 0.706257 18.6624)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="18.6624" r="0.646687" transform="rotate(-90 6.39669 18.6624)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="18.6624" r="0.646687" transform="rotate(-90 12.0881 18.6624)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="18.6624" r="0.646687" transform="rotate(-90 17.7785 18.6624)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="12.9717" r="0.646687" transform="rotate(-90 0.706257 12.9717)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="12.9717" r="0.646687" transform="rotate(-90 6.39669 12.9717)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="12.9717" r="0.646687" transform="rotate(-90 12.0881 12.9717)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="12.9717" r="0.646687" transform="rotate(-90 17.7785 12.9717)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="7.28077" r="0.646687" transform="rotate(-90 0.706257 7.28077)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="7.28077" r="0.646687" transform="rotate(-90 6.39669 7.28077)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="7.28077" r="0.646687" transform="rotate(-90 12.0881 7.28077)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="7.28077" r="0.646687" transform="rotate(-90 17.7785 7.28077)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="1.58989" r="0.646687" transform="rotate(-90 0.706257 1.58989)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="1.58989" r="0.646687" transform="rotate(-90 6.39669 1.58989)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="1.58989" r="0.646687" transform="rotate(-90 12.0881 1.58989)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="1.58989" r="0.646687" transform="rotate(-90 17.7785 1.58989)"
                          fill="#3056D3" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/4">
          <div class="mx-auto mb-10 w-full max-w-[370px]">
            <div class="relative overflow-hidden rounded-lg">
              <img src="https://cdn.tailgrids.com/assets/images/marketing/team/team-01/image-03.jpg" alt="image" class="w-full" />
              <div class="absolute bottom-5 left-0 w-full text-center">
                <div class="relative mx-5 overflow-hidden rounded-lg bg-white px-3 py-5 dark:bg-dark-2">
                  <h3 class="text-base font-semibold text-dark ">
                    Jackie Sanders
                  </h3>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    UI/UX Designer
                  </p>
                  <div>
                    <span class="absolute bottom-0 left-0">
                      <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="45" r="45" fill="#13C296" fill-opacity="0.11" />
                      </svg>
                    </span>
                    <span class="absolute right-0 top-0">
                      <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="0.706257" cy="24.3533" r="0.646687" transform="rotate(-90 0.706257 24.3533)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="24.3533" r="0.646687" transform="rotate(-90 6.39669 24.3533)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="24.3533" r="0.646687" transform="rotate(-90 12.0881 24.3533)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="24.3533" r="0.646687" transform="rotate(-90 17.7785 24.3533)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="18.6624" r="0.646687" transform="rotate(-90 0.706257 18.6624)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="18.6624" r="0.646687" transform="rotate(-90 6.39669 18.6624)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="18.6624" r="0.646687" transform="rotate(-90 12.0881 18.6624)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="18.6624" r="0.646687" transform="rotate(-90 17.7785 18.6624)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="12.9717" r="0.646687" transform="rotate(-90 0.706257 12.9717)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="12.9717" r="0.646687" transform="rotate(-90 6.39669 12.9717)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="12.9717" r="0.646687" transform="rotate(-90 12.0881 12.9717)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="12.9717" r="0.646687" transform="rotate(-90 17.7785 12.9717)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="7.28077" r="0.646687" transform="rotate(-90 0.706257 7.28077)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="7.28077" r="0.646687" transform="rotate(-90 6.39669 7.28077)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="7.28077" r="0.646687" transform="rotate(-90 12.0881 7.28077)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="7.28077" r="0.646687" transform="rotate(-90 17.7785 7.28077)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="1.58989" r="0.646687" transform="rotate(-90 0.706257 1.58989)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="1.58989" r="0.646687" transform="rotate(-90 6.39669 1.58989)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="1.58989" r="0.646687" transform="rotate(-90 12.0881 1.58989)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="1.58989" r="0.646687" transform="rotate(-90 17.7785 1.58989)"
                          fill="#3056D3" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 xl:w-1/4">
          <div class="mx-auto mb-10 w-full max-w-[370px]">
            <div class="relative overflow-hidden rounded-lg">
              <img src="https://cdn.tailgrids.com/assets/images/marketing/team/team-01/image-04.jpg" alt="image" class="w-full" />
              <div class="absolute bottom-5 left-0 w-full text-center">
                <div class="relative mx-5 overflow-hidden rounded-lg bg-white px-3 py-5 dark:bg-dark-2">
                  <h3 class="text-base font-semibold text-dark ">
                    Nikolas Brooten
                  </h3>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    Sales Manager
                  </p>
                  <div>
                    <span class="absolute bottom-0 left-0">
                      <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="45" r="45" fill="#13C296" fill-opacity="0.11" />
                      </svg>
                    </span>
                    <span class="absolute right-0 top-0">
                      <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="0.706257" cy="24.3533" r="0.646687" transform="rotate(-90 0.706257 24.3533)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="24.3533" r="0.646687" transform="rotate(-90 6.39669 24.3533)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="24.3533" r="0.646687" transform="rotate(-90 12.0881 24.3533)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="24.3533" r="0.646687" transform="rotate(-90 17.7785 24.3533)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="18.6624" r="0.646687" transform="rotate(-90 0.706257 18.6624)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="18.6624" r="0.646687" transform="rotate(-90 6.39669 18.6624)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="18.6624" r="0.646687" transform="rotate(-90 12.0881 18.6624)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="18.6624" r="0.646687" transform="rotate(-90 17.7785 18.6624)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="12.9717" r="0.646687" transform="rotate(-90 0.706257 12.9717)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="12.9717" r="0.646687" transform="rotate(-90 6.39669 12.9717)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="12.9717" r="0.646687" transform="rotate(-90 12.0881 12.9717)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="12.9717" r="0.646687" transform="rotate(-90 17.7785 12.9717)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="7.28077" r="0.646687" transform="rotate(-90 0.706257 7.28077)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="7.28077" r="0.646687" transform="rotate(-90 6.39669 7.28077)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="7.28077" r="0.646687" transform="rotate(-90 12.0881 7.28077)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="7.28077" r="0.646687" transform="rotate(-90 17.7785 7.28077)"
                          fill="#3056D3" />
                        <circle cx="0.706257" cy="1.58989" r="0.646687" transform="rotate(-90 0.706257 1.58989)"
                          fill="#3056D3" />
                        <circle cx="6.39669" cy="1.58989" r="0.646687" transform="rotate(-90 6.39669 1.58989)"
                          fill="#3056D3" />
                        <circle cx="12.0881" cy="1.58989" r="0.646687" transform="rotate(-90 12.0881 1.58989)"
                          fill="#3056D3" />
                        <circle cx="17.7785" cy="1.58989" r="0.646687" transform="rotate(-90 17.7785 1.58989)"
                          fill="#3056D3" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
</x-app-layout>
