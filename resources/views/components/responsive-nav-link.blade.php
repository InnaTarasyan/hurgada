@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-4 pe-4 py-2.5 rounded-xl text-base font-medium text-sea-800 bg-gradient-to-r from-lagoon-50 to-blush-50 ring-1 ring-blush-100 transition duration-200'
            : 'block w-full ps-4 pe-4 py-2.5 rounded-xl text-base font-medium text-sea-700/80 hover:text-coral-600 hover:bg-blush-50/60 transition duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
