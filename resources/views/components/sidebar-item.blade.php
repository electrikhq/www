<li class="mb-2">
    @if ($item['type'] === 'folder')
        <div class="font-bold text-gray-700 dark:text-gray-300 flex items-center cursor-pointer">
            {{ $item['title'] }}
        </div>
        <ul class="mt-2 space-y-1">
            @foreach ($item['children'] as $child)
                <li class="">
                    @include('components.sidebar-item', ['item' => $child])
                </li>
            @endforeach
        </ul>
    @elseif ($item['type'] === 'file')
        @php
            $isActive = request()->url() == (trim($item['link'], '/'));
        @endphp
        <a href="{{ $item['link'] }}" class="border-l border-gray-300 dark:border-gray-600 pl-4 hover:border-primary-600 dark:hover:border-primary-600 flex items-center {{ $isActive ? 'text-blue-600 dark:text-blue-400' : 'text-gray-600 dark:text-gray-400' }} hover:underline">
            {{ $item['title'] }}
        </a>
    @endif
</li>
