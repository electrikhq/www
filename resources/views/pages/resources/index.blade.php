@extends('layouts.www')

@php
    use App\Support\Resources;

    $pages = Resources::all();
    $seoTitle = 'Resources — Laravel SaaS starter guides';
    $seoDescription = 'Guides on Laravel SaaS starter kits, SaaS boilerplates, and how to build a Laravel SaaS with a Composer-package shell (Electrik).';
    $seoUrl = siteCanonicalUrl('/resources');
    $seoKeywords = [
        'laravel saas starter kit',
        'saas boilerplate',
        'build laravel saas',
        'electrik resources',
    ];
    $seoGraph = \App\Support\Seo::graph(
        \App\Support\Seo::organizationGraph(),
        \App\Support\Seo::websiteGraph(),
        \App\Support\Seo::breadcrumbGraph([
            ['name' => 'Home', 'url' => siteCanonicalUrl('/')],
            ['name' => 'Resources', 'url' => $seoUrl],
        ]),
    );
@endphp

@section('content')
<section class="px-4 pb-20 pt-14 sm:px-6 sm:pt-20">
    <div class="mx-auto max-w-3xl">
        <p class="font-mono text-xs tracking-[0.18em] text-muted-foreground uppercase">Resources</p>
        <h1 class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl">Laravel SaaS guides</h1>
        <p class="mt-4 text-lg text-muted-foreground text-pretty">
            Practical pages for people searching starter kits and boilerplates — written for Laravel builders who want a package-first shell, not a scaffold dump.
        </p>
    </div>

    <div class="mx-auto mt-12 grid max-w-[1400px] gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($pages as $page)
            <a
                href="{{ route('resources.show', $page['slug']) }}"
                class="group block border-t-2 border-border pt-6 transition hover:border-foreground"
            >
                <p class="text-xs font-medium uppercase tracking-wider text-muted-foreground">Guide</p>
                <h2 class="mt-2 text-xl font-semibold tracking-tight group-hover:underline group-hover:underline-offset-4">{{ $page['nav_title'] }}</h2>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">{{ $page['description'] }}</p>
            </a>
        @endforeach
    </div>

    <div class="mx-auto mt-16 max-w-3xl border-t border-border pt-10">
        <h2 class="text-lg font-semibold tracking-tight">Also useful</h2>
        <ul class="mt-4 space-y-2 text-sm text-muted-foreground">
            <li><a href="{{ route('compare.index') }}" class="underline underline-offset-4 hover:text-foreground">Compare Electrik to Jetstream, Spark, Larafast, and more</a></li>
            <li><a href="{{ route('install') }}" class="underline underline-offset-4 hover:text-foreground">Install guide</a></li>
            <li><a href="{{ route('docs.show', ['slug' => 'getting-started/ai']) }}" class="underline underline-offset-4 hover:text-foreground">AI &amp; agents docs</a></li>
            <li><a href="{{ route('pricing') }}" class="underline underline-offset-4 hover:text-foreground">Pricing</a></li>
        </ul>
    </div>
</section>
@endsection
