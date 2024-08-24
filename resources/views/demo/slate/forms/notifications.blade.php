<!DOCTYPE html>
<html lang="en" class="bg-white dark:bg-black h-screen">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Electrik Slate - Laravel Blade UI Kit Demo - {{ config('app.name', 'Electrik') }} - {{ config('app.tagline', 'Laravel SaaS Starter Kit') }}
    </title>

    <meta name="description" content="@if(isset($description) && $description){{ ($description ?? '') }}@endif">
    <meta property="og:title" content="Electrik Slate - Laravel Blade UI Kit Demo - {{ config('app.name', 'Electrik') }} - {{ config('app.tagline', 'Laravel SaaS Starter Kit') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:URL" content="{{ request()->url() }}" />
    <meta property="og:description" content="@if(isset($description) && $description){{ ($description ?? '') }}@endif" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">

    @vite(['resources/css/application.css', 'resources/js/application.js'])

    @stack('styles')

    @yield('head')

    <!-- N8D7KL4F -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N8D7KL4F');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="min-h-screen h-full font-sans antialiased text-gray-900 dark:text-gray-100 bg-white dark:bg-black">
    <x-slate::shell>


        <x-slot name="sidebar">
            @include('demo.slate.partials.secondary-sidebar')
        </x-slot>

        <x-slate::navbar>
            @include('demo.slate.partials.navbar')
        </x-slate::navbar>

        <div class="p-6">

            <x-slate::form>

                <div class="prose dark:prose-invert">
                    <h1 class="mb-0">Notifications</h1>
                    <p class="mt-0">Manage what notifications you would like to receive</p>
                </div>

                <hr />

                <h3 class="text-lg">Digest</h3>

                <x-slate::checkbox
                    label="Daily Digest"
                    name="digest[]"
                    id="label12"
                    help-text="Fresh insights delivered in your inbox daily"
                />

                <x-slate::checkbox
                    label="Weekly Digest"
                    name="digest[]"
                    id="label1"
                    help-text="Weekly round up with best articles"
                />
                <h3 class="text-lg">Format</h3>
                <x-slate::radio
                    label="Html"
                    name="format[]"
                    value="1"
                    help-text="Beautifully designed and crafted emails"
                />
                <x-slate::radio
                    label="Text"
                    name="format[]"
                    value="2"
                    help-text="Tect only emails for who are retro"
                />

                <x-slate::button type="submit" color="black" size="md">
                    Submit
                </x-slate::button>
        </x-slate::form>

    </x-slate::shell>
</body>
</html>
