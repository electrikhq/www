@php 
    $parts = $slug && $slug !== 'index' ? explode('/', $slug) : [];
    $url = route('docs.show', ['project' => $project, 'version' => $version, 'slug' => '']);
@endphp

<nav class="text-sm font-medium mb-4" aria-label="Breadcrumb">
    <ol class="flex flex-wrap items-center space-x-1 md:space-x-3 ml-0 ps-0">
        <li class="flex items-center">
            <a href="{{ url('/') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                Home
            </a>
        </li>
        <li class="flex items-center">
            <x-slate::icon icon="carbon-chevron-right" size="xs" />
        </li>
        <li class="flex items-center">
            <a href="{{ route('docs.show', ['project' => $project, 'version' => $version, 'slug' => 'index']) }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                {{ ucfirst($project) }}
            </a>
        </li>
        <li class="flex items-center">
            <x-slate::icon icon="carbon-chevron-right" size="xs" />
        </li>
        <li class="flex items-center">
            <a href="{{ route('docs.show', ['project' => $project, 'version' => $version, 'slug' => 'index']) }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                Version {{ $version }}
            </a>
        </li>
        @if ($parts)
            @foreach ($parts as $index => $part)
                @php
                    $url .= '/' . $part;
                @endphp
                <li class="flex items-center">
                    <x-slate::icon icon="carbon-chevron-right" size="xs" />
                </li>
                <li class="flex items-center">
                    @if($index < count($parts) - 1)
                        <span class="text-gray-500 dark:text-gray-400">{{ str_replace('-', ' ', ucwords($part)) }}</span>
                    @else
                        <a href="{{ $url }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            {{ str_replace('-', ' ', ucwords($part)) }}
                        </a>
                    @endif
                </li>
            @endforeach
        @endif
    </ol>

    <!-- JSON-LD Breadcrumb Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "{{ url('/') }}"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "{{ ucfirst($project) }}",
                    "item": "{{ route('docs.show', ['project' => $project, 'version' => $version, 'slug' => 'index']) }}"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Version {{ $version }}",
                    "item": "{{ route('docs.show', ['project' => $project, 'version' => $version, 'slug' => 'index']) }}"
                }
                @foreach ($parts as $index => $part)
                ,{
                    "@type": "ListItem",
                    "position": {{ $index + 4 }},
                    "name": "{{ str_replace('-', ' ', ucwords($part)) }}",
                    "item": "{{ $index < count($parts) - 1 ? '' : route('docs.show', ['project' => $project, 'version' => $version, 'slug' => implode('/', array_slice($parts, 0, $index + 1))]) }}"
                }
                @endforeach
            ]
        }
    </script>
</nav>
