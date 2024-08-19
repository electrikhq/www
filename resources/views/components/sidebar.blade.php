<div class="flex-1 flex flex-col">
    <div class="flex items-center h-16 px-4 bg-gray-100 dark:bg-gray-900">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ config('app.name', 'Electrik') }}</h2>
    </div>
    <nav class="flex-1 px-2 py-4 bg-white dark:bg-gray-800">
        <ul class="space-y-1">
            @foreach ($sidebar as $item)
                @include('components.sidebar-item', ['item' => $item])
            @endforeach
        </ul>
    </nav>
</div>
