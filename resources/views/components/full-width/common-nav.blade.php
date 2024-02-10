@props(
    [
        'items' => [
            [
                'route' => 'dashboard',
                'label' => 'Dashboard',
                'icon' => 'home',
            ],
        ],
    ]
)

@foreach ($items as $item)
    <li title="{{ $item['label'] }}" class="pt-1 w-full">
        <a
            wire:navigate
            href="{{ route($item['route']) }}"
            class="@active($item['route'])
                flex items-center
                p-2 rounded-md space-x-4 leading-6

                ">
                <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                <span
                    class="text-base font-medium text-gray-300"
                    :class="{'lg:hidden' : !expandDesktopNav}"
                    >{{ $item['label'] }}</span>
        </a>
    </li>
@endforeach
