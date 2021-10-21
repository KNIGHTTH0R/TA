 <article class="flex flex-col bg-coolGray-50">
     <a href="#" aria-label="Te nulla oportere reprimique his dolorum">
         <img alt="" class="object-cover w-full h-52 bg-coolGray-500" src="{{ $campaign->image }}">
     </a>
     <div class="flex flex-col flex-1 p-6">
         <a href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
         <a href="#" class="text-xs tracking-wider uppercase hover:underline text-sky-600">{{ $campaign->category->title }}</a>
         <a href="{{ route('donasi.show', $campaign) }}">
             <h3 class="flex-1 py-2 text-xl font-semibold leading-snug">{{ Str::limit($campaign->title, 22) }}</h3>
         </a>
         <p class="mb-2 text-gray-700">
             {{ Str::limit($campaign->stories, 100) }}
         </p>
         <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs">
             <div>
                 <span class="block font-semibold">Target</span>
                 <span class="text-coolGray-200">Rp. {{ $campaign->target }}</span>
             </div>
             <div>
                 <span class="block font-semibold">Sisa</span>
                 <span>{{ $campaign->format_date_end }} hari</span>
             </div>
         </div>
     </div>
 </article>
