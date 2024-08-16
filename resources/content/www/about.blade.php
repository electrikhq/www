@extends('layouts.www')

@section('content')

<section class="bg-white dark:bg-gray-900 flex-col">
    <div class="my-12 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <a href="#"
            class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
            role="alert">
            <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span><span
                class="text-sm font-medium">Electrik has a new home! Read more</span>
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Your Next big SaaS starts here</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Electrik is a
            free and open-source Laravel starter-kit that gives you everything you need to start building a SaaS
            product.</p>
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <x-slate::button color="black" href="{{ url('docs/slate/master') }}">Documentation</x-slate::button>
            <x-slate::button color="black" icon="carbon-logo-github" link="{{ url('/docs') }}">Github</x-slate::button>
        </div>
    </div>
    <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36 prose-lg font-serif text-black">
        <h2>Why Another Laravel Starter Kit?</h2>
        <p>It's true that there are a lot of Laravel SaaS starter kits available on the Internet and they are bloody good too. What breaks my heart is that almost every of these SaaS starter kits has two versions, one free, and one paid. These kits in their free versions, provide the bare minimum features. Some would lock billing as a paid feature and others would block team management as a paid feature. In my view, this is exactly what OSS philosophy is not. I am not at all saying that they should not charge for their creations. What I am saying is that there should be an open-source, 100% free, and full-featured alternative also available for people to choose from. My intention is just that.</p>
        <p>Electrik provides all the core features that are required for any SaaS. For example, it supports recurring billing via cashier, multiple teams, User configurable roles and permissions, and much much more.</p>
    </div>
    <div class="grid grid-cols-2 gap-4 p-4 items-center py-6">
        <div class="col-span-1 p-12">
            <h2>Work with tools you already use</h2>
            <p class="mt-4 text-lg">Electrik is built on top of tools we all love: Laravel, Livewire, TailwindCSS, Alpinejs, Slate. It’ll accelerate critical development time.</p>
            <ul class="mt-4 list-disc list-inside space-y-1" >
                <li>Laravel</li>
                <li>Livewire</li>
                <li>TailwindCSS</li>
                <li>Electrik/Slate</li>
                <li>Spatie Permissions</li>
                <li>and more...</li>
            </ul>
            <p class="mt-4">Electrik is a perfect, battle-tested SaaS starter kit for your next big idea.</p>
            <x-slate::button class="mt-4" icon="carbon-arrow-right" icon-position="after" href="https://docs.electrik.dev" target="_blank">Documentation</x-slate::button>
        </div>
        <div class="col-span-1">
            <img src="https://electrik.dev/wp-content/uploads/2024/06/electrik-dashboard.png" />
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 p-4 items-center py-6">
        <div class="col-span-1">
            <img src="https://electrik.dev/wp-content/uploads/2024/06/electrik-onboarding.png" />
        </div>
        <div class="col-span-1 p-12">
            <h2>All the features in one library</h2>
            <p class="mt-4 text-lg">We believe the open-source projects should be truly open-source. None of the features should be blocked behind a pay-wall. Electrik provides all the essential features required to build you next big SaaS.</p>
            <ul class="mt-4 list-disc list-inside space-y-1" >
                <lli>Subscription billing management (via Stripe)</li>
                <lli>Team management</li>
                <lli>Roles and permissions</li>
                <lli>Zero config installation (well almost :))</li>
                <lli>In-built support for dark mode</li>
                <lli>Notifications, Toasts, alerts, modals, and much more.</li>
            </ul>
            <p class="mt-4">To see the full list of available features, please check out the documentation.</p>
            <x-slate::button class="mt-4" icon="carbon-arrow-right" icon-position="after" href="https://docs.electrik.dev" target="_blank">Documentation</x-slate::button>
        </div>
    </div>
    <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36 prose-lg font-serif text-black py-6">
        <h2>Designed by developers for developers like you!</h2>
        <p>We believe that open-source projects should not be bound for pay walled to get additional features. We believe in true spirit of open source. Our pricing will surprise you!</p>
    </div>
</section>




@endsection