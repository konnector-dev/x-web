@props(
    [
        'items' => [
            [
                'route' => 'dashboard',
                'label' => 'Dashboard',
                'icon' => 'home',
            ],
            [
                'route' => 'projects.index',
                'label' => 'Projects',
                'icon' => 'list',
            ]
        ],
    ]
)

@foreach ($items as $item)
    <li title="{{ $item['label'] }}" class="pt-1 w-full">
        <a wire:navigate href="{{ route($item['route']) }}"  class="@active($item['route']) flex flex-col justify-between items-center group gap-x-3 rounded-md px-3 p-2 text-sm leading-6">
            <div class="flex flex-col items-center justify-between space-y-3">
                <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                <span
                    class=" text-xs font-medium text-gray-300
                    ">{{ $item['label'] }}</span>
            </div>
        </a>
    </li>
@endforeach
