<li>
    @if ($item['type'] === 'folder')
        <span class="font-bold">{{ $item['title'] }}</span>
        <ul class="ml-4 space-y-1">
            @foreach ($item['children'] as $child)
                @include('components.sidebar-item', ['item' => $child])
            @endforeach
        </ul>
    @elseif ($item['type'] === 'file')
        <a href="{{ $item['link'] }}" class="text-blue-600 hover:underline">
            {{ $item['title'] }}
        </a>
    @endif
</li>
