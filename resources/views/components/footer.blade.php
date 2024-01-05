<footer>
    <div class="mx-auto max-w-7xl px-6 py-2 flex flex-col items-center justify-center lg:px-8">
        <div class="flex justify-center space-x-6">
            <a target="_blank" href="https://twitter.com/jdecode">
                <span class="sr-only">Twitter</span>
                <img src="{{ asset('images/twitter-white.svg') }}" alt="Twitter" class="h-8 w-8" />
            </a>
            <a target="_blank" href="https:///github.com/jdecode/watcher">
                <span class="sr-only">GitHub</span>
                <img src="{{ asset('images/raw-github-white.svg') }}" alt="GitHub" class="h-8 w-8" />
            </a>
        </div>
        <div class="order-1 mt-0">
            <p class="text-center text-xs leading-5 text-gray-500">&copy; {{ date('Y') }} {{ Config::get('env_vars.APP_NAME') }} </p>
            <x-screen-size-indicator />
        </div>
    </div>
</footer>
