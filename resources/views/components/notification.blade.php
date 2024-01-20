<div aria-live="assertive" class="z-20 pointer-events-none fixed top-0 right-0 flex items-end px-2 py-2 sm:items-start">
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end flex-shrink-0">
        <div
            x-data="{
                show: false,
                timeout: 100000,
                message: @entangle('message')
            }"
            x-on:action-successful.window="
                show = true;
                setTimeout(() => show = false, timeout);
            "
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-show="show"
            x-cloak
            class="">
            <div class="pointer-events-auto w-full max-w-sm overflow-hidden bg-gray-700/50 backdrop-blur rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <span class="material-symbols-outlined text-green-500">check_circle</span>
                        <p class="ml-3 text-base shrink-0" x-text="message"></p>
                        <button
                            type="button"
                            class="ml-4 inline-flex rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            @click="show=false">
                            <span class="sr-only">Close</span>
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
