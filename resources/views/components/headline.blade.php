@props(['size' => '1', ])

@php
    $size = max(1, min((int)$size, 6));
    $heading = "h{$size}";
    $twClasses = [
        1 => 'text-2xl font-semibold',
        2 => 'text-xl font-semibold',
        3 => 'text-lg font-semibold',
        4 => 'text-lg font-regular',
        5 => 'text-base font-semibold',
        6 => 'text-base',
    ];
    $class = $twClasses[$size];
@endphp

<{{ $heading }} {{ $attributes->merge(['class' => $class . ' text-slate-800 my-1.5']) }}>
    {{ $slot }}
</{{ $heading }}>
