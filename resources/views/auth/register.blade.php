<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | STT NF BISA</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-coolGray-50 p-14 md:p-10">
    <div class="w-full sm:max-w-xs md:max-w-sm lg:max-w-md p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h1 class="text-3xl font-semibold text-center text-sky-600 dark:text-sky-400 mb-8">Register</h1>
        <form action="{{ route('auth.register') }}" method="post">
            @csrf
            <div>
                <x-auth.label name="Nama" />
                <x-auth.input type="text" name="name" />
                <x-auth.error name="name" />
            </div>

            <div class="mt-3">
                <x-auth.label name="Username" />
                <x-auth.input type="text" name="username" />
                <x-auth.error name="username" />
            </div>

            <div class="mt-3">
                <x-auth.label name="email" />
                <x-auth.input type="email" name="email" />
                <x-auth.error name="email" />
            </div>

            <div class="mt-3">
                <x-auth.label name="Password" />
                <x-auth.input type="password" name="password" />
                <x-auth.error name="password" />
            </div>

            <div class="mt-3">
                <x-auth.label name="Confirm Password" />
                <x-auth.input type="passwotd" name="password_confirmation" />
            </div>

            <div class="mt-6">
                <x-client.button message="Masuk" />
            </div>
        </form>

        <x-client.info-auth question="Sudah punya akun?" route="auth.login" link="Masuk" />

    </div>
</body>

</html>
