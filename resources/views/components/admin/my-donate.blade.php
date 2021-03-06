 <div class="max-w-xl mx-auto mb-3">
     <form action="#" method="post">
         @csrf
         <div class="flex bg-white rounded-md shadow p-2 max-w-md">
             <img alt="" class="object-cover w-32 h-32 bg-coolGray-500 mr-5 rounded" src="https://source.unsplash.com/128x128/?work">
             <div class="flex flex-col w-full p-2">
                <span class="text-sm tracking-wider text-sky-600 mb-1">{{ $transaction->campaign->category->title }}</span>
                 <span class="text-md font-semibold text-sky-700">{{ $transaction->campaign->title }}</span>
                 <span class="text-sm font-semibold mt-2">Rp. {{ $transaction->amount }}</span>
                 <input type="hidden" name="snap_token" value="{{ $transaction->snap_token }}" id="snap_token">
                 <button type="button" class="text-sm text-yellow-100 bg-yellow-500 mt-3 px-2 py-1 rounded" id="btn-pay" style="width:70%">Selesaikan pembayaran</button>
             </div>
         </div>
     </form>
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
