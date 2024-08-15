@extends('layouts.www')

@section('content')

	<div class="docs-layout flex">
		<!-- Left Sidebar -->
		<aside class="sidebar w-1/6 p-4 bg-neutral-100 h-full text-sm">
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
		</aside>

		<!-- Main Content -->
		<div class="content flex-1 p-4">
			<div class="prose">
				@if(isset($html))
					{!! $html !!}
				@else
					@yield('content')
				@endif
			</div>
		</div>

		<!-- Right Sidebar for TOC -->
		<aside class="toc-sidebar w-1/6 p-4 bg-gray-100">
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
		</aside>
	</div>

	@stack('scripts')
		
@endsection