@extends('layouts.www')

@section('content')

<section class="bg-white dark:bg-black py-12">
    <div class="max-w-screen-xl mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-8">Frequently Asked Questions</h1>

        <!-- General Questions -->
        <div class="space-y-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">General Questions</h2>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is Electrik Laravel SaaS Starter Kit?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Electrik is a free and open-source starter kit for building SaaS applications using the Laravel framework. It includes pre-built components such as user management, team management, subscription billing, and more, making it easier for developers to kickstart their SaaS projects.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is Laravel?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Laravel is a popular PHP web framework that simplifies web development tasks such as routing, authentication, and caching. It offers an elegant syntax and powerful features, making it one of the most widely used frameworks for building modern web applications.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is SaaS (Software as a Service)?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        SaaS, or Software as a Service, is a software delivery model where applications are hosted on the cloud and accessed via the internet. Users typically pay a subscription fee to access these applications, which are managed and maintained by a third-party service provider.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How do I install Electrik?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        To install Electrik, clone the GitHub repository and follow the setup instructions provided in the documentation. You'll need PHP 7.4+, Laravel 7+, and Composer. Run `composer install`, set up your `.env` file, and migrate the database to get started.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What are the system requirements for running Electrik?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Electrik requires PHP 7.4 or higher, MySQL, and Laravel 7 or higher. Composer is also needed to manage dependencies. Detailed setup instructions can be found in the documentation.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        Is Electrik compatible with the latest version of Laravel?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Yes, Electrik is regularly updated to support the latest stable version of Laravel. The documentation provides details on compatibility and any version-specific instructions.
                    </p>
                </div>
            </div>

            <!-- Features and Functionality -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Features and Functionality</h2>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What are the key features of the Laravel framework?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Key features of Laravel include Eloquent ORM for database interactions, Blade templating engine, powerful routing, middleware for HTTP request management, and built-in security features like SQL injection and cross-site scripting protection.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What features does Electrik include?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Electrik includes a wide range of features such as user and team management, role-based permissions, subscription billing with Stripe, dark mode support, notifications, toasts, alerts, modals, and more.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How does Electrik handle subscription billing?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Electrik integrates with Laravel Cashier to manage subscription billing through Stripe. It supports features like recurring payments, plan upgrades, downgrades, trial periods, and invoice management.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        Does Electrik support team management?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Yes, Electrik includes built-in support for managing teams, allowing users to create, join, and manage teams within the application. It also includes role-based permissions for fine-grained control over team member access.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How does Electrik handle role-based permissions?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Electrik uses Spatie's Laravel-Permission package to implement role-based access control. This allows you to assign roles to users and define permissions at a granular level.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        Can I use Electrik for non-SaaS projects?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        While Electrik is designed specifically for SaaS applications, many of its components and features can be adapted for non-SaaS projects. However, some features like subscription billing are more suited for SaaS models.
                    </p>
                </div>
            </div>

            <!-- Development and Customization -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Development and Customization</h2>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How do I get started with Laravel SaaS development?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        To get started with Laravel SaaS development, install Laravel, set up your development environment, and configure your database. You can use starter kits like Electrik to accelerate the process by providing pre-built components for common SaaS features.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        Can I customize the components in Electrik?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Absolutely! Electrik's components are built using Blade and Tailwind CSS, making them easy to customize according to your project's needs. You can extend or modify any component to fit your specific requirements.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is Laravel Spark, and how does it differ from Electrik?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Laravel Spark is an official Laravel package that provides a SaaS boilerplate with built-in subscription billing, team management, and other features. Electrik is another SaaS starter kit, but it is open-source and free, offering similar functionalities without any licensing fees.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What are the best practices for Laravel development?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Best practices for Laravel development include following PSR standards, using Eloquent for database queries, keeping controllers slim, implementing testing, and using environment files for sensitive information.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How can I optimize my Laravel application for performance?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        To optimize your Laravel application for performance, you can implement caching, optimize your database, use queues, leverage a CDN for static assets, and compress images before serving them to users.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is the Laravel ecosystem?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        The Laravel ecosystem includes a collection of tools and libraries designed to work seamlessly with Laravel. This includes Laravel Nova (admin panel), Laravel Horizon (queue management), Laravel Echo (real-time events), and more. These tools help developers build complex applications faster and more efficiently.
                    </p>
                </div>
            </div>

            <!-- E-commerce and Integration -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">E-commerce and Integration</h2>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        Can I use Laravel for eCommerce websites?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Yes, Laravel is a great choice for building eCommerce websites. It offers robust features and a clean architecture, making it easy to develop custom eCommerce solutions. You can use packages like Laravel Cashier for subscription billing or Laravel Nova for managing your product catalog.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is Stripe Laravel integration?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Stripe Laravel integration is made easy with the Laravel Cashier package, which provides a simple, expressive interface for handling Stripe's subscription billing services. It includes features like handling coupons, handling trial periods, and generating invoices.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How do I use Laravel with Vue.js?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Laravel can be easily integrated with Vue.js to build modern, reactive web applications. Laravel provides a simple way to set up Vue.js with its built-in Laravel Mix tool, which compiles your JavaScript files, including Vue components.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How do I use Laravel with React?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Laravel can be integrated with React.js to create dynamic, interactive user interfaces. Laravel Mix simplifies the process by allowing you to compile React components and JavaScript files seamlessly within your Laravel project.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is Laravel API development?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Laravel API development involves creating RESTful APIs using Laravel’s built-in features like routing, Eloquent ORM, and middleware. Laravel makes it easy to build scalable APIs that can serve as the backend for web and mobile applications.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is Laravel CMS?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Laravel CMS (Content Management System) is a content management system built using the Laravel framework. It allows developers to create websites with dynamic content management capabilities, often featuring customizable admin dashboards and user management.
                    </p>
                </div>
            </div>

            <!-- Hiring and Resources -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Hiring and Resources</h2>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        How do I find Laravel developers for my project?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        You can find Laravel developers through various platforms like Upwork, Toptal, or specialized job boards such as Laravel Jobs. When hiring, look for developers with experience in Laravel, PHP, and other relevant technologies like Vue.js or React.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What is a Laravel development company?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        A Laravel development company specializes in building web applications, websites, and APIs using the Laravel framework. These companies typically offer services like custom application development, Laravel consulting, and ongoing support and maintenance.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        Where can I learn Laravel?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        You can learn Laravel through various resources such as the official Laravel documentation, online courses on platforms like Udemy and Laracasts, and community blogs and forums. Practical experience and building projects are also essential for mastering Laravel.
                    </p>
                </div>
                <div class="mt-4">
                    <button class="w-full text-left text-gray-800 dark:text-gray-200 font-medium">
                        What are some popular Laravel packages?
                    </button>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Popular Laravel packages include Laravel Cashier (subscription billing), Spatie Laravel-Permission (roles and permissions), Laravel Socialite (OAuth authentication), and Laravel Horizon (queue management). These packages extend Laravel’s functionality and are widely used in the community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
