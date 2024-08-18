<div x-data="{ isDark: false }" class="max-w-full max-h-[600px] w-auto overflow-hidden border border-gray-300">
    <!-- Dark Mode Toggle Button -->
    <div class="p-2 text-right">
        <button @click="isDark = !isDark" 
                class="px-4 py-2 text-sm font-medium bg-gray-200 dark:bg-gray-800 dark:text-gray-200 text-gray-800 rounded-md">
            Toggle Dark Mode
        </button>
    </div>

    <div :class="{ 'dark': isDark }" class="code-preview border p-4 block transition-colors duration-300">
        {{-- Render the Blade component as HTML --}}
        {!! Blade::render($slot->toHtml()) !!}

        {{-- Display the code block with syntax highlighting --}}
        <div class="code-block mt-4">
            <pre><code class="language-html">{{ \Illuminate\Support\Str::of($slot)->trim() }}</code></pre>
        </div>
    </div>
</div>