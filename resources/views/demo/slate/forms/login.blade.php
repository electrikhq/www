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
    
    <div class="grid grid-cols-2 gap-0 h-full">

        <div class="p-6 bg-neutral-400 dark:bg-neutral-800 items-end flex">

            <p class="text-white dark:text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis animi illo possimus repellat in nisi consequatur laboriosam maxime, laborum, culpa, consequuntur deleniti esse veritatis numquam asperiores fugit dolores impedit ut.</p>

        </div>
        <div class="p-6 items-center justify-center flex">

            <x-slate::form class="w-3/4">

                <h3 class="text-2xl font-bold">Welcome back</h3>
                <p>Enter your email below to continue</p>


                <x-slate::input
                    label="Email Address"
                    name="email"
                    type="email"
                    placeholder="you@yourcompany.com"
                    required
                    help-text="Enter your company email address"
                />

                <x-slate::input
                    label="Password"
                    name="password"
                    type="password"
                    placeholder="password"
                    required
                    help-text="Enter your password"
                />


                <x-slate::checkbox
                    label="Remembber me"
                    name="remember"
                    value="1"
                    help-text="Do not check remember me if you are on a public network of computer"
                />

                <div class="inline-flex items-center space-x-4">
                    <x-slate::button type="submit" color="black" size="md">
                        Login
                    </x-slate::button>
                    <span>Or</span>
                    <x-slate::button outlined size="md" icon="carbon-logo-facebook" icon-position="after">
                        Login via Facebook
                    </x-slate::button>
                </div>
                <p><a class="inline-flex items-center text-sm" href="{{ url('docs/slate/master') }}"><x-slate::icon icon="carbon-arrow-left" size="xs" /> Back to Slate dcoumentation</a></p>
                <p><a class="inline-flex items-center text-sm" href="{{ url('demo/slate/forms') }}"><x-slate::icon icon="carbon-arrow-left" size="xs" /> Back to Slate demo</a></p>
            </x-slate::form>

        </div>
    </div>
</body>
</html>
