<x-app-layout>
    @section('meta')
        <title>test</title>
    @endsection

    @section('content')
    <div class="flex min-h-screen items-center justify-center bg-gray-900 p-6">
  <div class="group relative w-full max-w-sm rounded-2xl bg-white/10 p-1 backdrop-blur-lg transition-all duration-300 hover:scale-105">

    <div class="absolute -inset-0.5 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-500 opacity-20 blur group-hover:opacity-50 transition duration-1000"></div>

    <div class="relative rounded-xl bg-gray-900 p-6">
      <div class="flex flex-col items-center">
        <div class="h-24 w-24 rounded-full bg-gradient-to-tr from-cyan-400 to-blue-600 p-1">
          <div class="h-full w-full rounded-full bg-gray-800 flex items-center justify-center">
             <span class="text-2xl font-bold text-white">HC</span>
          </div>
        </div>

        <h2 class="mt-4 text-xl font-bold text-white">Hii Codes</h2>
        <p class="text-sm text-gray-400">Creative Developer & Designer</p>

        <div class="mt-6 flex w-full justify-around border-t border-gray-700 pt-6">
          <div class="text-center">
            <p class="text-lg font-bold text-white">12k</p>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Followers</p>
          </div>
          <div class="text-center">
            <p class="text-lg font-bold text-white">85</p>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Projects</p>
          </div>
        </div>

        <button class="mt-8 w-full rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 py-2.5 font-semibold text-white transition-all hover:shadow-[0_0_15px_rgba(6,182,212,0.5)]">
          Follow Now
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
</x-app-layout>
