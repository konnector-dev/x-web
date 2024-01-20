<div
    @click="$dispatch('show-mobile-navbar')"
    @click.outside="$dispatch('hide-mobile-navbar')"
    @keydown.escape.window="$dispatch('hide-mobile-navbar')"
    class="absolute z-20 left-0 top-0 w-16">
    <button type="button" class="m-2.5 p-2.5 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <span class="material-symbols-outlined">menu</span>
    </button>
</div>

<div
    x-cloak
    x-show="openMobileNav"
    class="relative z-20 lg:hidden"
    role="dialog"
    aria-modal="true">

    <div
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-900/80"></div>

    <div
        class="fixed inset-0 flex">
        <div
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex">
            <div
                x-transition:enter="ease-in-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute left-full top-0 flex w-16 justify-center pt-5">
                <button type="button" class="-m-2.5 p-2.5">
                    <span class="sr-only">Close sidebar</span>
                    <span @click="$dispatch('hide-mobile-navbar')" class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div
                class="flex flex-col
                    overflow-y-auto
                    bg-gray-900/50 backdrop-blur
                    pb-2 w-64
                    ring-1 ring-white/10">
                <nav class="flex flex-col">
                    <ul class="space-y-1 m-2.5 p-2.5">
                        <li class="mb-4">
                            <a
                                title="{{ Config::get('env_vars.APP_NAME') }}"
                                href="{{ route('home') }}"
                                class="flex justify-start items-center space-x-4 px-2">
                                <x-application-logo class="h-6 w-6" />
                                <span class="">{{ Config::get('env_vars.APP_NAME') }}</span>
                            </a>
                        </li>
                        <x-full-width.common-nav />
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
