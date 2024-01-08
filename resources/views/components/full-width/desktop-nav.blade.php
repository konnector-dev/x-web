<!-- Static sidebar for desktop -->
<div
    class="hidden lg:fixed lg:inset-y-0 lg:left-0 lg:z-50 lg:block lg:w-24 lg:overflow-y-auto lg:bg-gray-900 lg:pb-4
        border border-gray-500/20
        border-l-0 border-t-0 border-b-0
    ">
    <div class="flex h-16 shrink-0 items-center justify-center">
        <a href="{{ route('home') }}" alt="{{ Config::get('env_vars.APP_NAME') }}">
            <x-application-logo class="h-8 w-8" />
        </a>
    </div>
    <nav class="mt-8">
        <ul role="list" class="flex flex-col items-center space-y-1">
            <x-full-width.common-nav />
        </ul>
    </nav>
</div>
