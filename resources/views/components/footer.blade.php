<footer>
    <div class="mx-auto max-w-7xl px-6 py-12 lg:flex lg:items-center lg:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 lg:order-2">
            <a target="_blank" href="https://twitter.com/jdecode">
                <span class="sr-only">Twitter</span>
                <img src="{{ asset('images/twitter-white.svg') }}" alt="Twitter" class="h-8 w-8" />
            </a>
            <a target="_blank" href="https:///github.com/jdecode/watcher">
                <span class="sr-only">GitHub</span>
                <img src="{{ asset('images/raw-github-white.svg') }}" alt="GitHub" class="h-8 w-8" />
            </a>
        </div>
        <div class="mt-8 lg:order-1 lg:mt-0">
            <p class="text-center text-xs leading-5 text-gray-500">&copy; {{ date('Y') }} {{ Config::get('env_vars.APP_NAME') }} </p>
        </div>
    </div>
</footer>
<x-screen-size-indicator />
