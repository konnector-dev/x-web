<div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        @forelse($urls as $url)
        <div wire:key="{{ $url->id }}" class="flex items-center gap-4 p-4 border border-gray-500/50 rounded-lg relative">
            <div class="flex flex-col">
                <span class="text-sm">#{{ $url->project->name }}</span>
                <span class="font-semibold text-lg">{{ $url->name }}</span>
                <a href="#" class="text-sm text-gray-400" rel="ugc">
                    {{ $url->url }}
                </a>
            </div>
            @php
                $color = $url->http_status_code === \Symfony\Component\HttpFoundation\Response::HTTP_OK
                        ? ' text-green-500 bg-green-400/10 '
                        : ' text-red-500 bg-red-500/20 animate-ping animate-pulse ';
            @endphp
            <div class="absolute top-0 right-0 pt-4 pr-4">
                <div class="flex-none rounded-full p-1 {{ $color }}">
                    <div class="h-2 w-2 rounded-full bg-current"></div>
                </div>
            </div>
        </div>
        @empty
        <div class="flex items-center justify-center p-4 border rounded-lg bg-white dark:bg-gray-950">
            <span class="text-gray-500 dark:text-gray-400">No URLs</span>
        </div>
        @endforelse
    </div>
</div>
