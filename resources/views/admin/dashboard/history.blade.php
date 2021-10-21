@extends('layouts.client.app')

@section('title', 'History Donasi')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">
    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <x-admin.title title="Riwayat Donasi" />
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
                                <x-admin.list-history :history="$history" :bg="$bg" :text="$text"/>
                            @empty
                                <x-admin.not-found message="Belum ada donasi" />
                            @endforelse
                        </ul>
                    </div>
                    @if(count($histories) > 3)
                        <x-admin.load-more />
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
