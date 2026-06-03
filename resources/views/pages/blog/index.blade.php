<x-app-layout>
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
  <header class="text-center mb-12">
    <span class="section-eyebrow">Travel journal</span>
    <h1 class="section-title mt-4">Stories from the shore</h1>
    <p class="section-subtitle mx-auto mt-3">Tips, guides, and dreamy tales from the Red Sea coast.</p>
  </header>

  <div class="space-y-6">
    @forelse($posts as $post)
      <article class="blog-post-card group flex flex-col md:flex-row">
        <a href="{{ route('blog.show', $post) }}" class="flex flex-col md:flex-row flex-1 min-w-0">
          <div class="md:w-72 shrink-0 bg-gradient-to-br from-sea-100 to-blush-100 flex items-center justify-center min-h-[10rem] md:min-h-[180px]">
            <span class="text-5xl opacity-60 group-hover:scale-110 transition-transform">🌊</span>
          </div>
          <div class="blog-post-card__content">
            <time class="text-xs font-semibold tracking-widest uppercase text-sea-500">{{ $post->created_at?->format('M d, Y') }}</time>
            <h2 class="font-playfair text-xl md:text-2xl font-semibold text-sea-800 mt-2 group-hover:text-sea-600 transition">{{ $post->title }}</h2>
            <p class="font-crimson italic text-sea-700/80 mt-2 line-clamp-2">{{ $post->excerpt }}</p>
            <span class="inline-block mt-4 text-sm font-semibold text-blush-600 group-hover:text-blush-700">Read story →</span>
          </div>
        </a>
        <div class="px-5 pb-4 md:px-4 md:pb-0 md:flex md:items-start md:pt-6 shrink-0">
          <livewire:favorites-toggle :model-type="\App\Models\Blog::class" :model-id="$post->id" />
        </div>
      </article>
    @empty
      <div class="soft-card text-center py-12">
        <p class="script-accent text-2xl">Coming soon</p>
        <p class="feminine-italic mt-2">New Red Sea stories are on their way.</p>
      </div>
    @endforelse
  </div>

  <div class="mt-10 flex justify-center">{{ $posts->links() }}</div>
</div>
</x-app-layout>
