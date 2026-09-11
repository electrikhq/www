@extends('layouts.www')

@php
    use App\Support\Compare;

    $seoTitle = 'Electrik vs alternatives';
    $seoDescription = 'Compare Electrik to Jetstream, Spark, Wave, SaaSykit, Larafast, and Filament — Laravel SaaS starter alternatives with feature matrices and when to choose each.';
    $seoUrl = siteCanonicalUrl('/compare');
    $seoKeywords = [
        'laravel saas starter alternative',
        'jetstream alternative',
        'spark alternative',
        'saasykit alternative',
        'larafast alternative',
        'filament alternative',
        'wave alternative',
        'electrik vs jetstream',
        'electrik vs spark',
        'laravel saas starter comparison',
        'electrik vs saasykit',
        'electrik vs larafast',
        'electrik vs filament',
        'electrik vs wave',
    ];

    $electrik = Compare::electrik();
    $competitors = Compare::all();
    $features = Compare::featureRows();

    $itemList = [];
    $position = 1;
    foreach ($competitors as $slug => $item) {
        $itemList[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => 'Electrik vs '.$item['name'].' ('.$item['name'].' alternative)',
            'url' => Compare::urlFor($slug),
        ];
    }

    $seoGraph = \App\Support\Seo::graph(
        \App\Support\Seo::organizationGraph(),
        \App\Support\Seo::websiteGraph(),
        \App\Support\Seo::breadcrumbGraph([
            ['name' => 'Home', 'url' => siteCanonicalUrl('/')],
            ['name' => 'Compare', 'url' => $seoUrl],
        ]),
        [
            [
                '@type' => 'CollectionPage',
                '@id' => $seoUrl.'#webpage',
                'url' => $seoUrl,
                'name' => $seoTitle,
                'description' => $seoDescription,
                'isPartOf' => ['@id' => siteCanonicalUrl('/').'#website'],
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $itemList,
                ],
            ],
        ],
    );
@endphp

@section('content')
<section class="home-dot-canvas border-b border-[var(--home-line)] px-4 pb-14 pt-16 sm:px-6 sm:pb-16 sm:pt-20">
    <div class="mx-auto max-w-3xl">
        <p class="home-eyebrow">Compare · Alternatives</p>
        <h1 class="site-page-title mt-5">Electrik vs alternatives</h1>
        <p class="site-page-lead">
            Looking for a Laravel SaaS starter alternative to Jetstream, Spark, Wave, SaaSykit, Larafast, or Filament?
            Honest feature comparisons — including when you should pick <em>them</em>.
        </p>
    </div>
</section>

<section class="border-b border-[var(--home-line)] px-4 py-14 sm:px-6 sm:py-16">
    <div class="mx-auto max-w-[1400px]">
        <div class="mb-10 max-w-3xl">
            <h2 class="site-page-title !text-2xl sm:!text-3xl">Pick a deep dive</h2>
            <p class="site-page-lead !mt-3 !text-base">
                Each page has a full matrix, licensing notes, and “choose Electrik if / choose them if” guidance.
            </p>
        </div>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($competitors as $slug => $item)
                <a
                    href="{{ route('compare.show', $slug) }}"
                    class="group block border-t-2 border-border pt-5 transition hover:border-foreground"
                >
                    <p class="text-xs font-medium uppercase tracking-wider text-muted-foreground">Alternative to</p>
                    <h3 class="mt-2 text-xl font-semibold tracking-tight group-hover:underline group-hover:underline-offset-4">
                        {{ $item['name'] }}
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-muted-foreground">{{ $item['summary'] }}</p>
                    <p class="mt-4 text-sm font-medium text-foreground">
                        Electrik vs {{ $item['name'] }}
                        <span aria-hidden="true" class="ms-1 transition group-hover:translate-x-0.5 inline-block">→</span>
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="px-4 py-14 sm:px-6">
    <div class="mx-auto max-w-[1400px]">
        <div class="mb-8 max-w-3xl">
            <h2 class="text-2xl font-semibold tracking-tight">At-a-glance matrix</h2>
            <p class="mt-2 text-sm text-muted-foreground">
                {{ Compare::disclaimer() }}
            </p>
        </div>
        <x-compare.matrix
            mode="hub"
            :electrik="$electrik"
            :competitors="$competitors"
            :features="$features"
        />
    </div>
</section>

<section class="border-t border-border bg-muted/30 px-4 py-16 sm:px-6">
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-2xl font-semibold tracking-tight">Still deciding?</h2>
        <p class="mt-3 text-muted-foreground">
            Install locally, or click through the hosted demo before you commit to any kit.
        </p>
        <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
            <x-slate::button as="a" href="{{ route('install') }}">Install Electrik</x-slate::button>
            <x-slate::button as="a" variant="outline" href="{{ config('site.demo_url') }}" target="_blank" rel="noopener noreferrer">
                Open demo
            </x-slate::button>
            <x-slate::button as="a" variant="outline" href="{{ route('pricing') }}">Pricing &amp; license</x-slate::button>
        </div>
    </div>
</section>
@endsection
