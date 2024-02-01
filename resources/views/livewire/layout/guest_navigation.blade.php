<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center shrink-0">
                <a href="{{ route('dashboard') }}" wire:navigate>
                    My Notes
                </a>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                @guest
                    {{-- Display login and register links if the user is not logged in --}}
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                        {{ __('Register') }}
                    </x-nav-link>
                @else
                    {{-- Display profile link if the user is logged in --}}
                    <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-nav-link>
                @endguest
            </div>
        </div>
    </div>
</nav>
