<x-app-layout>
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
  <header class="text-center mb-12">
    <span class="section-eyebrow">What's on</span>
    <h1 class="section-title mt-4">Events & experiences</h1>
    <p class="section-subtitle mx-auto mt-3">Tours, festivals, and Red Sea adventures worth planning for.</p>
  </header>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
    @foreach($events as $event)
      <article class="travel-card relative">
        <a href="{{ route('events.show', $event) }}" class="block">
          <div class="travel-card__image bg-gradient-to-br from-blush-100 to-sea-200 flex items-center justify-center h-40">
            <span class="text-4xl">🎉</span>
          </div>
          <div class="travel-card__body">
            <h2 class="travel-card__title">{{ $event->title }}</h2>
            <p class="travel-card__meta">{{ optional($event->starts_at)->format('M d, Y') }}</p>
          </div>
        </a>
        <div class="absolute top-4 right-4">
          <livewire:favorites-toggle :model-type="\App\Models\Event::class" :model-id="$event->id" />
        </div>
      </article>
    @endforeach
  </div>

  <div class="mt-10 flex justify-center">{{ $events->links() }}</div>
</div>
</x-app-layout>
