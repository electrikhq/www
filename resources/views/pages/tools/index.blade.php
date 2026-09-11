@extends('layouts.www')

@php
    $seoTitle = 'Free developer tools';
    $seoDescription = 'Free tools for Laravel and Tailwind builders — starting with a Tailwind CSS color palette generator that exports v4 @theme, v3 config, and Slate tokens.';
    $seoUrl = siteCanonicalUrl('/tools');
    $seoGraph = \App\Support\Seo::graph(
        \App\Support\Seo::organizationGraph(),
        \App\Support\Seo::websiteGraph(),
        \App\Support\Seo::breadcrumbGraph([
            ['name' => 'Home', 'url' => siteCanonicalUrl('/')],
            ['name' => 'Tools', 'url' => siteCanonicalUrl('/tools')],
        ]),
    );

    $tools = [
        [
            'title' => 'Tailwind color generator',
            'description' => 'Create Tailwind shade scales, harmony schemes, and export v4 @theme CSS, v3 config, or Electrik Slate tokens.',
            'href' => route('tools.tailwind-color-generator'),
            'meta' => 'Colors · Free',
        ],
    ];
@endphp

@section('content')
<section class="home-dot-canvas border-b border-[var(--home-line)] px-4 pb-14 pt-16 sm:px-6 sm:pb-16 sm:pt-20">
    <div class="mx-auto max-w-3xl">
        <p class="home-eyebrow">Free tools</p>
        <h1 class="site-page-title mt-5">Tools for Laravel builders</h1>
        <p class="site-page-lead">
            Practical utilities we use while shipping Electrik and Slate — no account required.
        </p>
    </div>
</section>

<section class="px-4 py-14 sm:px-6 sm:py-16">
    <div class="mx-auto grid max-w-[1400px] gap-6 sm:grid-cols-2">
        @foreach ($tools as $tool)
            <a
                href="{{ $tool['href'] }}"
                class="group block border-t border-[var(--home-line)] pt-6 transition hover:border-[var(--home-ink)]"
            >
                <p class="text-xs font-medium uppercase tracking-wider text-muted-foreground">{{ $tool['meta'] }}</p>
                <h2 class="mt-2 text-xl font-semibold tracking-tight group-hover:underline group-hover:underline-offset-4">{{ $tool['title'] }}</h2>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">{{ $tool['description'] }}</p>
            </a>
        @endforeach
    </div>
</section>
@endsection
