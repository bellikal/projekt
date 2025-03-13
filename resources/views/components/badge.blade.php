@props(['small' => false, 'large' => false, ])

@php
$baseClasses = 'bg-slate-600 text-white font-medium w-fit h-fit rounded-md flex items-center justify-center';

$classes = $baseClasses . ' ' .
    ($small ? 'text-xs px-2 py-1' :
    ($large ? 'text-md px-3 py-1' :
              'text-sm px-2 py-1'))
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
