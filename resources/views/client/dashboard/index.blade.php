@extends('layouts.client.app')

@section('title', 'Dashboard')

@section('content')
<section class="py-8 bg-coolGray-100 text-coolGray-800">
    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <h2 class="text-2xl font-bold leading-none sm:text-4xl">Dashboard</h2>
        </div>
        <div class="flex p-4 md:p-8">
            <div class="flex justify-center px-4 col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start">
                <a href="#" class="p-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Dashboard</a>
                <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-violet-800 text-coolGray-900">History donasi</a>
                <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Edit profile</a>
                <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Keluar</a>
            </div>
            <div class="flex flex-1 px-32 pt-5">
                <!-- <section class="p-6 bg-coolGray-100 text-coolGray-800"> -->
                <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3">
                    <div class="flex flex-col justify-start m-2 lg:m-6 text-green-500">
                        <p class="text-4xl font-bold leading-none lg:text-5xl">5</p>
                        <p class="text-sm sm:text-base">Donasi Success</p>
                    </div>
                    <div class="flex flex-col justify-start m-2 lg:m-6 text-yellow-500">
                        <p class="text-4xl font-bold leading-none lg:text-5xl">2</p>
                        <p class="text-sm sm:text-base">Donasi Pending</p>
                    </div>
                    <div class="flex flex-col justify-start m-2 lg:m-6 text-red-500">
                        <p class="text-4xl font-bold leading-none lg:text-5xl">1</p>
                        <p class="text-sm sm:text-base">Donasi Expired</p>
                    </div>
                </div>
                <!-- </section> -->
            </div>

        </div>
</section>
@endsection
