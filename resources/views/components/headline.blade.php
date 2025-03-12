@props(['size' => '1', ])

@php
    $size = max(1, min((int)$size, 6));
    $heading = "h{$size}";
    $twClasses = [
        1 => 'text-4xl',
        2 => 'text-3xl',
        3 => 'text-2xl',
        4 => 'text-xl',
        5 => 'text-lg',
        6 => 'text-base',
    ];
    $class = $twClasses[$size];
@endphp

<{{ $heading }} class="{{ $class }} font-semibold text-slate-800">
    {{ $slot }}
</{{ $heading }}>
