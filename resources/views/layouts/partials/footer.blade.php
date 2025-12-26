<footer id="site-footer"
  class="relative px-6 lg:px-20 py-20 bg-slate-950 text-slate-200 overflow-hidden">

  <div class="absolute -top-10 left-0 w-[420px] h-[420px] bg-indigo-500/30 rounded-full blur-[140px]"></div>
  <div class="absolute bottom-0 right-0 w-[420px] h-[420px] bg-pink-500/30 rounded-full blur-[140px]"></div>

  <div class="container mx-auto max-w-6xl relative grid grid-cols-1 lg:grid-cols-2 gap-10">

    <div class="space-y-4">
      <h3 class="text-4xl font-black text-white">
        Nikul <span class="gradient-text">Prajapati</span>
      </h3>

      <p class="text-slate-400 leading-relaxed max-w-md">
        Full-stack Laravel developer specialising in UI motion, scalable backend architecture
        and performance-first web experiences.
      </p>

      <div class="flex gap-4 pt-2">
        <a href="{{ $config['git'] }}" class="text-slate-300 hover:text-indigo-400 font-semibold">GitHub</a>
        <a href="{{ $config['linkedin'] }}" class="text-slate-300 hover:text-indigo-400 font-semibold">LinkedIn</a>
        <a href="{{ $config['insta'] }}" class="text-slate-300 hover:text-indigo-400 font-semibold">Instagram</a>
      </div>
    </div>

    <div
      class="bg-white/10 backdrop-blur-lg rounded-[35px] border border-white/20 p-6 shadow-2xl">

      <h4 class="text-xl font-black text-white mb-3">
        Let’s Work Together
      </h4>

      <p class="text-slate-300 text-sm mb-5">
        Open to freelance projects, collaborations & long-term partnerships.
      </p>

      <div class="space-y-1 text-slate-200 font-medium">
        <p>📧 nikulprajapti203@gmail.com</p>
        <p>📍 India</p>
      </div>

      <button
        class="w-full mt-6 py-3 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-500 hover:-translate-y-1 transition-all">
        Contact Now
      </button>
    </div>

  </div>

  <!-- Bottom -->
  <div class="mt-14 border-t border-white/10 pt-6 text-center text-slate-400 font-medium">
    © {{ date('Y') }} Nikul Prajapati — All Rights Reserved
  </div>
</footer>
