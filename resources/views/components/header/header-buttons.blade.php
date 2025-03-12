@props(['icon' => '', 'href' => '#'])

<a href="{{ $href }}"
    class="h-8 w-8 flex items-center justify-center hover:bg-slate-200 rounded-md cursor-pointer">
    <i class="{{ $icon }} text-md "></i>
</a>
