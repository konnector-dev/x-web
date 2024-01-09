<div
    class="sticky top-0 z-40
    px-4 h-16 shrink-0 gap-x-4
    flex items-center
    border-b border-gray-500/20
    bg-gray-900/50 backdrop-blur-lg
    "
    x-data="{ profileDropdownOpen: false }"
    @click.away="profileDropdownOpen = false"
    @close.stop="profileDropdownOpen = false"
    >
    <button type="button" class="-m-2.5 p-2.5 hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

    <!-- Separator -->
    <div class="h-6 w-px lg:hidden" aria-hidden="true"></div>

    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6 justify-end">
        <form class="relative flex flex-1 hidden" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <input id="search-field" class="block bg-gray-900/50 h-full w-full border-0 py-0 pl-8 pr-0 text-white placeholder:text-gray-500 focus:ring-0 sm:text-sm" placeholder="Search..." type="search" name="search">
        </form>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <button type="button" class="p-2.5 text-gray-400 hover:text-gray-500 hidden">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
            </button>

            <!-- Separator -->
            <div class="hidden " aria-hidden="true"></div>

            <!-- Profile dropdown -->
            <div class="relative">
                <button
                    type="button"
                    class="-m-1.5 flex items-center p-1.5"
                    @click="profileDropdownOpen = ! profileDropdownOpen"
                    id="user-menu-button"
                    aria-expanded="false"
                    aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <span title="{{ Auth::user()->name }}" class="h-8 w-8 rounded-full object-cover hidden" data-src="" alt="{{ Auth::user()->name }}"></span>
                    <img title="{{ Auth::user()->name }}" class="h-8 w-8 rounded-full object-cover" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="{{ Auth::user()->name }}" />
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 font-semibold leading-6 hidden" aria-hidden="true">{{ Auth::user()->name }}</span>
                        <svg class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                <div
                    class="absolute right-0 z-10 origin-top-right
                        mt-3.5 w-40
                        rounded-md py-2
                        shadow-lg ring-1 ring-gray-900/5 focus:outline-none
                        border border-gray-500/20
                        bg-gray-900
                        "
                    x-show="profileDropdownOpen"
                    x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    role="menu"
                    aria-orientation="vertical"
                    aria-labelledby="user-menu-button"
                    tabindex="-1">
                    <!-- Active: "bg-gray-50", Not Active: "" -->
                    <div class="px-3 py-1 text-xs text-gray-500 cursor-default">Manage Account</div>
                    <a href="{{ route('profile.show') }}" class="block px-3 py-1 leading-6 " role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
                    <div class="border-t border-gray-600/50 my-2"></div>
                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                        class="block px-3 py-1 leading-6"
                        x-data>
                        @csrf
                        <x-dropdown-link
                            href="{{ route('logout') }}"
                            @click.prevent="$root.submit();"
                            :class="'block px-0 py-0 leading-7 text-left text-base'"
                        >
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
