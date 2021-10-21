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
                <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">Nama</label>
                <input type="text" name="name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" autocomplete="off" value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">Username</label>
                <input type="text" name="username" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" autocomplete="off" value="{{ old('username') }}">
                @error('username')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">Email</label>
                <input type="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" autocomplete="off" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="password" class="block text-sm text-gray-800 dark:text-gray-200">Password</label>
                <input type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                @error('password')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="password" class="block text-sm text-gray-800 dark:text-gray-200">Confirm Password</label>
                <input type="password" name="password_confirmation" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 ease-out transform bg-sky-600 rounded-md hover:bg-sky-500 focus:outline-none focus:bg-gray-600">
                    Daftar
                </button>
            </div>
        </form>

        <p class="mt-8 text-sm text-center text-coolGray-500"> Sudah punya akun? <a href="{{ route('auth.login') }}" class="font-medium text-sky-600 dark:text-gray-200 hover:underline">Masuk</a></p>
    </div>
</body>

</html>
