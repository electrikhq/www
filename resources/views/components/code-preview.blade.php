<x-slate::card outlined color="neutral">
    <div x-data="{ isDark: false }" class="max-w-full min-h-auto w-auto">
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
            <div class="code-block mt-4 relative group">
                <!-- Copy to Clipboard Button -->
                <button class="absolute top-0 right-0 mt-2 mr-2 px-2 py-1 bg-gray-800 text-gray-200 rounded opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                        onclick="copyToClipboard(this)">
                    Copy
                </button>

                <pre class="line-numbers"><code class="language-html">{{ \Illuminate\Support\Str::of($slot)->trim() }}</code></pre>
            </div>
        </div>
    </div>
</x-slate::card>

<script>
    function copyToClipboard(button) {
        const codeElement = button.nextElementSibling.querySelector('code');
        const textArea = document.createElement('textarea');
        textArea.value = codeElement.innerText;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);

        // Change button text to "Copied" and then revert after a short delay
        button.textContent = 'Copied';
        setTimeout(() => button.textContent = 'Copy', 2000);
    }
</script>

<!-- Include Prism.js with GitHub-like Dark Theme and Line Numbers -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/themes/prism-one-dark.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/line-numbers/prism-line-numbers.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
