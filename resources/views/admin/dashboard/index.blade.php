@extends('layouts.client.app')

@section('title', 'Dashboard')

@section('content')
<section class="py-8 bg-coolGray-100 text-coolGray-800">
    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <x-admin.title title="Dashboard"/>
        </div>
        <div class="flex p-4 md:p-8">

            @include('partials.client.sidebar')

            <div class="flex flex-1 px-32 pt-5">
                <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3">
                   <x-admin.dashboard title="Donasi Success" type="green" total="{{ count($transaction_success) ?? 0 }}"/>
                   <x-admin.dashboard title="Donasi Pending" type="yellow" total="{{ count($transaction_pending) ?? 0 }}"/>
                   <x-admin.dashboard title="Donasi Expired" type="red" total="{{ count($transaction_expired) ?? 0 }}"/>
                </div>
            </div>

        </div>
</section>
@endsection
