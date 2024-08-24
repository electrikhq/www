<div class="flex justify-between items-start w-full">
    <div class="items-center flex space-x-4">
        <x-slate::sidebar-toggle />
        <x-slate::nav-item href="{{ url('/') }}">
            <x-slate::icon icon="carbon-arrow-left" size="xs" />
            &nbsp;&nbsp;Back to Electrik homepage
        </x-slate::nav-item>
        <x-slate::nav-item href="{{ url('docs/slate/master') }}">
            <x-slate::icon icon="carbon-arrow-left" size="xs" />
            &nbsp;&nbsp;Slate Docs
        </x-slate::nav-item>
        <x-slate::nav-item href="https://github.com/electrikhq" target="_blank">
            <x-slate::icon icon="carbon-logo-github" size="xs" />
            &nbsp;&nbsp;Github
        </x-slate::nav-item>
    </div>
    <div class="items-center flex space-x-4">
        <x-slate::dark-mode-toggle />
        <x-slate::input name="search" placeholder="Search" size="sm" />
        <x-slate::dropdown label="Profile" color="white" position="bottom-right" size="sm">
            <x-slate::dropdown-item label="hello@electrik.dev" size="sm" />
            <hr/>
            <x-slate::dropdown-item label="Logout" icon="carbon-logout" size="sm" />
        </x-slate::dropdown>
    </div>
</div>