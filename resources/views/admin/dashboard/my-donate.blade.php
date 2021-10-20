@extends('layouts.client.app')

@section('title', 'My Donate')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">

    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <h2 class="text-2xl font-bold leading-none sm:text-4xl">Donasi Saya</h2>
        </div>

        <div class="flex p-4 md:p-8">

            @include('partials.client.sidebar')

            <div class="flex flex-1 pt-5">
                <div class="container px-4 mx-auto space-y-5">
                    @livewire('search-my-donate')
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
