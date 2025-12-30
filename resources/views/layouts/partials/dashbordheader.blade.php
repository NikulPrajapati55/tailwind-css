@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp
    <header class="fixed  bg-[#0b0f19] w-[100%] z-10">

        <div
            class="absolute inset-x-0 -top-10 h-24 blur-3xl opacity-40
        bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        </div>
        <div
            class="relative max-w-8xl mx-auto px-6 py-5
        backdrop-blur-2xl
         border-b border-white/15
        shadow-[inset_0_0_0_1px_rgba(255,255,255,.10),0_0_45px_rgba(0,0,0,.65)]
        flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-bold text-white">Dashboard</h1>

                <p class="text-sm text-gray-400">
                    Welcome back — manage your workspace
                </p>
            </div>

            <div class="flex items-center gap-2">



                <a href="#projectModal"
                    class="px-4 py-2 rounded-2xl cursor-pointer
               bg-white/5 border border-white/20 text-white
               hover:bg-white/10 transition">Project</a>

                <a href="#teamModal"
                    class="px-4 py-2 rounded-2xl cursor-pointer
               bg-white/5 border border-white/20 text-white
               hover:bg-white/10 transition">Team</a>

                <a href="#billingModal"
                    class="px-4 py-2 rounded-2xl cursor-pointer
               bg-white/5 border border-white/20 text-white
               hover:bg-white/10 transition">Billing</a>

                <div>
                    <a href="#profileModal"
                        class="flex items-center gap-2 px-4 py-2 rounded-2xl cursor-pointer
               bg-white/5 border border-white/20 text-white
               hover:bg-white/10 hover:border-indigo-300 transition">

                        <div
                            class="w-9 h-9 rounded-xl
                    bg-gradient-to-r from-indigo-500 to-purple-500
                    flex items-center justify-center">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <span class="font-semibold">{{ $user->name }}</span>
                    </a>
                </div>
            </div>
        </div>

    </header>



<div id="profileModal" data-modal
    class="fixed inset-0 hidden z-[200] flex items-center justify-center
     bg-black/60 backdrop-blur-sm">

    <div
        class="glass-modal-card w-full max-w-lg p-7
        bg-white/10 backdrop-blur-2xl
        border border-white/25 rounded-3xl
        shadow-[inset_0_0_0_1px_rgba(255,255,255,.18),0_0_40px_rgba(0,0,0,.65)]
        opacity-0 scale-90 translate-y-5
        transition-all duration-300">

        <div class="flex items-center gap-3 mb-4 justify-between">
            <div class="flex items-center gap-3">
                <div
                    class="w-11 h-11 rounded-2xl bg-white/20 border border-white/30
                 flex items-center justify-center">
                    <i class="fa-solid fa-user text-white"></i>
                </div>

                <div>
                    <h2 class="text-lg font-bold text-white">{{ $user->name }}</h2>
                </div>
            </div>
            <a data-close-modal
                class=" block text-center px-3 py-2 rounded-2xl cursor-pointer
           bg-white/10 border border-white/20 text-white hover:bg-white/20">
                <i class="fa-solid fa-xmark text-white"></i>
            </a>
        </div>

        <!-- BODY -->
        <div class="rounded-2xl p-4 bg-white/10 border border-white/20 space-y-2 text-sm">
            <p class="text-white"><span class="font-semibold text-white">Email:</span> {{ $user->email }}</p>
            <p class="text-white"><span class="font-semibold text-white">Tenant:</span> {{ $user->tenant_id }}</p>
        </div>

        <!-- ACTION ROW -->
        <div class="mt-5 grid grid-cols-2 gap-3">

            <a href="{{ url()->current() }}"
                class="text-center px-3 py-2 rounded-2xl
               bg-white/15 border border-white/25 text-white
               hover:bg-white/25 transition">
                Dashboard
            </a>

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form')?.submit();"
                class="text-center px-3 py-2 rounded-2xl
               bg-black/60 border border-white/25 text-white
               hover:bg-black/70 transition">
                Logout
            </a>
        </div>

        <!-- CLOSE -->


    </div>
</div>


<div id="projectModal" data-modal
    class="fixed inset-0 hidden z-[200] flex items-center justify-center
    bg-black/60 backdrop-blur-sm">

    <div
        class="absolute inset-0 pointer-events-none
        bg-[radial-gradient(circle_at_20%_10%,rgba(255,255,255,.1),transparent_50%),
            radial-gradient(circle_at_90%_90%,rgba(255,255,255,.06),transparent_45%)]">
    </div>

    <div
        class="glass-modal-card relative w-full max-w-xl p-7 rounded-3xl
        bg-white/10 backdrop-blur-2xl border border-white/30
        shadow-[inset_0_0_0_1px_rgba(255,255,255,.2),0_0_50px_rgba(0,0,0,.8)]
        opacity-0 scale-90 translate-y-5 transition-all duration-300">

        <div class="flex items-center gap-3 mb-4  justify-between">
            <div class="flex gap-3 items-center">
                <div
                    class="w-11 h-11 rounded-2xl bg-indigo-500/60 border border-white/40 flex items-center justify-center">
                    <i class="fa-solid fa-layer-group text-white"></i>
                </div>
                <h2 class="text-lg font-bold text-white tracking-wide">Project Overview</h2>
            </div>
            <a data-close-modal
                class=" block text-center px-3 py-2 rounded-2xl cursor-pointer
           bg-white/10 border border-white/20 text-white hover:bg-white/20">
                <i class="fa-solid fa-xmark text-white"></i>
            </a>
        </div>

        <div class="rounded-2xl p-4 bg-white/10 border border-white/20 text-sm space-y-2">
            <p class="text-white"><span class="font-semibold text-white">Project:</span> Creative SaaS Dashboard</p>
            <p class="text-white"><span class="font-semibold text-white">Status:</span> <span
                    class="text-emerald-300">Active</span></p>
            <p class="text-white"><span class="font-semibold text-white">Last Update:</span> 2 days ago</p>
        </div>

        <div class="mt-5 grid grid-cols-2 gap-3">
            <a href="#"
                class="px-3 py-2 rounded-2xl text-center bg-indigo-500/70 border border-white/30 text-white">
                Open Project
            </a>
        </div>
    </div>
</div>


<!-- ─────────────────────────────
 TEAM MODAL
────────────────────────────── -->
<div id="teamModal" data-modal
    class="fixed inset-0 hidden z-[200] flex items-center justify-center
     bg-black/60 backdrop-blur-sm">

    <div
        class="glass-modal-card relative w-full max-w-md p-7 rounded-3xl
        bg-white/10 backdrop-blur-2xl border border-white/30
        shadow-[inset_0_0_0_1px_rgba(255,255,255,.2),0_0_50px_rgba(0,0,0,.8)]
        opacity-0 scale-90 translate-y-5 transition-all duration-300">

        <div class="flex items-center gap-3 mb-4 justify-between">
            <div class="flex gap-3 items-center">
                <div
                    class="w-11 h-11 rounded-2xl bg-purple-500/60 border border-white/40 flex items-center justify-center">
                    <i class="fa-solid fa-user-group text-white"></i>
                </div>

                <h2 class="text-lg font-bold text-white tracking-wide">Team Member</h2>
            </div>
            <a data-close-modal
                class=" block text-center px-3 py-2 rounded-2xl cursor-pointer
           bg-white/10 border border-white/20 text-white hover:bg-white/20">
                <i class="fa-solid fa-xmark text-white"></i>
            </a>
        </div>

        <div class="rounded-2xl p-4 bg-white/10 border border-white/20 text-sm space-y-2">
            <p><span class="font-semibold text-white">Name:</span> John Carter</p>
            <p><span class="font-semibold text-white">Role:</span> Project Manager</p>
            <p><span class="font-semibold text-white">Access:</span> <span class="text-sky-300">Admin</span></p>
        </div>

        <div class="mt-5 grid grid-cols-2 gap-3">


            <button class="px-3 py-2 rounded-2xl bg-rose-500/70 border border-white/30 text-white">
                Remove Access
            </button>
        </div>
    </div>
</div>


<!-- ─────────────────────────────
 BILLING MODAL
────────────────────────────── -->
<div id="billingModal" data-modal
    class="fixed inset-0 hidden z-[200] flex items-center justify-center
     bg-black/60 backdrop-blur-sm">

    <div
        class="glass-modal-card relative w-full max-w-lg p-7 rounded-3xl
        bg-white/10 backdrop-blur-2xl border border-white/30
        shadow-[inset_0_0_0_1px_rgba(255,255,255,.2),0_0_50px_rgba(0,0,0,.8)]
        opacity-0 scale-90 translate-y-5 transition-all duration-300">

        <div class="flex items-center gap-3 mb-4 justify-between">
            <div class="flex gap-3 items-center">
                <div
                    class="w-11 h-11 rounded-2xl bg-emerald-500/60 border border-white/40 flex items-center justify-center">
                    <i class="fa-solid fa-credit-card text-white"></i>
                </div>

                <h2 class="text-lg font-bold text-white tracking-wide">
                    Billing & Subscription
                </h2>
            </div>
            <a data-close-modal
                class=" block text-center px-3 py-2 rounded-2xl cursor-pointer
           bg-white/10 border border-white/20 text-white hover:bg-white/20">
                <i class="fa-solid fa-xmark text-white"></i>
            </a>
        </div>

        <div class="rounded-2xl p-4 bg-white/10 border border-white/20 text-sm space-y-2">
            <p><span class="font-semibold text-white">Plan:</span> Pro</p>
            <p><span class="font-semibold text-white">Next Billing:</span> 28 Feb 2025</p>
            <p><span class="font-semibold text-white">Seats:</span> 5 Users</p>
        </div>

        <div class="mt-5 grid grid-cols-2 gap-3">

            <a href="#"
                class="px-3 py-2 rounded-2xl text-center bg-emerald-500/70 border border-white/30 text-white">
                Upgrade Plan
            </a>
        </div>
    </div>
</div>
