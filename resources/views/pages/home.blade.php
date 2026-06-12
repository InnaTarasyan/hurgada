<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 md:py-10">

  {{-- Editorial Hero --}}
  <section class="blog-hero min-h-[480px] sm:min-h-[520px] md:min-h-[600px] flex items-center">
    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=2000&auto=format&fit=crop"
         alt="Crystal clear Red Sea water with coral reef"
         class="blog-hero__image">
    <div class="blog-hero__overlay"></div>
    <div class="blog-hero__content w-full">
      <span class="section-eyebrow">🐠 Travel diary · Red Sea, Egypt</span>
      <p class="script-accent mt-5 sm:mt-6">the most beautiful sea on earth</p>
      <h1 class="mt-2 font-playfair text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-gradient-sea leading-tight max-w-4xl mx-auto px-2">
        Stories from the Red Sea
      </h1>
      <p class="mt-5 sm:mt-6 text-base sm:text-lg md:text-xl text-sea-800/90 max-w-2xl mx-auto font-crimson italic leading-relaxed px-2">
        Sun-drenched days in Hurghada, turquoise waters, rainbow coral gardens, and the free-spirit magic only the Red Sea knows. Welcome to my little corner of paradise. 🌊✨
      </p>
      <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 sm:gap-4 px-4 sm:px-0">
        <a href="{{ route('blog.index') }}" class="btn-primary w-full sm:w-auto">Read the journal</a>
        <a href="{{ route('gallery.index') }}" class="btn-secondary w-full sm:w-auto">Browse photos</a>
      </div>
      <p class="traveler-ribbon mt-8 mx-auto w-fit">🧳 Free spirit · Coral dreams · Wander often</p>
    </div>
    <div class="pointer-events-none absolute inset-0 overflow-hidden rounded-[2rem]">
      <div class="hero-bubble hero-bubble--sea w-36 sm:w-48 h-36 sm:h-48 -left-8 sm:-left-12 top-12 sm:top-16"></div>
      <div class="hero-bubble hero-bubble--blush w-48 sm:w-64 h-48 sm:h-64 right-0 bottom-0"></div>
      <div class="hero-bubble hero-bubble--coral w-24 sm:w-28 h-24 sm:h-28 left-1/3 top-6 sm:top-8"></div>
      <div class="hero-bubble hero-bubble--reef w-20 h-20 right-1/4 top-1/3 hidden sm:block"></div>
    </div>
  </section>

  {{-- Intro letter --}}
  <section class="mt-12 sm:mt-14 md:mt-20">
    <div class="soft-card max-w-4xl mx-auto text-center">
      <p class="script-accent text-xl sm:text-2xl mb-4">Hello, lovely traveler 🌺</p>
      <p class="feminine-italic">
        <span class="drop-cap drop-cap-center">I</span>
        started this blog because the Red Sea changed me — its clarity, its warmth, its underwater worlds painted in every color imaginable. Hurghada is where I come to breathe, dive, and collect moments worth sharing. Think of this as your aesthetic guide to the shore: beaches, reefs, sunsets, and slow luxury by the water.
      </p>
      <p class="feminine-italic mt-4">
        <span class="drop-cap drop-cap-center">W</span>
        hether you're planning your first trip or dreaming from afar, I hope these pages feel like a postcard from the most beautiful sea on earth. 🌊🐚🐠☀️
      </p>
      <a href="{{ route('about') }}" class="inline-block mt-6 text-sm font-semibold text-blush-600 hover:text-coral-600 transition">More about this blog →</a>
    </div>
  </section>

  {{-- Red Sea reef palette --}}
  <section class="mt-10 sm:mt-14">
    <div class="text-center mb-4">
      <span class="section-eyebrow">🪸 Colors of the reef</span>
      <p class="mt-3 text-sm text-sea-700/80 font-crimson italic">The Red Sea paints in coral pinks, lagoon blues, and golden fish</p>
    </div>
    <div class="reef-palette">
      <span class="reef-palette__chip bg-coral-400" title="Living coral"></span>
      <span class="reef-palette__chip bg-blush-400" title="Anemone pink"></span>
      <span class="reef-palette__chip bg-reef-400" title="Purple coral"></span>
      <span class="reef-palette__chip bg-lagoon-400" title="Lagoon aqua"></span>
      <span class="reef-palette__chip bg-sea-400" title="Reef teal"></span>
      <span class="reef-palette__chip bg-goldfish-400" title="Tropical fish"></span>
      <span class="reef-palette__chip bg-rose-400" title="Sunset rose"></span>
    </div>
  </section>

  {{-- Red Sea facts --}}
  <section class="mt-10 sm:mt-14">
    <div class="sea-fact-strip grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8 text-center">
      <div class="relative">
        <div class="sea-fact-strip__number">2,250</div>
        <div class="text-xs sm:text-sm opacity-90 mt-1 font-sans">km of coastline</div>
      </div>
      <div class="relative">
        <div class="sea-fact-strip__number">28°C</div>
        <div class="text-xs sm:text-sm opacity-90 mt-1 font-sans">avg. water warmth</div>
      </div>
      <div class="relative">
        <div class="sea-fact-strip__number">1,200+</div>
        <div class="text-xs sm:text-sm opacity-90 mt-1 font-sans">fish species</div>
      </div>
      <div class="relative">
        <div class="sea-fact-strip__number">365</div>
        <div class="text-xs sm:text-sm opacity-90 mt-1 font-sans">days of sunshine</div>
      </div>
    </div>
  </section>

  {{-- Underwater sealife showcase --}}
  <section class="mt-14 sm:mt-16 md:mt-20">
    <x-section-header
      eyebrow="🐠 Underwater wonders"
      title="Life beneath the waves"
      subtitle="The Red Sea is a living rainbow — clownfish, butterflyfish, angelfish, and coral gardens in every shade of pink, purple, and gold."
    />
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      @foreach([
        ['https://images.unsplash.com/photo-1583212292453-86ce9e8547bd?q=80&w=600&auto=format&fit=crop', 'Clownfish', 'Coral orange', 'bg-coral-500/80'],
        ['https://images.unsplash.com/photo-1559827260-dc66d52bef19?q=80&w=600&auto=format&fit=crop', 'Butterflyfish', 'Golden yellow', 'bg-goldfish-500/80'],
        ['https://images.unsplash.com/photo-1546026423-cc4642628d2b?q=80&w=600&auto=format&fit=crop', 'Coral gardens', 'Pink & purple', 'bg-reef-500/80'],
        ['https://images.unsplash.com/photo-1682687220063-4742bd7fd538?q=80&w=600&auto=format&fit=crop', 'Reef paradise', 'Lagoon blue', 'bg-lagoon-500/80'],
      ] as [$src, $name, $tag, $tagBg])
      <article class="sealife-card group">
        <img src="{{ $src }}" alt="{{ $name }} in the Red Sea" class="sealife-card__image group-hover:scale-105 transition-transform duration-500" loading="lazy">
        <div class="sealife-card__overlay"></div>
        <div class="sealife-card__body">
          <h3 class="sealife-card__name">{{ $name }}</h3>
          <span class="sealife-card__tag {{ $tagBg }}">{{ $tag }}</span>
        </div>
      </article>
      @endforeach
    </div>
  </section>

  {{-- Discover cards --}}
  <section class="mt-14 sm:mt-16 md:mt-20">
    <x-section-header
      eyebrow="✈️ Plan your escape"
      title="Explore Hurghada"
      subtitle="Curated picks for beach days, reef adventures, and golden-hour strolls along the Red Sea."
    />
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 md:gap-8">
      <a href="{{ route('attractions.index') }}" class="travel-card group">
        <img src="https://images.unsplash.com/photo-1582967788606-a171c1080cb0?q=80&w=800&auto=format&fit=crop" alt="Snorkeling in Red Sea" class="travel-card__image">
        <div class="travel-card__body">
          <div class="travel-card__title">Discover 🪸</div>
          <div class="travel-card__meta">Beaches, islands & coral reefs</div>
        </div>
      </a>
      <a href="{{ route('blog.index') }}" class="travel-card group">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=800&auto=format&fit=crop" alt="Red Sea beach at sunset" class="travel-card__image">
        <div class="travel-card__body">
          <div class="travel-card__title">Travel Journal 📖</div>
          <div class="travel-card__meta">Tips, guides & sea stories</div>
        </div>
      </a>
      <a href="{{ route('events.index') }}" class="travel-card group sm:col-span-2 lg:col-span-1">
        <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=800&auto=format&fit=crop" alt="Beach sunset" class="travel-card__image">
        <div class="travel-card__body">
          <div class="travel-card__title">Events & Tours 🌅</div>
          <div class="travel-card__meta">Festivals, diving & desert trips</div>
        </div>
      </a>
    </div>
  </section>

  <div class="wave-divider mt-14 sm:mt-16"></div>

  {{-- Polaroid gallery strip --}}
  <section class="mt-12 sm:mt-14 md:mt-20">
    <x-section-header
      eyebrow="📸 Photo diary"
      title="Moments by the Red Sea"
      subtitle="A scrapbook of turquoise water, pink skies, colorful corals, and sandy toes."
    />
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8">
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=600&auto=format&fit=crop" alt="Red Sea reef" class="polaroid__img" loading="lazy">
        <figcaption class="polaroid__caption">Crystal waters 💎</figcaption>
      </figure>
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=600&auto=format&fit=crop" alt="Beach paradise" class="polaroid__img" loading="lazy">
        <figcaption class="polaroid__caption">Golden hour 🌅</figcaption>
      </figure>
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1583212292453-86ce9e8547bd?q=80&w=600&auto=format&fit=crop" alt="Underwater coral" class="polaroid__img" loading="lazy">
        <figcaption class="polaroid__caption">Coral dreams 🪸</figcaption>
      </figure>
      <figure class="polaroid">
        <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=600&auto=format&fit=crop" alt="Sunset beach" class="polaroid__img" loading="lazy">
        <figcaption class="polaroid__caption">Pink skies 🌸</figcaption>
      </figure>
    </div>
    <div class="text-center mt-6 sm:mt-8">
      <a href="{{ route('gallery.index') }}" class="btn-secondary">View full gallery</a>
    </div>
  </section>

  {{-- Carousel --}}
  <section class="mt-12 sm:mt-16">
    <div class="swiper hurghada-carousel rounded-2xl sm:rounded-[2rem] bg-white/80 p-3 sm:p-4 shadow-reef ring-1 ring-blush-100">
      <div class="swiper-wrapper">
        @foreach([
          ['https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=1200&auto=format&fit=crop', 'Red Sea reef'],
          ['https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop', 'Turquoise bay'],
          ['https://images.unsplash.com/photo-1583212292453-86ce9e8547bd?q=80&w=1200&auto=format&fit=crop', 'Snorkeling paradise'],
          ['https://images.unsplash.com/photo-1519046904884-53103b34b206?q=80&w=1200&auto=format&fit=crop', 'Sunset shore'],
          ['https://images.unsplash.com/photo-1559827260-dc66d52bef19?q=80&w=1200&auto=format&fit=crop', 'Tropical fish'],
        ] as [$src, $alt])
        <div class="swiper-slide">
          <img src="{{ $src }}" class="w-full h-44 sm:h-52 md:h-64 object-cover rounded-xl sm:rounded-2xl" alt="{{ $alt }}" loading="lazy">
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
    color: #f43f5e;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin-top: -20px;
    box-shadow: 0 4px 14px rgba(244, 63, 94, 0.2);
  }
  @media (min-width: 640px) {
    .hurghada-carousel .swiper-button-next,
    .hurghada-carousel .swiper-button-prev { width: 44px; height: 44px; margin-top: -22px; }
  }
  .hurghada-carousel .swiper-button-next:after,
  .hurghada-carousel .swiper-button-prev:after { font-size: 16px; font-weight: bold; }
  @media (min-width: 640px) {
    .hurghada-carousel .swiper-button-next:after,
    .hurghada-carousel .swiper-button-prev:after { font-size: 18px; }
  }
  .hurghada-carousel .swiper-pagination-bullet { background: #fda4b8; opacity: 1; width: 8px; height: 8px; }
  @media (min-width: 640px) {
    .hurghada-carousel .swiper-pagination-bullet { width: 10px; height: 10px; }
  }
  .hurghada-carousel .swiper-pagination-bullet-active { background: linear-gradient(135deg, #14b8a6, #f43f5e); }
  .hurghada-carousel .swiper-slide { display: flex; justify-content: center; }
  </style>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper === 'undefined') return;
    new Swiper('.hurghada-carousel', {
      loop: true,
      autoplay: { delay: 4000, disableOnInteraction: false, pauseOnMouseEnter: true },
      breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 12 },
        640: { slidesPerView: 1.5, spaceBetween: 16 },
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
  <section class="mt-12 sm:mt-16 md:mt-20">
    <x-section-header
      eyebrow="📍 On the map"
      title="Find your spot in Hurghada"
      subtitle="Tap the pastel pins for beaches, marina walks, and island day trips."
      :centered="false"
    />
    <div class="grid md:grid-cols-3 gap-5 sm:gap-6">
      <div class="md:col-span-2">
        <div id="map" class="h-64 sm:h-72 md:h-96 w-full rounded-2xl shadow-reef ring-1 ring-blush-100 overflow-hidden"
             x-data="{ map:null }" x-init="(async () => {
          const L = await window.hurghada.loadLeaflet();
          this.map = L.map('map', { scrollWheelZoom: false }).setView([27.2579, 33.8116], 12);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: '&copy; OpenStreetMap' }).addTo(this.map);
          const spots = [
            { name: 'Old Vic Beach', lat: 27.2157, lon: 33.8406, c: '#5eead4' },
            { name: 'Marina Hurghada', lat: 27.2152, lon: 33.8436, c: '#fda4af' },
            { name: 'Giftun Island', lat: 27.2350, lon: 33.9530, c: '#e879f9' }
          ];
          spots.forEach(s => L.circleMarker([s.lat, s.lon], { radius: 10, color: s.c, weight: 2, fillColor: s.c, fillOpacity: 0.7 }).addTo(this.map).bindPopup(s.name));
        })()"></div>
      </div>
      <div class="space-y-4">
        <div class="soft-card-rose">
          <div class="text-xs font-semibold tracking-widest uppercase text-coral-600 mb-2">🤿 Travel tip</div>
          <p class="feminine-italic text-base">Best snorkeling months: April–October, when the Red Sea is warmest and calmest — perfect for spotting colorful fish!</p>
        </div>
        <div class="soft-card">
          <div class="text-xs font-semibold tracking-widest uppercase text-blush-600 mb-2">☀️ Weather now</div>
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
  <section class="mt-12 sm:mt-16 md:mt-20 pb-6 sm:pb-8">
    <x-section-header
      eyebrow="💕 Reader love"
      title="What travelers are saying"
      subtitle="Real words from free spirits who fell for the Red Sea."
    />
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-5 sm:gap-6">
      @foreach([
        ['🌊', 'The Red Sea water is unreal — clearer than any photo. Hurghada stole my heart.', 'Sarah M.', 'from-blush-50 to-lagoon-50', 'border-blush-100'],
        ['🌅', 'Every sunset here feels like a watercolor painting. Pure travel blog magic.', 'Alex K.', 'from-lagoon-50 to-sand-100', 'border-sea-100'],
        ['🐠', 'Diving the coral gardens was a dream. Fish in every color — they were right.', 'Emma L.', 'from-coral-50 to-reef-50', 'border-coral-200'],
      ] as [$emoji, $quote, $name, $gradient, $border])
      <div class="p-5 sm:p-6 bg-gradient-to-br {{ $gradient }} rounded-2xl shadow-card ring-1 {{ $border }} hover:-translate-y-1 transition-transform duration-300">
        <div class="text-2xl mb-3">{{ $emoji }}</div>
        <blockquote class="font-crimson italic text-sea-800 leading-relaxed text-sm sm:text-base">"{{ $quote }}"</blockquote>
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
