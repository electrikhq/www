<x-slate::card outlined color="neutral">
    <div x-data="{ isDark: false }" class="max-w-full max-h-[600px] w-auto ">
        <!-- Dark Mode Toggle Button -->
        <div class="p-2 text-right">
            <x-slate::button color="black" @click="isDark = !isDark">
                Toggle Dark Mode
            </x-slate::button>
        </div>

        <div :class="{ 'dark': isDark }" class="code-preview block transition-colors duration-300">
            {{-- Render the Blade component as HTML --}}
            {!! Blade::render($slot->toHtml()) !!}

            {{-- Display the code block with syntax highlighting --}}
            <div class="code-block mt-4">
                <pre><code class="language-html">{{ \Illuminate\Support\Str::of($slot)->trim() }}</code></pre>
            </div>
        </div>
    </div>
</x-slate::card>