@extends('layouts.www')

@section('content')
	<div class="grid grid-cols-12 gap-4 h-full flex-col">
		<div class="col-span-2 bg-neutral-100 h-full p-2">
			<div class="version-dropdown">
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
					method="get"
				>
					<label for="version">Version:</label>
					<select id="version" name="version" x-model="version" @change="updateAction()">
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
		<div class="col-span-9 py-2">
			<div class="grid grid-cols-12 gap-4">
				<div class="col-span-10">
					<div class="prose col-span-10">
						@if(isset($html))
							{!! $html !!}
						@else
							@yield('content')
						@endif
					</div>
					<div><hr class="my-6"/></div>
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
				<div class="col-span-2">
					<h4 class="font-bold mb-2">On this page</h4>
					<ul class="space-y-1">
						@foreach ($headings as $heading)
							<li class="ml-{{ $heading['level'] == 'h3' ? '4' : '2' }}">
								<a href="#{{ $heading['id'] }}" class="text-blue-600 hover:underline">
									{{ $heading['text'] }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
	@stack('scripts')
		
@endsection