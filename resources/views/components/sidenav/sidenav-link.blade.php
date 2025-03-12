@props(['href' => '', 'icon' => '', 'open', 'label', 'subLinks' ])

<li x-data="sidenavLink"
        @mouseenter="hover = true"
        @mouseleave="hover = false"
        class="hover:bg-slate-200 rounded-md h-10 w-full relative">

    <a @if(count($subLinks) > 0)
           @click.prevent="flyoutOpen = ! flyoutOpen"
       @endif
        href="{{ $href }}"
       :class="open ? ' gap-2' : ''"
       class="px-3 py-2 w-full h-full flex items-center">

        <div x-show="'{{ $icon }}'"
             class="w-6 flex justify-center">
            <i class="fa-solid {{ $icon }}"></i>
        </div>

        <span x-show="open || inFlyout"
              class="align-center whitespace-nowrap">
                {{ $label }}
        </span>

        @if ($subLinks)
            <div :class="open ? 'w-6' : ''" class="ml-auto flex justify-end">
                <i x-show="open && hover"
                    class="fa-solid fa-chevron-right"></i>
            </div>
        @endif
    </a>

    <template x-if="{{ count($subLinks) > 0 }}">
            <x-sidenav.sidenav-flyout :label="$label" :subLinks="$subLinks" />
    </template>
</li>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('sidenavLink', () => ({
            hover: false,
            flyoutOpen: false,
            subLinks: @json(count($subLinks) > 0)
        }))
    })
</script>


