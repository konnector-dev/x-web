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
        <a
            wire:navigate
            href="{{ route($item['route']) }}"
            class="@active($item['route'])
                flex lg:flex-col lg:justify-between items-center
                p-2
                rounded-md space-x-4 leading-6">
                <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                <span
                    class=" text-xs font-medium text-gray-300
                    ">{{ $item['label'] }}</span>
        </a>
    </li>
@endforeach
