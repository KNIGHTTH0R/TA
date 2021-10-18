<div class="flex justify-center px-4 col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start border-coolGray-300">
    <a href="{{ route('auth.dashboard.index') }}" class="p-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3 text-coolGray-600 @if(request()->route()->getName() == 'auth.dashboard.index') border-violet-800 @endif">Dashboard</a>
    <a href="{{ route('auth.dashboard.my-donate') }}" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 @if(request()->route()->getName() == 'auth.dashboard.my-donate') border-violet-800 @endif text-coolGray-900">Donasi saya</a>
    <a href="{{ route('auth.dashboard.history') }}" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 @if(request()->route()->getName() == 'auth.dashboard.history') border-violet-800 @endif text-coolGray-900">History donasi</a>
    <a href="{{ route('auth.profile.show') }}" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 @if(request()->route()->getName() == 'auth.profile.show') border-violet-800 @endif text-coolGray-600">Edit profile</a>
    <a href="javascript:void" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 text-coolGray-600" onclick="$('#logout').submit();">Keluar</a>

    <form action="{{ route('auth.logout') }}" method="post" id="logout">
        @csrf
    </form>
</div>
