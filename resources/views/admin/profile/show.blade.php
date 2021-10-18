@extends('layouts.client.app')

@section('title', 'Edit Profile')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">

    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <h2 class="text-2xl font-bold leading-none sm:text-4xl">Edit Profile</h2>
        </div>

        <div class="flex p-4 md:p-8">

            @include('partials.client.sidebar')

            <div class="flex flex-1 pt-5">
                <div class="container px-4 mx-auto space-y-8 lg:max-w-3xl">
                    <div class="max-w-xl mx-auto">
                        <div class="bg-coolGray-100 text-coolGray-900">
                            <form method="post" action="{{ route('auth.profile.update') }}" class="container flex flex-col mx-auto space-y-10">
                                @csrf
                                @method('put')

                                <fieldset class="p-6 rounded-md shadow-sm bg-coolGray-50">
                                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                                        <div class="col-span-full sm:col-span-3">
                                            <label for="name" class="text-sm">Nama</label>
                                            <input id="name" type="text" name="name" class="p-2 mt-2 w-full rounded-md focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-violet-600 border-coolGray-300 text-coolGray-900" value="{{ old('name', auth()->user()->name) }}" autocomplete="off">
                                            @error('name')
                                            <span class="text-red-400 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-full sm:col-span-3">
                                            <label for="username" class="text-sm">Username</label>
                                            <input id="username" type="text" name="username" class="p-2 mt-2 w-full rounded-md focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-violet-600 border-coolGray-300 text-coolGray-900" value="{{ old('username', auth()->user()->username) }}" autocomplete="off">
                                            @error('username')
                                            <span class="text-red-400 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-full sm:col-span-3">
                                            <label for="email" class="text-sm">Email</label>
                                            <input id="email" type="email" name="email" class="p-2 mt-2 w-full rounded-md focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-violet-600 border-coolGray-300 text-coolGray-900" value="{{ old('email', auth()->user()->email) }}" autocomplete="off">
                                            @error('email')
                                            <span class="text-red-400 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mt-3">
                                    <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 ease-out transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-gray-600">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
