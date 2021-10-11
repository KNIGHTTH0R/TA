<section class="bg-coolGray-100 text-coolGray-800">
    <div class="container max-w-xl p-6 pt-10 md:pt-20 lg:px-8 mx-auto space-y-24 lg:max-w-7xl">
        <div>
            <h2 class="text-4xl font-bold tracking-tight text-center sm:text-5xl text-coolGray-900">Donasi Terbaru</h2>
            <p class="max-w-3xl mx-auto mt-4 text-xl text-center text-coolGray-600">Ambil bagian untuk menebar kebaikan</p>
        </div>
    </div>

    <section class="py-4 md:py-0 bg-coolGray-100 text-coolGray-800">
        <div class="container p-8 mx-auto space-y-8">
            <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                @foreach($campaigns as $campaign)
                <article class="flex flex-col bg-coolGray-50">
                    <a href="#" aria-label="Te nulla oportere reprimique his dolorum">
                        <img alt="" class="object-cover w-full h-52 bg-coolGray-500" src="{{ $campaign->image }}">
                    </a>
                    <div class="flex flex-col flex-1 p-6">
                        <a href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                        <a href="#" class="text-xs tracking-wider uppercase hover:underline text-sky-600">{{ $campaign->category->title }}</a>
                        <a href="{{ route('donasi.show', $campaign) }}"><h3 class="flex-1 py-2 text-xl font-semibold leading-snug">{{ Str::limit($campaign->title, 22) }}</h3></a>
                        <p class="mb-2 text-gray-700">
                            {{ Str::limit($campaign->stories, 100) }}
                        </p>
                        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-coolGray-600">
                            <span>{{ date('d M Y', strtotime($campaign->date_end)) }}</span>
                            <span>{{ $campaign->date_end }} hari lagi</span>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
</section>
