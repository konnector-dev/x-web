<!-- Static sidebar for desktop -->
<div
    x-data
    class="hidden lg:fixed lg:inset-y-0 lg:left-0 lg:z-10 lg:block
        lg:overflow-y-auto lg:bg-gray-900 lg:pb-4
        border border-gray-500/20
        border-l-0 border-t-0 border-b-0
        min-h-screen h-screen
        flex flex-col items-center justify-between
        relative
    "
    :class="{'lg:w-64': expandDesktopNav}"
    >
    <div>
        <div class="flex h-16 shrink-0 items-center justify-center">
            <a href="{{ route('home') }}" alt="{{ Config::get('env_vars.APP_NAME') }}">
                <x-application-logo class="h-8 w-8" />
            </a>
        </div>
        <nav class="mt-8">
            <ul role="list" class="space-y-1 m-2.5 p-2.5">
                <x-full-width.common-nav />
            </ul>
        </nav>
    </div>
    <div
        x-show="expandDesktopNav"
        @click="$dispatch('collapse-desktop-navbar')"
        class="absolute right-0 bottom-0 m-2.5 p-2.5 cursor-pointer">
        <div class="flex h-8 items-center justify-start">
            <span class="material-symbols-outlined">keyboard_double_arrow_left</span>
        </div>
    </div>
    <div
        x-show="!expandDesktopNav"
        @click="$dispatch('expand-desktop-navbar')"
        class="absolute right-0 bottom-0 m-2.5 p-2.5 cursor-pointer">
        <div class="flex h-8 items-center justify-start">
            <span class="material-symbols-outlined">keyboard_double_arrow_right</span>
        </div>
    </div>
</div>
