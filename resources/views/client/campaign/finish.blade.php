@extends('layouts.client.app')

@section('title', 'Thank you')

@section('content')
<section class="flex items-center h-full text-coolGray-800">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
        <div class="max-w-md text-center">
            <img src="/img/finish.png" alt="" class="w-96 h-96">
            <p class="text-2xl font-semibold md:text-3xl mb-2">Terima Kasih</p>
            <p class="mb-8 text-coolGray-600">Donasi kamu akan segera kami proses</p>
            <a href="#" class="px-5 py-3 font-semibold rounded bg-blue-500 text-coolGray-50 hover:bg-blue-600 hover:text-coolGray-100 transition duration-300">Kembali ke halaman utama</a>
        </div>
    </div>
</section>
@endsection
