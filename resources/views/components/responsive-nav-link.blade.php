@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out dark:text-white hover:bg-gray dark:hover:bg-meta-4 bg-gray dark:bg-meta-4'
            : 'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out dark:text-white hover:bg-gray dark:hover:bg-meta-4';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
