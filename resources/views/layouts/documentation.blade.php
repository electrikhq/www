@extends('layouts.www')

@section('content')
<div class="flex flex-col h-screen">
	<div class="flex flex-1 overflow-hidden">
		<div class="flex w-64 p-4 flex-col">
			<div class="version-dropdown mb-4">
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
					<label for="version" class="block text-sm font-medium text-gray-700">Version:</label>
					<select id="version" name="version" x-model="version" @change="updateAction()" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
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
		<div class="flex flex-1 flex-col">
			<div class="flex flex-1 overflow-y-auto paragraph px-6">
				<div class="grid grid-cols-12 gap-4">
					<!-- Main Content Area -->
					<div class="col-span-10 py-12">
						@include('components.breadcrumbs', ['project' => $project, 'version' => $version, 'slug' => $slug])

						<div class="prose !max-w-none">
							@if(isset($html))
							{!! $html !!}
							@else
							@yield('content')
							@endif
						</div>
						<div>
							<hr class="my-6" />
						</div>
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
						<h4 class="font-bold mb-2">On this page</h4>
						<ul class="space-y-1">
							@foreach ($headings as $heading)
							<li class="ml-{{ $heading['level'] == 'h3' ? '4' : '2' }}">
								<a href="#{{ $heading['id'] }}" class="text-neutral-600 hover:underline text-sm">
									{{ $heading['text'] }}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stack('scripts')

@endsection