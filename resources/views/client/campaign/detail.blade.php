@extends('layouts.client.app')

@section('title', 'Detail Donasi')

@section('content')
<!-- detail donasi -->
<section class="p-2 bg-coolGray-50 text-coolGray-800">
    <div class="container mx-auto flex flex-col items-center justify-center max-w-lg py-5 md:px-10 lg:max-w-full lg:flex-row">
        <div class="flex flex-col items-center justify-center flex-1 p-4 pb-8 sm:p-10">
            <img src="https://images.unsplash.com/photo-1504159506876-f8338247a14a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y2hhcml0eXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="object-cover w-full h-90 rounded" alt="" />
        </div>
        <div class="mt-5 flex flex-col flex-1 justify-center p-4 pb-8 rounded-md">
            <span class="text-2xl lg:text-3xl font-semibold text-sky-700">Bantu biaya rumah sakit Yuanita Fitriani,
                biar bisa
                kuliah lagi</span>
            <div class="mt-6 mb-6 flex flex-row items-center justify-between">
                <div class="mr-1">
                    <p class="text-lg font-semibold text-coolGray-500">Terkumpul</p>
                    <p class="text-2xl lg:text-3xl font-bold text-sky-600">Rp. 5.000.000</p>
                </div>
                <div class="text-coolGray-500">
                    <p class="text-lg font-semibold">Dibutuhkan</p>
                    <p class="text-xl lg:text-2xl font-bold">Rp. 10.000.000</p>
                </div>
            </div>
            <div class="progress mt-3 mb-5 w-full">
                <div class="bg-sky-200 h-2 rounded-md"></div>
                <div class="bg-sky-600 w-1/5 h-2 rounded-md -mt-2"></div>
            </div>
            <div class="flex flex-row justify-between font-semibold text-lg text-coolGray-500">
                <span>Terbuka</span>
                <span>10 hari lagi</span>
            </div>
            <button class="px-8 py-3 mt-6 text-lg font-semibold rounded sm:mt-12 bg-sky-200 text-sky-600 transition ease-in-out duration-500 hover:text-sky-100 hover:bg-sky-600">Donasi
                Sekarang</button>
        </div>
    </div>
</section>
<!-- end detail donasi -->

<section class="bg-coolGray-100 text-coolGray-800">
    <div class="flex flex-col-reverse px-4 lg:py-4 lg:px-20 lg:flex-row">
        <!-- tabs component -->
        <div class="mt-4 rounded lg:w-3/5">
            <!-- Tabs -->
            <ul id="tabs" class="flex justify-around w-full pt-2 text-center lg:space-x-40 lg:flex-row lg:justify-between">
                <li class="px-4 py-2 -mb-px font-semibold text-gray-800 rounded-t opacity-50">
                    <a id="default-tab" href="#first" class="text-lg lg:text-md">Cerita</a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                    <a href="#second" class="text-lg lg:text-md">Donasi</a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                    <a href="#third" class="text-lg lg:text-md">Penyaluran</a>
                </li>
            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents" class="mt-5 px-0 sm:px-20 md:px-30 lg:px-0">
                <div id="first">
                    Cerita Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusamus animi ipsa
                    possimus corrupti autem officiis mollitia neque veniam harum molestias excepturi deleniti
                    consequuntur ex, fugit architecto quibusdam quod voluptatem.
                </div>
                <div id="second">
                    <div class="flex p-2 md:pl-8 lg:p-3 mb-3">
                        <div class="flex-1 pl-1 pr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="">
                            <h1 class="text-coolGray-700 font-semibold text-lg">Dian</h1>
                            <p class="mb-3 text-coolGray-500 font-medium text-sm">Rp. 300.000</p>
                            <p class="text-coolGray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit cum
                                ea laudantium? Eum, repellat.</p>
                        </div>
                    </div>
                    <div class="flex p-2 md:pl-8 lg:p-3 mb-3">
                        <div class="flex-1 pl-1 pr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="">
                            <h1 class="text-coolGray-700 font-semibold text-lg">Zulkifli</h1>
                            <p class="mb-3 text-coolGray-500 font-medium text-sm">Rp. 500.000</p>
                            <p class="text-coolGray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit cum
                                ea laudantium? Eum, repellat.</p>
                        </div>
                    </div>
                    <div class="flex p-2 md:pl-8 lg:p-3 mb-3">
                        <div class="flex-1 pl-1 pr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="">
                            <h1 class="text-coolGray-700 font-semibold text-lg">Budi</h1>
                            <p class="mb-3 text-coolGray-500 font-medium text-sm">Rp. 400.000</p>
                            <p class="text-coolGray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit cum
                                ea laudantium? Eum, repellat.</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="text-blue-400 hover:text-blue-500 hover:underline">Lebih banyak</a>
                    </div>
                </div>
                <div id="third">
                    Distribusi Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusamus
                    animi
                    ipsa possimus corrupti autem officiis mollitia neque veniam harum molestias excepturi
                    deleniti
                    consequuntur ex, fugit architecto quibusdam quod voluptatem.
                </div>
            </div>
        </div>
        <!-- end tabs component -->

        <!-- Top Donatur-->
        <div class="p-0 sm:px-24 md:px-40 lg:px-0 pt-8 lg:pl-24 w-full lg:w-2/5 space-y-5 pb-10">
            <div class="text-blue-500 text-3xl lg:text-2xl font-semibold text-center lg:text-left mb-10 lg:mb-5">Top
                Donatur</div>
            <div>
                <div class="flex overflow-hidden rounded-lg bg-coolGray-50 text-coolGray-800">
                    <div class="flex items-center justify-center px-4 bg-blue-400 text-coolGray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <polygon points="328.375 384 332.073 458.999 256.211 406.28 179.924 459.049 183.625 384 151.586 384 146.064 496 182.756 496 256.169 445.22 329.242 496 365.936 496 360.414 384 328.375 384">
                            </polygon>
                            <path d="M415.409,154.914l-2.194-48.054L372.7,80.933,346.768,40.414l-48.055-2.2L256,16.093,213.287,38.219l-48.055,2.2L139.3,80.933,98.785,106.86l-2.194,48.054L74.464,197.628l22.127,42.715,2.2,48.053L139.3,314.323l25.928,40.52,48.055,2.195L256,379.164l42.713-22.126,48.055-2.195,25.928-40.52L413.214,288.4l2.195-48.053,22.127-42.715Zm-31.646,76.949L382,270.377l-32.475,20.78-20.78,32.475-38.515,1.76L256,343.125l-34.234-17.733-38.515-1.76-20.78-32.475L130,270.377l-1.759-38.514L110.5,197.628,128.237,163.4,130,124.88,162.471,104.1l20.78-32.474,38.515-1.76L256,52.132l34.234,17.733,38.515,1.76,20.78,32.474L382,124.88l1.759,38.515L401.5,197.628Z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-3">
                        <p class="text-xl font-semibold">Zulkifli</p>
                        <p class="text-lg text-coolGray-500 font-medium">Rp. 500.000</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex overflow-hidden rounded-lg bg-coolGray-50 text-coolGray-800">
                    <div class="flex items-center justify-center px-4 bg-yellow-400 text-coolGray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <polygon points="328.375 384 332.073 458.999 256.211 406.28 179.924 459.049 183.625 384 151.586 384 146.064 496 182.756 496 256.169 445.22 329.242 496 365.936 496 360.414 384 328.375 384">
                            </polygon>
                            <path d="M415.409,154.914l-2.194-48.054L372.7,80.933,346.768,40.414l-48.055-2.2L256,16.093,213.287,38.219l-48.055,2.2L139.3,80.933,98.785,106.86l-2.194,48.054L74.464,197.628l22.127,42.715,2.2,48.053L139.3,314.323l25.928,40.52,48.055,2.195L256,379.164l42.713-22.126,48.055-2.195,25.928-40.52L413.214,288.4l2.195-48.053,22.127-42.715Zm-31.646,76.949L382,270.377l-32.475,20.78-20.78,32.475-38.515,1.76L256,343.125l-34.234-17.733-38.515-1.76-20.78-32.475L130,270.377l-1.759-38.514L110.5,197.628,128.237,163.4,130,124.88,162.471,104.1l20.78-32.474,38.515-1.76L256,52.132l34.234,17.733,38.515,1.76,20.78,32.474L382,124.88l1.759,38.515L401.5,197.628Z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-3">
                        <p class="text-xl font-semibold">Budi</p>
                        <p class="text-lg text-coolGray-500 font-medium">Rp. 400.000</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex overflow-hidden rounded-lg bg-coolGray-50 text-coolGray-800">
                    <div class="flex items-center justify-center px-4 bg-green-400 text-coolGray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <polygon points="328.375 384 332.073 458.999 256.211 406.28 179.924 459.049 183.625 384 151.586 384 146.064 496 182.756 496 256.169 445.22 329.242 496 365.936 496 360.414 384 328.375 384">
                            </polygon>
                            <path d="M415.409,154.914l-2.194-48.054L372.7,80.933,346.768,40.414l-48.055-2.2L256,16.093,213.287,38.219l-48.055,2.2L139.3,80.933,98.785,106.86l-2.194,48.054L74.464,197.628l22.127,42.715,2.2,48.053L139.3,314.323l25.928,40.52,48.055,2.195L256,379.164l42.713-22.126,48.055-2.195,25.928-40.52L413.214,288.4l2.195-48.053,22.127-42.715Zm-31.646,76.949L382,270.377l-32.475,20.78-20.78,32.475-38.515,1.76L256,343.125l-34.234-17.733-38.515-1.76-20.78-32.475L130,270.377l-1.759-38.514L110.5,197.628,128.237,163.4,130,124.88,162.471,104.1l20.78-32.474,38.515-1.76L256,52.132l34.234,17.733,38.515,1.76,20.78,32.474L382,124.88l1.759,38.515L401.5,197.628Z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-3">
                        <p class="text-xl font-semibold">Dian</p>
                        <p class="text-lg text-coolGray-500 font-medium">Rp. 300.000</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top donatur -->
    </div>
</section>
@endsection

@push('js')
     <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);

        tabTogglers.forEach(function (toggler) {
            toggler.addEventListener("click", function (e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-blue-200", "border-b-4", "-mb-px", "opacity-100"); tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-blue-200", "border-b-4", "-mb-px", "opacity-100");
            });
        });

        document.getElementById("default-tab").click();

    </script>
@endpush
