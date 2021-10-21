@if (session('failure'))
    <span class="block mb-3 text-red-500 text-sm">{{ session('failure') }}</span>
@elseif(session('success'))
    <span class="block mb-3 text-blue-500 text-sm">{{ session('success') }}</span>
@endif
