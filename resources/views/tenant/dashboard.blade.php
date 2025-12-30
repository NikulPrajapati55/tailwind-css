<x-dashboard-layout>
    @section('meta')
        <title> Dashboard</title>
    @endsection

    @section('content')
        <div class="min-h-screen max-auto p-6  w-[100%]  text-gray-900">

            @php
                $user = \Illuminate\Support\Facades\Auth::user();

                $tenantSlug = strtolower(
                    \Illuminate\Support\Str::slug($user->name) . '-' . substr($user->tenant_id, 0, 4),
                );
            @endphp
            <main class="space-y-8 ml-18">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                    <div
                        class="rounded-2xl p-5 bg-gradient-to-br from-indigo-600/40 to-indigo-900/40
            backdrop-blur-2xl border border-white/30 shadow-2xl text-white">

                        <p class="text-gray-300 text-sm flex items-center gap-2">
                            <i class="fa-solid fa-layer-group text-indigo-300"></i>
                            Active Projects
                        </p>

                        <h3 class="text-4xl font-black mt-2">12</h3>

                        <span class="text-emerald-300 text-xs mt-1 inline-block">
                            ▲ +3 this week
                        </span>
                    </div>

                    {{-- Team Members --}}
                    <div
                        class="rounded-2xl p-5 bg-gradient-to-br from-purple-600/40 to-indigo-900/40
            backdrop-blur-2xl border border-white/30 shadow-2xl text-white">

                        <p class="text-gray-300 text-sm flex items-center gap-2">
                            <i class="fa-solid fa-users text-purple-300"></i>
                            Team Members
                        </p>

                        <h3 class="text-4xl font-black mt-2">5</h3>

                        <span class="text-sky-300 text-xs mt-1 inline-block">
                            ● Stable
                        </span>
                    </div>

                    {{-- Pending Tasks --}}
                    <div
                        class="rounded-2xl p-5 bg-gradient-to-br from-rose-600/40 to-indigo-900/40
            backdrop-blur-2xl border border-white/30 shadow-2xl text-white">

                        <p class="text-gray-300 text-sm flex items-center gap-2">
                            <i class="fa-solid fa-list-check text-rose-300"></i>
                            Pending Tasks
                        </p>

                        <h3 class="text-4xl font-black mt-2">8</h3>

                        <span class="text-amber-300 text-xs mt-1 inline-block">
                            ⚠ Needs attention
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div
                        class="rounded-2xl p-6
            bg-white/10 backdrop-blur-2xl border border-white/25
            shadow-[inset_0_0_12px_rgba(255,255,255,.25)] text-white">

                        <h2 class="text-lg font-semibold tracking-wide mb-1">
                            Project Activity Trend
                        </h2>

                        <p class="text-gray-300 text-sm mb-4">
                            Last 6 months overview
                        </p>

                        <canvas id="projectsChart" height="90"></canvas>
                    </div>


                    {{-- Tasks Completion Chart --}}
                    <div
                        class="rounded-2xl p-6
            bg-white/10 backdrop-blur-2xl border border-white/25
            shadow-[inset_0_0_12px_rgba(255,255,255,.25)] text-white">

                        <h2 class="text-lg font-semibold tracking-wide mb-1">
                            Task Completion Rate
                        </h2>

                        <p class="text-gray-300 text-sm mb-4">
                            Productivity insights
                        </p>

                        <canvas id="tasksChart" height="90"></canvas>
                    </div>
                </div>



                {{-- ACTIVITY TIMELINE --}}
                <div
                    class="rounded-2xl p-6
        bg-white/10 backdrop-blur-2xl border border-white/25
        shadow-[inset_0_0_12px_rgba(255,255,255,.25)] text-white">

                    <h2 class="text-xl font-semibold mb-2 tracking-wide">
                        Recent Activity
                    </h2>

                    <ul class="space-y-3">

                        <li class="p-3 rounded-xl bg-white/10 border border-white/20 flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-emerald-300"></i>
                            Tenant created successfully 🎉
                        </li>

                        <li class="p-3 rounded-xl bg-white/10 border border-white/20 flex items-center gap-3">
                            <i class="fa-solid fa-user-plus text-sky-300"></i>
                            New member invited to workspace
                        </li>

                        <li class="p-3 rounded-xl bg-white/10 border border-white/20 flex items-center gap-3">
                            <i class="fa-solid fa-pen-ruler text-amber-300"></i>
                            Project updated yesterday
                        </li>

                    </ul>
                </div>

            </main>
        </div>
    @endsection
</x-dashboard-layout>
