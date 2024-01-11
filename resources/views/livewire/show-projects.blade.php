<div>
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold">Projects</h1>
        <button class="p-3 px-6 rounded-lg font-semibold text-lg bg-gray-800/80" wire:click="create">New project</button>
    </div>

    <ul role="list" class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 mt-6">
        @forelse ($projects as $project)
        <li
            wire:key="{{ $project->id }}"
            class="group border border-gray-900 hover:border-gray-500 relative col-span-1 rounded-lg bg-gray-800 shadow flex flex-col justify-between pb-4">
            <a wire:navigate class="flex w-full items-center justify-between space-x-6 p-6" href="{{ route('projects.view', $project->id) }}">
                <div class="truncate">
                    <div class="flex flex-col items-start group-hover:underline">
                        <div class="absolute top-0 right-0 p-4 text-3xl text-gray-500/30 group-hover:text-gray-200">
                            #{{ $project->id }}
                        </div>
                        <h3 class="font-medium text-lg">{{ $project->name }}</h3>
                        <div>
                            {{ $project->urls_count ? "No. of URLs : $project->urls_count" : ''  }}
                        </div>
                    </div>
                    <p class="mt-1 truncate hover:text-clip text-sm text-gray-500">{{ $project->description }}</p>
                </div>
            </a>
            <div class="flex items-center justify-between space-x-2 border border-b-0 border-l-0 border-r-0 border-gray-500/20 pt-4">
                <div class="w-full mx-auto text-center">
                    <button class="p-2 px-4 rounded border border-gray-500 bg-gray-800/80 hover:bg-gray-700" wire:click="edit({{ $project->id }})">Edit</button>
                </div>
                <div class="w-full mx-auto text-center">
                    <button class="p-2 px-4 rounded border border-gray-500 bg-red-800/80 hover:bg-red-800" wire:confirm="Are you sure you want to delete this project?" wire:click="delete({{ $project->id }})">Delete</button>
                </div>
            </div>
        </li>
        @empty
            <p>No projects</p>
        @endforelse
    </ul>

    <div class="mt-5">
        {{-- {{ $projects->links() }} --}}
    </div>
    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            {{ $editing ? 'Edit project' : 'Create project' }}
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col space-y-4 w-[80%] mx-auto">
                <div>
                    <label for="name" class="block mb-2  font-medium text-gray-900 dark:text-white">Project name *</label>
                    <input type="text" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Project X" />
                    <div class="mt-2">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label for="description" class="block mb-2  font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea
                        wire:model="description"
                        id="description"
                        rows="5"
                        class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="(Optional)"></textarea>
                    <div class="mt-2">
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button class="rounded-lg px-5 py-2.5 text-center bg-blue-600" wire:click="{{ $editing ? 'update' : 'save' }}">Save</button>
        </x-slot>
    </x-dialog-modal>
</div>
