@extends('layouts.client.app')

@section('title', 'History Donasi')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">
    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <h2 class="text-2xl font-bold leading-none sm:text-4xl">History Donasi</h2>
        </div>
        <div class="flex p-4 md:p-8">

            @include('partials.client.sidebar')

            <div class="flex flex-1 pt-5">
                <div class="container px-4 mx-auto space-y-8 lg:max-w-3xl">
                    <div class="max-w-xl mx-auto">
                        <ul class="space-y-8">
                            @forelse($histories as $history)
                            @php
                            $bg = '';
                            $text = '';
                            if ($history->status == 'pending') {
                            $bg = 'bg-yellow-500';
                            $text = 'text-yellow-100';
                            } else if ($history->status == 'failed') {
                            $bg = 'bg-red-500';
                            $text = 'text-red-100';
                            } else if ($history->status == 'success') {
                            $bg = 'bg-green-500';
                            $text = 'text-green-100';
                            }
                            @endphp
                            <li class="flex items-start space-x-3">
                                <div class="flex-1 space-y-2">
                                    <div class="flex items-center justify-between space-x-4 text-coolGray-600">
                                        <div class="relative inline-flex items-center px-3 py-1 my-2 space-x-2 text-xs rounded-full {{ $bg }} {{ $text }}">
                                            <span class="uppercase">{{ $history->status }}</span>
                                        </div>
                                        <span class="text-xs whitespace-nowrap">{{ $history->created_at->format('d M Y') }}</span>
                                    </div>
                                    <div class="space-y-2 text-coolGray-600">
                                        <p class="text-md font-bold">Berdonasi sebanyak Rp. {{ $history->amount }}</p>
                                        <p class="">{{ $history->campaign->title }}</p>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <span class="text-coolGray-400 text-md">Belum ada donasi</span>
                            @endforelse
                        </ul>
                    </div>
                    <div class="flex justify-center">
                        <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline bg-coolGray-50 text-coolGray-600">Lebih banyak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
