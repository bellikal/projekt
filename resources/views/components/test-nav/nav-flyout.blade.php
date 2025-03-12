@props(['subLinks', 'open', 'hover', 'flyoutOpen'])

<ul x-show="(open && flyoutOpen) || (!open && hover)"
    @click.outside="flyoutOpen = false"
    x-cloak x-transition
    class="absolute left-full top-0 ml-2 p-2 bg-white shadow rounded w-40">

    @foreach($subLinks as $subLink)
        <li class="p-2 hover:bg-gray-300 rounded">{{ $subLink['label'] }}</li>
    @endforeach
</ul>
