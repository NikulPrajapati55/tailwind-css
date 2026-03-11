<x-app-layout>
    @section('meta')
        <title>Open Source Tailwind CSS UI Kit | Responsive Themes & Components</title>
     <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@400;500&display=swap');

    * { font-family: 'Inter', sans-serif; }
    h1 { font-family: 'Syne', sans-serif; }

    /* Animated gradient orbs */
    .orb {
      animation: pulse-orb 6s ease-in-out infinite alternate;
    }
    .orb-2 {
      animation: pulse-orb 8s ease-in-out infinite alternate-reverse;
    }
    @keyframes pulse-orb {
      0%   { transform: scale(1) translate(0, 0); opacity: 0.5; }
      100% { transform: scale(1.15) translate(20px, -20px); opacity: 0.75; }
    }

    /* ── Glass Card ── */
    .glass-card {
      background: linear-gradient(
        135deg,
        rgba(255,255,255,0.13) 0%,
        rgba(255,255,255,0.04) 100%
      );
      backdrop-filter: blur(28px) saturate(160%);
      -webkit-backdrop-filter: blur(28px) saturate(160%);
      border: 1px solid rgba(255,255,255,0.18);
      box-shadow:
        0 8px 32px rgba(0,0,0,0.5),
        0 1px 0 rgba(255,255,255,0.12) inset,  /* top sheen */
        0 -1px 0 rgba(0,0,0,0.3) inset;        /* bottom shadow */
      transition: box-shadow 0.4s ease, transform 0.4s ease;
    }
    .glass-card:hover {
      box-shadow:
        0 20px 60px rgba(0,0,0,0.65),
        0 1px 0 rgba(255,255,255,0.18) inset,
        0 -1px 0 rgba(0,0,0,0.3) inset;
      transform: translateY(-4px) scale(1.01);
    }

    /* Inner image frame – extra glass layer */
    .glass-card .img-frame {
      background: linear-gradient(
        160deg,
        rgba(255,255,255,0.10) 0%,
        rgba(255,255,255,0.02) 100%
      );
      border: 1px solid rgba(255,255,255,0.14);
      box-shadow: 0 4px 24px rgba(0,0,0,0.4);
    }

    /* Glowing accent line along card top */
    .glass-card::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: inherit;
      background: linear-gradient(
        90deg,
        rgba(139,92,246,0.35) 0%,
        rgba(236,72,153,0.25) 50%,
        transparent 100%
      );
      opacity: 0;
      transition: opacity 0.4s;
      pointer-events: none;
    }
    .glass-card:hover::before { opacity: 1; }

    /* ── Glass Button ── */
    .glass-btn {
      position: relative;
      overflow: hidden;
      background: linear-gradient(
        135deg,
        rgba(255,255,255,0.18) 0%,
        rgba(255,255,255,0.06) 100%
      );
      backdrop-filter: blur(20px) saturate(150%);
      -webkit-backdrop-filter: blur(20px) saturate(150%);
      border: 1px solid rgba(255,255,255,0.25);
      box-shadow:
        0 4px 20px rgba(0,0,0,0.35),
        0 1px 0 rgba(255,255,255,0.2) inset;  /* top sheen */
      transition: all 0.3s ease;
    }
    /* Shimmer sweep on hover */
    .glass-btn::after {
      content: '';
      position: absolute;
      top: -60%;
      left: -80%;
      width: 60%;
      height: 200%;
      background: linear-gradient(
        105deg,
        transparent 30%,
        rgba(255,255,255,0.25) 50%,
        transparent 70%
      );
      transform: skewX(-20deg);
      transition: left 0.5s ease;
    }
    .glass-btn:hover::after { left: 130%; }
    .glass-btn:hover {
      background: linear-gradient(
        135deg,
        rgba(255,255,255,0.26) 0%,
        rgba(255,255,255,0.10) 100%
      );
      box-shadow:
        0 8px 32px rgba(0,0,0,0.45),
        0 1px 0 rgba(255,255,255,0.3) inset;
      transform: translateY(-2px);
    }
    .glass-btn:active { transform: translateY(0); }

    /* Noise texture overlay for depth */
    .noise::after {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: inherit;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none;
      opacity: 0.4;
    }

    :root {
      --glass-blur: blur(24px) saturate(160%);
    }
    * { font-family: 'DM Sans', sans-serif; }
    h1, h2, h3, .display { font-family: 'Syne', sans-serif; }

    /* ── Section label pill ── */
    .section-pill {
      background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.04));
      border: 1px solid rgba(255,255,255,0.15);
      backdrop-filter: blur(12px);
    }

    /* ── Type Card base ── */
    .type-card {
      background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%);
      backdrop-filter: var(--glass-blur);
      -webkit-backdrop-filter: var(--glass-blur);
      border: 1px solid rgba(255,255,255,0.12);
      box-shadow: 0 8px 40px rgba(0,0,0,0.45), 0 1px 0 rgba(255,255,255,0.1) inset;
      transition: transform 0.35s ease, box-shadow 0.35s ease;
    }
    .type-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 24px 60px rgba(0,0,0,0.55), 0 1px 0 rgba(255,255,255,0.15) inset;
    }

    /* ── Mini preview glass elements ── */
    .mini-glass {
      background: linear-gradient(135deg, rgba(255,255,255,0.14), rgba(255,255,255,0.04));
      border: 1px solid rgba(255,255,255,0.18);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 16px rgba(0,0,0,0.3), 0 1px 0 rgba(255,255,255,0.12) inset;
    }
    .mini-glass-dark {
      background: linear-gradient(135deg, rgba(0,0,0,0.3), rgba(0,0,0,0.15));
      border: 1px solid rgba(255,255,255,0.08);
      backdrop-filter: blur(10px);
    }
    .mini-glass-colored {
      background: linear-gradient(135deg, rgba(139,92,246,0.25), rgba(236,72,153,0.15));
      border: 1px solid rgba(139,92,246,0.3);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(139,92,246,0.2);
    }
    .mini-glass-frost {
      background: rgba(255,255,255,0.18);
      border: 1px solid rgba(255,255,255,0.35);
      backdrop-filter: blur(20px) brightness(1.1);
      box-shadow: 0 4px 20px rgba(0,0,0,0.2), 0 1px 0 rgba(255,255,255,0.4) inset;
    }
    .mini-glass-neon {
      background: linear-gradient(135deg, rgba(0,255,200,0.08), rgba(0,150,255,0.08));
      border: 1px solid rgba(0,255,200,0.25);
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(0,255,200,0.15), 0 4px 16px rgba(0,0,0,0.3);
    }
    .mini-glass-gold {
      background: linear-gradient(135deg, rgba(251,191,36,0.15), rgba(245,158,11,0.06));
      border: 1px solid rgba(251,191,36,0.3);
      backdrop-filter: blur(10px);
      box-shadow: 0 0 24px rgba(251,191,36,0.12), 0 4px 16px rgba(0,0,0,0.3);
    }

    /* Shimmer button */
    .shimmer-btn {
      position: relative; overflow: hidden;
      background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0.05));
      border: 1px solid rgba(255,255,255,0.2);
      backdrop-filter: blur(16px);
      box-shadow: 0 4px 16px rgba(0,0,0,0.3), 0 1px 0 rgba(255,255,255,0.15) inset;
      transition: all 0.3s;
    }
    .shimmer-btn::after {
      content: '';
      position: absolute; top: -50%; left: -80%; width: 50%; height: 200%;
      background: linear-gradient(105deg, transparent 30%, rgba(255,255,255,0.22) 50%, transparent 70%);
      transform: skewX(-20deg);
      transition: left 0.5s;
    }
    .shimmer-btn:hover::after { left: 140%; }
    .shimmer-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(0,0,0,0.4); }

    /* Number badge */
    .num-badge {
      background: linear-gradient(135deg, rgba(255,255,255,0.12), rgba(255,255,255,0.04));
      border: 1px solid rgba(255,255,255,0.15);
      font-family: 'Syne', sans-serif;
    }

    /* Orbs */
    @keyframes drift {
      0%   { transform: translate(0,0) scale(1); }
      50%  { transform: translate(30px,-20px) scale(1.08); }
      100% { transform: translate(0,0) scale(1); }
    }
    .orb { animation: drift 9s ease-in-out infinite; }
    .orb2 { animation: drift 12s ease-in-out infinite reverse; }
    .orb3 { animation: drift 7s ease-in-out infinite 2s; }

    /* Tag chip */
    .tag {
      font-size: 10px; letter-spacing: 0.06em; font-weight: 600;
      padding: 3px 10px; border-radius: 99px;
    }

    /* Preview screen frame */
    .preview-frame {
      background: linear-gradient(180deg, rgba(255,255,255,0.07) 0%, rgba(255,255,255,0.02) 100%);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 16px;
      overflow: hidden;
    }
    .preview-topbar {
      height: 28px;
      background: rgba(255,255,255,0.05);
      border-bottom: 1px solid rgba(255,255,255,0.08);
      display: flex; align-items: center; padding: 0 10px; gap: 5px;
    }
    .dot { width:7px; height:7px; border-radius:50%; }
  </style>

    @endsection
    @section('content')
        <section class="relative py-24 bg-gradient-to-br from-slate-50 via-white to-blue-50 overflow-hidden">
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-200/40 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200/40 blur-3xl rounded-full"></div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight">
                        Premium Platform Features
                    </h2>
                    <p class="mt-4 text-gray-500 max-w-xl mx-auto">
                        Modern SaaS interface inspired by Apple & Stripe with liquid glass UI.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div
                        class="card-animate-gradient group relative rounded-3xl p-[1px] bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 animate-gradient">
                        <div
                            class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 p-8 shadow-xl transition duration-300">
                            <div class="reflection-1 absolute inset-0 opacity-0 group-hover:opacity-100 transition"></div>

                            <div
                                class="mb-6 w-14 h-14 rounded-xl flex items-center justify-center bg-blue-100 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h11M9 21V3m12 7h-5" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                Advanced Analytics
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Powerful insights with real-time dashboards designed for modern SaaS applications.
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-animate-gradient group relative rounded-3xl p-[1px] bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 animate-gradient">
                        <div
                            class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 p-8 shadow-xl transition duration-300">
                            <div class="reflection-1 absolute inset-0 opacity-0 group-hover:opacity-100 transition"></div>
                            <div
                                class="mb-6 w-14 h-14 rounded-xl flex items-center justify-center bg-purple-100 text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                User Management
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Manage users, permissions, and teams with a scalable system.
                            </p>

                        </div>
                    </div>
                    <div
                        class="card-animate-gradient group relative rounded-3xl p-[1px] bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400 animate-gradient">
                        <div
                            class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 p-8 shadow-xl transition duration-300">
                            <div class="reflection-1 absolute inset-0 opacity-0 group-hover:opacity-100 transition"></div>
                            <div
                                class="mb-6 w-14 h-14 rounded-xl flex items-center justify-center bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 3v3m4.5-3v3M4.5 9h15" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                API Integrations
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                Connect your platform with external services using powerful APIs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<section class="relative bg-slate-950 overflow-hidden min-h-screen flex items-center">

  <!-- Glow Orbs -->
  <div class="orb   absolute -top-24 -left-16 w-[500px] h-[500px] bg-indigo-500/25 rounded-full blur-[160px] pointer-events-none"></div>
  <div class="orb-2 absolute -bottom-24 -right-16 w-[500px] h-[500px] bg-pink-500/25  rounded-full blur-[160px] pointer-events-none"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-violet-700/10 rounded-full blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 py-20 relative z-10 w-full">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">

      <!-- LEFT CONTENT -->
      <div class="space-y-7">

        <!-- Eyebrow label -->
        <span class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase text-indigo-400 bg-indigo-500/10 border border-indigo-500/20 px-4 py-1.5 rounded-full">
          <span class="w-1.5 h-1.5 rounded-full bg-indigo-400 animate-pulse"></span>
          UI Design
        </span>

        <h1 class="text-[52px] leading-[1.1] font-extrabold text-white">
          Glass for<br/>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 via-violet-300 to-pink-300">
            UI Design
          </span>
        </h1>

        <p class="text-gray-400 text-lg max-w-md leading-relaxed">
          Learn how to apply glass across UI elements and components.
          Create beautiful glassmorphism interfaces using modern design techniques.
        </p>

        <!-- Glass Button -->
        <a href="#" class="glass-btn inline-flex items-center gap-3 px-7 py-3.5 rounded-2xl text-white font-semibold text-sm tracking-wide">
          <span>Start Learning</span>
          <svg class="w-4 h-4 translate-x-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>

        <!-- Stats row -->
        <div class="flex gap-8 pt-2">
          <div>
            <div class="text-2xl font-bold text-white">120+</div>
            <div class="text-xs text-gray-500 mt-0.5">Components</div>
          </div>
          <div class="w-px bg-white/10"></div>
          <div>
            <div class="text-2xl font-bold text-white">4.9 ★</div>
            <div class="text-xs text-gray-500 mt-0.5">Rating</div>
          </div>
          <div class="w-px bg-white/10"></div>
          <div>
            <div class="text-2xl font-bold text-white">12k</div>
            <div class="text-xs text-gray-500 mt-0.5">Learners</div>
          </div>
        </div>
      </div>

      <!-- RIGHT GLASS CARD -->
      <div class="flex justify-center">
        <div class="glass-card noise relative p-5 rounded-3xl w-fit">

          <!-- Top decorative dots -->
          <div class="flex gap-1.5 mb-4 px-1">
            <span class="w-2.5 h-2.5 rounded-full bg-red-400/60"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-yellow-400/60"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-green-400/60"></span>
          </div>

          <!-- Image with inner glass frame -->
          <div class="img-frame rounded-2xl overflow-hidden p-1">
            <img
              src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=600&q=80"
              class="rounded-xl w-[300px] h-[220px] object-cover block"
              alt="UI Design Visual"
            />
          </div>

          <!-- Card label chip -->
          <div class="mt-4 flex items-center justify-between px-1">
            <div>
              <div class="text-white text-sm font-semibold">Glassmorphism UI</div>
              <div class="text-gray-500 text-xs mt-0.5">Modern design systems</div>
            </div>
            <span class="text-xs text-indigo-300 bg-indigo-500/15 border border-indigo-500/25 px-3 py-1 rounded-full font-medium">
              New
            </span>
          </div>

          <!-- Progress bar -->
          <div class="mt-4 px-1">
            <div class="flex justify-between text-xs text-gray-500 mb-1.5">
              <span>Progress</span><span>68%</span>
            </div>
            <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
              <div class="h-full w-[68%] bg-gradient-to-r from-indigo-400 to-pink-400 rounded-full"></div>
            </div>
          </div>

          <!-- Floating badge – extra glass layer -->
          <div class="absolute -top-4 -right-4 glass-btn px-3 py-2 rounded-xl text-xs text-white font-semibold flex items-center gap-1.5 shadow-lg">
            <span class="text-yellow-300">✦</span> Pro
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="relative bg-slate-950 overflow-hidden py-28">

  <!-- Ambient orbs -->
  <div class="orb  absolute top-10  left-10  w-[380px] h-[380px] bg-violet-600/20 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="orb2 absolute bottom-10 right-10 w-[400px] h-[400px] bg-cyan-500/15  rounded-full blur-[140px] pointer-events-none"></div>
  <div class="orb3 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-pink-500/10 rounded-full blur-[120px] pointer-events-none"></div>

  <!-- Subtle grid overlay -->
  <div class="absolute inset-0 pointer-events-none" style="background-image:linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);background-size:60px 60px;"></div>

  <div class="max-w-7xl mx-auto px-6 relative z-10">

    <!-- Section Header -->
    <div class="text-center mb-20">
      <div class="section-pill inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase text-violet-300 mb-6">
        <span class="w-1.5 h-1.5 rounded-full bg-violet-400 animate-pulse"></span>
        Design Library
      </div>
      <h2 class="text-5xl md:text-6xl font-bold text-white leading-tight mb-5">
        Glass <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 via-cyan-300 to-pink-400">Section Types</span>
      </h2>
      <p class="text-gray-400 text-lg max-w-xl mx-auto leading-relaxed">
        Six distinct glass aesthetics — each with its own personality, depth, and use case. Pick the one that fits your vision.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- ① Classic Frosted -->
      <div class="type-card rounded-3xl p-6 flex flex-col gap-5">
        <div class="flex items-start justify-between">
          <span class="num-badge text-xs text-gray-400 px-2.5 py-1 rounded-lg">01</span>
          <span class="tag bg-blue-500/15 text-blue-300 border border-blue-500/20">Classic</span>
        </div>
        <!-- Preview -->
        <div class="preview-frame">
          <div class="preview-topbar">
            <div class="dot bg-red-400/70"></div><div class="dot bg-yellow-400/70"></div><div class="dot bg-green-400/70"></div>
          </div>
          <div class="relative p-4 h-32 overflow-hidden" style="background:linear-gradient(135deg,#1e1b4b,#312e81,#4c1d95);">
            <div class="mini-glass rounded-xl p-3 w-full h-full flex flex-col justify-between">
              <div class="h-2 w-16 bg-white/30 rounded-full"></div>
              <div class="space-y-1.5">
                <div class="h-1.5 w-full bg-white/20 rounded-full"></div>
                <div class="h-1.5 w-3/4 bg-white/15 rounded-full"></div>
              </div>
              <div class="h-6 w-20 mini-glass rounded-lg flex items-center justify-center">
                <div class="h-1.5 w-10 bg-white/40 rounded-full"></div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-white font-bold text-lg mb-1">Frosted Glass</h3>
          <p class="text-gray-500 text-sm leading-relaxed">The original. High blur, soft white tint, subtle border. Works on any dark or colorful background.</p>
        </div>
        <div class="flex gap-2 flex-wrap">
          <span class="tag bg-white/5 text-gray-400 border border-white/10">backdrop-blur</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">white/10</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">inset shadow</span>
        </div>
      </div>

      <!-- ② Dark Smoked -->
      <div class="type-card rounded-3xl p-6 flex flex-col gap-5">
        <div class="flex items-start justify-between">
          <span class="num-badge text-xs text-gray-400 px-2.5 py-1 rounded-lg">02</span>
          <span class="tag bg-slate-500/20 text-slate-300 border border-slate-500/25">Dark</span>
        </div>
        <div class="preview-frame">
          <div class="preview-topbar">
            <div class="dot bg-red-400/70"></div><div class="dot bg-yellow-400/70"></div><div class="dot bg-green-400/70"></div>
          </div>
          <div class="relative p-4 h-32 overflow-hidden" style="background:linear-gradient(135deg,#0f0f0f,#1a1a2e,#16213e);">
            <div class="mini-glass-dark rounded-xl p-3 w-full h-full flex flex-col justify-between">
              <div class="flex gap-2">
                <div class="w-5 h-5 rounded-full bg-white/10"></div>
                <div class="h-2 w-20 bg-white/15 rounded-full mt-1.5"></div>
              </div>
              <div class="space-y-1.5">
                <div class="h-1.5 w-full bg-white/10 rounded-full"></div>
                <div class="h-1.5 w-2/3 bg-white/08 rounded-full"></div>
              </div>
              <div class="flex gap-2">
                <div class="h-5 w-14 rounded-lg mini-glass-dark border border-white/10"></div>
                <div class="h-5 w-14 rounded-lg" style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.08)"></div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-white font-bold text-lg mb-1">Smoked Glass</h3>
          <p class="text-gray-500 text-sm leading-relaxed">Deep, near-black transparency with low opacity borders. Luxurious and editorial — think premium dashboards.</p>
        </div>
        <div class="flex gap-2 flex-wrap">
          <span class="tag bg-white/5 text-gray-400 border border-white/10">black/30</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">low contrast</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">luxury feel</span>
        </div>
      </div>

      <!-- ③ Colored Tinted -->
      <div class="type-card rounded-3xl p-6 flex flex-col gap-5">
        <div class="flex items-start justify-between">
          <span class="num-badge text-xs text-gray-400 px-2.5 py-1 rounded-lg">03</span>
          <span class="tag bg-violet-500/20 text-violet-300 border border-violet-500/25">Tinted</span>
        </div>
        <div class="preview-frame">
          <div class="preview-topbar">
            <div class="dot bg-red-400/70"></div><div class="dot bg-yellow-400/70"></div><div class="dot bg-green-400/70"></div>
          </div>
          <div class="relative p-4 h-32 overflow-hidden" style="background:linear-gradient(135deg,#0a0a1a,#0d0d2b,#13132b);">
            <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(circle at 30% 50%,rgba(139,92,246,0.25),transparent 70%)"></div>
            <div class="mini-glass-colored rounded-xl p-3 w-full h-full flex flex-col justify-between relative z-10">
              <div class="h-2 w-24 rounded-full" style="background:rgba(139,92,246,0.5)"></div>
              <div class="space-y-1.5">
                <div class="h-1.5 w-full rounded-full" style="background:rgba(139,92,246,0.25)"></div>
                <div class="h-1.5 w-4/5 rounded-full" style="background:rgba(236,72,153,0.2)"></div>
              </div>
              <div class="h-6 w-20 rounded-lg" style="background:linear-gradient(90deg,rgba(139,92,246,0.35),rgba(236,72,153,0.25));border:1px solid rgba(139,92,246,0.4)"></div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-white font-bold text-lg mb-1">Colored Tint</h3>
          <p class="text-gray-500 text-sm leading-relaxed">Brand-colored glass — tinted with a hue while maintaining transparency. Great for accent cards and CTAs.</p>
        </div>
        <div class="flex gap-2 flex-wrap">
          <span class="tag bg-white/5 text-gray-400 border border-white/10">hue/25</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">colored border</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">glow shadow</span>
        </div>
      </div>

      <!-- ④ Arctic Frost -->
      <div class="type-card rounded-3xl p-6 flex flex-col gap-5">
        <div class="flex items-start justify-between">
          <span class="num-badge text-xs text-gray-400 px-2.5 py-1 rounded-lg">04</span>
          <span class="tag bg-cyan-500/15 text-cyan-300 border border-cyan-500/20">Light</span>
        </div>
        <div class="preview-frame">
          <div class="preview-topbar">
            <div class="dot bg-red-400/70"></div><div class="dot bg-yellow-400/70"></div><div class="dot bg-green-400/70"></div>
          </div>
          <div class="relative p-4 h-32 overflow-hidden" style="background:linear-gradient(135deg,#e0e7ff,#c7d2fe,#ddd6fe);">
            <div class="mini-glass-frost rounded-xl p-3 w-full h-full flex flex-col justify-between">
              <div class="h-2 w-20 rounded-full bg-slate-700/30"></div>
              <div class="space-y-1.5">
                <div class="h-1.5 w-full rounded-full bg-slate-600/20"></div>
                <div class="h-1.5 w-3/5 rounded-full bg-slate-600/15"></div>
              </div>
              <div class="h-6 w-24 rounded-lg mini-glass-frost flex items-center justify-center">
                <div class="h-1.5 w-12 rounded-full bg-slate-700/40"></div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-white font-bold text-lg mb-1">Arctic Frost</h3>
          <p class="text-gray-500 text-sm leading-relaxed">Heavy white glass on light pastel backgrounds. Clean, airy, and minimal — perfect for light-mode UIs.</p>
        </div>
        <div class="flex gap-2 flex-wrap">
          <span class="tag bg-white/5 text-gray-400 border border-white/10">white/18</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">light bg</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">brightness+</span>
        </div>
      </div>

      <!-- ⑤ Neon Glow -->
      <div class="type-card rounded-3xl p-6 flex flex-col gap-5">
        <div class="flex items-start justify-between">
          <span class="num-badge text-xs text-gray-400 px-2.5 py-1 rounded-lg">05</span>
          <span class="tag bg-emerald-500/15 text-emerald-300 border border-emerald-500/20">Neon</span>
        </div>
        <div class="preview-frame">
          <div class="preview-topbar">
            <div class="dot bg-red-400/70"></div><div class="dot bg-yellow-400/70"></div><div class="dot bg-green-400/70"></div>
          </div>
          <div class="relative p-4 h-32 overflow-hidden" style="background:linear-gradient(135deg,#000d0a,#001a12,#000f0b);">
            <div class="absolute" style="width:120px;height:120px;top:-20px;left:-20px;background:radial-gradient(circle,rgba(0,255,180,0.12),transparent 70%);border-radius:50%"></div>
            <div class="mini-glass-neon rounded-xl p-3 w-full h-full flex flex-col justify-between relative z-10">
              <div class="h-2 w-16 rounded-full" style="background:rgba(0,255,180,0.4)"></div>
              <div class="space-y-1.5">
                <div class="h-1.5 w-full rounded-full" style="background:rgba(0,255,180,0.15)"></div>
                <div class="h-1.5 w-2/3 rounded-full" style="background:rgba(0,200,255,0.12)"></div>
              </div>
              <div class="h-6 w-20 rounded-lg" style="background:rgba(0,255,180,0.1);border:1px solid rgba(0,255,180,0.35);box-shadow:0 0 10px rgba(0,255,180,0.15)"></div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-white font-bold text-lg mb-1">Neon Glow Glass</h3>
          <p class="text-gray-500 text-sm leading-relaxed">Combines glassmorphism with neon accents. Electric edges and outer glow. Ideal for sci-fi or gaming interfaces.</p>
        </div>
        <div class="flex gap-2 flex-wrap">
          <span class="tag bg-white/5 text-gray-400 border border-white/10">neon border</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">outer glow</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">dark base</span>
        </div>
      </div>

      <!-- ⑥ Gold Luxe -->
      <div class="type-card rounded-3xl p-6 flex flex-col gap-5">
        <div class="flex items-start justify-between">
          <span class="num-badge text-xs text-gray-400 px-2.5 py-1 rounded-lg">06</span>
          <span class="tag bg-yellow-500/15 text-yellow-300 border border-yellow-500/20">Luxe</span>
        </div>
        <div class="preview-frame">
          <div class="preview-topbar">
            <div class="dot bg-red-400/70"></div><div class="dot bg-yellow-400/70"></div><div class="dot bg-green-400/70"></div>
          </div>
          <div class="relative p-4 h-32 overflow-hidden" style="background:linear-gradient(135deg,#0c0800,#1a1000,#120d00);">
            <div class="absolute" style="width:150px;height:150px;top:-30px;right:-30px;background:radial-gradient(circle,rgba(251,191,36,0.12),transparent 70%);border-radius:50%"></div>
            <div class="mini-glass-gold rounded-xl p-3 w-full h-full flex flex-col justify-between relative z-10">
              <div class="h-2 w-20 rounded-full" style="background:rgba(251,191,36,0.45)"></div>
              <div class="space-y-1.5">
                <div class="h-1.5 w-full rounded-full" style="background:rgba(251,191,36,0.18)"></div>
                <div class="h-1.5 w-4/5 rounded-full" style="background:rgba(245,158,11,0.13)"></div>
              </div>
              <div class="h-6 w-24 rounded-lg" style="background:linear-gradient(90deg,rgba(251,191,36,0.18),rgba(245,158,11,0.1));border:1px solid rgba(251,191,36,0.35);box-shadow:0 0 14px rgba(251,191,36,0.1)"></div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-white font-bold text-lg mb-1">Gold Luxe Glass</h3>
          <p class="text-gray-500 text-sm leading-relaxed">Rich amber-gold tint on deep black backgrounds. Evokes premium brands, high-end fintech, and luxury products.</p>
        </div>
        <div class="flex gap-2 flex-wrap">
          <span class="tag bg-white/5 text-gray-400 border border-white/10">gold tint</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">warm glow</span>
          <span class="tag bg-white/5 text-gray-400 border border-white/10">black base</span>
        </div>
      </div>

    </div>

    <!-- Bottom CTA Row -->
    <div class="mt-16 flex flex-col sm:flex-row items-center justify-between gap-6 type-card rounded-2xl px-8 py-6">
      <div>
        <p class="text-xs uppercase tracking-widest text-gray-500 font-semibold mb-1">Ready to build?</p>
        <h3 class="text-white text-xl font-bold">Explore all 6 glass styles in the playground →</h3>
      </div>
      <a href="#" class="shimmer-btn whitespace-nowrap px-7 py-3 rounded-xl text-white text-sm font-semibold tracking-wide">
        Open Playground
      </a>
    </div>

  </div>
</section>
    @endsection
</x-app-layout>
