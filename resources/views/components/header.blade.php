<header class="bg-gray-900" x-data="{
    open: true,
    mobileOpen: false
}">
    <nav x-show="open" class="hidden lg:flex mx-auto max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ url(route('home')) }}" class="-m-1.5 p-1.5 flex items-center gap-x-2 text-xl">
                <span class="sr-only">{{ Config::get('env_vars.APP_NAME') }}</span>
                <div><x-application-logo :class="'h-6 w-6'"/></div>
                <span class="text-gray-300">{{ Config::get('env_vars.APP_NAME') }}</span>
            </a>
        </div>
        @auth
            <a href="{{ url(route('dashboard')) }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Dashboard</a>
        @else
            <div class="flex items-center text-xl gap-6 text-white leading-6 font-semibold">
                <a href="{{ url(route('register')) }}">Register</a>
                <a
                    href="{{ url(route('login')) }}"
                    class="px-6 py-3 rounded-full bg-blue-500/50 hover:bg-blue-600/50">Log in</a>
            </div>
        @endauth
    </nav>
    <div class="flex lg:hidden fixed top-0 right-0 p-6">
        <button @click="mobileOpen=true" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="mobileOpen">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5 flex items-center gap-x-2">
                    <span class="sr-only">{{ Config::get('env_vars.APP_NAME') }}</span>
                    <div><x-application-logo :class="'h-6 w-6'"/></div>
                    <span class="text-gray-300">{{ Config::get('env_vars.APP_NAME') }}</span>
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400" @click="mobileOpen=false">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="py-6">
                        @auth
                            <a href="{{ url(route('dashboard')) }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Dashboard</a>
                        @else
                            <a href="{{ url(route('register')) }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Register</a>
                            <a href="{{ url(route('login')) }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Log in</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
