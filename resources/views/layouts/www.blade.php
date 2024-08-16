<!DOCTYPE html>
<html lang="en" class="h-full w-full">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
			@if($title) {{ ucwords($title) }} - @endif @if($project) {{ ucwords($project) }} - @endif @if($version) {{ ucwords($version) }} - @endif {{ config('app.name', 'Electrik') }} - {{ config('app.tagline', 'Laravel SaaS Starter Kit') }}
		</title>

		<meta name="description" content="@if($description){{ ($description) }}@endif">

		<meta property="og:title" content="@if($title) {{ ucwords($title) }} - @endif @if($project) {{ ucwords($project) }} - @endif @if($version) {{ ucwords($version) }} - @endif {{ config('app.name', 'Electrik') }} - {{ config('app.tagline', 'Laravel SaaS Starter Kit') }}" />
		<meta property="og:type" content="website" />
		<meta property="og:URL" content="{{ request()->url() }}" />
		<meta property="og:description" content="@if($description){{ ($description) }}@endif" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		@stack('styles')

		@vite(['resources/css/application.css', 'resources/js/application.js'])
        
	</head>


	<body class="bg-white text-gray-900 antialiased leading-normal flex flex-col h-full w-full">

		@include('partials.navbar')
		
		<div class="flex flex-col h-full w-full">

			@if(isset($slot))
				{!! $slot !!}
			@else
				@yield('content')
			@endif

		</div>

		@stack('scripts')

		
	</body>
</html>