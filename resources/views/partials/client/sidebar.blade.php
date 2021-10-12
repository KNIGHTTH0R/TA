<div class="flex justify-center px-4 col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start">
    <a href="{{ route('auth.dashboard.index') }}" class="p-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Dashboard</a>
    <a href="{{ route('auth.dashboard.history') }}" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-violet-800 text-coolGray-900">History donasi</a>
    <a href="#" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600">Edit profile</a>
    <a href="javascript:void" class="px-2 py-1 border-b-2 md:border-l-2 md:border-b-0 md:py-3 border-coolGray-300 text-coolGray-600" onclick="$('#logout').submit();">Keluar</a>

    <form action="{{ route('auth.logout') }}" method="post" id="logout">
        @csrf
    </form>
</div>
