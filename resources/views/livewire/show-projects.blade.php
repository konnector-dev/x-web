<div>
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold">Projects</h1>
        <button class="p-2 px-4 rounded bg-gray-800/80" wire:click="create">New project</button>
    </div>
    <div class="mt-5">
        @forelse ($projects as $project)
            <div wire:key="{{ $project->id }}" class="flex justify-between items-center p-5 border-0 border-dashed border-gray-500/40 rounded">
                <div>
                    <h2 class="text-xl font-semibold">{{ $project->name }}</h2>
                    <p class="text-gray-500">{{ $project->description }}</p>
                </div>
                <div>
                    <button class="p-2 px-4 rounded bg-gray-800/80" wire:click="edit({{ $project->id }})">Edit</button>
                    <button class="p-2 px-4 rounded bg-red-800/80" wire:confirm="Are you sure you want to delete this project?" wire:click="delete({{ $project->id }})">Delete</button>
                </div>
            </div>
        @empty
            <p>No projects yet.</p>
        @endforelse
    </div>
    <div class="mt-5">
{{--        {{ $projects->links() }}--}}
    </div>
    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            {{ $editing ? 'Edit project' : 'Create project' }}
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col space-y-4 w-96 mx-auto">
                <div>
                    <label for="name" class="block mb-2  font-medium text-gray-900 dark:text-white">Project name *</label>
                    <input type="text" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Project X" />
                    <div class="mt-2">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label for="description" class="block mb-2  font-medium text-gray-900 dark:text-white">Description</label>
                    <input type="text" wire:model="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(Optional)" />
                    <div class="mt-2">
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button class="rounded-lg px-5 py-2.5 text-center bg-blue-600" wire:click="{{ $editing ? 'update' : 'save' }}">Submit</button>
        </x-slot>
    </x-dialog-modal>
</div>
