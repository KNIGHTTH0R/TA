 <!-- Tab Contents -->
 <div id="tab-contents" class="mt-5 px-0 sm:px-20 md:px-30 lg:px-0">
     <div id="first">
        <p class="text-coolGray-600">{{ $campaign->stories }}</p>
     </div>
     <div id="second">
        @forelse($transactions as $transaction)
            <div class="flex p-2 md:pl-8 lg:p-3 mb-3">
                <div class="pl-1 pr-5">
                    @if($transaction->anonim)
                        {!! $transaction->user->anonim_img !!}
                    @else
                        <img src="{{ $transaction->user->image }}" class="w-10 h-10 rounded-full">
                    @endif
                </div>
                <div class="flex-1">
                    <h1 class="text-coolGray-700 font-semibold text-md">{{ $transaction->anonim ? 'Hamba Allah' : $transaction->user->name }}</h1>
                    <p class="mb-3 text-coolGray-500 font-medium text-md">Rp. {{ $transaction->amount }}</p>
                    <p class="text-coolGray-600">{{ $transaction->pray ?? '' }}</p>
                </div>
            </div>
         @empty
            <div>
                <span class="block pl-4 text-coolGray-500">Belum ada donatur</span>
            </div>
        @endforelse

         <div class="text-center">
             {{-- <a href="#" class="text-blue-400 hover:text-blue-500 hover:underline">Lebih banyak</a> --}}
         </div>
     </div>
     <div id="third" class="space-y-6">
        @forelse($campaign->distributions as $distribution)
            <div>
                <span class="font-semibold mb-2 text-coolGray-500">{{ $distribution->created_at->format('d M Y') }}</span>
                <p>{{ $distribution->stories }}</p>
            </div>
        @empty
            <div>
                <span class="text-coolGray-500">Belum ada distribusi</span>
            </div>
        @endforelse
     </div>
 </div>
