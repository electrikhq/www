<section class="bg-white dark:bg-gray-900">
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
            <x-slate::button href="{{ url('/docs') }}">Documentation</x-slate::button>
            <x-slate::button color="black" icon="carbon-logo-github" link="{{ url('/docs') }}">Github</x-slate::button>
        </div>
    </div>
    <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36 prose-lg font-serif text-black">
        <h2>Why Another Laravel Starter Kit?</h2>
        <p>It's true that there are a lot of Laravel SaaS starter kits available on the Internet and they are bloody good too. What breaks my heart is that almost every of these SaaS starter kits has two versions, one free, and one paid. These kits in their free versions, provide the bare minimum features. Some would lock billing as a paid feature and others would block team management as a paid feature. In my view, this is exactly what OSS philosophy is not. I am not at all saying that they should not charge for their creations. What I am saying is that there should be an open-source, 100% free, and full-featured alternative also available for people to choose from. My intention is just that.</p>
        <p>Electrik provides all the core features that are required for any SaaS. For example, it supports recurring billing via cashier, multiple teams, User configurable roles and permissions, and much much more.</p>
    </div>
</section>