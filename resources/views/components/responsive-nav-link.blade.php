@props(['active'])

@php
$classes = ($active ?? false)
            ? 'align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-black dark:text-white shadow-xl-cz shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85]   flex items-center gap-4 px-4 capitalize '//active
            : 'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out dark:text-white hover:bg-gray dark:hover:bg-meta-4 hover:shadow-lg hover:shadow-gray-900/20 hover:bg-gray-400 ';
@endphp
{{-- @php

$classes = ($active ?? false)
            ? 'align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-black dark:text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize ' //active
            : 'align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50  disabled:pointer-events-none py-3 rounded-lg text-black dark:text-white hover:bg-gray-400 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize';
@endphp --}}
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>