<nav x-data="sidenav"
     class="flex bg-slate-50 text-slate-600 w-fit min-h-full">
    <ul class="flex flex-col gap-2 p-2 w-fit font-base">
        <x-sidenav.sidenav-link href="/" icon="fa-table-columns" label="Dashboard" :subLinks="[]" />
        <x-sidenav.sidenav-link href="/" icon="fa-building" label="CRM" :subLinks="[
            ['label' => 'Kunden', 'href' => 'Kunden', 'subLinks' => []],
            ['label' => 'Ansprechpartner', 'href' => 'ansprechpartner', 'subLinks' => []],
            ['label' => 'Projekte', 'href' => 'projects', 'subLinks' => []],
        ]"/>
        <x-sidenav.sidenav-link href="#" icon="fa-box" label="Warenwirtschaft" :subLinks="[
            ['label' => 'Produkte', 'href' => '#', 'subLinks' => []],
            ['label' => 'Bestellungen', 'href' => '#', 'subLinks' => []],
            ['label' => 'Rechnungen', 'href' => '#', 'subLinks' => []],
        ]"/>
        <x-sidenav.sidenav-link href="karte" icon="fa-location-dot" label="Interaktive Karte" :subLinks="[]" />
        <x-sidenav.sidenav-link href="#" icon="fa-chart-line" label="Analytics" :subLinks="[
            ['label' => 'Auswertungen', 'href' => '#', 'subLinks' => []]
        ]"/>
        <x-sidenav.sidenav-link href="#" icon="fa-users" label="Teammanagement" :subLinks="[
            ['label' => 'Teams & Mitarbeiter', 'href' => '#', 'subLinks' => []],
            ['label' => 'Einstellungen', 'href' => '#', 'subLinks' => []],
            ['label' => 'Visitenkarten', 'href' => '#', 'subLinks' => []],
        ]"/>
        <button @click="toggleSidenav" class="ml-auto mt-auto mb-4 mr-2 w-8 h-8 rounded-md text-slate-600 hover:bg-slate-200">
            <i :class="open ? 'fa-chevron-right' : 'fa-chevron-left' "
                class="fa-solid text-xs"></i>
        </button>
    </ul>
</nav>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('sidenav', () => ({
            open: true,

            toggleSidenav() {
                this.open = !this.open
            },
        }))
    })
</script>
