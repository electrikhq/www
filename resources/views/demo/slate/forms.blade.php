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
                    <h1 class="mb-0">Account Settings</h1>
                    <p class="mt-0">Manage Your Account Settings from this page</p>
                </div>

                <x-slate::input
                    label="Full Name"
                    name="full_name"
                    placeholder="Jane Doe"
                    required
                    help-text="Enter your full legal name"
                />

                <x-slate::input
                    label="Email Address"
                    name="email"
                    type="email"
                    placeholder="you@yourcompany.com"
                    required
                    help-text="Enter your company email address"
                    error="Email field is required"
                />

                <x-slate::input
                    label="Country"
                    name="country"
                    placeholder="United States of America"
                    disabled
                    help-text="You cannot edit this field as it's prefilled."
                />

                <x-slate::input
                    before="https://"
                    after=".myshopify.com"
                    label="Website"
                    name="email"
                    placeholder="electrik"
                    required
                    help-text="Enter your Shopify store's domain slug"
                />

                <x-slate::textarea
                    label="About"
                    name="about"
                    placeholder="About you..."
                    required
                    help-text="Enter about yourself here"
                />

                <x-slate::select
                    label="Timezone"
                    name="timezone"
                    help-text="What's your timezone?"
                    :options="['UTC' => 'UTC', 'America/New_York' => 'New York']"
                />

                <x-slate::checkbox
                    label="Subscribe to our newsletter"
                    name="subscribe"
                    help-text="By clicking on subscribe bbutton, you agree to our terms and conditions"
                />

                <!-- Custom Toggle Size and Color -->
                <x-slate::toggle name="customToggle" label="Enable Feature" />


                <x-slate::button type="submit" color="blue" size="md" full-width>
                    Submit
                </x-slate::button>
        </x-slate::form>

    </x-slate::shell>
</body>
</html>
