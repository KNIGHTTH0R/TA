<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | STT NF BISA</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
    @stack('css')
    @livewireStyles
</head>
<body>

    @include('partials.client.navbar')


    @if (request()->url() == config('app.url'))
        @include('partials.client.header')
        @include('partials.client.campaign')
    @else
        @yield('content')
    @endif


    @include('partials.client.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-odJHmb3AW_fu7BqO"></script>

    @stack('js')
    @livewireScripts
</body>

</html>
