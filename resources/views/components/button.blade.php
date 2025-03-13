@props(['href' => null, 'danger' => false, 'secondary' => false, 'outline' => false, 'uppercase' => false,
       'baseClasses' => 'inline-flex items-center px-4 py-3 rounded-md font-semibold text-xs tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150',
       'baseColors' => ' text-white bg-slate-700 hover:bg-slate-800 focus:bg-slate-800 active:bg-slate-900 disabled:bg-slate-300 disabled:text-slate-100 focus:ring-slate-700' ])

@php
    $classes = $baseClasses . ' ' .
                ($danger ? 'text-white bg-red-500 hover:bg-red-600 focus:bg-red-600 active:bg-red-700 disabled:bg-red-200 disabled:text-red-50 focus:ring-red-500' :
                ($secondary ? 'text-slate-800 bg-slate-200 hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-400 disabled:bg-slate-100 disabled:text-slate-300 focus:ring-slate-300' :
                ($outline ? 'text-slate-700 relative bg-white hover:bg-slate-700 hover:text-white focus:bg-slate-700 focus:text-white active:bg-slate-800 disabled:text-slate-300 disabled:bg-transparent before:disabled:border-slate-300 focus:ring-slate-700 before:absolute before:inset-0 before:border before:border-slate-700 before:rounded-md' : $baseColors ))) . ' ' .
                ($uppercase ? 'uppercase' : '');

@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
