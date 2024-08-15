# Button Component Documentation

# Button Example

Here’s how to use a primary button:

@php
    $code = '
<x-slate::button color="primary">
    Primary Button
</x-slate::button>
<x-slate::button color="secondary">
    Secondary Button
</x-slate::button>
<x-slate::button color="success">
    Success Button
</x-slate::button>
<x-slate::button color="danger">
    Danger Button
</x-slate::button>
<x-slate::button color="black">
    Dark Button
</x-slate::button>
<x-slate::button color="white">
    Light Button
</x-slate::button>
<x-slate::button color="primary" size="large" rounded>
    Large Rounded Button
</x-slate::button>
<x-slate::button color="secondary" size="small" outlined>
    Small Outline Button
</x-slate::button>
<x-slate::button disabled="true">
    Disabled Button
</x-slate::button>
<x-slate::button href="https://example.com" color="info">
    Button as a Link
</x-slate::button>

';
@endphp

<x-code-preview :code="$code" />

## Hello World