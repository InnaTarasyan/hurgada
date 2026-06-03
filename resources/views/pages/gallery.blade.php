<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
  <header class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-10">
    <div class="text-center sm:text-left">
      <span class="section-eyebrow">Photo diary</span>
      <h1 class="section-title mt-4">Red Sea gallery</h1>
      <p class="section-subtitle mt-2">Aesthetic snapshots from Hurghada — tap to enlarge.</p>
    </div>
    <div class="flex items-center justify-center gap-2 text-sm text-sea-600 font-medium">
      <span class="inline-flex h-2 w-2 rounded-full bg-sea-400 animate-pulse"></span>
      <span>{{ count($images ?? []) }} photos</span>
    </div>
  </header>

  <div class="gallery rounded-2xl" data-masonry>
    <div class="gallery-sizer w-1/2 sm:w-1/3 lg:w-1/4"></div>
    @foreach(($images ?? []) as $image)
      <a
        class="gallery-item w-1/2 sm:w-1/3 lg:w-1/4 mb-4 block rounded-2xl overflow-hidden bg-white ring-1 ring-sea-100 shadow-card hover:shadow-polaroid hover:ring-sea-200 transition-all duration-300"
        href="{{ $image['src'] }}"
        data-lightbox="gallery"
        data-title="{{ $image['alt'] }}">
        <img
          src="{{ $image['thumb'] }}"
          alt="{{ $image['alt'] }}"
          loading="lazy"
          class="w-full h-auto hover:scale-[1.02] transition duration-500 ease-out">
      </a>
    @endforeach
  </div>
</div>
</x-app-layout>
