<div class="code-preview border p-4">
	{{-- Render the Blade component as HTML --}}
	{!! Blade::render($slot->toHtml()) !!}

	{{-- Display the code block with syntax highlighting --}}
	<div class="code-block">
		<pre><code class="language-html">{{ \Illuminate\Support\Str::of($slot)->trim() }}</code></pre>
	</div>
</div>
