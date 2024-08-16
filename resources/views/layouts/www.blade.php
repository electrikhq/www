<!DOCTYPE html>
<html lang="en" class="h-full w-full">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
			@if(isset($title) && $title) {{ ucwords($title) }} - @endif @if(isset($project) && $project) {{ ucwords($project) }} - @endif @if(isset($version) && $version) {{ ucwords($version) }} - @endif {{ config('app.name', 'Electrik') }} - {{ config('app.tagline', 'Laravel SaaS Starter Kit') }}
		</title>

		<meta name="description" content="@if(isset($description) && $description){{ ($description ?? '') }}@endif">

		<meta property="og:title" content="@if(isset($title) && $title) {{ ucwords($title) }} - @endif @if(isset($project) && $project) {{ ucwords($project) }} - @endif @if(isset($version) && $version) {{ ucwords($version) }} - @endif {{ config('app.name', 'Electrik') }} - {{ config('app.tagline', 'Laravel SaaS Starter Kit') }}" />
		<meta property="og:type" content="website" />
		<meta property="og:URL" content="{{ request()->url() }}" />
		<meta property="og:description" content="@if(isset($description) && $description){{ ($description ?? '') }}@endif" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		@stack('styles')

		@vite(['resources/css/application.css', 'resources/js/application.js'])

        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N8D7KL4F');</script>
<!-- End Google Tag Manager -->
	</head>


	<body class="bg-white text-gray-900 dark:bg-black dark:text-white antialiased leading-normal flex flex-col h-full">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8D7KL4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<x-slate::alert full-width>
            [Update 15th Aug 2024]: I am currently updating the site. I am also importing existing documenation on this site for better experience. Please bear with me for few more days!
        </x-slate::alert>
		@include('partials.navbar')
		
		<div class="flex flex-col">

			@if(isset($slot))
				{!! $slot !!}
			@else
				@yield('content')
			@endif

		</div>

		@include('components.footer')

		@stack('scripts')

		
	</body>
</html>