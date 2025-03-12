@props(['title' => '', ])

<div {{ $attributes->merge([ 'class' => 'w-20 h-20 bg-red-200 text-center place-content-center']) }}>
    {{ $slot }}
</div>
