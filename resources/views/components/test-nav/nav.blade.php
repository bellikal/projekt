<nav x-data="{ open: true, toggleSidenav() { this.open = !this.open } }"
     class="flex bg-gray-100 w-fit min-h-screen p-2 text-black">
    <ul class="flex flex-col gap-2">
        <x-test-nav.nav-link label="Dashboard" open="open" :subLinks="[]" />
        <x-test-nav.nav-link label="CRM" open="open" :subLinks="[
            ['label' => 'Kunden', 'subLinks' => []],
            ['label' => 'Projekte', 'subLinks' => []]
        ]"/>
        <button @click="toggleSidenav" class="mt-auto p-2 bg-blue-500 text-white rounded">Toggle</button>
    </ul>
</nav>
