@extends('layouts.client.app')

@section('title', 'Histiry Donasi')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">
    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <h2 class="text-2xl font-bold leading-none sm:text-4xl">History Donasi</h2>
        </div>
        <div class="flex p-4 md:p-8">
            <div class="flex justify-center px-4 col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start">
                <a href="#" class="p-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Dashboard</a>
                <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-violet-800 text-coolGray-900">Histori donasi
                </a>
                <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Edit
                    profile</a>
                <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Keluar</a>
            </div>
            <div class="flex flex-1 pt-5">
                <div class="container px-4 mx-auto space-y-8 lg:max-w-3xl">
                    <div class="space-y-8">
                        <div class="max-w-xl mx-auto">
                            <ul class="space-y-8">
                                <li class="flex items-start space-x-3">
                                    <div class="flex-1 space-y-2">
                                        <div class="flex items-center justify-between space-x-4 text-coolGray-600">
                                            <a href="#" class="relative inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm rounded-full bg-yellow-500 text-yellow-100">
                                                <span class="uppercase">pending</span>
                                            </a>
                                            <span class="text-xs whitespace-nowrap">10 Okt 2021</span>
                                        </div>
                                        <div class="space-y-2 text-coolGray-600">
                                            <p class="text-md font-bold">Berdonasi sebanyak Rp. 100.000</p>
                                            <p class="">Scelerisque amet elit non sit ut tincidunt condimentum Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-1 space-y-2">
                                        <div class="flex items-center justify-between space-x-4 text-coolGray-600">
                                            <a href="#" class="relative inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm rounded-full bg-green-500 text-green-100">
                                                <span class="uppercase">success</span>
                                            </a>
                                            <span class="text-xs whitespace-nowrap">10 Okt 2022</span>
                                        </div>
                                        <div class="space-y-2 text-coolGray-600">
                                            <p class="text-md font-bold">Berdonasi sebanyak Rp. 50.000</p>
                                            <p class="">Scelerisque amet elit non sit ut tincidunt condimentum Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-1 space-y-2">
                                        <div class="flex items-center justify-between space-x-4 text-coolGray-600">
                                            <a href="#" class="relative inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm rounded-full bg-red-500 text-red-100">
                                                <span class="uppercase">expired</span>
                                            </a>
                                            <span class="text-xs whitespace-nowrap">10 Okt 2021</span>
                                        </div>
                                        <div class="space-y-2 text-coolGray-600">
                                            <p class="text-md font-bold">Berdonasi sebanyak Rp. 100.000</p>
                                            <p class="">Scelerisque amet elit non sit ut tincidunt condimentum Lorem ipsum dolor sit</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div>
                            <a href="#" class="text-blue-400 hover:text-blue-500 hover:underline">Lebih banyak</a>
                        </div> -->
                </div>
            </div>
        </div>
</section>

@endsection
