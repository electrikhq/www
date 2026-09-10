@props([
    'src',
    'alt' => '',
    'lazy' => true,
])

<img
    src="{{ str_starts_with($src, 'http') ? $src : asset($src) }}"
    alt="{{ $alt }}"
    width="1024"
    height="1024"
    @if ($lazy) loading="lazy" @endif
    decoding="async"
    {{ $attributes->class('rounded-2xl bg-black') }}
>
