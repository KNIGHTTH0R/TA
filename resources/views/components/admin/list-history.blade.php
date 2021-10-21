 <li class="flex items-start space-x-3">
     <div class="flex-1 space-y-2">
         <div class="flex items-center justify-between space-x-4 text-coolGray-600">
             <div class="relative inline-flex items-center px-3 py-1 my-2 space-x-2 text-xs rounded-full {{ $bg }} {{ $text }}">
                 <span class="uppercase">{{ $history->status }}</span>
             </div>
             <span class="text-xs whitespace-nowrap">{{ $history->created_at->format('d M Y') }}</span>
         </div>
         <div class="space-y-2 text-coolGray-600">
             <p class="text-md font-bold">Berdonasi sebanyak Rp. {{ $history->amount }}</p>
             <p class="">{{ $history->campaign->title }}</p>
         </div>
     </div>
 </li>
