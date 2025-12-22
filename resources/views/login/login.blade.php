<x-app-layout>
    @section('meta')
        <title>Creative Portal | Register & Login</title>
        <style>
            .bg-main {
                background: radial-gradient(circle at top right, #1e1b4b, #0f172a, #020617);
            }

            .glass-card {
                background: rgba(255, 255, 255, 0.02);
                backdrop-filter: blur(25px);
                -webkit-backdrop-filter: blur(25px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 0 60px rgba(0, 0, 0, 0.6);
                border-radius: 28px;
            }

            /* Modern Inputs */
            .input-field {
                background: rgba(0, 0, 0, 0.4);
                border: 1px solid rgba(255, 255, 255, 0.1);
                color: #ffffff;
                transition: all 0.3s ease;
                font-size: 14px;
            }

            .input-field:focus {
                border-color: #6366f1;
                /* Indigo */
                background: rgba(0, 0, 0, 0.6);
                outline: none;
                box-shadow: 0 0 15px rgba(99, 102, 241, 0.3);
            }

            /* Popup Overlay Styling */
            #loginModal {
                display: none;
                background: rgba(0, 0, 0, 0.7);
                backdrop-filter: blur(8px);
                transition: opacity 0.3s ease;
            }

            #particle-canvas {
                position: absolute;
                inset: 0;
                z-index: 0;
                pointer-events: none;
            }
        </style>
    @endsection

    @section('content')
        <div class=" w-full flex items-baseline pt-10 justify-center bg-main overflow-hidden relative">

            <canvas id="particle-canvas"></canvas>

            <div id="registerCard" class="relative z-10 w-full max-w-[420px] p-6 glass-card mx-4">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-black text-white tracking-tight">Create Account</h2>
                    <p class="text-[10px] text-indigo-400 font-bold uppercase tracking-[0.3em] mt-2">Join our creative space
                    </p>
                </div>

                <form action="" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-[10px] text-gray-400 font-bold uppercase mb-1.5 ml-1">Full Name</label>
                        <input class="input-field w-full px-5 py-3 rounded-2xl" type="text" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-[10px] text-gray-400 font-bold uppercase mb-1.5 ml-1">Email Address</label>
                        <input class="input-field w-full px-5 py-3 rounded-2xl" type="email"
                            placeholder="email@example.com">
                    </div>
                    <div>
                        <label class="block text-[10px] text-gray-400 font-bold uppercase mb-1.5 ml-1">Password</label>
                        <input class="input-field w-full px-5 py-3 rounded-2xl" type="password" placeholder="••••••••">
                    </div>

                    <button
                        class="w-full py-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-2xl transition-all shadow-xl shadow-indigo-500/20 mt-2">
                        SIGN UP
                    </button>
                </form>

                <div class="mt-8 text-center pt-5 border-t border-white/10">
                    <p class="text-gray-400 text-sm">
                        Already a member?
                        <button id="openLogin"
                            class="text-white font-bold hover:text-indigo-400 transition-colors underline underline-offset-8 decoration-indigo-500">Log
                            In</button>
                    </p>
                </div>
            </div>

            <div id="loginModal" class="fixed inset-0 z-50 flex items-center justify-center p-4">
                <div id="modalContent" class="w-full max-w-[380px] p-10 glass-card relative">
                    <button id="closeLogin" class="absolute top-5 right-5 text-gray-500 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>

                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-white">Welcome Back</h2>
                        <p class="text-[10px] text-indigo-400 font-bold uppercase mt-1">Please enter your credentials</p>
                    </div>

                    <form action="" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-[10px] text-gray-400 font-bold uppercase mb-1.5">Email Address</label>
                            <input class="input-field w-full px-5 py-3.5 rounded-2xl" type="email" required
                                placeholder="name@domain.com">
                        </div>
                        <div>
                            <label class="block text-[10px] text-gray-400 font-bold uppercase mb-1.5">Password</label>
                            <input class="input-field w-full px-5 py-3.5 rounded-2xl" type="password" required
                                placeholder="••••••••">
                        </div>
                        <button
                            class="w-full py-4 bg-white text-indigo-950 font-black rounded-2xl hover:bg-indigo-100 transition-all shadow-2xl">
                            LOGIN
                        </button>
                    </form>
                </div>
            </div>
        </div>

    @endsection
</x-app-layout>
