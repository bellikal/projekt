@props([ 'label', 'subLinks', 'open',])

<ul x-data="{inFlyout: true}"
    x-show="(open && flyoutOpen) || (!open && hover)"
    @click.outside="flyoutOpen = false"
    x-cloak x-transition
    class="bg-slate-50 absolute left-full ml-3 p-4 flex flex-col gap-2 rounded-md top-0">

    <span x-show="!open"
          class="text-md font-extrabold p-2 border-b mb-2">
        {{ $label }}
    </span>

    @foreach($subLinks as $subLink)
        <x-sidenav.sidenav-link :href="$subLink['href']"
                                :label="$subLink['label']"
                                :subLinks="$subLink['subLinks']"
                                class="font-light" />
    @endforeach
</ul>
