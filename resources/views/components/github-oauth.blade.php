<div class="flex flex-col justify-center items-center">
    <div class="w-full max-w-md">
        <a
            class="space-x-4 mx-auto py-2 flex items-center justify-center rounded-xl bg-black"
            title="Login with GitHub"
            href="{{ url(route('github.login')) }}">
            <div>
                <img
                    src="{{ asset('images/raw-github-white.svg') }}"
                    alt="GitHub OAuth Login"
                    class="w-12 h-12"
                />
            </div>
            <span class="text-white ml-2">
                {{ __('Login with GitHub') }}
            </span>
        </a>
    </div>
</div>
