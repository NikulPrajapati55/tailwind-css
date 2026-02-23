<x-app-layout>
    @section('meta')
        <title>Luxury Stay | Premium Hotel Experience</title>
    @endsection

    @section('content')

        <!-- Premium About Section -->

<section class="py-12 bg-[#0e1422]">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 text-center">

            @foreach([
                ['number'=>'500+','label'=>'Happy Guests'],
                ['number'=>'120','label'=>'Luxury Rooms'],
                ['number'=>'15+','label'=>'Years Experience'],
                ['number'=>'4.9','label'=>'Guest Rating']
            ] as $stat)

            <div class="group">
                <h3 class="text-5xl font-bold text-amber-400 group-hover:scale-110 transition duration-300">
                    {{ $stat['number'] }}
                </h3>
                <p class="text-gray-400 mt-3 uppercase tracking-widest text-sm">
                    {{ $stat['label'] }}
                </p>
            </div>

            @endforeach

        </div>
    </div>
</section>

    @endsection
</x-app-layout>
