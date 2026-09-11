{{-- Apply stored theme before paint to avoid a flash. --}}
<script>
    (function () {
        try {
            var lock = document.documentElement.getAttribute('data-theme-lock');
            var stored = localStorage.getItem('slate-theme');
            var dark = false;
            if (lock === 'dark') {
                dark = true;
            } else if (lock === 'light') {
                dark = false;
            } else {
                dark = stored === 'dark';
            }

            document.documentElement.classList.toggle('dark', dark);
        } catch (e) {}
    })();
</script>
