<section class="bg-coolGray-100 text-coolGray-800">
    <div class="flex flex-col-reverse px-4 lg:py-4 lg:px-20 lg:flex-row">
        <!-- tabs component -->
        <div class="mt-4 rounded lg:w-3/5">
            @include('partials.client.tabs-item')

            @include('partials.client.tabs-content')
        </div>
        <!-- end tabs component -->

        <!-- Top Donatur-->
        <div class="p-0 sm:px-24 md:px-40 lg:px-0 pt-8 lg:pl-24 w-full lg:w-2/5 space-y-5 pb-10">
            <div class="text-blue-500 text-3xl lg:text-2xl font-semibold text-center lg:text-left mb-10 lg:mb-5">
                Top Donatur
            </div>
            @forelse($top_donaturs as $key => $donatur)
            @php
                $bg = '';
                if ($key == 0) {
                    $bg = 'bg-blue-500';
                } else if ($key == 1) {
                    $bg = 'bg-yellow-500';
                } else {
                    $bg = 'bg-green-500';
                }
            @endphp
            <div>
                <div class="flex overflow-hidden rounded-lg bg-coolGray-50 text-coolGray-800">
                    <div class="flex items-center justify-center px-4 {{ $bg }} text-coolGray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <polygon points="328.375 384 332.073 458.999 256.211 406.28 179.924 459.049 183.625 384 151.586 384 146.064 496 182.756 496 256.169 445.22 329.242 496 365.936 496 360.414 384 328.375 384">
                            </polygon>
                            <path d="M415.409,154.914l-2.194-48.054L372.7,80.933,346.768,40.414l-48.055-2.2L256,16.093,213.287,38.219l-48.055,2.2L139.3,80.933,98.785,106.86l-2.194,48.054L74.464,197.628l22.127,42.715,2.2,48.053L139.3,314.323l25.928,40.52,48.055,2.195L256,379.164l42.713-22.126,48.055-2.195,25.928-40.52L413.214,288.4l2.195-48.053,22.127-42.715Zm-31.646,76.949L382,270.377l-32.475,20.78-20.78,32.475-38.515,1.76L256,343.125l-34.234-17.733-38.515-1.76-20.78-32.475L130,270.377l-1.759-38.514L110.5,197.628,128.237,163.4,130,124.88,162.471,104.1l20.78-32.474,38.515-1.76L256,52.132l34.234,17.733,38.515,1.76,20.78,32.474L382,124.88l1.759,38.515L401.5,197.628Z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-3">
                        <p class="text-md font-semibold">{{ $donatur->anonim ? 'Hamba Allah' : $donatur->user->name }}</p>
                        <p class="text-md text-coolGray-500 font-medium">Rp. {{ $donatur->amount }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div>
                <span class="text-coolGray-500">Jadilah yang pertama berdonasi di campaign ini</span>
            </div>
            @endforelse
        </div>
        <!-- end top donatur -->
    </div>
</section>
