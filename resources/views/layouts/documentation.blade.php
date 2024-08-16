@extends('layouts.www')

@section('content')
<div class="container mx-auto flex flex-col h-screen">
	<div class="flex flex-1 overflow-hidden">
		<div class="w-64 p-4 flex flex-col bg-neutral-100 dark:bg-neutral-800">
			<div class="mb-4">
				<form x-data="{
                    version: '{{ $version }}',
                    updateAction() {
                        const form = $el;
                        const selectedVersion = this.version;
                        form.action = form.action.replace(/\/{{ $version }}\//, '/' + selectedVersion + '/');
                        form.submit();
                    }
                }"
					action="{{ route('docs.show', ['project' => $project, 'version' => $version, 'slug' => 'index']) }}"
					method="get">
					<label for="version" class="block text-sm font-medium text-gray-700 dark:text-white">Version:</label>
					<select id="version" name="version" x-model="version" @change="updateAction()" class="mt-1 block w-full pl-3 pr-10 py-2 text-sm border-gray-300 focus:outline-none focus:ring-primary-500 focus:border-primary-500 rounded-md">
						@foreach ($availableVersions as $ver)
						<option value="{{ $ver }}" {{ $version == $ver ? 'selected' : '' }}>
							{{ $ver }}
						</option>
						@endforeach
					</select>
				</form>
			</div>

			<ul class="space-y-2">
				@foreach ($sidebar as $item)
				@include('components.sidebar-item', ['item' => $item])
				@endforeach
			</ul>
		</div>
		<div class="flex flex-1 flex-col dark:text-white text-gray-900">
			<div class="flex-1 overflow-y-auto px-6">
				<div class="grid grid-cols-12 gap-4">
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
								<a href="#{{ $heading['id'] }}" class="text-neutral-600 hover:underline">
									{{ $heading['text'] }}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				@include('components.newsletter')
			</div>
		</div>
	</div>
</div>

@stack('scripts')

@endsection
