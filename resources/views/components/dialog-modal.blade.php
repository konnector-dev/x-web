@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100 flex items-start justify-between">
            <span>{{ $title }}</span>
            <button class="text-center" @click="show = false">x</button>
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-between px-6 py-4 bg-gray-100 dark:bg-gray-800 text-end">
        {{ $footer }}
        <button class="rounded-lg px-5 py-2.5 text-center border border-blue-600" @click="show = false">Close</button>
    </div>
</x-modal>
