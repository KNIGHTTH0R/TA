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
            <span class="text-2xl lg:text-3xl font-semibold text-sky-700">{{ $campaign->title }}</span>
            <div class="mt-6 mb-6 flex flex-row items-center justify-between">
                <div class="mr-1">
                    <p class="text-lg font-semibold text-coolGray-500">Terkumpul</p>
                    <p class="text-2xl lg:text-3xl font-bold text-sky-600">Rp. 5.000.000</p>
                </div>
                <div class="text-coolGray-500">
                    <p class="text-lg font-semibold">Dibutuhkan</p>
                    <p class="text-xl lg:text-2xl font-bold">Rp. {{ str_replace(',','.', number_format($campaign->target)) }}</p>
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
            <a href="{{ route('donasi.form', $campaign) }}" class="text-center px-8 py-3 mt-6 text-lg font-semibold rounded sm:mt-12 bg-sky-200 text-sky-600 transition ease-in-out duration-500 hover:text-sky-100 hover:bg-sky-600">Donasi
            Sekarang</a>
        </div>
    </div>
</section>
<!-- end detail donasi -->

    @include('partials.client.tabs-component')

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
