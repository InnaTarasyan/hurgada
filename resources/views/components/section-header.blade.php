@props(['eyebrow' => null, 'title', 'subtitle' => null, 'centered' => true])

<div {{ $attributes->merge(['class' => ($centered ? 'text-center' : '') . ' mb-8 md:mb-10']) }}>
    @if($eyebrow)
        <span class="section-eyebrow {{ $centered ? 'mx-auto' : '' }}">{{ $eyebrow }}</span>
    @endif
    <h2 class="section-title mt-4 {{ $centered ? '' : '' }}">{{ $title }}</h2>
    @if($subtitle)
        <p class="section-subtitle mt-3 {{ $centered ? 'mx-auto' : '' }}">{{ $subtitle }}</p>
    @endif
</div>
