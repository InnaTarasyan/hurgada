<nav x-data="{ open: false }" class="site-nav">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-[4.25rem]">
            <div class="flex items-center gap-8">
                <!-- Brand -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 group">
                    <x-application-logo class="block h-10 w-10 fill-current transition-transform group-hover:scale-105" />
                    <div class="hidden sm:block">
                        <div class="nav-brand-title">Red Sea Diaries</div>
                        <div class="nav-brand-tagline">Hurghada travel blog</div>
                    </div>
                </a>

                <!-- Desktop nav -->
                <div class="hidden lg:flex items-center gap-1">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">{{ __('Home') }}</x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">{{ __('About') }}</x-nav-link>
                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.*')">{{ __('Journal') }}</x-nav-link>
                    <x-nav-link :href="route('attractions.index')" :active="request()->routeIs('attractions.*')">{{ __('Discover') }}</x-nav-link>
                    <x-nav-link :href="route('gallery.index')" :active="request()->routeIs('gallery.index')">{{ __('Gallery') }}</x-nav-link>
                    <x-nav-link :href="route('events.index')" :active="request()->routeIs('events.*')">{{ __('Events') }}</x-nav-link>
                    <x-nav-link :href="route('hotels.index')" :active="request()->routeIs('hotels.*')">{{ __('Stay') }}</x-nav-link>
                    <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">{{ __('Contact') }}</x-nav-link>
                </div>
            </div>

            <!-- Auth -->
            <div class="hidden sm:flex sm:items-center sm:gap-3">
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium text-sea-700 bg-white ring-1 ring-sea-100 hover:ring-sea-200 transition">
                            <span class="w-7 h-7 rounded-full bg-gradient-to-br from-sea-400 to-blush-400 flex items-center justify-center text-white text-xs font-bold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                            {{ Auth::user()->name }}
                            <svg class="fill-current h-4 w-4 text-sea-500" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-sea-700 hover:text-sea-900 px-3 py-2">{{ __('Log in') }}</a>
                    <a href="{{ route('register') }}" class="btn-primary text-sm !py-2 !px-5">{{ __('Join') }}</a>
                @endauth
            </div>

            <!-- Mobile menu -->
            <div class="flex items-center lg:hidden">
                <button @click="open = ! open" class="p-2 rounded-xl text-sea-600 hover:bg-blush-50 transition" aria-label="Menu">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden border-t border-blush-100 bg-white/95 backdrop-blur-md">
        <div class="px-4 py-4 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">{{ __('Home') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">{{ __('About') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.*')">{{ __('Journal') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('attractions.index')" :active="request()->routeIs('attractions.*')">{{ __('Discover') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('gallery.index')" :active="request()->routeIs('gallery.index')">{{ __('Gallery') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('events.index')" :active="request()->routeIs('events.*')">{{ __('Events') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('forum.index')" :active="request()->routeIs('forum.*')">{{ __('Forum') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('hotels.index')" :active="request()->routeIs('hotels.*')">{{ __('Stay') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('restaurants.index')" :active="request()->routeIs('restaurants.*')">{{ __('Eat') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">{{ __('Contact') }}</x-responsive-nav-link>
        </div>
        <div class="px-4 pb-4 border-t border-blush-50 pt-4">
            @auth
                <p class="text-sm font-medium text-sea-800 px-4 mb-2">{{ Auth::user()->name }}</p>
                <x-responsive-nav-link :href="route('profile.edit')">{{ __('Profile') }}</x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-responsive-nav-link>
                </form>
            @else
                <div class="flex gap-2 px-2">
                    <a href="{{ route('login') }}" class="flex-1 text-center py-2.5 rounded-xl text-sea-700 ring-1 ring-sea-200 text-sm font-medium">{{ __('Log in') }}</a>
                    <a href="{{ route('register') }}" class="flex-1 btn-primary text-sm !py-2.5 justify-center">{{ __('Join') }}</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
