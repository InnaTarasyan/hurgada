@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium text-sea-700 bg-sea-50 ring-1 ring-sea-200 transition duration-200'
            : 'inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium text-sea-700/70 hover:text-sea-800 hover:bg-blush-50/80 transition duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
