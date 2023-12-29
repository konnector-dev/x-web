<div class="block mt-4">
    <div class="mt-4">
        <a
            class="w-2/3 mx-auto px-4 py-2 flex items-center justify-center rounded-xl border-2 border-black bg-black"
            href="{{ url(route('github.login')) }}">
            <div>
                <img
                    src="{{ asset('images/raw-github-white.svg') }}"
                    alt="GitHub OAuth Login"
                    title="GitHub OAuth Login"
                    class="w-12 h-12"
                />
            </div>
            <span class="text-white ml-2">
                {{ __('Login with GitHub') }}
            </span>
        </a>
    </div>
</div>
