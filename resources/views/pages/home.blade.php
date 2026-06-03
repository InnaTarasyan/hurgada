<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 md:py-10">

  {{-- Editorial Hero --}}
  <section class="blog-hero min-h-[520px] md:min-h-[600px] flex items-center">
    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=2000&auto=format&fit=crop"
         alt="Crystal clear Red Sea water with coral reef"
         class="blog-hero__image">
    <div class="blog-hero__overlay"></div>
    <div class="blog-hero__content w-full">
      <span class="section-eyebrow">✨ Travel diary · Red Sea, Egypt</span>
      <p class="script-accent mt-6">the most beautiful sea on earth</p>
      <h1 class="mt-2 font-playfair text-4xl md:text-6xl lg:text-7xl font-bold text-gradient-sea leading-tight max-w-4xl mx-auto">
        Stories from the Red Sea
      </h1>
      <p class="mt-6 text-lg md:text-xl text-sea-800/90 max-w-2xl mx-auto font-crimson italic leading-relaxed">
        Sun-drenched days in Hurghada, turquoise waters, coral gardens, and the kind of magic only the Red Sea knows. Welcome to my little corner of paradise.
      </p>
      <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="{{ route('blog.index') }}" class="btn-primary">Read the journal</a>
        <a href="{{ route('gallery.index') }}" class="btn-secondary">Browse photos</a>
      </div>
    </div>
    <div class="pointer-events-none absolute inset-0 overflow-hidden rounded-[2rem]">
      <div class="hero-bubble hero-bubble--sea w-48 h-48 -left-12 top-16"></div>
      <div class="hero-bubble hero-bubble--blush w-64 h-64 right-0 bottom-0"></div>
      <div class="hero-bubble hero-bubble--sea w-28 h-28 left-1/3 top-8"></div>
    </div>
  </section>

  {{-- Intro letter --}}
  <section class="mt-14 md:mt-20">
    <div class="soft-card max-w-4xl mx-auto text-center">
      <p class="script-accent text-2xl mb-4">Hello, lovely traveler</p>
      <p class="feminine-italic">
        <span class="drop-cap drop-cap-center">I</span>
        started this blog because the Red Sea changed me — its clarity, its warmth, its underwater worlds. Hurghada is where I come to breathe, dive, and collect moments worth sharing. Think of this as your aesthetic guide to the shore: beaches, reefs, sunsets, and slow luxury by the water.
      </p>
      <p class="feminine-italic mt-4">
        <span class="drop-cap drop-cap-center">W</span>
        hether you're planning your first trip or dreaming from afar, I hope these pages feel like a postcard from the most beautiful sea on earth. 🌊🐚☀️
      </p>
      <a href="{{ route('about') }}" class="inline-block mt-6 text-sm font-semibold text-blush-600 hover:text-blush-700 transition">More about this blog →</a>
    </div>
  </section>

  {{-- Red Sea facts --}}
  <section class="mt-14">
    <div class="sea-fact-strip grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 text-center">
      <div>
        <div class="sea-fact-strip__number">2,250</div>
        <div class="text-sm opacity-90 mt-1 font-sans">km of coastline</div>
      </div>
      <div>
        <div class="sea-fact-strip__number">28°C</div>
        <div class="text-sm opacity-90 mt-1 font-sans">avg. water warmth</div>
      </div>
      <div>
        <div class="sea-fact-strip__number">1,200+</div>
        <div class="text-sm opacity-90 mt-1 font-sans">fish species</div>
      </div>
      <div>
        <div class="sea-fact-strip__number">365</div>
        <div class="text-sm opacity-90 mt-1 font-sans">days of sunshine</div>
      </div>
    </div>
  </section>

  {{-- Discover cards --}}
  <section class="mt-16 md:mt-20">
    <x-section-header
      eyebrow="Plan your escape"
      title="Explore Hurghada"
      subtitle="Curated picks for beach days, reef adventures, and golden-hour strolls along the Red Sea."
    />
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      <a href="{{ route('attractions.index') }}" class="travel-card">
        <img src="https://images.unsplash.com/photo-1582967788606-a171c1080cb0?q=80&w=800&auto=format&fit=crop" alt="Snorkeling in Red Sea" class="travel-card__image">
        <div class="travel-card__body">
          <div class="travel-card__title">Discover</div>
          <div class="travel-card__meta">Beaches, islands & coral reefs</div>
        </div>
      </a>
      <a href="{{ route('blog.index') }}" class="travel-card">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=800&auto=format&fit=crop" alt="Red Sea beach at sunset" class="travel-card__image">
        <div class="travel-card__body">
          <div class="travel-card__title">Travel Journal</div>
          <div class="travel-card__meta">Tips, guides & sea stories</div>
        </div>
      </a>
      <a href="{{ route('events.index') }}" class="travel-card sm:col-span-2 lg:col-span-1">
        <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=800&auto=format&fit=crop" alt="Beach sunset" class="travel-card__image">
        <div class="travel-card__body">
          <div class="travel-card__title">Events & Tours</div>
          <div class="travel-card__meta">Festivals, diving & desert trips</div>
        </div>
      </a>
    </div>
  </section>

  {{-- Polaroid gallery strip --}}
  <section class="mt-16 md:mt-20">
    <x-section-header
      eyebrow="Photo diary"
      title="Moments by the Red Sea"
      subtitle="A scrapbook of turquoise water, pink skies, and sandy toes."
    />
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=600&auto=format&fit=crop" alt="Red Sea reef" class="polaroid__img">
        <figcaption class="polaroid__caption">Crystal waters</figcaption>
      </figure>
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=600&auto=format&fit=crop" alt="Beach paradise" class="polaroid__img">
        <figcaption class="polaroid__caption">Golden hour</figcaption>
      </figure>
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1583212292453-86ce9e8547bd?q=80&w=600&auto=format&fit=crop" alt="Underwater coral" class="polaroid__img">
        <figcaption class="polaroid__caption">Coral dreams</figcaption>
      </figure>
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=600&auto=format&fit=crop" alt="Sunset beach" class="polaroid__img">
        <figcaption class="polaroid__caption">Pink skies</figcaption>
      </figure>
    </div>
    <div class="text-center mt-8">
      <a href="{{ route('gallery.index') }}" class="btn-secondary">View full gallery</a>
    </div>
  </section>

  {{-- Carousel --}}
  <section class="mt-16">
    <div class="swiper hurghada-carousel rounded-[2rem] bg-white/80 p-4 shadow-card ring-1 ring-sea-100">
      <div class="swiper-wrapper">
        @foreach([
          ['https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=1200&auto=format&fit=crop', 'Red Sea reef'],
          ['https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop', 'Turquoise bay'],
          ['https://images.unsplash.com/photo-1583212292453-86ce9e8547bd?q=80&w=1200&auto=format&fit=crop', 'Snorkeling paradise'],
          ['https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=1200&auto=format&fit=crop', 'Sunset shore'],
        ] as [$src, $alt])
        <div class="swiper-slide">
          <img src="{{ $src }}" class="w-full h-52 md:h-64 object-cover rounded-2xl" alt="{{ $alt }}">
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <style>
  .hurghada-carousel .swiper-button-next,
  .hurghada-carousel .swiper-button-prev {
    color: #0d9488;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    width: 44px;
    height: 44px;
    margin-top: -22px;
    box-shadow: 0 4px 14px rgba(13, 148, 136, 0.15);
  }
  .hurghada-carousel .swiper-button-next:after,
  .hurghada-carousel .swiper-button-prev:after { font-size: 18px; font-weight: bold; }
  .hurghada-carousel .swiper-pagination-bullet { background: #99f6e4; opacity: 1; width: 10px; height: 10px; }
  .hurghada-carousel .swiper-pagination-bullet-active { background: #0d9488; }
  .hurghada-carousel .swiper-slide { display: flex; justify-content: center; }
  </style>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper === 'undefined') return;
    new Swiper('.hurghada-carousel', {
      loop: true,
      autoplay: { delay: 4000, disableOnInteraction: false, pauseOnMouseEnter: true },
      breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 16 },
        768: { slidesPerView: 2, spaceBetween: 20 },
        1024: { slidesPerView: 3, spaceBetween: 24 },
      },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
      pagination: { el: '.swiper-pagination', clickable: true },
      speed: 600,
    });
  });
  </script>

  {{-- Map --}}
  <section class="mt-16 md:mt-20">
    <x-section-header
      eyebrow="On the map"
      title="Find your spot in Hurghada"
      subtitle="Tap the pastel pins for beaches, marina walks, and island day trips."
      :centered="false"
    />
    <div class="grid md:grid-cols-3 gap-6">
      <div class="md:col-span-2">
        <div id="map" class="h-72 md:h-96 w-full rounded-2xl shadow-card ring-1 ring-sea-100 overflow-hidden"
             x-data="{ map:null }" x-init="(async () => {
          const L = await window.hurghada.loadLeaflet();
          this.map = L.map('map', { scrollWheelZoom: false }).setView([27.2579, 33.8116], 12);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: '&copy; OpenStreetMap' }).addTo(this.map);
          const spots = [
            { name: 'Old Vic Beach', lat: 27.2157, lon: 33.8406, c: '#5eead4' },
            { name: 'Marina Hurghada', lat: 27.2152, lon: 33.8436, c: '#fda4af' },
            { name: 'Giftun Island', lat: 27.2350, lon: 33.9530, c: '#99f6e4' }
          ];
          spots.forEach(s => L.circleMarker([s.lat, s.lon], { radius: 10, color: s.c, weight: 2, fillColor: s.c, fillOpacity: 0.7 }).addTo(this.map).bindPopup(s.name));
        })()"></div>
      </div>
      <div class="space-y-4">
        <div class="soft-card-rose">
          <div class="text-xs font-semibold tracking-widest uppercase text-sea-600 mb-2">Travel tip</div>
          <p class="feminine-italic text-base">Best snorkeling months: April–October, when the Red Sea is warmest and calmest.</p>
        </div>
        <div class="soft-card">
          <div class="text-xs font-semibold tracking-widest uppercase text-blush-600 mb-2">Weather now</div>
          <div x-data="{ data:null, async init(){ this.data = await window.hurghada.weather(27.2579,33.8116) } }" x-init="init()" class="font-playfair text-2xl text-sea-800">
            <template x-if="data">
              <div>
                <span x-text="Math.round(data.current.temperature_2m)"></span>°C
                <span class="text-sm text-sea-600 font-sans block mt-1">Perfect beach weather</span>
              </div>
            </template>
            <template x-if="!data"><span class="text-sm text-sea-500 font-sans">Loading…</span></template>
          </div>
        </div>
        <a href="{{ route('hotels.index') }}" class="travel-card block !flex-row items-center p-4">
          <span class="text-2xl mr-3">🏨</span>
          <div>
            <div class="travel-card__title text-lg">Where to stay</div>
            <div class="travel-card__meta">Resorts & boutique hotels</div>
          </div>
        </a>
      </div>
    </div>
  </section>

  {{-- Testimonials --}}
  <section class="mt-16 md:mt-20 pb-8">
    <x-section-header
      eyebrow="Reader love"
      title="What travelers are saying"
      subtitle="Real words from visitors who fell for the Red Sea."
    />
    <div class="grid md:grid-cols-3 gap-6">
      @foreach([
        ['🌊', 'The Red Sea water is unreal — clearer than any photo. Hurghada stole my heart.', 'Sarah M.', 'from-blush-50 to-sea-50', 'border-blush-100'],
        ['🌅', 'Every sunset here feels like a watercolor painting. Pure travel blog magic.', 'Alex K.', 'from-sea-50 to-sand-100', 'border-sea-100'],
        ['🐠', 'Diving the coral gardens was a dream. The most beautiful sea — they were right.', 'Emma L.', 'from-blush-50 to-blush-100', 'border-blush-200'],
      ] as [$emoji, $quote, $name, $gradient, $border])
      <div class="p-6 bg-gradient-to-br {{ $gradient }} rounded-2xl shadow-card ring-1 {{ $border }} hover:-translate-y-1 transition-transform duration-300">
        <div class="text-2xl mb-3">{{ $emoji }}</div>
        <blockquote class="font-crimson italic text-sea-800 leading-relaxed">"{{ $quote }}"</blockquote>
        <div class="mt-4 flex items-center gap-2">
          <span class="text-amber-400 text-sm">★★★★★</span>
          <span class="text-sm font-medium text-sea-700">{{ $name }}</span>
        </div>
      </div>
      @endforeach
    </div>
  </section>

</div>
</x-app-layout>
