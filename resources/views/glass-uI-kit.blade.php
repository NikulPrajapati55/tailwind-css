<x-app-layout>

{{-- ═══════════════════════════════════════════════════════════════
     META & ASSETS
═══════════════════════════════════════════════════════════════ --}}
@section('meta')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Glass UI Kit & iOS Liquid Glass</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet"/>
@endsection

{{-- ═══════════════════════════════════════════════════════════════
     STYLES  (uses @push so they land inside <head> via the layout stack)
═══════════════════════════════════════════════════════════════ --}}
@push('styles')
<style>
/* ─── RESET ─── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

/* ─── CSS VARIABLES ─── */
:root {
  /* Dark Glass Kit */
  --glass-bg:        rgba(255,255,255,0.08);
  --glass-border:    rgba(255,255,255,0.18);
  --glass-shadow:    0 8px 32px rgba(0,0,0,0.35);
  --blur:            blur(18px);
  --accent1:         #a78bfa;
  --accent2:         #38bdf8;
  --accent3:         #fb7185;
  /* iOS Liquid Glass */
  --ios-blur:        blur(40px) saturate(180%);
  --ios-blur-sm:     blur(20px) saturate(160%);
  --liquid-border:   rgba(255,255,255,0.55);
  --liquid-shadow:   0 8px 32px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.08);
  --liquid-inner:    inset 0 1px 0 rgba(255,255,255,0.9), inset 0 -1px 0 rgba(255,255,255,0.3);
}

/* ─── BASE BODY ─── */
body {
  font-family: 'DM Sans', sans-serif;
  overflow-x: hidden;
}

/* ─── DISPLAY FONT ─── */
h1, h2, h3, h4, .font-display { font-family: 'Syne', sans-serif; }

/* ════════════════════════════════════
   SECTION 1 — DARK GLASS KIT
════════════════════════════════════ */

/* Animated mesh background */
.s1-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
  background:
    radial-gradient(ellipse at 20% 20%, #1e0a3c 0%, transparent 60%),
    radial-gradient(ellipse at 80% 10%, #0c2a4a 0%, transparent 55%),
    radial-gradient(ellipse at 60% 80%, #1a0c2e 0%, transparent 60%),
    radial-gradient(ellipse at 10% 90%, #0a1a2e 0%, transparent 55%),
    #080814;
}

/* Orbs */
.orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.45;
  animation: orbDrift 14s ease-in-out infinite alternate;
  pointer-events: none;
}
.orb-1 { width:420px; height:420px; background:#6d28d9; top:-80px;  left:-100px; animation-delay:0s;  }
.orb-2 { width:300px; height:300px; background:#0ea5e9; top:30%;    right:-60px; animation-delay:-4s; }
.orb-3 { width:360px; height:360px; background:#be185d; bottom:-100px; left:30%; animation-delay:-8s; }
.orb-4 { width:200px; height:200px; background:#0891b2; top:60%;    left:10%;   animation-delay:-5s; }

@keyframes orbDrift {
  0%   { transform: translate(0,0) scale(1); }
  50%  { transform: translate(30px,-20px) scale(1.08); }
  100% { transform: translate(-20px,30px) scale(0.95); }
}

/* Glass cards */
.glass {
  background: var(--glass-bg);
  backdrop-filter: var(--blur);
  -webkit-backdrop-filter: var(--blur);
  border: 1px solid var(--glass-border);
  box-shadow: var(--glass-shadow), inset 0 1px 0 rgba(255,255,255,0.12);
}
.glass-strong {
  background: rgba(255,255,255,0.12);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(255,255,255,0.22);
  box-shadow: 0 12px 40px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.15);
}
.glass-dark {
  background: rgba(0,0,0,0.25);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,0.1);
  box-shadow: 0 8px 32px rgba(0,0,0,0.5);
}

/* Glow variants */
.glow-violet { box-shadow: 0 0 24px rgba(139,92,246,0.45), inset 0 1px 0 rgba(255,255,255,0.15); }
.glow-cyan   { box-shadow: 0 0 24px rgba(6,182,212,0.45),  inset 0 1px 0 rgba(255,255,255,0.15); }

/* Shimmer hover */
.shimmer { position:relative; overflow:hidden; transition:transform .3s ease, box-shadow .3s ease; }
.shimmer::before {
  content:''; position:absolute; top:0; left:-100%;
  width:60%; height:100%;
  background:linear-gradient(90deg, transparent, rgba(255,255,255,0.12), transparent);
  transition:left .5s ease; z-index:1;
}
.shimmer:hover::before { left:160%; }
.shimmer:hover { transform:translateY(-3px); }

/* Gradient texts */
.grad-text-violet { background:linear-gradient(135deg,#c4b5fd,#818cf8); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
.grad-text-cyan   { background:linear-gradient(135deg,#67e8f9,#38bdf8); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
.grad-text-rose   { background:linear-gradient(135deg,#fda4af,#fb7185); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
.grad-text-white  { background:linear-gradient(135deg,#ffffff,#cbd5e1); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }

/* Pill badge */
.pill {
  display:inline-flex; align-items:center; gap:6px;
  padding:4px 12px; border-radius:999px;
  font-size:0.72rem; font-weight:500; letter-spacing:0.04em;
}

/* Progress bar (dark) */
.progress-track {
  background:rgba(255,255,255,0.08);
  border-radius:999px; overflow:hidden; height:6px;
}
.progress-fill { height:100%; border-radius:999px; }

/* Dark toggle */
.dk-toggle-wrap { position:relative; display:inline-flex; align-items:center; }
.dk-toggle { display:none; }
.dk-toggle-label {
  width:48px; height:26px; background:rgba(255,255,255,0.1);
  border:1px solid rgba(255,255,255,0.2);
  border-radius:999px; cursor:pointer;
  display:flex; align-items:center; padding:3px;
  transition:background .3s; backdrop-filter:blur(8px);
}
.dk-toggle-thumb {
  width:18px; height:18px; background:white; border-radius:50%;
  box-shadow:0 2px 6px rgba(0,0,0,0.35);
  transition:transform .3s cubic-bezier(.4,0,.2,1);
}
.dk-toggle:checked + .dk-toggle-label { background:rgba(139,92,246,0.6); border-color:rgba(139,92,246,0.7); }
.dk-toggle:checked + .dk-toggle-label .dk-toggle-thumb { transform:translateX(22px); }

/* Dark range */
input.dk-range {
  -webkit-appearance:none; width:100%; height:4px;
  background:rgba(255,255,255,0.1); border-radius:999px; outline:none;
}
input.dk-range::-webkit-slider-thumb {
  -webkit-appearance:none; width:18px; height:18px;
  border-radius:50%; background:white; cursor:pointer;
  box-shadow:0 0 12px rgba(139,92,246,0.7), 0 2px 6px rgba(0,0,0,0.4);
  border:2px solid rgba(139,92,246,0.6);
}

/* Glass input */
.glass-input {
  background:rgba(255,255,255,0.06);
  border:1px solid rgba(255,255,255,0.14);
  backdrop-filter:blur(12px);
  color:#e2e8f0; outline:none;
  transition:border-color .2s, box-shadow .2s;
}
.glass-input::placeholder { color:rgba(255,255,255,0.3); }
.glass-input:focus {
  border-color:rgba(139,92,246,0.6);
  box-shadow:0 0 0 3px rgba(139,92,246,0.18), 0 0 20px rgba(139,92,246,0.2);
}

/* Notif dot */
.notif-dot {
  position:absolute; top:-2px; right:-2px;
  width:9px; height:9px; border-radius:50%;
  background:#fb7185; border:2px solid rgba(0,0,0,0.5);
}

/* Avatar ring */
.avatar-ring { padding:2px; background:linear-gradient(135deg,#818cf8,#38bdf8,#fb7185); border-radius:50%; }
.avatar-inner { border-radius:50%; overflow:hidden; background:#1e1b4b; display:flex; align-items:center; justify-content:center; }

/* Float animations */
@keyframes floatA { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }
.float-anim   { animation:floatA 5s   ease-in-out infinite; }
.float-anim-2 { animation:floatA 6.5s ease-in-out infinite; animation-delay:-2s; }

/* Glass divider */
.glass-divider { height:1px; background:linear-gradient(90deg,transparent,rgba(255,255,255,0.15),transparent); }

/* Section tag */
.section-tag {
  display:inline-flex; align-items:center; gap:8px;
  padding:6px 16px; border-radius:999px;
  background:rgba(139,92,246,0.12); border:1px solid rgba(139,92,246,0.3);
  font-size:0.75rem; font-weight:600; letter-spacing:0.1em;
  color:#c4b5fd; text-transform:uppercase;
}

/* Tooltip */
.tooltip-wrap { position:relative; display:inline-flex; }
.tooltip {
  position:absolute; bottom:calc(100% + 8px); left:50%; transform:translateX(-50%);
  background:rgba(15,15,30,0.95); backdrop-filter:blur(12px);
  border:1px solid rgba(255,255,255,0.12); border-radius:8px;
  padding:6px 12px; font-size:0.72rem; color:#e2e8f0; white-space:nowrap;
  opacity:0; pointer-events:none; transition:opacity .2s;
}
.tooltip-wrap:hover .tooltip { opacity:1; }

/* Dropdown */
.glass-dropdown { position:relative; }
.glass-dropdown-menu {
  position:absolute; top:calc(100% + 8px); left:0; right:0; z-index:50;
  background:rgba(10,10,30,0.85); backdrop-filter:blur(24px);
  border:1px solid rgba(255,255,255,0.14); border-radius:12px;
  overflow:hidden;
  opacity: 0;
  transform: translateY(-10px);
  pointer-events: none;
  transition: opacity 0.2s ease, transform 0.2s ease;
}
.glass-dropdown.open .glass-dropdown-menu { opacity: 1; transform: translateY(0); pointer-events: auto; }
.dropdown-item {
  padding:10px 16px; font-size:0.82rem; color:#cbd5e1;
  cursor:pointer; transition:background .15s;
  display:flex; align-items:center; gap:10px;
}
.dropdown-item:hover { background:rgba(255,255,255,0.08); }

/* Star rating */
.dk-star { color:rgba(255,255,255,0.2); transition:color .15s; }
.dk-star.active { color:#fbbf24; }

/* Disc spin */
@keyframes discSpin { to { transform:rotate(360deg); } }

/* Dark waveform bar */
.dk-bar {
  width:3px; border-radius:2px;
  background:linear-gradient(to top,#8b5cf6,#38bdf8);
  animation:dkWave 1.2s ease-in-out infinite alternate;
}
@keyframes dkWave { 0%{height:4px} 100%{height:28px} }

/* Fade-up entrance */
@keyframes fadeUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:none} }
.anim-up { opacity:0; animation:fadeUp .6s ease forwards; }
.d1{animation-delay:.05s} .d2{animation-delay:.12s} .d3{animation-delay:.20s}
.d4{animation-delay:.28s} .d5{animation-delay:.36s} .d6{animation-delay:.44s}
.d7{animation-delay:.52s} .d8{animation-delay:.60s}

/* ════════════════════════════════════
   SECTION 2 — IOS LIQUID GLASS
════════════════════════════════════ */

/* Wallpaper */
.s2-bg {
  position: absolute;
  inset: 0; z-index: 0;
  background:
    radial-gradient(ellipse 80% 60% at 15% 10%, #b5d5f5 0%, transparent 55%),
    radial-gradient(ellipse 70% 50% at 85%  5%, #d4b8f0 0%, transparent 50%),
    radial-gradient(ellipse 60% 70% at  5% 60%, #a8d8ea 0%, transparent 55%),
    radial-gradient(ellipse 80% 60% at 90% 80%, #f7c5d5 0%, transparent 55%),
    radial-gradient(ellipse 50% 50% at 50% 45%, #c8e6f5 0%, transparent 60%),
    radial-gradient(ellipse 70% 40% at 30% 90%, #b8e4d0 0%, transparent 55%),
    linear-gradient(160deg, #dbeafe 0%, #ede9fe 35%, #fce7f3 65%, #d1fae5 100%);
}

/* Blobs */
.blob {
  position:absolute; border-radius:50%; filter:blur(60px);
  animation:blobDrift 18s ease-in-out infinite alternate;
  pointer-events:none; mix-blend-mode:multiply; opacity:0.55;
}
.blob-1{width:500px;height:500px;background:#a78bfa;top:-100px;left:-120px;animation-delay:0s;}
.blob-2{width:380px;height:380px;background:#67e8f9;top:20%;right:-80px;animation-delay:-5s;}
.blob-3{width:420px;height:420px;background:#fda4af;bottom:-80px;left:20%;animation-delay:-9s;}
.blob-4{width:280px;height:280px;background:#86efac;bottom:10%;right:15%;animation-delay:-13s;}
.blob-5{width:220px;height:220px;background:#fde68a;top:45%;left:40%;animation-delay:-6s;}

@keyframes blobDrift {
  0%  {transform:translate(0,0) scale(1) rotate(0deg);}
  33% {transform:translate(40px,-30px) scale(1.1) rotate(5deg);}
  66% {transform:translate(-20px,40px) scale(0.92) rotate(-3deg);}
  100%{transform:translate(30px,20px) scale(1.05) rotate(8deg);}
}

/* Noise overlay */
.noise {
  position:absolute; inset:0; z-index:2; opacity:0.025; pointer-events:none;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}

/* Liquid glass surfaces */
.liquid {
  background:rgba(255,255,255,0.52);
  backdrop-filter:var(--ios-blur); -webkit-backdrop-filter:var(--ios-blur);
  border:1px solid var(--liquid-border);
  box-shadow:var(--liquid-shadow), var(--liquid-inner);
}
.liquid-sm {
  background:rgba(255,255,255,0.58);
  backdrop-filter:var(--ios-blur-sm); -webkit-backdrop-filter:var(--ios-blur-sm);
  border:1px solid rgba(255,255,255,0.6);
  box-shadow:0 4px 16px rgba(0,0,0,0.1), inset 0 1px 0 rgba(255,255,255,0.95), inset 0 -1px 0 rgba(255,255,255,0.4);
}
.liquid-tint-blue   { background:rgba(99,179,237,0.28);  backdrop-filter:var(--ios-blur); -webkit-backdrop-filter:var(--ios-blur); border:1px solid rgba(147,210,255,0.55); box-shadow:0 8px 32px rgba(99,179,237,0.2),  inset 0 1px 0 rgba(255,255,255,0.8); }
.liquid-tint-purple { background:rgba(167,139,250,0.25); backdrop-filter:var(--ios-blur); -webkit-backdrop-filter:var(--ios-blur); border:1px solid rgba(196,181,253,0.55); box-shadow:0 8px 32px rgba(139,92,246,0.18), inset 0 1px 0 rgba(255,255,255,0.8); }
.liquid-tint-rose   { background:rgba(253,164,175,0.28); backdrop-filter:var(--ios-blur); -webkit-backdrop-filter:var(--ios-blur); border:1px solid rgba(253,164,175,0.55); box-shadow:0 8px 32px rgba(251,113,133,0.18),inset 0 1px 0 rgba(255,255,255,0.8); }
.liquid-tint-green  { background:rgba(134,239,172,0.25); backdrop-filter:var(--ios-blur); -webkit-backdrop-filter:var(--ios-blur); border:1px solid rgba(134,239,172,0.5);  box-shadow:0 8px 32px rgba(52,211,153,0.15), inset 0 1px 0 rgba(255,255,255,0.8); }

/* Liquid hover lift */
.liq-hover { transition:transform .35s cubic-bezier(.34,1.56,.64,1), box-shadow .3s ease; cursor:pointer; }
.liq-hover:hover { transform:translateY(-4px) scale(1.015); box-shadow:0 20px 60px rgba(0,0,0,0.16), inset 0 1px 0 rgba(255,255,255,0.95); }
.liq-hover:active { transform:scale(0.97); transition-duration: .1s; }
.liq-hover.spring:active { transform:scale(0.94); }

/* Specular highlight */
.spec { position:relative; overflow:hidden; }
.spec::after {
  content:''; position:absolute; top:0; left:-30%;
  width:60%; height:55%;
  background:radial-gradient(ellipse at 40% 20%, rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.1) 60%, transparent 100%);
  border-radius:0 0 60% 60%; pointer-events:none;
}

/* Liquid pulse */
.liq-pulse { animation:liqPulse 3s ease-in-out infinite; }
@keyframes liqPulse {
  0%,100%{box-shadow:0 8px 32px rgba(0,0,0,0.1), inset 0 1px 0 rgba(255,255,255,0.9);}
  50%    {box-shadow:0 12px 48px rgba(99,179,237,0.25), inset 0 1px 0 rgba(255,255,255,0.9);}
}

/* iOS typography */
.ios-label   { font-family:'Plus Jakarta Sans',sans-serif; font-size:0.68rem; font-weight:600; letter-spacing:0.06em; text-transform:uppercase; color:rgba(60,60,90,0.55); }
.ios-title   { font-family:'Plus Jakarta Sans',sans-serif; font-size:1.05rem; font-weight:700; color:#1a1a2e; line-height:1.2; }
.ios-body    { font-family:'Plus Jakarta Sans',sans-serif; font-size:0.82rem; color:rgba(30,30,60,0.65); line-height:1.5; }
.ios-caption { font-family:'Plus Jakarta Sans',sans-serif; font-size:0.72rem; color:rgba(30,30,60,0.45); }
.ios-num     { font-family:'Plus Jakarta Sans',sans-serif; font-size:2rem; font-weight:800; color:#1a1a2e; letter-spacing:-0.03em; }

/* Section label */
.section-label {
  display:inline-flex; align-items:center; gap:8px;
  padding:7px 18px; border-radius:999px;
  font-family:'Plus Jakarta Sans',sans-serif;
  font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;
  color:rgba(80,60,160,0.9);
  background:rgba(167,139,250,0.18); border:1px solid rgba(167,139,250,0.38);
  backdrop-filter:blur(12px);
}

/* iOS toggle */
.ios-toggle { display:none; }
.ios-toggle-track {
  width:52px; height:30px; border-radius:999px;
  background:rgba(120,120,140,0.25); border:1px solid rgba(255,255,255,0.6);
  box-shadow:inset 0 2px 6px rgba(0,0,0,0.1), inset 0 1px 0 rgba(255,255,255,0.5);
  cursor:pointer; display:flex; align-items:center; padding:3px; transition:background .3s;
}
.ios-toggle-thumb {
  width:22px; height:22px; border-radius:50%; background:white;
  box-shadow:0 2px 8px rgba(0,0,0,0.22), 0 1px 3px rgba(0,0,0,0.15);
  transition:transform .3s cubic-bezier(.34,1.56,.64,1);
}
.ios-toggle:checked + .ios-toggle-track { background:rgba(52,199,89,0.75); border-color:rgba(52,199,89,0.4); }
.ios-toggle:checked + .ios-toggle-track .ios-toggle-thumb { transform:translateX(22px); }

/* Segmented control */
.seg-ctrl { display:flex; gap:2px; padding:3px; border-radius:12px; background:rgba(118,118,128,0.12); border:1px solid rgba(255,255,255,0.5); }
.seg-btn  { flex:1; padding:7px 12px; border-radius:9px; border:none; background:transparent; font-size:0.78rem; font-weight:600; color:rgba(30,30,60,0.55); cursor:pointer; transition:all .25s; font-family:'Plus Jakarta Sans',sans-serif; }
.seg-btn.active { background:rgba(255,255,255,0.88); color:#1a1a2e; box-shadow:0 2px 8px rgba(0,0,0,0.12), inset 0 1px 0 rgba(255,255,255,0.9); }

/* Action items */
.action-item { padding:14px 18px; display:flex; align-items:center; gap:12px; font-size:0.88rem; font-weight:500; color:#1a1a2e; cursor:pointer; transition:background .15s; font-family:'Plus Jakarta Sans',sans-serif; }
.action-item:hover { background:rgba(0,0,0,0.04); }
.action-item + .action-item { border-top:0.5px solid rgba(60,60,80,0.12); }

/* iOS input */
.ios-input {
  width:100%; padding:12px 16px; border-radius:12px; outline:none;
  background:rgba(255,255,255,0.55); backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px);
  border:1px solid rgba(255,255,255,0.65);
  box-shadow:inset 0 2px 6px rgba(0,0,0,0.06), 0 1px 0 rgba(255,255,255,0.8);
  font-size:0.88rem; color:#1a1a2e; font-family:'Plus Jakarta Sans',sans-serif;
  transition:box-shadow .2s, border-color .2s;
}
.ios-input::placeholder { color:rgba(60,60,80,0.35); }
.ios-input:focus { border-color:rgba(99,179,237,0.6); box-shadow:inset 0 2px 6px rgba(0,0,0,0.06), 0 0 0 4px rgba(99,179,237,0.15); }

/* Liquid buttons */
.liq-btn { border:none; cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif; font-weight:600; border-radius:14px; padding:13px 24px; font-size:0.88rem; position:relative; overflow:hidden; transition:all .3s cubic-bezier(.34,1.56,.64,1); }
.liq-btn:active { transform:scale(0.96); transition-duration: .1s; }
.liq-btn-blue  { background:linear-gradient(160deg,rgba(99,179,237,0.9),rgba(59,130,246,0.85)); color:white; box-shadow:0 4px 20px rgba(59,130,246,0.35), inset 0 1px 0 rgba(255,255,255,0.4); border:1px solid rgba(147,197,253,0.5); }
.liq-btn-blue:hover  { box-shadow:0 8px 30px rgba(59,130,246,0.5), inset 0 1px 0 rgba(255,255,255,0.4); transform:translateY(-2px); }
.liq-btn-white { background:rgba(255,255,255,0.75); backdrop-filter:blur(20px); -webkit-backdrop-filter:blur(20px); color:#2563eb; box-shadow:0 4px 16px rgba(0,0,0,0.1), inset 0 1px 0 rgba(255,255,255,0.95); border:1px solid rgba(255,255,255,0.7); }
.liq-btn-white:hover { background:rgba(255,255,255,0.9); transform:translateY(-2px); }
.liq-btn-tint  { background:rgba(167,139,250,0.3); backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px); color:#5b21b6; box-shadow:0 4px 16px rgba(139,92,246,0.2), inset 0 1px 0 rgba(255,255,255,0.7); border:1px solid rgba(196,181,253,0.5); }

/* iOS progress */
.ios-progress-track { height:8px; border-radius:999px; overflow:hidden; background:rgba(0,0,0,0.08); box-shadow:inset 0 1px 3px rgba(0,0,0,0.1); }
.ios-progress-fill  { height:100%; border-radius:999px; background:linear-gradient(90deg,#34d399,#10b981); box-shadow:0 2px 6px rgba(16,185,129,0.4); }

/* Notif bubble */
.notif-bubble { min-width:20px; height:20px; border-radius:999px; padding:0 6px; background:#ff3b30; color:white; font-size:0.68rem; font-weight:700; display:flex; align-items:center; justify-content:center; box-shadow:0 2px 6px rgba(255,59,48,0.5); }

/* Pill tabs */
.pill-tab { padding:8px 20px; border-radius:999px; font-size:0.82rem; font-weight:600; cursor:pointer; transition:all .25s; border:none; font-family:'Plus Jakarta Sans',sans-serif; }
.pill-tab.active { background:rgba(255,255,255,0.82); color:#1a1a2e; box-shadow:0 4px 14px rgba(0,0,0,0.12), inset 0 1px 0 rgba(255,255,255,0.95); }
.pill-tab:not(.active) { background:transparent; color:rgba(30,30,60,0.5); }

/* iOS float */
@keyframes floatB { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-6px)} }
.float-ios   { animation:floatB 5s   ease-in-out infinite; }
.float-ios-2 { animation:floatB 6.5s ease-in-out infinite; animation-delay:-2.5s; }
.float-ios-3 { animation:floatB 7.5s ease-in-out infinite; animation-delay:-4s; }

/* Rise entrance */
@keyframes riseIn { from{opacity:0;transform:translateY(30px) scale(0.97)} to{opacity:1;transform:none} }
.rise { opacity:0; animation:riseIn .65s cubic-bezier(.34,1.2,.64,1) forwards; }
.r1{animation-delay:.05s} .r2{animation-delay:.13s} .r3{animation-delay:.21s}
.r4{animation-delay:.29s} .r5{animation-delay:.37s} .r6{animation-delay:.45s}
.r7{animation-delay:.53s} .r8{animation-delay:.61s} .r9{animation-delay:.69s}

/* Liquid ring */
.liq-ring { padding:2.5px; background:linear-gradient(135deg,rgba(255,255,255,0.9),rgba(200,220,255,0.6),rgba(255,200,220,0.6)); border-radius:50%; }
.liq-ring-inner { border-radius:50%; overflow:hidden; background:rgba(255,255,255,0.3); backdrop-filter:blur(8px); }

/* Liquid divider */
.liq-divider { height:0.5px; background:rgba(60,60,80,0.12); }

/* Context menu items */
.ctx-item { padding:10px 14px; display:flex; align-items:center; gap:10px; font-size:0.83rem; font-weight:500; color:#1a1a2e; cursor:pointer; transition:background .15s; font-family:'Plus Jakarta Sans',sans-serif; }
.ctx-item:hover { background:rgba(0,0,0,0.04); }
.ctx-item + .ctx-item { border-top:0.5px solid rgba(60,60,80,0.1); }

/* Dynamic Island */
.dynamic-island {
  width:120px; height:36px; border-radius:999px; background:#000;
  position:relative; overflow:hidden;
  box-shadow:0 4px 20px rgba(0,0,0,0.45);
  transition:all .4s cubic-bezier(.34,1.2,.64,1);
}
.dynamic-island:hover { width:200px; height:50px; }
.dynamic-island-inner { width:100%; height:100%; display:flex; align-items:center; justify-content:center; gap:8px; padding:0 12px; }

/* Liquid range */
input.liq-range { -webkit-appearance:none; width:100%; height:5px; border-radius:999px; outline:none; background:rgba(0,0,0,0.1); }
input.liq-range::-webkit-slider-thumb { -webkit-appearance:none; width:22px; height:22px; border-radius:50%; background:white; cursor:pointer; box-shadow:0 3px 10px rgba(0,0,0,0.2), 0 1px 3px rgba(0,0,0,0.1); border:0.5px solid rgba(0,0,0,0.08); }

/* iOS alert overlay */
.ios-alert-overlay { position:fixed; inset:0; z-index:200; background:rgba(0,0,0,0.35); backdrop-filter:blur(6px); display:flex; align-items:center; justify-content:center; opacity:0; pointer-events:none; transition:opacity .25s; }
.ios-alert-overlay.show { opacity:1; pointer-events:all; }
.ios-alert-box { width:280px; border-radius:20px; overflow:hidden; }

/* iOS call bar */
.cbar { width:3px; border-radius:2px; background:rgba(139,92,246,0.5); animation:cwave 1.4s ease-in-out infinite alternate; }
@keyframes cwave { 0%{height:4px} 100%{height:24px} }

/* Scrollbar */
::-webkit-scrollbar { width:4px; }
::-webkit-scrollbar-thumb { background:rgba(120,120,140,0.2); border-radius:2px; }

/* Shared content z-index wrapper */
.s1-content, .s2-content { position:relative; z-index:10; }
</style>
@endpush

{{-- ═══════════════════════════════════════════════════════════════
     CONTENT
═══════════════════════════════════════════════════════════════ --}}
@section('content')

{{-- ──────────────────────────────────────────────────────────────
     SECTION 1 — DARK GLASSMORPHISM UI KIT
────────────────────────────────────────────────────────────── --}}
<section style="position:relative; min-height:100vh; background:#080814; overflow:hidden;">
  <div class="s1-bg"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>
  <div class="orb orb-4"></div>

  <div class="s1-content py-16 px-4">
    <div class="max-w-7xl mx-auto">

      {{-- Header --}}
      <div class="text-center mb-16 anim-up d1">
        <div class="section-tag mb-5 mx-auto w-fit">
          <i class="fa-solid fa-layer-group text-xs"></i>Glass UI Kit
        </div>
        <h1 class="font-display text-5xl md:text-6xl grad-text-white mb-4" style="font-weight:800; letter-spacing:-0.02em;">
          Glassmorphism<br/>Component System
        </h1>
        <p class="text-slate-400 text-lg max-w-xl mx-auto" style="font-weight:300;">
          A curated set of frosted-glass components built with depth, blur, and translucency.
        </p>
      </div>

      {{-- Row 1: Cards --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        {{-- Stat Card --}}
        <div class="glass rounded-2xl p-6 shimmer glow-violet anim-up d2">
          <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background:rgba(139,92,246,0.2); border:1px solid rgba(139,92,246,0.3);">
              <i class="fa-solid fa-chart-line text-violet-400 text-lg"></i>
            </div>
            <div class="pill" style="background:rgba(52,211,153,0.12); border:1px solid rgba(52,211,153,0.25); color:#6ee7b7;">
              <i class="fa-solid fa-arrow-trend-up text-xs"></i> +12.4%
            </div>
          </div>
          <p class="text-slate-400 text-sm mb-1">Total Revenue</p>
          <h2 class="font-display text-3xl font-bold grad-text-violet mb-4">$84,291</h2>
          <div class="progress-track">
            <div class="progress-fill" style="width:72%; background:linear-gradient(90deg,#8b5cf6,#6366f1);"></div>
          </div>
          <p class="text-xs text-slate-500 mt-2">72% of monthly goal</p>
        </div>

        {{-- Profile Card --}}
        <div class="glass-strong rounded-2xl p-6 shimmer anim-up d3">
          <div class="flex items-center gap-4 mb-5">
            <div class="avatar-ring">
              <div class="avatar-inner w-14 h-14">
                <i class="fa-solid fa-user text-2xl text-violet-300"></i>
              </div>
            </div>
            <div>
              <h3 class="font-display text-white font-semibold text-lg">Aria Novak</h3>
              <p class="text-slate-400 text-sm">Lead Designer</p>
            </div>
            <div class="ml-auto">
              <div class="pill" style="background:rgba(6,182,212,0.12); border:1px solid rgba(6,182,212,0.25); color:#67e8f9;">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 inline-block"></span> Online
              </div>
            </div>
          </div>
          <div class="glass-divider mb-4"></div>
          <div class="flex gap-6 text-center">
            <div class="flex-1">
              <div class="font-display text-xl font-bold grad-text-cyan">248</div>
              <div class="text-xs text-slate-500">Projects</div>
            </div>
            <div class="flex-1">
              <div class="font-display text-xl font-bold grad-text-violet">14k</div>
              <div class="text-xs text-slate-500">Followers</div>
            </div>
            <div class="flex-1">
              <div class="font-display text-xl font-bold grad-text-rose">98%</div>
              <div class="text-xs text-slate-500">Rating</div>
            </div>
          </div>
          <button class="w-full mt-5 py-2.5 rounded-xl text-sm font-semibold text-white shimmer"
            style="background:linear-gradient(135deg,rgba(139,92,246,0.4),rgba(99,102,241,0.4)); border:1px solid rgba(139,92,246,0.35);">
            <i class="fa-solid fa-user-plus mr-2"></i>Follow
          </button>
        </div>

        {{-- Notification Card --}}
        <div class="glass rounded-2xl p-6 anim-up d4">
          <div class="flex items-center justify-between mb-5">
            <h3 class="font-display text-white font-semibold">Notifications</h3>
            <div class="tooltip-wrap">
              <button class="relative w-9 h-9 glass rounded-xl flex items-center justify-center text-slate-400 hover:text-white transition-colors">
                <i class="fa-solid fa-bell text-sm"></i>
                <span class="notif-dot"></span>
              </button>
              <div class="tooltip">3 new alerts</div>
            </div>
          </div>
          <div class="space-y-3">
            <div class="flex items-center gap-3 glass-dark rounded-xl p-3">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:rgba(139,92,246,0.2);">
                <i class="fa-solid fa-star text-violet-400 text-xs"></i>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-white text-xs font-medium">New review received</p>
                <p class="text-slate-500 text-xs truncate">"Fantastic work on the dashboard"</p>
              </div>
              <span class="text-slate-600 text-xs">2m</span>
            </div>
            <div class="flex items-center gap-3 glass-dark rounded-xl p-3">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:rgba(6,182,212,0.2);">
                <i class="fa-solid fa-envelope text-cyan-400 text-xs"></i>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-white text-xs font-medium">Message from client</p>
                <p class="text-slate-500 text-xs truncate">Project approved — let's ship it</p>
              </div>
              <span class="text-slate-600 text-xs">1h</span>
            </div>
            <div class="flex items-center gap-3 glass-dark rounded-xl p-3">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:rgba(251,113,133,0.2);">
                <i class="fa-solid fa-bolt text-rose-400 text-xs"></i>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-white text-xs font-medium">Deploy complete</p>
                <p class="text-slate-500 text-xs truncate">v2.4.1 is now live in production</p>
              </div>
              <span class="text-slate-600 text-xs">4h</span>
            </div>
          </div>
        </div>
      </div>

      {{-- Row 2: Controls + Music Player --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

        {{-- Controls Panel --}}
        <div class="glass rounded-2xl p-6 anim-up d5">
          <h3 class="font-display text-white font-semibold mb-6">Controls & Inputs</h3>
          <div class="relative mb-4">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
            <input type="text" placeholder="Search anything…" class="glass-input w-full rounded-xl py-3 pl-10 pr-4 text-sm"/>
          </div>
          <div class="glass-dropdown mb-4" id="dk-dropdown">
            <button onclick="dkToggleDropdown()" class="glass-input w-full rounded-xl py-3 px-4 text-sm text-left flex items-center justify-between">
              <span class="text-slate-300" id="dk-dd-label"><i class="fa-solid fa-layer-group mr-2 text-violet-400"></i>Select Category</span>
              <i class="fa-solid fa-chevron-down text-slate-500 text-xs" id="dk-dd-arrow" style="transition:transform .25s;"></i>
            </button>
            <div class="glass-dropdown-menu">
              <div class="dropdown-item" onclick="dkSelectItem('Design')"><i class="fa-solid fa-pen-nib text-violet-400"></i>Design</div>
              <div class="dropdown-item" onclick="dkSelectItem('Development')"><i class="fa-solid fa-code text-cyan-400"></i>Development</div>
              <div class="dropdown-item" onclick="dkSelectItem('Marketing')"><i class="fa-solid fa-bullhorn text-rose-400"></i>Marketing</div>
            </div>
          </div>
          <div class="space-y-3 mb-5">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-moon text-violet-400 text-sm"></i>
                <span class="text-sm text-slate-300">Dark Mode</span>
              </div>
              <div class="dk-toggle-wrap">
                <input type="checkbox" id="dk-t1" class="dk-toggle" checked/>
                <label for="dk-t1" class="dk-toggle-label"><div class="dk-toggle-thumb"></div></label>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-bell text-cyan-400 text-sm"></i>
                <span class="text-sm text-slate-300">Notifications</span>
              </div>
              <div class="dk-toggle-wrap">
                <input type="checkbox" id="dk-t2" class="dk-toggle"/>
                <label for="dk-t2" class="dk-toggle-label"><div class="dk-toggle-thumb"></div></label>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <i class="fa-solid fa-shield text-rose-400 text-sm"></i>
                <span class="text-sm text-slate-300">2FA Security</span>
              </div>
              <div class="dk-toggle-wrap">
                <input type="checkbox" id="dk-t3" class="dk-toggle" checked/>
                <label for="dk-t3" class="dk-toggle-label"><div class="dk-toggle-thumb"></div></label>
              </div>
            </div>
          </div>
          <div>
            <div class="flex justify-between mb-2">
              <span class="text-xs text-slate-400"><i class="fa-solid fa-volume-high mr-1 text-violet-400"></i>Volume</span>
              <span class="text-xs text-slate-300" id="dk-vol-label">68%</span>
            </div>
            <input type="range" class="dk-range" min="0" max="100" value="68" oninput="document.getElementById('dk-vol-label').textContent=this.value+'%'"/>
          </div>
        </div>

        {{-- Music Player --}}
        <div class="glass-strong rounded-2xl p-6 float-anim anim-up d6" style="background:rgba(255,255,255,0.07);">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:rgba(139,92,246,0.25); border:1px solid rgba(139,92,246,0.3);">
              <i class="fa-solid fa-music text-violet-400"></i>
            </div>
            <div>
              <p class="text-white font-semibold text-sm">Now Playing</p>
              <p class="text-slate-500 text-xs">Glass Collection · Vol. 1</p>
            </div>
            <div class="ml-auto">
              <button class="text-rose-400 hover:scale-110 transition-transform">
                <i class="fa-solid fa-heart"></i>
              </button>
            </div>
          </div>
          <div class="relative mx-auto mb-5 w-36 h-36 rounded-2xl flex items-center justify-center float-anim-2"
            style="background:linear-gradient(135deg,rgba(139,92,246,0.3),rgba(6,182,212,0.2)); border:1px solid rgba(255,255,255,0.15);">
            <i class="fa-solid fa-compact-disc text-6xl text-violet-300 opacity-60" style="animation:discSpin 6s linear infinite;"></i>
            <div class="absolute inset-0 rounded-2xl" style="background:radial-gradient(circle at 30% 30%,rgba(255,255,255,0.12),transparent 60%);"></div>
          </div>
          <div class="text-center mb-4">
            <h3 class="font-display text-white font-bold text-lg">Midnight Glass</h3>
            <p class="text-slate-400 text-sm">The Aether Band</p>
          </div>
          <div class="flex items-end justify-center gap-1 h-8 mb-4">
            <div class="dk-bar" style="animation-delay:0s;  height:10px"></div>
            <div class="dk-bar" style="animation-delay:.1s; height:18px"></div>
            <div class="dk-bar" style="animation-delay:.2s; height:24px"></div>
            <div class="dk-bar" style="animation-delay:.3s; height:14px"></div>
            <div class="dk-bar" style="animation-delay:.4s; height:28px"></div>
            <div class="dk-bar" style="animation-delay:.5s; height:8px" ></div>
            <div class="dk-bar" style="animation-delay:.6s; height:20px"></div>
            <div class="dk-bar" style="animation-delay:.7s; height:16px"></div>
            <div class="dk-bar" style="animation-delay:.8s; height:24px"></div>
            <div class="dk-bar" style="animation-delay:.9s; height:12px"></div>
            <div class="dk-bar" style="animation-delay:1s;  height:6px" ></div>
            <div class="dk-bar" style="animation-delay:1.1s;height:22px"></div>
          </div>
          <div class="mb-4">
            <div class="progress-track mb-1">
              <div class="progress-fill" style="width:40%; background:linear-gradient(90deg,#8b5cf6,#38bdf8);"></div>
            </div>
            <div class="flex justify-between text-xs text-slate-500">
              <span>1:42</span><span>4:15</span>
            </div>
          </div>
          <div class="flex items-center justify-center gap-5">
            <button class="text-slate-400 hover:text-white transition-colors text-sm"><i class="fa-solid fa-shuffle"></i></button>
            <button class="text-slate-300 hover:text-white transition-colors text-lg"><i class="fa-solid fa-backward-step"></i></button>
            <button class="w-12 h-12 rounded-full flex items-center justify-center shimmer"
              style="background:linear-gradient(135deg,#8b5cf6,#38bdf8); box-shadow:0 0 24px rgba(139,92,246,0.5);">
              <i class="fa-solid fa-pause text-white text-sm"></i>
            </button>
            <button class="text-slate-300 hover:text-white transition-colors text-lg"><i class="fa-solid fa-forward-step"></i></button>
            <button class="text-slate-400 hover:text-white transition-colors text-sm"><i class="fa-solid fa-repeat"></i></button>
          </div>
        </div>
      </div>

      {{-- Row 3: Buttons · Badges · Skills --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        {{-- Buttons --}}
        <div class="glass rounded-2xl p-6 anim-up d7">
          <h3 class="font-display text-white font-semibold mb-5">Buttons</h3>
          <div class="space-y-3">
            <button class="w-full py-3 rounded-xl text-sm font-semibold text-white shimmer"
              style="background:linear-gradient(135deg,rgba(139,92,246,0.5),rgba(99,102,241,0.5)); border:1px solid rgba(139,92,246,0.4); box-shadow:0 0 20px rgba(139,92,246,0.25);">
              <i class="fa-solid fa-rocket mr-2"></i>Launch Project
            </button>
            <button class="w-full py-3 rounded-xl text-sm font-semibold text-white shimmer"
              style="background:linear-gradient(135deg,rgba(6,182,212,0.3),rgba(14,165,233,0.3)); border:1px solid rgba(6,182,212,0.35); box-shadow:0 0 20px rgba(6,182,212,0.2);">
              <i class="fa-solid fa-download mr-2 text-cyan-400"></i>Download Assets
            </button>
            <button class="w-full py-3 rounded-xl text-sm font-semibold text-white shimmer"
              style="background:linear-gradient(135deg,rgba(251,113,133,0.3),rgba(244,63,94,0.3)); border:1px solid rgba(251,113,133,0.35); box-shadow:0 0 20px rgba(251,113,133,0.2);">
              <i class="fa-solid fa-trash-can mr-2 text-rose-400"></i>Delete Record
            </button>
            <button class="w-full py-3 rounded-xl text-sm font-semibold text-slate-300 shimmer"
              style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12);">
              <i class="fa-solid fa-xmark mr-2"></i>Cancel
            </button>
          </div>
        </div>

        {{-- Badges & Star Rating --}}
        <div class="glass rounded-2xl p-6 anim-up d7">
          <h3 class="font-display text-white font-semibold mb-5">Badges & Tags</h3>
          <div class="flex flex-wrap gap-2 mb-5">
            <span class="pill" style="background:rgba(139,92,246,0.15); border:1px solid rgba(139,92,246,0.3); color:#c4b5fd;"><i class="fa-solid fa-circle-check text-xs"></i>Verified</span>
            <span class="pill" style="background:rgba(6,182,212,0.15);  border:1px solid rgba(6,182,212,0.3);  color:#67e8f9;"><i class="fa-solid fa-bolt text-xs"></i>Premium</span>
            <span class="pill" style="background:rgba(251,113,133,0.15);border:1px solid rgba(251,113,133,0.3);color:#fda4af;"><i class="fa-solid fa-fire text-xs"></i>Hot</span>
            <span class="pill" style="background:rgba(52,211,153,0.15); border:1px solid rgba(52,211,153,0.3); color:#6ee7b7;"><i class="fa-solid fa-leaf text-xs"></i>Eco</span>
            <span class="pill" style="background:rgba(251,191,36,0.15); border:1px solid rgba(251,191,36,0.3); color:#fde68a;"><i class="fa-solid fa-crown text-xs"></i>Gold</span>
            <span class="pill" style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.14);color:#94a3b8;">New</span>
          </div>
          <div class="glass-divider mb-4"></div>
          <p class="text-xs text-slate-500 mb-2">Product Rating</p>
          <div class="flex gap-1 mb-3" id="dk-stars">
            <i class="fa-solid fa-star dk-star active text-xl cursor-pointer" data-v="1"></i>
            <i class="fa-solid fa-star dk-star active text-xl cursor-pointer" data-v="2"></i>
            <i class="fa-solid fa-star dk-star active text-xl cursor-pointer" data-v="3"></i>
            <i class="fa-solid fa-star dk-star active text-xl cursor-pointer" data-v="4"></i>
            <i class="fa-solid fa-star dk-star text-xl cursor-pointer"        data-v="5"></i>
          </div>
          <p class="text-xs text-slate-500">Click stars to rate</p>
        </div>

        {{-- Skills Progress --}}
        <div class="glass rounded-2xl p-6 anim-up d8">
          <h3 class="font-display text-white font-semibold mb-5">Skills</h3>
          <div class="space-y-4">
            @php
            $skills = [
              ['fa-brands fa-figma',   '#a78bfa', 'Design',   94, '#8b5cf6','#a78bfa'],
              ['fa-brands fa-react',   '#67e8f9', 'React',    88, '#0ea5e9','#38bdf8'],
              ['fa-brands fa-node-js', '#6ee7b7', 'Node.js',  76, '#10b981','#34d399'],
              ['fa-solid fa-database', '#fda4af', 'Database', 62, '#fb7185','#f43f5e'],
              ['fa-brands fa-python',  '#fde68a', 'Python',   55, '#f59e0b','#fbbf24'],
            ];
            @endphp
            @foreach($skills as [$ico,$iconColor,$label,$pct,$c1,$c2])
            <div>
              <div style="display:flex; justify-content:space-between; margin-bottom:6px;">
                <span style="font-size:0.875rem; color:#cbd5e1; display:flex; align-items:center; gap:8px;">
                  <i class="{{ $ico }}" style="color:{{ $iconColor }};"></i>{{ $label }}
                </span>
                <span style="font-size:0.75rem; color:#94a3b8;">{{ $pct }}%</span>
              </div>
              <div class="progress-track">
                <div class="progress-fill" style="width:{{ $pct }}%; background:linear-gradient(90deg,{{ $c1 }},{{ $c2 }});"></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      {{-- Row 4: Pricing · Alerts · Action cards --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Pricing Card --}}
        <div class="glass rounded-2xl p-6 relative overflow-hidden shimmer anim-up d5" style="border:1px solid rgba(139,92,246,0.35);">
          <div class="absolute top-0 right-0 w-48 h-48 rounded-full pointer-events-none"
            style="background:radial-gradient(circle,rgba(139,92,246,0.18),transparent 70%); transform:translate(30%,-30%);"></div>
          <div class="pill mb-4 w-fit" style="background:rgba(251,191,36,0.15); border:1px solid rgba(251,191,36,0.3); color:#fde68a;">
            <i class="fa-solid fa-crown text-xs"></i> Pro Plan
          </div>
          <div class="mb-5">
            <span class="font-display text-4xl font-bold grad-text-violet">$49</span>
            <span class="text-slate-500 text-sm">/month</span>
          </div>
          <ul class="space-y-2.5 mb-6">
            <li class="flex items-center gap-2.5 text-sm text-slate-300"><i class="fa-solid fa-circle-check text-violet-400"></i>Unlimited Projects</li>
            <li class="flex items-center gap-2.5 text-sm text-slate-300"><i class="fa-solid fa-circle-check text-violet-400"></i>Priority Support</li>
            <li class="flex items-center gap-2.5 text-sm text-slate-300"><i class="fa-solid fa-circle-check text-violet-400"></i>Advanced Analytics</li>
            <li class="flex items-center gap-2.5 text-sm text-slate-400"><i class="fa-solid fa-circle-xmark text-slate-600"></i>Custom Domain</li>
          </ul>
          <button class="w-full py-3 rounded-xl text-sm font-semibold text-white"
            style="background:linear-gradient(135deg,#7c3aed,#6366f1); box-shadow:0 4px 24px rgba(124,58,237,0.4);">
            Get Started <i class="fa-solid fa-arrow-right ml-2"></i>
          </button>
        </div>

        {{-- Alerts --}}
        <div class="space-y-4 anim-up d6">
          @php
          $alerts = [
            ['fa-circle-info',          '#a78bfa', 'rgba(139,92,246,0.3)',  'rgba(139,92,246,0.08)',  '#c4b5fd', 'Update Available',  'Version 3.2.0 is ready to install.'],
            ['fa-circle-check',         '#34d399', 'rgba(52,211,153,0.3)',  'rgba(52,211,153,0.08)',  '#6ee7b7', 'Build Successful',   'Production build compiled without errors.'],
            ['fa-triangle-exclamation', '#fbbf24', 'rgba(251,191,36,0.3)', 'rgba(251,191,36,0.08)', '#fde68a', 'Storage Warning',    "You've used 89% of your storage quota."],
            ['fa-circle-xmark',         '#fb7185', 'rgba(251,113,133,0.3)','rgba(251,113,133,0.08)','#fda4af', 'Connection Failed',  'Could not reach the database. Retry?'],
          ];
          @endphp
          @foreach($alerts as [$ico,$iconColor,$bc,$bg,$tc,$title,$msg])
          <div class="glass rounded-xl p-4" style="border-color:{{ $bc }}; background:{{ $bg }}; display:flex; align-items:flex-start; gap:12px;">
            <i class="fa-solid {{ $ico }}" style="color:{{ $iconColor }}; margin-top:2px; flex-shrink:0;"></i>
            <div>
              <p style="font-size:0.875rem; font-weight:600; color:{{ $tc }};">{{ $title }}</p>
              <p style="font-size:0.75rem; color:#94a3b8; margin-top:2px;">{{ $msg }}</p>
            </div>
          </div>
          @endforeach
        </div>

        {{-- Mini Action Cards --}}
        <div class="space-y-4 anim-up d7">
          @php
          $actionCards = [
            ['fa-cloud-arrow-up', '#22d3ee', 'rgba(6,182,212,0.2)', 'rgba(6,182,212,0.3)',   'Cloud Sync',    'Last synced 2 min ago', 'glow-cyan', 'dot'],
            ['fa-shield-halved',  '#fb7185', 'rgba(251,113,133,0.2)','rgba(251,113,133,0.3)','Security Scan', 'No threats detected',   '',          'chevron'],
            ['fa-robot',          '#fbbf24', 'rgba(251,191,36,0.2)', 'rgba(251,191,36,0.3)', 'AI Assistant',  'Ready to help you',     '',          'chevron'],
            ['fa-palette',        '#a78bfa', 'rgba(139,92,246,0.2)', 'rgba(139,92,246,0.3)', 'Theme Studio',  'Customize appearance',  '',          'chevron'],
          ];
          @endphp
          @foreach($actionCards as [$ico,$iconColor,$bg,$border,$title,$sub,$extra,$tail])
          <div class="glass rounded-2xl p-5 shimmer cursor-pointer {{ $extra }}" style="display:flex; align-items:center; gap:16px;">
            <div style="width:40px; height:40px; border-radius:12px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:{{ $bg }}; border:1px solid {{ $border }};">
              <i class="fa-solid {{ $ico }}" style="color:{{ $iconColor }};"></i>
            </div>
            <div style="flex:1;">
              <p style="color:white; font-size:0.875rem; font-weight:600;">{{ $title }}</p>
              <p style="color:#64748b; font-size:0.75rem;">{{ $sub }}</p>
            </div>
            @if($tail === 'dot')
            <div style="width:8px; height:8px; border-radius:50%; background:#22d3ee; box-shadow:0 0 8px rgba(6,182,212,0.8);"></div>
            @else
            <i class="fa-solid fa-chevron-right" style="color:#475569; font-size:0.75rem;"></i>
            @endif
          </div>
          @endforeach
        </div>

      </div>{{-- /row4 --}}
    </div>{{-- /max-w-7xl --}}
  </div>{{-- /s1-content --}}
</section>

{{-- ──────────────────────────────────────────────────────────────
     SECTION 2 — iOS LIQUID GLASS UI KIT
────────────────────────────────────────────────────────────── --}}
<section style="position:relative; overflow:hidden; background:#e8f4fd;">
  <div class="s2-bg"></div>
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>
  <div class="blob blob-4"></div>
  <div class="blob blob-5"></div>
  <div class="noise"></div>

  <div class="s2-content py-16 px-4 md:px-8">
  <div class="max-w-7xl mx-auto">

    {{-- Header --}}
    <div class="text-center mb-16 rise r1">
      <div class="section-label mb-5 mx-auto w-fit">
        <i class="fa-brands fa-apple text-xs"></i> iOS Liquid Glass
      </div>
      <h1 style="font-family:'Plus Jakarta Sans',sans-serif; font-size:clamp(2.4rem,6vw,4.5rem); font-weight:800; letter-spacing:-0.03em; color:#1a1a2e; line-height:1.08;">
        Liquid Glass<br/>
        <span style="background:linear-gradient(135deg,#7c3aed,#3b82f6,#06b6d4); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">UI Component Kit</span>
      </h1>
      <p style="font-family:'Plus Jakarta Sans',sans-serif; font-size:1.05rem; color:rgba(30,30,60,0.55); margin-top:16px; font-weight:300; max-width:500px; margin-left:auto; margin-right:auto;">
        Apple-inspired translucent surfaces with living refraction, depth & specular light.
      </p>
    </div>

    {{-- Row 1: Lock Screen · Control Center · Player + Weather --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

      {{-- Lock Screen --}}
      <div class="rise r2">
        <div class="liquid spec rounded-3xl p-6 liq-hover liq-pulse float-ios" style="min-height:420px;">
          <div class="flex justify-center mb-6">
            <div class="dynamic-island spring">
              <div class="dynamic-island-inner">
                <div class="w-2 h-2 rounded-full bg-green-400" style="box-shadow:0 0 6px #4ade80;"></div>
                <span style="color:white; font-size:0.7rem; font-weight:600; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; max-width:140px;">Now Playing</span>
                <i class="fa-solid fa-music" style="color:rgba(255,255,255,0.6); font-size:0.7rem;"></i>
              </div>
            </div>
          </div>
          <div class="text-center mb-6">
            <div style="font-family:'Plus Jakarta Sans',sans-serif; font-size:4.5rem; font-weight:200; color:#1a1a2e; letter-spacing:-0.04em; line-height:1;">9:41</div>
            <div class="ios-caption" style="font-size:0.85rem; margin-top:4px;">Wednesday, March 11</div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="liquid-sm rounded-2xl px-4 py-3 spec">
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:linear-gradient(135deg,#34d399,#10b981);">
                  <i class="fa-solid fa-message text-white text-sm"></i>
                </div>
                <div class="flex-1"><div class="ios-label mb-0.5">Messages</div><div class="ios-title" style="font-size:0.82rem;">Hey, are you free tonight?</div></div>
                <div class="ios-caption">now</div>
              </div>
            </div>
            <div class="liquid-sm rounded-2xl px-4 py-3 spec">
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:linear-gradient(135deg,#60a5fa,#3b82f6);">
                  <i class="fa-solid fa-calendar text-white text-sm"></i>
                </div>
                <div class="flex-1"><div class="ios-label mb-0.5">Calendar</div><div class="ios-title" style="font-size:0.82rem;">Design Review · 2:00 PM</div></div>
                <div class="ios-caption">5m</div>
              </div>
            </div>
          </div>
          <div class="flex justify-center gap-5 mt-6">
            <button class="w-14 h-14 rounded-full flex items-center justify-center liq-hover spring" style="background:rgba(255,255,255,0.55); backdrop-filter:blur(20px); border:1px solid rgba(255,255,255,0.7); box-shadow:0 4px 16px rgba(0,0,0,0.1);">
              <i class="fa-solid fa-flashlight text-gray-600 text-xl"></i>
            </button>
            <button class="w-14 h-14 rounded-full flex items-center justify-center liq-hover spring" style="background:rgba(255,255,255,0.55); backdrop-filter:blur(20px); border:1px solid rgba(255,255,255,0.7); box-shadow:0 4px 16px rgba(0,0,0,0.1);">
              <i class="fa-solid fa-camera text-gray-600 text-xl"></i>
            </button>
          </div>
        </div>
      </div>

      {{-- Control Center --}}
      <div class="rise r3">
        <div class="liquid spec rounded-3xl p-5 liq-hover float-ios-2" style="min-height:420px;">
          <div class="ios-label mb-4">Control Center</div>
          <div class="grid grid-cols-2 gap-3 mb-3">
            <div class="liquid-sm rounded-2xl p-4 spec spring liq-hover">
              <div class="flex items-center justify-between mb-2">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:rgba(59,130,246,0.85);"><i class="fa-solid fa-wifi text-white text-sm"></i></div>
                <div class="ios-caption" style="font-size:0.65rem;">Connected</div>
              </div>
              <div style="font-size:0.75rem; font-weight:700; color:#1a1a2e;">Wi-Fi</div>
              <div class="ios-caption" style="font-size:0.65rem;">HomeNetwork_5G</div>
              <div class="liq-divider my-3"></div>
              <div class="flex items-center justify-between mb-1">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:rgba(59,130,246,0.85);"><i class="fa-brands fa-bluetooth-b text-white text-sm"></i></div>
                <div class="ios-caption" style="font-size:0.65rem;">2 devices</div>
              </div>
              <div style="font-size:0.75rem; font-weight:700; color:#1a1a2e;">Bluetooth</div>
            </div>
            <div class="liquid-sm rounded-2xl p-4 spec spring liq-hover">
              <div class="flex items-center justify-between mb-2">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:rgba(99,99,110,0.7);"><i class="fa-solid fa-wave-square text-white text-sm"></i></div>
                <div class="ios-caption" style="font-size:0.65rem;">Contacts only</div>
              </div>
              <div style="font-size:0.75rem; font-weight:700; color:#1a1a2e;">AirDrop</div>
              <div class="liq-divider my-3"></div>
              <div class="w-9 h-9 rounded-xl flex items-center justify-center mb-1" style="background:rgba(99,99,110,0.7);"><i class="fa-solid fa-tv text-white text-sm"></i></div>
              <div style="font-size:0.75rem; font-weight:700; color:#1a1a2e;">AirPlay</div>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-3 mb-3">
            <div class="liquid-sm rounded-2xl p-4 spec liq-hover spring">
              <div class="flex items-center gap-2 mb-3"><i class="fa-solid fa-sun text-amber-500 text-sm"></i><span style="font-size:0.75rem; font-weight:700; color:#1a1a2e;">Brightness</span></div>
              <div style="writing-mode:vertical-lr; transform:rotate(180deg); height:80px; display:flex; align-items:center;">
                <input type="range" class="liq-range" min="0" max="100" value="75" style="writing-mode:vertical-lr; transform:rotate(180deg); width:80px;"/>
              </div>
            </div>
            <div class="liquid-sm rounded-2xl p-4 spec liq-hover spring">
              <div class="flex items-center gap-2 mb-3"><i class="fa-solid fa-volume-high text-gray-500 text-sm"></i><span style="font-size:0.75rem; font-weight:700; color:#1a1a2e;">Volume</span></div>
              <div style="writing-mode:vertical-lr; transform:rotate(180deg); height:80px; display:flex; align-items:center;">
                <input type="range" class="liq-range" min="0" max="100" value="60" style="writing-mode:vertical-lr; transform:rotate(180deg); width:80px;"/>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-4 gap-2">
            <button class="liquid-sm rounded-2xl p-3 flex flex-col items-center gap-1.5 liq-hover spring" style="aspect-ratio:1"><i class="fa-solid fa-moon text-indigo-600 text-lg"></i><span class="ios-caption" style="font-size:0.58rem;">Focus</span></button>
            <button class="liquid-sm rounded-2xl p-3 flex flex-col items-center gap-1.5 liq-hover spring" style="aspect-ratio:1; background:rgba(59,130,246,0.3);"><i class="fa-solid fa-location-arrow text-blue-600 text-lg"></i><span class="ios-caption" style="font-size:0.58rem; text-align:center;">Screen<br/>Mirror</span></button>
            <button class="liquid-sm rounded-2xl p-3 flex flex-col items-center gap-1.5 liq-hover spring" style="aspect-ratio:1"><i class="fa-solid fa-timer text-gray-500 text-lg"></i><span class="ios-caption" style="font-size:0.58rem;">Timer</span></button>
            <button class="liquid-sm rounded-2xl p-3 flex flex-col items-center gap-1.5 liq-hover spring" style="aspect-ratio:1; background:rgba(250,204,21,0.25);"><i class="fa-solid fa-flashlight text-amber-600 text-lg"></i><span class="ios-caption" style="font-size:0.58rem;">Torch</span></button>
          </div>
        </div>
      </div>

      {{-- Now Playing + Weather --}}
      <div class="space-y-5 rise r4">
        <div class="liquid spec rounded-3xl p-5 liq-hover float-ios-3" style="background:rgba(255,255,255,0.5);">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-2xl flex items-center justify-center spec" style="background:linear-gradient(135deg,#a78bfa,#818cf8,#60a5fa);">
              <i class="fa-solid fa-music text-white"></i>
            </div>
            <div class="flex-1"><div class="ios-title">Weightless</div><div class="ios-caption">Marconi Union · 8 Hrs</div></div>
            <button class="w-9 h-9 rounded-full flex items-center justify-center liq-hover spring" style="background:rgba(255,255,255,0.6); border:1px solid rgba(255,255,255,0.7);">
              <i class="fa-solid fa-ellipsis text-gray-500 text-sm"></i>
            </button>
          </div>
          <div class="ios-progress-track mb-2"><div class="ios-progress-fill" style="width:38%; background:linear-gradient(90deg,#a78bfa,#60a5fa);"></div></div>
          <div class="flex justify-between mb-4"><span class="ios-caption">14:22</span><span class="ios-caption">37:41</span></div>
          <div class="flex items-center justify-between">
            <button class="liq-hover spring" style="color:rgba(30,30,60,0.4); font-size:1.1rem; background:none; border:none; cursor:pointer;"><i class="fa-solid fa-shuffle"></i></button>
            <button class="liq-hover spring" style="color:#1a1a2e; font-size:1.3rem; background:none; border:none; cursor:pointer;"><i class="fa-solid fa-backward-step"></i></button>
            <button class="liq-btn liq-btn-blue spring" style="width:48px; height:48px; padding:0; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;"><i class="fa-solid fa-pause"></i></button>
            <button class="liq-hover spring" style="color:#1a1a2e; font-size:1.3rem; background:none; border:none; cursor:pointer;"><i class="fa-solid fa-forward-step"></i></button>
            <button class="liq-hover spring" style="color:rgba(30,30,60,0.4); font-size:1.1rem; background:none; border:none; cursor:pointer;"><i class="fa-solid fa-repeat"></i></button>
          </div>
        </div>
        <div class="liquid-tint-blue spec rounded-3xl p-5 liq-hover">
          <div class="flex items-start justify-between">
            <div><div class="ios-label mb-1" style="color:rgba(30,60,120,0.6);">My Location</div><div style="font-size:1rem; font-weight:700; color:#1e3a8a;">San Francisco</div><div style="font-size:0.78rem; color:rgba(30,60,120,0.6);">Partly cloudy</div></div>
            <div style="font-size:2.8rem; font-weight:200; color:#1e3a8a; line-height:1; letter-spacing:-0.03em;">68°</div>
          </div>
          <div class="flex gap-2 mt-4">
            <i class="fa-solid fa-cloud-sun" style="color:#3b82f6; font-size:1.5rem;"></i>
            <div class="flex-1"><div class="ios-progress-track" style="background:rgba(30,64,175,0.1);"><div style="width:55%; height:100%; border-radius:999px; background:linear-gradient(90deg,#60a5fa,#3b82f6);"></div></div></div>
            <span style="font-size:0.75rem; font-weight:600; color:#1d4ed8;">72° / 54°</span>
          </div>
          <div style="display:flex; justify-content:space-between; margin-top:16px; padding-top:12px; border-top:0.5px solid rgba(30,64,175,0.15);">
            @php
            $weatherDays = [
              ['MON','fa-sun',        '#fbbf24','72°'],
              ['TUE','fa-cloud-rain', '#60a5fa','61°'],
              ['WED','fa-cloud-sun',  '#60a5fa','68°'],
              ['THU','fa-sun',        '#fbbf24','75°'],
              ['FRI','fa-wind',       '#9ca3af','64°'],
            ];
            @endphp
            @foreach($weatherDays as [$day,$ico,$iconColor,$temp])
            <div style="text-align:center; color:rgba(30,60,120,0.65);">
              <div style="font-size:0.68rem; font-weight:600;">{{ $day }}</div>
              <i class="fa-solid {{ $ico }}" style="color:{{ $iconColor }}; display:block; margin:4px 0; font-size:0.875rem;"></i>
              <div style="font-size:0.72rem; font-weight:600;">{{ $temp }}</div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    {{-- Row 2: Home Screen · Alert + Action Sheet · Settings --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

      {{-- Home Screen --}}
      <div class="rise r5">
        <div class="liquid spec rounded-3xl p-5 liq-hover">
          <div class="ios-label mb-4">Home Screen</div>
          <div class="grid grid-cols-4 gap-3 mb-4">
            @foreach([['fa-message','#34d399','#059669','Messages','3'],['fa-phone','#60a5fa','#2563eb','Phone',null],['fa-music','#f472b6','#ec4899','Music',null],['fa-star','#fbbf24','#f59e0b','Wallet',null],['fa-calendar','#818cf8','#6366f1','Calendar',null],['fa-map-location-dot','#fb923c','#ea580c','Maps',null],['fa-cloud','#67e8f9','#0891b2','iCloud',null],['fa-photo-film','#a3e635','#65a30d','Photos',null]] as [$ico,$c1,$c2,$label,$badge])
            <div class="flex flex-col items-center gap-1.5 liq-hover spring cursor-pointer">
              <div class="w-14 h-14 rounded-2xl flex items-center justify-center spec" style="background:linear-gradient(135deg,{{ $c1 }},{{ $c2 }});">
                <i class="fa-solid {{ $ico }} text-white text-xl"></i>
              </div>
              <span class="ios-caption">{{ $label }}</span>
              @if($badge)
              <div class="notif-bubble" style="margin-top:-28px; margin-left:32px;">{{ $badge }}</div>
              @endif
            </div>
            @endforeach
          </div>
          <div class="flex justify-center gap-1.5 mb-4">
            <div class="w-1.5 h-1.5 rounded-full" style="background:rgba(30,30,60,0.5);"></div>
            <div class="w-5   h-1.5 rounded-full" style="background:rgba(30,30,60,0.8);"></div>
            <div class="w-1.5 h-1.5 rounded-full" style="background:rgba(30,30,60,0.35);"></div>
          </div>
          <div class="liquid-sm rounded-2xl px-3 py-3 spec flex justify-between gap-2">
            @foreach([['fa-phone','#60a5fa','#2563eb'],['fa-message','#34d399','#059669'],['fa-safari','#e2e8f0','#f1f5f9'],['fa-envelope','#fbbf24','#f59e0b']] as [$ico,$c1,$c2])
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center liq-hover spring cursor-pointer" style="background:linear-gradient(135deg,{{ $c1 }},{{ $c2 }});">
              <i class="@if($ico === 'fa-safari') fa-brands @else fa-solid @endif {{ $ico }} @if($ico === 'fa-safari') text-blue-500 @else text-white @endif text-xl"></i>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      {{-- Alert + Action Sheet --}}
      <div class="space-y-5 rise r6">
        <div class="liquid spec rounded-3xl overflow-hidden" style="box-shadow:0 20px 60px rgba(0,0,0,0.16), inset 0 1px 0 rgba(255,255,255,0.9);">
          <div class="px-6 py-6 text-center">
            <div class="w-14 h-14 rounded-full mx-auto mb-3 flex items-center justify-center spec" style="background:linear-gradient(135deg,rgba(251,113,133,0.25),rgba(239,68,68,0.2)); border:1px solid rgba(252,165,165,0.4);">
              <i class="fa-solid fa-triangle-exclamation text-red-500 text-xl"></i>
            </div>
            <h3 style="font-size:1.05rem; font-weight:700; color:#1a1a2e; margin-bottom:6px;">Delete Account?</h3>
            <p class="ios-body">This action cannot be undone. All data will be permanently removed.</p>
          </div>
          <div class="liq-divider"></div>
          <div class="grid grid-cols-2">
            <button class="py-4 text-center font-semibold liq-hover spring" style="font-size:0.95rem; color:#3b82f6; background:none; border:none; cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif;">Cancel</button>
            <button class="py-4 text-center font-semibold liq-hover spring" style="font-size:0.95rem; color:#ef4444; background:none; border:none; cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif; border-left:0.5px solid rgba(60,60,80,0.12);">Delete</button>
          </div>
        </div>
        <div class="liquid spec rounded-3xl overflow-hidden">
          <div class="px-4 py-3 text-center"><div class="ios-body" style="font-size:0.78rem;">Share this photo to</div></div>
          <div class="liq-divider"></div>
          <div class="ctx-item"><i class="fa-solid fa-link"         style="color:#3b82f6; width:18px;"></i>Copy Link</div>
          <div class="ctx-item"><i class="fa-solid fa-share-nodes"  style="color:#34d399; width:18px;"></i>Share via Messages</div>
          <div class="ctx-item"><i class="fa-solid fa-envelope"     style="color:#f59e0b; width:18px;"></i>Send by Mail</div>
          <div class="ctx-item"><i class="fa-solid fa-cloud-arrow-up" style="color:#8b5cf6; width:18px;"></i>Save to iCloud</div>
          <div class="ctx-item" style="color:#ef4444;"><i class="fa-solid fa-trash" style="color:#ef4444; width:18px;"></i>Delete Photo</div>
        </div>
      </div>

      {{-- Settings --}}
      <div class="rise r7">
        <div class="liquid spec rounded-3xl p-5 liq-hover">
          <div class="ios-label mb-4">Settings</div>
          <div class="liquid-sm rounded-2xl p-4 spec mb-4 liq-hover spring cursor-pointer">
            <div class="flex items-center gap-3">
              <div class="liq-ring"><div class="liq-ring-inner w-14 h-14 flex items-center justify-center" style="background:linear-gradient(135deg,#818cf8,#60a5fa);"><i class="fa-solid fa-user text-white text-2xl"></i></div></div>
              <div class="flex-1"><div class="ios-title">Aria Novak</div><div class="ios-caption">Apple ID · iCloud · Media</div></div>
              <i class="fa-solid fa-chevron-right" style="color:rgba(60,60,80,0.3); font-size:0.75rem;"></i>
            </div>
          </div>
          <div class="liquid-sm rounded-2xl overflow-hidden mb-3">
            <div class="action-item">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background:#0ea5e9;"><i class="fa-solid fa-plane-departure text-white text-xs"></i></div>
              <span style="flex:1; font-size:0.88rem; font-weight:500; color:#1a1a2e;">Airplane Mode</span>
              <div><input type="checkbox" id="ios-a1" class="ios-toggle"/><label for="ios-a1" class="ios-toggle-track"><div class="ios-toggle-thumb"></div></label></div>
            </div>
            <div class="liq-divider" style="margin-left:52px;"></div>
            <div class="action-item">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background:#3b82f6;"><i class="fa-solid fa-wifi text-white text-xs"></i></div>
              <span style="flex:1; font-size:0.88rem; font-weight:500; color:#1a1a2e;">Wi-Fi</span>
              <span class="ios-caption" style="margin-right:6px;">HomeNet_5G</span>
              <i class="fa-solid fa-chevron-right" style="color:rgba(60,60,80,0.3); font-size:0.7rem;"></i>
            </div>
            <div class="liq-divider" style="margin-left:52px;"></div>
            <div class="action-item">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background:#3b82f6;"><i class="fa-brands fa-bluetooth-b text-white text-xs"></i></div>
              <span style="flex:1; font-size:0.88rem; font-weight:500; color:#1a1a2e;">Bluetooth</span>
              <span class="ios-caption" style="margin-right:6px;">On</span>
              <i class="fa-solid fa-chevron-right" style="color:rgba(60,60,80,0.3); font-size:0.7rem;"></i>
            </div>
          </div>
          <div class="liquid-sm rounded-2xl overflow-hidden mb-3">
            <div class="action-item">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background:linear-gradient(135deg,#6366f1,#8b5cf6);"><i class="fa-solid fa-bell text-white text-xs"></i></div>
              <span style="flex:1; font-size:0.88rem; font-weight:500; color:#1a1a2e;">Notifications</span>
              <i class="fa-solid fa-chevron-right" style="color:rgba(60,60,80,0.3); font-size:0.7rem;"></i>
            </div>
            <div class="liq-divider" style="margin-left:52px;"></div>
            <div class="action-item">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background:#1a1a2e;"><i class="fa-solid fa-moon text-white text-xs"></i></div>
              <span style="flex:1; font-size:0.88rem; font-weight:500; color:#1a1a2e;">Dark Mode</span>
              <div><input type="checkbox" id="ios-a2" class="ios-toggle" checked/><label for="ios-a2" class="ios-toggle-track"><div class="ios-toggle-thumb"></div></label></div>
            </div>
          </div>
          <div class="ios-label mb-2">View Mode</div>
          <div class="seg-ctrl">
            <button class="seg-btn active" onclick="iosSeg(this)">All</button>
            <button class="seg-btn"        onclick="iosSeg(this)">Favorites</button>
            <button class="seg-btn"        onclick="iosSeg(this)">Recent</button>
          </div>
        </div>
      </div>
    </div>

    {{-- Row 3: Forms · Activity + Battery · Incoming Call + Context --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

      {{-- Forms --}}
      <div class="rise r5">
        <div class="liquid spec rounded-3xl p-6">
          <div class="ios-label mb-5">Form · Liquid Inputs</div>
          <div class="space-y-3 mb-5">
            <div class="relative"><i class="fa-solid fa-user    absolute left-4 top-1/2 -translate-y-1/2" style="color:rgba(60,60,80,0.35); font-size:0.82rem;"></i><input class="ios-input" style="padding-left:40px;" placeholder="Full name"      type="text"/></div>
            <div class="relative"><i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2" style="color:rgba(60,60,80,0.35); font-size:0.82rem;"></i><input class="ios-input" style="padding-left:40px;" placeholder="Email address" type="email"/></div>
            <div class="relative">
              <i class="fa-solid fa-lock     absolute left-4 top-1/2 -translate-y-1/2" style="color:rgba(60,60,80,0.35); font-size:0.82rem;"></i>
              <input class="ios-input" style="padding-left:40px;" placeholder="Password" type="password"/>
              <i class="fa-solid fa-eye-slash absolute right-4 top-1/2 -translate-y-1/2" style="color:rgba(60,60,80,0.3); font-size:0.82rem; cursor:pointer;"></i>
            </div>
          </div>
          <div class="ios-label mb-3">Plan</div>
          <div class="liquid-sm rounded-2xl p-1.5 flex gap-1 mb-5" style="background:rgba(0,0,0,0.06);">
            <button class="pill-tab active flex-1 spring" onclick="iosPill(this)">Free</button>
            <button class="pill-tab flex-1 spring"        onclick="iosPill(this)">Pro</button>
            <button class="pill-tab flex-1 spring"        onclick="iosPill(this)">Team</button>
          </div>
          <div class="space-y-2.5">
            <button class="liq-btn liq-btn-blue  w-full spring"><i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Sign In with Apple</button>
            <button class="liq-btn liq-btn-white w-full spring"><i class="fa-brands fa-google mr-2 text-red-500"></i>Continue with Google</button>
            <button class="liq-btn liq-btn-tint  w-full spring"><i class="fa-solid fa-fingerprint mr-2"></i>Use Face ID</button>
          </div>
        </div>
      </div>

      {{-- Activity Rings + Battery --}}
      <div class="space-y-4 rise r6">
        <div class="liquid spec rounded-3xl p-5 liq-hover">
          <div class="flex items-start justify-between mb-4">
            <div><div class="ios-label">Activity</div><div class="ios-title" style="font-size:1rem;">Today</div></div>
            <div class="w-9 h-9 rounded-2xl flex items-center justify-center" style="background:rgba(0,0,0,0.06);"><i class="fa-solid fa-heart-pulse text-red-500 text-sm"></i></div>
          </div>
          <div class="flex items-center gap-4">
            <div style="position:relative; width:90px; height:90px; flex-shrink:0;">
              <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="40" stroke="rgba(239,68,68,0.15)"  stroke-width="8"/>
                <circle cx="45" cy="45" r="40" stroke="url(#svgMove)"         stroke-width="8" stroke-linecap="round" stroke-dasharray="251" stroke-dashoffset="55" transform="rotate(-90 45 45)"/>
                <circle cx="45" cy="45" r="30" stroke="rgba(34,197,94,0.15)"  stroke-width="8"/>
                <circle cx="45" cy="45" r="30" stroke="url(#svgExercise)"     stroke-width="8" stroke-linecap="round" stroke-dasharray="188" stroke-dashoffset="65" transform="rotate(-90 45 45)"/>
                <circle cx="45" cy="45" r="20" stroke="rgba(6,182,212,0.15)"  stroke-width="8"/>
                <circle cx="45" cy="45" r="20" stroke="url(#svgStand)"        stroke-width="8" stroke-linecap="round" stroke-dasharray="125" stroke-dashoffset="35" transform="rotate(-90 45 45)"/>
                <defs>
                  <linearGradient id="svgMove"     x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#f43f5e"/><stop offset="100%" stop-color="#fb923c"/></linearGradient>
                  <linearGradient id="svgExercise" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#22c55e"/><stop offset="100%" stop-color="#84cc16"/></linearGradient>
                  <linearGradient id="svgStand"    x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#06b6d4"/><stop offset="100%" stop-color="#3b82f6"/></linearGradient>
                </defs>
              </svg>
            </div>
            <div class="space-y-2.5 flex-1">
              @foreach([['#f43f5e','Move','487','600 cal','81%','#f43f5e','#fb923c'],['#22c55e','Exercise','28','30 min','93%','#22c55e','#84cc16'],['#06b6d4','Stand','10','12 hrs','72%','#06b6d4','#3b82f6']] as [$dot,$label,$val,$max,$w,$c1,$c2])
              <div>
                <div class="flex items-center gap-2 mb-0.5">
                  <div class="w-2.5 h-2.5 rounded-full" style="background:{{ $dot }};"></div>
                  <span class="ios-caption">{{ $label }}</span>
                  <span class="ml-auto" style="font-size:0.78rem; font-weight:700; color:#1a1a2e;">{{ $val }} <span style="font-weight:400; color:rgba(30,30,60,0.45);">/ {{ $max }}</span></span>
                </div>
                <div class="ios-progress-track" style="height:5px;"><div style="width:{{ $w }}; height:100%; border-radius:999px; background:linear-gradient(90deg,{{ $c1 }},{{ $c2 }});"></div></div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="liquid-tint-green spec rounded-3xl p-5 liq-hover">
          <div class="flex items-center justify-between mb-3">
            <div class="ios-label" style="color:rgba(20,80,40,0.55);">Battery</div>
            <span style="font-size:0.78rem; font-weight:700; color:#166534;">Low Power Off</span>
          </div>
          <div class="flex items-end gap-4">
            <div class="ios-num" style="color:#166534;">84%</div>
            <div class="flex-1 mb-1">
              <div style="height:24px; border-radius:6px; background:rgba(0,0,0,0.08); border:1.5px solid rgba(20,80,40,0.2); overflow:hidden; position:relative; padding:2px;">
                <div style="height:100%; border-radius:3px; width:84%; background:linear-gradient(90deg,#4ade80,#22c55e); box-shadow:0 2px 6px rgba(34,197,94,0.4);"></div>
                <div style="position:absolute; right:-5px; top:50%; transform:translateY(-50%); width:4px; height:10px; background:rgba(20,80,40,0.4); border-radius:0 2px 2px 0;"></div>
              </div>
            </div>
          </div>
          <div class="ios-caption" style="margin-top:8px; color:rgba(20,80,40,0.5);">~5h 20m remaining · Not charging</div>
        </div>
      </div>

      {{-- Incoming Call + Context Menu --}}
      <div class="space-y-4 rise r7">
        <div class="liquid spec rounded-3xl p-5 liq-hover" style="background:rgba(255,255,255,0.58);">
          <div class="ios-label mb-4">Incoming Call</div>
          <div class="flex items-center gap-3 mb-5">
            <div class="liq-ring"><div class="liq-ring-inner w-16 h-16 flex items-center justify-center" style="background:linear-gradient(135deg,#a78bfa,#818cf8);"><i class="fa-solid fa-user text-white text-2xl"></i></div></div>
            <div><div class="ios-title" style="font-size:1.1rem;">Jordan Lee</div><div class="ios-caption">Mobile · +1 (415) 555-0192</div></div>
          </div>
          <div class="flex items-center justify-center gap-1 mb-5" style="height:28px;">
            <div class="cbar" style="animation-delay:0s;"></div><div class="cbar" style="animation-delay:.1s;"></div>
            <div class="cbar" style="animation-delay:.2s;"></div><div class="cbar" style="animation-delay:.3s;"></div>
            <div class="cbar" style="animation-delay:.4s;"></div><div class="cbar" style="animation-delay:.5s;"></div>
            <div class="cbar" style="animation-delay:.6s;"></div><div class="cbar" style="animation-delay:.7s;"></div>
            <div class="cbar" style="animation-delay:.8s;"></div><div class="cbar" style="animation-delay:.9s;"></div>
          </div>
          <div class="grid grid-cols-2 gap-3">
            <button class="liq-btn spring" style="background:rgba(239,68,68,0.2); color:#dc2626; border:1px solid rgba(252,165,165,0.4); border-radius:999px; display:flex; align-items:center; justify-content:center; gap:8px; padding:14px;">
              <i class="fa-solid fa-phone-slash text-lg"></i><span>Decline</span>
            </button>
            <button class="liq-btn spring" style="background:rgba(34,197,94,0.8); color:white; border:1px solid rgba(74,222,128,0.5); border-radius:999px; display:flex; align-items:center; justify-content:center; gap:8px; padding:14px; box-shadow:0 4px 20px rgba(34,197,94,0.35);">
              <i class="fa-solid fa-phone text-lg"></i><span>Accept</span>
            </button>
          </div>
        </div>
        <div class="liquid spec rounded-2xl overflow-hidden">
          <div class="liquid-sm rounded-t-2xl px-4 py-3 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl spec flex items-center justify-center" style="background:linear-gradient(135deg,#f472b6,#ec4899);"><i class="fa-solid fa-image text-white"></i></div>
            <div><div class="ios-title" style="font-size:0.88rem;">Sunset_Beach.jpg</div><div class="ios-caption">3.4 MB · Today</div></div>
          </div>
          <div class="liq-divider"></div>
          <div class="ctx-item"><i class="fa-solid fa-share-nodes"  style="color:#3b82f6; width:18px;"></i>Share</div>
          <div class="ctx-item"><i class="fa-solid fa-copy"         style="color:#8b5cf6; width:18px;"></i>Copy</div>
          <div class="ctx-item"><i class="fa-solid fa-star"         style="color:#f59e0b; width:18px;"></i>Add to Favorites</div>
          <div class="ctx-item"><i class="fa-solid fa-info-circle"  style="color:#6b7280; width:18px;"></i>Get Info</div>
          <div class="liq-divider"></div>
          <div class="ctx-item" style="color:#ef4444;"><i class="fa-solid fa-trash" style="color:#ef4444; width:18px;"></i>Delete</div>
        </div>
      </div>
    </div>

    {{-- Row 4: Stat Chips --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 rise r8">
      @foreach([['fa-bolt','#7c3aed','#4c1d95','rgba(76,29,149,0.6)','liquid-tint-purple','99ms','Response Time'],['fa-users','#1d4ed8','#1e3a8a','rgba(30,58,138,0.6)','liquid-tint-blue','2.4M','Active Users'],['fa-heart','#be123c','#881337','rgba(136,19,55,0.6)','liquid-tint-rose','98%','Satisfaction'],['fa-circle-check','#15803d','#14532d','rgba(20,83,45,0.6)','liquid-tint-green','99.9%','Uptime SLA']] as [$ico,$ic,$tc,$cap,$cls,$val,$label])
      <div class="{{ $cls }} spec rounded-3xl p-5 liq-hover spring text-center">
        <i class="fa-solid {{ $ico }}" style="color:{{ $ic }}; font-size:1.5rem; margin-bottom:8px;"></i>
        <div style="font-size:2rem; font-weight:800; color:{{ $tc }}; letter-spacing:-0.03em;">{{ $val }}</div>
        <div class="ios-caption" style="color:{{ $cap }};">{{ $label }}</div>
      </div>
      @endforeach
    </div>

    {{-- Row 5: Spotlight + Toasts --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 rise r9">

      {{-- Spotlight --}}
      <div class="liquid spec rounded-3xl p-5" style="background:rgba(255,255,255,0.6);">
        <div class="ios-label mb-4">Spotlight Search</div>
        <div class="relative mb-4">
          <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2" style="color:rgba(60,60,80,0.4);"></i>
          <input class="ios-input" style="padding-left:42px; border-radius:16px;" placeholder="Search apps, contacts, files…" type="text"/>
        </div>
        <div class="ios-label mb-2">Suggestions</div>
        <div class="space-y-1.5">
          @foreach([['fa-brands fa-safari','#60a5fa','#3b82f6','anthropic.com','Web · Safari','fa-arrow-up-right-from-square'],['fa-solid fa-image','#f472b6','#ec4899','Recents · Photos','14 new items · 2h ago','fa-chevron-right'],['fa-solid fa-file-alt','#34d399','#059669','Design_System_v4.fig','Files · iCloud Drive','fa-chevron-right']] as [$ico,$c1,$c2,$title,$sub,$tail])
          <div class="action-item liq-hover spring" style="border-radius:12px; background:rgba(255,255,255,0.4);">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center" style="background:linear-gradient(135deg,{{ $c1 }},{{ $c2 }});"><i class="{{ $ico }} text-white text-xs"></i></div>
            <div class="flex-1"><div style="font-size:0.84rem; font-weight:600; color:#1a1a2e;">{{ $title }}</div><div class="ios-caption">{{ $sub }}</div></div>
            <i class="fa-solid {{ $tail }}" style="color:rgba(60,60,80,0.3); font-size:0.7rem;"></i>
          </div>
          @endforeach
        </div>
      </div>

      {{-- Toasts --}}
      <div class="liquid spec rounded-3xl p-5">
        <div class="ios-label mb-4">Live Notifications & Toasts</div>
        <div class="space-y-3" id="ios-toast-container"></div>
        <button onclick="iosAddToast()" class="liq-btn liq-btn-white w-full mt-4 spring">
          <i class="fa-solid fa-paper-plane mr-2"></i>Fire Notification
        </button>
      </div>
    </div>

  </div>{{-- /max-w-7xl --}}
  </div>{{-- /s2-content --}}
</section>

{{-- iOS Alert Overlay --}}
<div class="ios-alert-overlay" id="ios-alert-overlay" onclick="this.classList.remove('show')">
  <div class="ios-alert-box liquid spec">
    <div class="px-6 py-5 text-center">
      <h3 style="font-size:1rem; font-weight:700; color:#1a1a2e; margin-bottom:6px;">Allow Location Access?</h3>
      <p class="ios-body">"Maps" wants to use your location while you use the app.</p>
    </div>
    <div class="liq-divider"></div>
    <div class="grid grid-cols-2">
      <button onclick="document.getElementById('ios-alert-overlay').classList.remove('show')" style="padding:14px; font-size:0.9rem; font-weight:500; color:rgba(30,30,60,0.55); background:none; border:none; cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif;">Don't Allow</button>
      <button onclick="document.getElementById('ios-alert-overlay').classList.remove('show')" style="padding:14px; font-size:0.9rem; font-weight:700; color:#2563eb; background:none; border:none; cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif; border-left:0.5px solid rgba(60,60,80,0.12);">Allow</button>
    </div>
  </div>
</div>

@endsection

{{-- ═══════════════════════════════════════════════════════════════
     SCRIPTS — inlined so onclick handlers resolve immediately
═══════════════════════════════════════════════════════════════ --}}
<script>
/* ── SECTION 1 — DARK GLASS ─────────────────────────────────── */

function dkToggleDropdown() {
  var dd    = document.getElementById('dk-dropdown');
  var arrow = document.getElementById('dk-dd-arrow');
  dd.classList.toggle('open');
  arrow.style.transform = dd.classList.contains('open') ? 'rotate(180deg)' : '';
}
function dkSelectItem(label) {
  document.getElementById('dk-dd-label').innerHTML =
    '<i class="fa-solid fa-check" style="margin-right:6px; color:#a78bfa;"></i>' + label;
  document.getElementById('dk-dropdown').classList.remove('open');
  document.getElementById('dk-dd-arrow').style.transform = '';
}
document.addEventListener('click', function(e) {
  var dd = document.getElementById('dk-dropdown');
  if (dd && !dd.contains(e.target)) {
    dd.classList.remove('open');
    var arrow = document.getElementById('dk-dd-arrow');
    if (arrow) arrow.style.transform = '';
  }
});

/* ── SECTION 2 — IOS LIQUID GLASS ───────────────────────────── */

function iosSeg(btn) {
  btn.closest('.seg-ctrl').querySelectorAll('.seg-btn')
    .forEach(function(b) { b.classList.remove('active'); });
  btn.classList.add('active');
}

function iosPill(btn) {
  var siblings = btn.closest('div').querySelectorAll('.pill-tab');
  siblings.forEach(function(b) { b.classList.remove('active'); });
  btn.classList.add('active');
}

var iosToasts = [
  { icon:'fa-message',        color:'#34d399', bg:'rgba(52,211,153,0.18)',  title:'New Message',  body:'Jordan: See you at 3pm!',           time:'now'      },
  { icon:'fa-calendar',       color:'#60a5fa', bg:'rgba(96,165,250,0.18)',  title:'Reminder',     body:'Design Review starts in 10 min',    time:'10m'      },
  { icon:'fa-bell',           color:'#f59e0b', bg:'rgba(245,158,11,0.18)',  title:'App Update',   body:'Figma 116.2 is now available',      time:'2m'       },
  { icon:'fa-heart',          color:'#f472b6', bg:'rgba(244,114,182,0.18)', title:'New Like',     body:'Aria liked your photo',             time:'just now' },
  { icon:'fa-cloud-arrow-up', color:'#8b5cf6', bg:'rgba(139,92,246,0.18)', title:'iCloud Sync',  body:'All files backed up successfully',  time:'5m'       }
];
var iosToastIdx = 0;

function iosAddToast() {
  var d   = iosToasts[iosToastIdx % iosToasts.length];
  iosToastIdx++;
  var el  = document.createElement('div');
  el.className = 'liquid-sm spec rounded-2xl p-3 liq-hover spring';
  el.style.cssText = 'border-left:3px solid ' + d.color + '; opacity:0; transform:translateX(30px); transition:all .45s cubic-bezier(.34,1.2,.64,1); cursor:pointer;';
  el.innerHTML =
    '<div style="display:flex; align-items:center; gap:10px;">' +
      '<div style="width:34px; height:34px; border-radius:10px; display:flex; align-items:center; justify-content:center; background:' + d.bg + '; flex-shrink:0;">' +
        '<i class="fa-solid ' + d.icon + '" style="color:' + d.color + '; font-size:0.85rem;"></i>' +
      '</div>' +
      '<div style="flex:1; min-width:0;">' +
        '<div style="font-size:0.8rem; font-weight:700; color:#1a1a2e;">' + d.title + '</div>' +
        '<div style="font-size:0.72rem; color:rgba(30,30,60,0.55); white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">' + d.body + '</div>' +
      '</div>' +
      '<span style="font-size:0.65rem; color:rgba(30,30,60,0.4); flex-shrink:0;">' + d.time + '</span>' +
    '</div>';
  var container = document.getElementById('ios-toast-container');
  if (!container) return;
  container.prepend(el);
  requestAnimationFrame(function() {
    el.style.opacity   = '1';
    el.style.transform = 'translateX(0)';
  });
  el.addEventListener('click', function() {
    el.style.opacity   = '0';
    el.style.transform = 'translateX(30px)';
    setTimeout(function() { el.remove(); }, 400);
  });
  if (container.children.length > 4) {
    var oldestToast = container.lastChild;
    oldestToast.style.opacity = '0';
    oldestToast.style.transform = 'translateX(30px)';
    setTimeout(function() { oldestToast.remove(); }, 450);
  }
}
/* ── INIT — runs after DOM is ready ─────────────────────────── */
document.addEventListener('DOMContentLoaded', function() {

  document.querySelectorAll('#dk-stars .dk-star').forEach(function(star) {
    star.addEventListener('click', function() {
      var val = parseInt(star.dataset.v);
      document.querySelectorAll('#dk-stars .dk-star').forEach(function(s, i) {
        s.classList.toggle('active', i < val);
      });
    });
  });

  iosAddToast();
  iosAddToast();
});
</script>

</x-app-layout>
