@extends('layouts.client.app')

@section('title', 'Edit Profile')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">

    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <x-admin.title title="Edit Profile" />
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
                                            <x-auth.label name="Nama"/>
                                            <x-auth.input type="text" name="name" data="{{ auth()->user()->name }}"/>
                                            <x-auth.error name="name" />
                                        </div>
                                        <div class="col-span-full sm:col-span-3">
                                           <x-auth.label name="Username"/>
                                            <x-auth.input type="text" name="username" data="{{ auth()->user()->username }}"/>
                                            <x-auth.error name="username" />
                                        </div>
                                        <div class="col-span-full sm:col-span-3">
                                            <x-auth.label name="Email"/>
                                            <x-auth.input type="email" name="email" data="{{ auth()->user()->email }}"/>
                                            <x-auth.error name="email" />
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mt-3">
                                   <x-admin.button message="Update" />
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
