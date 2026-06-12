@props([
    'src',
    'alt' => '',
    'fallback' => null,
])

@php
    $fallbackSrc = $fallback ?? \App\Support\RedSeaImages::url(\App\Support\RedSeaImages::FALLBACK_KEY, 800);
@endphp

<img
    {{ $attributes->merge(['class' => '', 'loading' => 'lazy', 'decoding' => 'async']) }}
    src="{{ $src }}"
    alt="{{ $alt }}"
    onerror="if (!this.dataset.fallback) { this.dataset.fallback = '1'; this.src = '{{ $fallbackSrc }}'; }"
>
