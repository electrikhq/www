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


        <div class="prose dark:prose-invert">
            <h1 class="mb-0">Customer list</h1>
            <p class="mt-0">This segments shows active inactive customers</p>
        </div>

        

        @php
        $customers = [
    ['id' => 1, 'name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'age' => 28, 'membership_status' => 'active'],
    ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bob.smith@example.com', 'age' => 34, 'membership_status' => 'inactive'],
    ['id' => 3, 'name' => 'Carol Taylor', 'email' => 'carol.taylor@example.com', 'age' => 22, 'membership_status' => 'active'],
    ['id' => 4, 'name' => 'David Lee', 'email' => 'david.lee@example.com', 'age' => 30, 'membership_status' => 'active'],
    ['id' => 5, 'name' => 'Eva Grant', 'email' => 'eva.grant@example.com', 'age' => 25, 'membership_status' => 'active'],
    ['id' => 6, 'name' => 'Frank Young', 'email' => 'frank.young@example.com', 'age' => 27, 'membership_status' => 'inactive'],
    ['id' => 7, 'name' => 'Grace Ford', 'email' => 'grace.ford@example.com', 'age' => 21, 'membership_status' => 'active'],
    ['id' => 8, 'name' => 'Henry Wells', 'email' => 'henry.wells@example.com', 'age' => 45, 'membership_status' => 'inactive'],
    ['id' => 9, 'name' => 'Isabel Scott', 'email' => 'isabel.scott@example.com', 'age' => 26, 'membership_status' => 'active'],
    ['id' => 10, 'name' => 'Jason Morris', 'email' => 'jason.morris@example.com', 'age' => 22, 'membership_status' => 'inactive'],
    ['id' => 11, 'name' => 'Karen Fisher', 'email' => 'karen.fisher@example.com', 'age' => 36, 'membership_status' => 'active'],
    ['id' => 12, 'name' => 'Louis Wright', 'email' => 'louis.wright@example.com', 'age' => 29, 'membership_status' => 'active'],
    ['id' => 13, 'name' => 'Mona Ray', 'email' => 'mona.ray@example.com', 'age' => 24, 'membership_status' => 'inactive'],
    ['id' => 14, 'name' => 'Nathan Owen', 'email' => 'nathan.owen@example.com', 'age' => 31, 'membership_status' => 'active'],
    ['id' => 15, 'name' => 'Olivia King', 'email' => 'olivia.king@example.com', 'age' => 23, 'membership_status' => 'active'],
    ['id' => 16, 'name' => 'Patty Knight', 'email' => 'patty.knight@example.com', 'age' => 37, 'membership_status' => 'inactive'],
    ['id' => 17, 'name' => 'Quinn Brooks', 'email' => 'quinn.brooks@example.com', 'age' => 40, 'membership_status' => 'active'],
    ['id' => 18, 'name' => 'Rachel Green', 'email' => 'rachel.green@example.com', 'age' => 32, 'membership_status' => 'inactive'],
    ['id' => 19, 'name' => 'Steve James', 'email' => 'steve.james@example.com', 'age' => 28, 'membership_status' => 'active'],
    ['id' => 20, 'name' => 'Tina Brown', 'email' => 'tina.brown@example.com', 'age' => 35, 'membership_status' => 'active'],
    ['id' => 21, 'name' => 'Uma Wilson', 'email' => 'uma.wilson@example.com', 'age' => 41, 'membership_status' => 'inactive'],
    ['id' => 22, 'name' => 'Vince Neil', 'email' => 'vince.neil@example.com', 'age' => 38, 'membership_status' => 'active'],
    ['id' => 23, 'name' => 'Wendy Adams', 'email' => 'wendy.adams@example.com', 'age' => 33, 'membership_status' => 'inactive'],
    ['id' => 24, 'name' => 'Xander Clarke', 'email' => 'xander.clarke@example.com', 'age' => 29, 'membership_status' => 'active'],
    ['id' => 25, 'name' => 'Yolanda Hayes', 'email' => 'yolanda.hayes@example.com', 'age' => 42, 'membership_status' => 'active']
];

        @endphp

            <x-slate::table bordered striped>
                <x-slate::table-header color="gray">
                    <x-slate::table-cell header ></x-slate::table-cell>
                    <x-slate::table-cell header >ID</x-slate::table-cell>
                    <x-slate::table-cell header >Receiving Notifications</x-slate::table-cell>
                    <x-slate::table-cell header >Name</x-slate::table-cell>
                    <x-slate::table-cell header >Email</x-slate::table-cell>
                    <x-slate::table-cell header >Age</x-slate::table-cell>
                    <x-slate::table-cell header >Active</x-slate::table-cell>
                    <x-slate::table-cell header >Actions</x-slate::table-cell>
                </x-slate::table-header>

                @foreach ($customers as $customer)
                    <x-slate::table-row hoverable >
                        <x-slate::table-cell size="sm" align="center">
                            <x-slate::checkbox name="checkbox[]" />
                        </x-slate::table-cell>
                        
                        <x-slate::table-cell size="sm">{{ $customer['id'] }}</x-slate::table-cell>
                        
                        <x-slate::table-cell size="sm" align="center">
                            <x-slate::toggle size="sm" name="checkbox{{ rand() }}" checked="{{ rand(0, 1) }}"/>
                        </x-slate::table-cell>


                        <x-slate::table-cell size="sm" class="flex items-center space-x-2">
                            <x-slate::avatar src='https://www.gravatar.com/avatar/{{ md5(strtolower(trim($customer["email"]))) }}?s=100&d=identicon&r=g' size="sm" />
                            <span>{{ $customer['name'] }}</span>
                        </x-slate::table-cell>

                        <x-slate::table-cell size="sm">{{ $customer['email'] }}</x-slate::table-cell>

                        <x-slate::table-cell size="sm">{{ $customer['age'] }}</x-slate::table-cell>

                        <x-slate::table-cell size="sm">
                            @if($customer['membership_status'] == 'active') 
                                <x-slate::badge size="xs" rounded color="success">active</x-slate::badge>
                            @else
                                <x-slate::badge size="xs" rounded color="black">in-active</x-slate::badge>
                            @endif
                        </x-slate::table-cell>

                        <x-slate::table-cell size="sm">
                            <x-slate::dropdown size="sm" icon="carbon-overflow-menu-horizontal" color="white">
                                <x-slate::dropdown-item size="sm" label="Open" icon="carbon-arrow-right" icon-position="after" />
                                <x-slate::dropdown-item size="sm" label="Make a copy" />
                                <x-slate::dropdown-item size="sm" label="Move to another folder" />
                                <x-slate::dropdown-item size="sm" disabled label="Delete Customer" />
                            </x-slate::dropdown>
                        </x-slate::table-cell>

                    </x-slate::table-row>
                @endforeach
            </x-slate::table>
        </div>

    </x-slate::shell>
</body>
</html>
