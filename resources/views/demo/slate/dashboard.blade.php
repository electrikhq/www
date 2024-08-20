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
        <x-slot name="primarySidebar">
            <x-slate::icon icon="carbon-dashboard" />
        </x-slot>
        <x-slot name="sidebar">
            <div class="px-4 flex flex-col">
                Electrik Dashbboard
            </div>
        </x-slot>
        <x-slate::navbar>
            <div class="flex justify-between items-center w-full">
            <div class="items-center flex space-x-4">
                <x-slate::sidebar-toggle />
                <x-slate::nav-item href="{{ url('/') }}"><x-slate::icon icon="carbon-arrow-left" size="xs" />&nbsp;&nbsp;Back to Electrik homepage</x-slate::nav-item>    
                <x-slate::nav-item href="{{ url('docs/slate/master') }}">Slate Docs</x-slate::nav-item>    
                <x-slate::nav-item href="https://github.com/electrikhq" target="_blank"><x-slate::icon icon="carbon-logo-github" size="xs" />&nbsp;&nbsp;Github</x-slate::nav-item>
                
            </div>
            <div class="items-center flex space-x-4">
                <div><x-slate::dark-mode-toggle /></div>
                <x-slate::input name="search" placeholder="Search" size="sm" />
                <x-slate::dropdown label="Profile" color="white" position="bottom-right">
                    <x-slate::dropdown-item label="hello@electrik.dev" size="sm" />
                    <hr/>
                    <x-slate::dropdown-item label="Logout" icon="carbon-logout" size="" />
                </x-slate::dropdown>
            </div>
        </x-slate::navbar>

        <div class="p-6">
            <div class="grid grid-cols-4 gap-4 mb-4">
                <x-slate::card size="sm" icon="carbon-purchase" color="indigo">
                    <x-slot name="header">
                        <p class="m-0 font-medium"># of Orders</p>
                    </x-slot>
                    <h3 class="m-0 text-lg font-bold">1,000+</h3>
                </x-slate::card>
                <x-slate::card header="Audience Growth" icon="carbon-events" size="sm" color="neutral">
                    <h3 class="m-0 text-lg font-bold">100+</h3>
                    <p class="text-sm">15% increase from last month</p>
                </x-slate::card>

                <x-slate::card header="Total Revenue" outlined icon="carbon-currency-dollar" size="sm">
                    <h3 class="m-0 text-lg font-bold">$1,434,000</h3>
                    <p class="text-sm">Revenue growth compared to last year</p>
                </x-slate::card>

                <x-slate::card outlined header="Top Product" icon="carbon-product" size="sm">
                    <h3 class="m-0 text-lg font-bold">Green Christmas Socks</h3>
                    <p class="text-sm">3,400 orders placed last month</p>
                </x-slate::card>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Recent Activities</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg shadow">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Activity</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">User registration</td>
                                <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">August 20, 2024</td>
                                <td class="px-4 py-3 text-sm text-green-500 dark:text-green-400">Completed</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">New order</td>
                                <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">August 19, 2024</td>
                                <td class="px-4 py-3 text-sm text-yellow-500 dark:text-yellow-400">Pending</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Support ticket closed</td>
                                <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">August 18, 2024</td>
                                <td class="px-4 py-3 text-sm text-red-500 dark:text-red-400">Closed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-slate::shell>
</body>
</html>