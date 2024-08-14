<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Electrik') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		@stack('styles')

		@vite(['resources/css/application.css', 'resources/js/application.js'])
        
	</head>


	<body class="bg-gray-100 text-gray-900 antialiased leading-normal font-sans">


		<div class="">

			@if(isset($slot))
				{{ $slot }}
			@else
				@yield('content')
			@endif

		</div>

		@stack('scripts')


	</body>
</html>