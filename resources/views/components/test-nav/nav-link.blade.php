@props(['label', 'open', 'subLinks' => []])

<li x-data="{ hover: false, flyoutOpen: false }"
    @mouseenter="hover = true"
    @mouseleave="hover = false"
    class="relative p-2 rounded-md bg-gray-200 cursor-pointer">

    <a @click="flyoutOpen = !flyoutOpen" class="flex justify-between items-center">
        <span x-show="open">{{ $label }}</span>
        @if (!empty($subLinks))
            <span x-show="open || hover" class="text-sm">▶</span>
        @endif
    </a>

    @if (!empty($subLinks))
        <x-test-nav.nav-flyout :subLinks="$subLinks" open="$open" hover="hover" flyoutOpen="flyoutOpen"/>
    @endif
</li>
