@extends('layouts.client.app')

@section('title', 'Form Donasi')

@section('content')
<section class="bg-coolGray-100 text-coolGray-800">
    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:space-y-10 px-18 lg:px-20 lg:max-w-7xl">
        <div class="flex justify-center">
            <h3 class="text-md font-semibold tracking-tight text-3xl sm:text-4xl text-sky-700 text-center w:1/5 lg:w-2/4">
                {{ $campaign->title }}
            </h3>
        </div>
        <div class="lg:px-70 xl:px-80">
            <div class="">
                <section class="bg-coolGray-100 text-coolGray-900">
                    <form action="{{ route('donasi.form', $campaign) }}" method="post" class="container flex flex-col">
                        @csrf
                        {{-- <input type="hidden" name="campaign_id" value="{{ $campaign->id }}"> --}}
                        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-coolGray-50">
                            <div class="grid grid-cols-6 gap-4 col-span-full">
                                <div class="col-span-full space-y-3">
                                    <label for="amount" class="text-sm">Jumlah</label>
                                    <input id="amount" type="number" name="amount" class="w-full p-3 rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-600 focus:outline-none border-coolGray-300 text-coolGray-900" autocomplete="off" value="{{ old('amount') }}">
                                    @error('amount')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                                    <div class="flex items-center space-x-1">
                                        <input type="checkbox" name="anonim" id="checkbox" {{ 'checked' ? 'value=true': 'value=false' }}><label for="checkbox" class="text-xs text-coolGray-400">Jadikan Hamba Allah</label>
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="email" class="text-sm">Pembayaran</label>
                                    <div class="mt-3">
                                        <div class="flex flex-row gap-4" id="wrap-pay">
                                            <input type="hidden" name="pay" id="pay-result" value>
                                            <label id="pay-item">
                                                <input type="radio" id="pay" value="gopay">
                                                <img src="/img/gopay.png" alt="" class="w-full h-full object-contain">
                                            </label>
                                            <label id="pay-item">
                                                <input type="radio" id="pay" value="mandiri">
                                                <img src="/img/mandiri.png" alt="" class="w-full h-full object-contain">
                                            </label>
                                            <label id="pay-item">
                                                <input type="radio" id="pay" value="bni">
                                                <img src="/img/bni.png" alt="" class="w-full h-full object-contain">
                                            </label>
                                        </div>
                                        @error('pay')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-full space-y-3">
                                    <label for="bio" class="text-sm">Doa</label>
                                    <textarea id="bio" name="pray" class="w-full p-3 rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-600 focus:outline-none border-coolGray-300 text-coolGray-900">{{ old('pray') }}</textarea>
                                </div>
                                <div class="col-span-full space-y-3">
                                    <button type="submit" class="w-full bg-coolGray-200 hover:bg-blue-500 py-3 px-2 text-coolGray-500 hover:text-blue-100 rounded-sm transition duration-500 ease-out">Donasi</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>

@endsection
@push('css')
<style>
    input[type=radio] {
        display: none;
    }

</style>
@endpush

@push('js')
<script>
    let payRadio = document.querySelectorAll('#pay')
    let payItem = document.querySelectorAll('#pay-item')
    let payResult = document.getElementById('pay-result')

    for (let i = 0; i < payRadio.length; i++) {
        payRadio[i].addEventListener('click', function() {
            payResult.value = this.value

            for (let i = 0; i < payItem.length; i++) {
                if (payItem[i].hasAttribute('style')) {
                    payItem[i].removeAttribute('style')
                }
            }

            if (payRadio[i].checked) {
                payItem[i].style.border = '2px solid #7C83FD'
            }
        })
    }

</script>
@endpush
