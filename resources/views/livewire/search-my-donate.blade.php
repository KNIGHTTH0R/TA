<div>

   <x-admin.search />

    @forelse($transaction_pending as $transaction)
       <x-admin.my-donate :transaction="$transaction"/>
    @empty
        <x-admin.not-found message="Donasi tidak ditemukan" />
    @endforelse

    @if (count($transaction_pending) > 3)
       <x-admin.load-more />
    @endif

</div>
