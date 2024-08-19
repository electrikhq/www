@extends('layouts.www')

@section('content')
    <div class="grid grid-cols-12 gap-12">
        <!-- Main Content Area -->
        <div class="col-span-10 py-12">
            @include('components.breadcrumbs', ['project' => $project, 'version' => $version, 'slug' => $slug])

            <div class="prose dark:prose-invert !max-w-none">
                @if(isset($html))
                {!! $html !!}
                @else
                @yield('content')
                @endif
            </div>
            <hr class="my-6" />
            <div class="mt-8 flex justify-between">
                @if ($previousPage)
                <x-slate::button href="{{ $previousPage['link'] }}" class="mr-auto" icon="carbon-arrow-left" icon-position="before">
                    {{ $previousPage['title'] }}
                </x-slate::button>
                @endif

                @if ($nextPage)
                <x-slate::button href="{{ $nextPage['link'] }}" class="ml-auto" icon="carbon-arrow-right" icon-position="after">
                    {{ $nextPage['title'] }}
                </x-slate::button>
                @endif
            </div>
        </div>

        <!-- Right Sidebar (On This Page) -->
        <div class="col-span-2 py-12">
            <h4 class="font-bold mb-2 text-black">On this page</h4>
            <ul class="space-y-1 text-sm">
                @foreach ($headings as $heading)
                {{-- ml-2 ml-4 ml-6 --}}
                <li class="ml-{{ $heading['level'] == 'h3' ? '6' : '2' }}">
                    <a href="#{{ $heading['id'] }}" class="text-neutral-600 hover:underline dark:text-neutral-300">
                        {{ $heading['text'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection