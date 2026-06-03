<x-app-layout>
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
  <a href="{{ route('blog.index') }}" class="inline-flex items-center text-sm font-medium text-sea-600 hover:text-blush-600 transition mb-8">
    ← Back to journal
  </a>

  <article>
    <span class="section-eyebrow">{{ $blog->created_at?->format('F j, Y') }}</span>
    <h1 class="font-playfair text-3xl md:text-4xl font-bold text-sea-800 mt-4 leading-tight">{{ $blog->title }}</h1>
    @if($blog->excerpt)
      <p class="font-crimson text-xl italic text-sea-700/80 mt-4 leading-relaxed">{{ $blog->excerpt }}</p>
    @endif

    <div class="mt-8 prose-blog">
      {!! nl2br(e($blog->content)) !!}
    </div>
  </article>

  <div class="mt-10 pt-8 border-t border-sea-100 space-y-6">
    <livewire:favorites-toggle :model-type="\App\Models\Blog::class" :model-id="$blog->id" />
    <livewire:comments :model-type="\App\Models\Blog::class" :model-id="$blog->id" />
  </div>
</div>
</x-app-layout>
