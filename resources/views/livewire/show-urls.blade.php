<div>
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold">{{ $project->name }}</h1>
        <button class="p-3 px-6 rounded-lg font-semibold text-lg bg-gray-800/80" wire:click="create">New URL</button>
    </div>

    <div class="mt-5">
        <ul role="list" class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-6">
            @forelse ($urls as $url)
                <li
                    wire:key="{{ $url->id }}"
                    class="group border border-gray-900 hover:border-gray-500 relative col-span-1 rounded-lg bg-gray-800 shadow flex flex-col justify-between pb-4">
                    <div class="flex w-full items-center justify-between space-x-6 p-6" >
                        <div class="truncate">
                            <div class="flex items-centergroup-hover:underline">
                                <div class="absolute top-0 right-0 p-4 text-3xl text-gray-500/30 group-hover:text-gray-200">
                                    #{{ $url->id }}
                                </div>
                                <h3 class="font-medium text-lg">{{ $url->name }}</h3>
                            </div>
                            <p class="mt-1 truncate hover:text-clip text-sm text-gray-500">{{ $url->url }}</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between space-x-2 border border-b-0 border-l-0 border-r-0 border-gray-500/20 pt-4">
                        <div class="w-full mx-auto text-center">
                            <button class="p-2 px-4 rounded border border-gray-500 bg-gray-800/80 hover:bg-gray-700" wire:click="edit({{ $url->id }})">Edit</button>
                        </div>
                        <div class="w-full mx-auto text-center">
                            <button class="p-2 px-4 rounded border border-gray-500 bg-red-800/80 hover:bg-red-800" wire:confirm="Are you sure you want to delete this url?" wire:click="delete({{ $url->id }})">Delete</button>
                        </div>
                    </div>
                </li>
            @empty
                <p>No urls</p>
            @endforelse
        </ul>
    </div>
    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            {{ $editing ? 'Edit URL' : 'Create URL' }}
        </x-slot>

        <x-slot name="content">
            <div class="space-y-4">
                <div class="flex flex-col">
                    <label for="name" class="text-sm font-medium">Name</label>
                    <input type="text" name="name" id="name" wire:model.defer="name" class="mt-1 p-2 rounded-lg border border-gray-500 bg-gray-800/80">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col">
                    <label for="url" class="text-sm font-medium">URL</label>
                    <input type="url" name="url" id="url" wire:model.defer="url" class="mt-1 p-2 rounded-lg border border-gray-500 bg-gray-800/80 text-gray-200">
                    @error('url') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button class="rounded-lg px-5 py-2.5 text-center bg-blue-600" wire:click="{{ $editing ? 'update' : 'save' }}">Save</button>
        </x-slot>
    </x-dialog-modal>
    <div aria-live="assertive" class="pointer-events-none fixed bottom-0 right-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
        <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
            <div
                x-data="{
                        show: false,
                        timeout: 10000,
                        message: @entangle('message')
                    }"
                x-on:notify-url-saved.window="
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
                <div class="pointer-events-auto w-full max-w-sm overflow-hidden bg-gray-700 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3 flex-1 pt-0.5">
                                <p class="font-medium" x-text="message"></p>
                            </div>
                            <div class="ml-4 flex flex-shrink-0" @click="show=false">
                                <button type="button" class="inline-flex rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
