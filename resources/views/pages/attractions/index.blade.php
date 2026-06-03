<x-app-layout>
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
  <header class="text-center mb-12">
    <span class="section-eyebrow">Discover</span>
    <h1 class="section-title mt-4">Hurghada highlights</h1>
    <p class="section-subtitle mx-auto mt-3">Beaches, reefs, islands, and adventures along the Red Sea.</p>
  </header>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
    @foreach($attractions as $item)
      <article class="travel-card relative">
        <a href="{{ route('attractions.show', $item) }}" class="block">
          <div class="travel-card__image bg-gradient-to-br from-sea-200 to-blush-200 flex items-center justify-center h-48">
            <span class="text-5xl opacity-70">🏝️</span>
          </div>
          <div class="travel-card__body">
            <h2 class="travel-card__title">{{ $item->name ?? 'Attraction' }}</h2>
            @if($item->category ?? null)
              <p class="travel-card__meta">{{ $item->category }}</p>
            @endif
            <span class="inline-block mt-3 text-sm font-semibold text-sea-600">Explore →</span>
          </div>
        </a>
        <div class="absolute top-4 right-4">
          <livewire:favorites-toggle :model-type="\App\Models\Attraction::class" :model-id="$item->id" />
        </div>
      </article>
    @endforeach
  </div>

  <div class="mt-10 flex justify-center">{{ $attractions->links() }}</div>
</div>
</x-app-layout>
