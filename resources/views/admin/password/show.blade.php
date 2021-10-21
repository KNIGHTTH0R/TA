@extends('layouts.client.app')

@section('title', 'Edit Profile')

@section('content')

<section class="py-8 bg-coolGray-100 text-coolGray-800">

    <div class="container mx-auto">
        <div class="p-4 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
            <x-admin.title title="Ubah Password" />
        </div>

        <div class="flex p-4 md:p-8">

            @include('partials.client.sidebar')

            <div class="flex flex-1 pt-5">
                <div class="container px-4 mx-auto space-y-8 lg:max-w-3xl">
                    <div class="max-w-xl mx-auto">

                        @include('partials.admin.alert')

                        <div class="bg-coolGray-100 text-coolGray-900">
                            <x-form method="post" action="auth.password.update">
                                @csrf
                                @method('put')

                                <fieldset class="p-6 rounded-md shadow-sm bg-coolGray-50">
                                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                                        <div class="col-span-full sm:col-span-3">
                                            <x-auth.label name="Password"/>
                                            <x-auth.input type="password" name="password" />
                                            <x-auth.error name="password" />
                                        </div>
                                        <div class="col-span-full sm:col-span-3">
                                            <x-auth.label name="New password"/>
                                            <x-auth.input type="password" name="new_password" />
                                            <x-auth.error name="new_password" />
                                        </div>
                                        <div class="col-span-full sm:col-span-3">
                                            <x-auth.label name="Confirm new password"/>
                                            <x-auth.input type="password" name="new_password_confirmation" />
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mt-3">
                                   <x-admin.button message="Update" />
                                </div>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
