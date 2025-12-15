<x-app-layout>
@section('meta')
<title>Team Section - Frontend</title>
@endsection
@section('content')

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
            <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark sm:text-4xl md:text-[40px] dark:text-white">
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
                  <h3 class="text-base font-semibold text-dark dark:text-white">
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
                  <h3 class="text-base font-semibold text-dark dark:text-white">
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
                  <h3 class="text-base font-semibold text-dark dark:text-white">
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
                  <h3 class="text-base font-semibold text-dark dark:text-white">
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
