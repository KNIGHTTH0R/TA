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
                    <x-client.campaign :campaign="$campaign"/>
                @endforeach
            </div>
        </div>
    </section>
</section>
