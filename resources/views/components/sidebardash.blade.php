

@php
    $user = \Illuminate\Support\Facades\Auth::user();

    $tenantSlug = strtolower(
        \Illuminate\Support\Str::slug($user->name) . '-' .
        substr($user->tenant_id, 0, 4)
    );
@endphp
<div class="w-[350px] relative ">
   <aside class="w-[350px] fixed h-[100vh] overflow-y-scroll
    bg-white/10 backdrop-blur-2xl
    border border-white/20
    rounded-2xl shadow-[inset_0_0_0_1px_rgba(255,255,255,.15)]
    p-5 text-white space-y-4">

    <h2 class="text-lg font-semibold tracking-wide flex items-center gap-2">
        <i class="fa-solid fa-compass text-indigo-300"></i>
        Navigation
    </h2>

    <ul class="space-y-2">

        {{-- Dashboard --}}
        <li>
            <a href="{{ route('tenant.dashboard', ['tenant_slug' => $tenantSlug]) }}"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/20 border border-white/30
               hover:bg-indigo-500/30 hover:border-indigo-300 transition">

               <i class="fa-solid fa-gauge-high text-indigo-300"></i>
               <span class="font-medium">Dashboard Home</span>
            </a>
        </li>

        {{-- Projects --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-layer-group text-amber-300"></i>
               <span>My Projects</span>
            </a>
        </li>

        {{-- Billing --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-wallet text-emerald-300"></i>
               <span>Billing & Payments</span>
            </a>
        </li>

        {{-- Team --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-users text-sky-300"></i>
               <span>Team Members</span>
            </a>
        </li>

    </ul>


    {{-- SECOND SECTION --}}
    <h2 class="text-sm tracking-widest uppercase text-gray-300 mt-4">
        Account & Tools
    </h2>

    <ul class="space-y-2">

        {{-- Profile --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-user text-purple-300"></i>
               <span>My Profile</span>
            </a>
        </li>

        {{-- Notifications --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-bell text-rose-300"></i>
               <span>Notifications</span>
            </a>
        </li>

        {{-- Settings --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-gear text-indigo-300"></i>
               <span>System Settings</span>
            </a>
        </li>

    </ul>


    {{-- HELP SECTION --}}
    <h2 class="text-sm tracking-widest uppercase text-gray-300 mt-4">
        Help & Support
    </h2>

    <ul class="space-y-2">

        {{-- Documentation --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-book text-teal-300"></i>
               <span>Documentation</span>
            </a>
        </li>

        {{-- Support --}}
        <li>
            <a href="#"
               class="flex items-center gap-3 p-3 rounded-xl
               bg-white/10 border border-white/20
               hover:bg-white/20 transition">

               <i class="fa-solid fa-headset text-orange-300"></i>
               <span>Customer Support</span>
            </a>
        </li>

    </ul>


    {{-- LOGOUT --}}
    <form method="POST" action="{{ route('logout') }}" class="pt-2">
        @csrf
        <button type="submit"
            class="w-full flex items-center justify-center gap-3 p-3 rounded-xl
            bg-black/60 border border-white/25
            hover:bg-black/80 transition">

            <i class="fa-solid fa-right-from-bracket text-red-300"></i>
            Logout
        </button>
    </form>

</aside>

</div>
