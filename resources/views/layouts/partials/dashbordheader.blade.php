@php
    $user = \Illuminate\Support\Facades\Auth::user();
    $tenantSlug = strtolower(Str::slug($user->name) . '-' . substr($user->tenant_id, 0, 4));
    $tenantId = auth()->user()->tenant_id;
    $roleTableName = 'r_' . str_replace('-', '_', $tenantId);
    // Fetch roles here so they are available for the loop below
    $roles = \DB::table($roleTableName)->get();
@endphp
@php

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

        <div class="flex items-center gap-3">
            <a href="#projectModal"
                class="flex items-center gap-2 px-4 py-2 rounded-2xl cursor-pointer bg-white/5 border border-white/20 text-white hover:bg-white/10 transition">
                <i class="fa-solid fa-rocket text-indigo-400"></i>
                <span class="hidden md:inline">Project</span>
            </a>

            <div class="relative group">
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-2xl bg-white/5 border border-white/20 text-white hover:bg-white/10 transition">
                    <i class="fa-solid fa-gears text-purple-400"></i>
                    <span>Workspace</span>
                    <i
                        class="fa-solid fa-chevron-down text-[10px] opacity-50 group-hover:rotate-180 transition-transform"></i>
                </button>

                <div
                    class="absolute right-0 mt-2 w-48 origin-top-right rounded-2xl bg-[#161b26] border border-white/10 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-y-2 group-hover:translate-y-0 transition-all z-50 overflow-hidden">
                    <div class="p-2">
                        <a href="#roleModal"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-user-shield w-5 text-indigo-400"></i> Roles
                        </a>
                        <a href="#teamModal"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-users w-5 text-purple-400"></i> Team Members
                        </a>
                        <a href="#billingModal"
                            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-credit-card w-5 text-emerald-400"></i> Billing
                        </a>
                    </div>
                </div>
            </div>

            <div class="ml-2 border-l border-white/10 pl-4">
                <a href="#profileModal"
                    class="flex items-center gap-3 px-2 py-1.5 rounded-2xl hover:bg-white/5 transition group">
                    <div
                        class="w-9 h-9 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                        <i class="fa-solid fa-user text-white text-sm"></i>
                    </div>
                    <div class="hidden lg:block text-left">
                        <p class="text-xs text-gray-400 leading-none mb-1">Signed in as</p>
                        <p class="text-sm font-semibold text-white leading-none">{{ $user->name }}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</header>

<div id="profileModal" data-modal
    class="fixed inset-0 hidden z-[200] flex items-center justify-center bg-[#050505]/85 backdrop-blur-lg">

    @php
        $user = Auth::user();
        $tenantId = $user->tenant_id;
        $sanitizedId = str_replace('-', '_', $tenantId);
        $userTable = 't_' . $sanitizedId;
        $roleTable = 'r_' . $sanitizedId;

        // Fetch the specific user's role from the tenant's private tables
        $userData = DB::table($userTable)
            ->leftJoin($roleTable, "$userTable.role_id", '=', "$roleTable.id")
            ->where("$userTable.email", $user->email)
            ->select("$roleTable.role_name")
            ->first();

        $currentRole = $userData->role_name ?? 'Member';
    @endphp

    <div
        class="glass-modal-card relative w-full max-w-lg overflow-hidden
        bg-gradient-to-b from-white/15 to-white/[0.03] backdrop-blur-3xl
        border border-white/20 rounded-[3rem]
        shadow-[0_25px_60px_-15px_rgba(0,0,0,0.8)]
        opacity-0 scale-95 translate-y-8 transition-all duration-500 ease-out">

        <div class="h-32 bg-gradient-to-br from-indigo-600/50 via-purple-600/40 to-pink-500/30 relative">
            <div class="absolute top-6 right-6">
                <a data-close-modal
                    class="p-3 rounded-full bg-black/30 hover:bg-rose-500/40 text-white transition-all cursor-pointer border border-white/10">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </a>
            </div>
        </div>

        <div class="relative flex justify-center -mt-16">
            <div class="p-1.5 rounded-[2.6rem] bg-gradient-to-b from-white/30 to-transparent">
                <div
                    class="w-32 h-32 rounded-[2.2rem] bg-[#0b0f19] flex items-center justify-center border border-white/20 shadow-2xl">
                    <i class="fa-solid fa-user text-5xl text-white"></i>
                </div>
            </div>
        </div>

        <div class="text-center mt-6 px-10">
            <h2 class="text-3xl font-extrabold text-white tracking-tight">{{ $user->name }}</h2>
            <div class="flex items-center justify-center gap-2 mt-2">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <p class="text-indigo-300 text-base font-bold tracking-[0.1em] uppercase">
                    {{ $currentRole }}
                </p>
            </div>
        </div>

        <div class="p-10 space-y-4">
            <div
                class="group flex items-center gap-5 p-5 rounded-[1.8rem] bg-white/5 border border-white/10 hover:bg-white/10 transition-all">
                <div
                    class="w-14 h-14 rounded-2xl bg-indigo-500/20 flex items-center justify-center text-indigo-300 border border-indigo-500/30">
                    <i class="fa-solid fa-envelope text-xl"></i>
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="text-xs uppercase tracking-[0.15em] text-gray-400 font-black mb-1">Email Address</p>
                    <p class="text-lg text-white font-medium truncate">{{ $user->email }}</p>
                </div>
            </div>

            <div
                class="group flex items-center gap-5 p-5 rounded-[1.8rem] bg-white/5 border border-white/10 hover:bg-white/10 transition-all">
                <div
                    class="w-14 h-14 rounded-2xl bg-purple-500/20 flex items-center justify-center text-purple-300 border border-purple-500/30">
                    <i class="fa-solid fa-fingerprint text-xl"></i>
                </div>
                <div class="flex-1 overflow-hidden text-left">
                    <p class="text-xs uppercase tracking-[0.15em] text-gray-400 font-black mb-1">Tenant ID</p>
                    <div class="flex items-center gap-2">
                        <p id="tenantCopyText" class="text-base font-mono text-gray-300 truncate">{{ $user->tenant_id }}
                        </p>
                        <button onclick="copyTenantId()" class="text-gray-500 hover:text-white transition-colors">
                            <i class="fa-regular fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-10 pb-12 pt-2 grid grid-cols-2 gap-5">
            <a href="{{ url()->current() }}"
                class="flex items-center justify-center gap-3 px-6 py-4 rounded-2xl bg-white/10 border border-white/20 text-white font-bold text-base hover:bg-white hover:text-black transition-all">
                <i class="fa-solid fa-gauge-high"></i>
                Dashboard
            </a>

            <form action="{{ route('logout') }}" method="POST" class="contents">
                @csrf
                <button type="submit"
                    class="flex items-center justify-center gap-3 px-6 py-4 rounded-2xl bg-rose-500/10 border border-rose-500/30 text-rose-400 font-bold text-base hover:bg-rose-600 hover:text-white transition-all shadow-lg shadow-rose-500/10">
                    <i class="fa-solid fa-power-off"></i>
                    Sign Out
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function copyTenantId() {
        const text = "{{ $user->tenant_id }}";
        navigator.clipboard.writeText(text).then(() => {
            alert('Tenant ID copied to clipboard!');
        });
    }
</script>

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
<div id="teamModal" data-modal class="fixed inset-0 hidden z-[200] flex items-center justify-center bg-black/80 backdrop-blur-md p-6">
    <div class="glass-modal-card relative w-full max-w-2xl bg-[#111827]/90 border border-white/10 rounded-[2.5rem] shadow-2xl transition-all duration-300 transform scale-95 opacity-0">

        <div class="p-10 border-b border-white/5">
            <h2 class="text-3xl font-bold text-white">Add Team Member</h2>
            <p class="text-gray-400 mt-2">Invite a new person to collaborate in this workspace.</p>
        </div>

        <form action="{{ route('team.store', ['tenant_slug' => request()->route('tenant_slug')]) }}" method="POST">
            @csrf
            <div class="p-10 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-indigo-400 ml-1">Full Name</label>
                        <input type="text" name="name" placeholder="John Doe" required
                            class="w-full px-5 py-4 rounded-2xl bg-black/40 border border-white/10 text-white focus:border-indigo-500 outline-none transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-indigo-400 ml-1">Email Address</label>
                        <input type="email" name="email" placeholder="john@example.com" required
                            class="w-full px-5 py-4 rounded-2xl bg-black/40 border border-white/10 text-white focus:border-indigo-500 outline-none transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-indigo-400 ml-1">Password</label>
                        <input type="password" name="password" placeholder="Min. 6 characters" required
                            class="w-full px-5 py-4 rounded-2xl bg-black/40 border border-white/10 text-white focus:border-indigo-500 outline-none transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-indigo-400 ml-1">Assign Role</label>
                        <select name="role_id" required
                            class="w-full px-5 py-4 rounded-2xl bg-black/40 border border-white/10 text-white focus:border-indigo-500 outline-none appearance-none cursor-pointer">
                            <option class="bg-black" value="" disabled selected>Choose a role...</option>
                            @foreach($roles as $role)
        {{-- Only show the role if it is NOT 'admin' --}}
        @if(strtolower($role->role_name) !== 'admin')
            <option class="bg-black" value="{{ $role->id }}">{{ ucfirst($role->role_name) }}</option>
        @endif
    @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="p-10 border-t border-white/5 flex gap-4">
                <button type="button" data-close-modal class="flex-1 py-4 text-gray-400 font-bold hover:text-white transition-all">
                    Cancel
                </button>
                <button type="submit" class="flex-[2] py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg shadow-indigo-600/20 transition-all">
                    Invite Member
                </button>
            </div>
        </form>
    </div>
</div>

<div id="roleModal" data-modal class="fixed inset-0 hidden z-[200] flex items-center justify-center bg-black/80 backdrop-blur-md p-6">

    <div class="glass-modal-card relative w-full max-w-2xl bg-[#111827]/90 border border-white/10 rounded-3xl shadow-2xl transition-all duration-300 transform scale-95 opacity-0">

        <div class="p-8 border-b border-white/5 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-white">Manage Roles</h2>
                <p class="text-gray-400 text-sm">Create and delete workspace permissions</p>
            </div>
            <button data-close-modal class="text-gray-400 hover:text-white transition-colors">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </button>
        </div>

        <div class="p-8 bg-white/5">
            <form action="{{ route('roles.store', ['tenant_slug' => request()->route('tenant_slug')]) }}" method="POST">
                @csrf
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="text" name="role_name" placeholder="Enter role name..." required
                        class="flex-1 px-6 py-4 rounded-xl bg-black/40 border border-white/10 text-white focus:outline-none focus:border-indigo-500 transition-all">
                    <button type="submit" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-lg">
                        Add New Role
                    </button>
                </div>
            </form>
        </div>

        <div class="p-8">
            <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Active Roles</h3>
            <div class="space-y-3 max-h-64 overflow-y-auto pr-2">
                @foreach($roles as $role)
                <div class="flex items-center justify-between p-4 bg-white/5 border border-white/5 rounded-xl hover:bg-white/10 transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-indigo-400 text-xs"></i>
                        <span class="text-white font-medium capitalize">{{ $role->role_name }}</span>
                    </div>

                    @if($role->role_name !== 'admin')
                    <form action="{{ route('roles.destroy', ['tenant_slug' => request()->route('tenant_slug'), 'id' => $role->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="text-gray-500 hover:text-red-500 transition-colors">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                    @else
                    <span class="text-[10px] text-gray-500 font-bold uppercase border border-gray-700 px-2 py-1 rounded">System</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        <div class="p-8 border-t border-white/5">
            <button data-close-modal class="w-full py-4 text-gray-400 hover:text-white font-medium transition-colors">
                Close Settings
            </button>
        </div>
    </div>
</div>
