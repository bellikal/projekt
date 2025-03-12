<header class="fixed top-0 left-0 w-full z-50 text-slate-800 px-6 py-2 flex justify-between gap-4 bg-slate-50">
    <div class="logo flex items-center justify-center">
        <a href="/">
            <img src="/assets/logo.jpg" alt="Logo" class="h-4 w-auto">
        </a>
    </div>

    <div class="flex flex-row ml-auto gap-2 px-4 border border-x border-y-0 border-slate-200">
        <x-header.header-buttons href="#" icon="fa-solid fa-gear" />
        <x-header.header-buttons href="#" icon="fa-solid fa-bell" />
        <x-header.header-buttons href="#" icon="fa-solid fa-question" />
    </div>

    <div x-data="{open: false}"
        @click="open = !open"
        class="relative flex justify-center items-center gap-2 py-1 pl-2 pr-3 rounded-md cursor-pointer hover:bg-slate-200">

        <div class="w-6 h-6 rounded-full overflow-hidden">
            <img src="/assets/user.jpg"
                 alt="User Avatar">
        </div>

        <p>Username</p>

        <div>
            <i class="fa-solid fa-chevron-down text-sm"></i>
        </div>

        <div x-show="open"
             @click.away="open = !open"
             class="bg-slate-50 w-32 p-2 flex flex-col gap-1 absolute top-12 shadow-md rounded-md">
            <a href="#" class="py-2 px-4 rounded-md hover:bg-slate-200">Profil</a>
            <a href="#" class="py-2 px-4 rounded-md hover:bg-slate-200">Logout</a>
        </div>
    </div>
</header>
