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

    @stack('js')
</body>

</html>
