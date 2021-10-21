<div>
    <div class="max-w-xl mx-auto">
        <input type="search" wire:model='search' placeholder="Cari donasi saya" class="py-2 px-3 rounded text-sm mb-5 focus:outline-none focus:ring" style="width:50%">
    </div>

    @forelse($transaction_pending as $transaction)
        <div class="max-w-xl mx-auto mb-3">
            <form action="#" method="post">
                @csrf
                <div class="flex bg-white rounded-md shadow p-2 max-w-md">
                    <img alt="" class="object-cover w-32 h-32 bg-coolGray-500 mr-5 rounded" src="https://source.unsplash.com/128x128/?work">
                    <div class="flex flex-col w-full p-2">
                        <span class="text-md font-semibold text-sky-700">{{ $transaction->campaign->title }}</span>
                        <span class="text-sm font-semibold mt-2">Rp. {{ $transaction->amount }}</span>
                        <input type="hidden" name="snap_token" value="{{ $transaction->snap_token }}" id="snap_token">
                        <button type="button" class="text-sm text-yellow-100 bg-yellow-500 mt-3 px-2 py-1 rounded" id="btn-pay" style="width:70%">Selesaikan pembayaran</button>
                    </div>
                </div>
            </form>
        </div>
    @empty
        <div class="max-w-xl mx-auto">
            <h5 class="text-coolGray-500 text-sm">Donasi tidak ditemukan</h5>
        </div>
    @endforelse

    @if (count($transaction_pending) > 3)
        <div class="max-w-xl mx-auto">
            <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline bg-coolGray-50 text-coolGray-600">Lebih banyak</button>
        </div>
    @endif
</div>

@push('js')
<script>
    let snap_token = $("#snap_token").val()

    $("#btn-pay").click(function() {
        snap.pay(snap_token, {
            // Optional
            onSuccess: function(result) {
                window.location.href = '/donasi/finish'
            },
            // Optional
            onPending: function(result) {
                window.location.href = '/donasi/finish'
            },
            // Optional
            onError: function(result) {
                window.location.href = '/donasi/finish'
            }
        });
    })

</script>
@endpush
