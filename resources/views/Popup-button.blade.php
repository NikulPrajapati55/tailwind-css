<x-app-layout>
    @section('meta')
        <title>Popup Button Section - Frontend</title>

        <meta name="keywords"
            content="Laravel popup modal, Tailwind CSS modal, canvas animation popup, contact popup Laravel, SaaS UI components">
        <meta name="author" content="Nikul Prajapati">
    @endsection
    @section('content')
        <div
            class="w-full flex items-center justify-center h-[85vh] bg-gradient-to-tr from-gray-900 via-black to-gray-900 relative overflow-hidden">

            <button id="openModal1"
                class="px-6 py-3 bg-[#C47E6D] hover:bg-[#a55c52] text-white font-semibold rounded-full shadow-lg transition-colors z-10">
                Open Contact Popup
            </button>
        </div>

        <div id="modalOverlay1"
            class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-500 backdrop-blur-sm">

            <canvas id="modalCanvas1" class="absolute inset-0 w-full  bg-black/80"></canvas>

            <div id="modalCard1"
                class="relative w-[90%] max-w-[600px] transform translate-y-10 opacity-0 transition-all duration-700 ease-out bg-[#0a0a0a]/60 border border-white/10 rounded-3xl premium-glow z-10 overflow-hidden">

                <button id="closeModal1" style="font-size: 40px"
                    class="absolute top-5 right-6 text-white  hover:text-[#C47E6D]  transition-colors">&times;</button>

                <div class="p-6">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-white tracking-tight">Let's Contact</h2>
                        <div class="h-1 w-12 bg-[#C47E6D] mt-2 rounded-full"></div>
                    </div>

                    <form class="space-y-4">
                        <div class="group">
                            <input type="text" placeholder="Your Name"
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all">
                        </div>


                        <div class="group">
                            <input type="email" placeholder="Email Address"
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all">
                        </div>
                        <div class="group">
                            <input type="number" placeholder="Your Phone Number"
                                class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all">
                        </div>

                        <textarea placeholder="Tell us about your requirements..." rows="4"
                            class="w-full bg-white/5 border border-white/10 rounded-2xl px-2 py-2 text-white placeholder-gray-500 outline-none focus:border-[#C47E6D]/50 focus:bg-white/10 transition-all resize-none"></textarea>

                        <button type="submit"
                            class="w-full mt-4 bg-[#C47E6D] text-black font-semibold py-3 rounded-xl
         hover:bg-[#d58f7c] transition">
                            Submit
                        </button>

                    </form>
                </div>
            </div>
        </div>

        <script>

        </script>
    @endsection
</x-app-layout>
