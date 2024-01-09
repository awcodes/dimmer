@props([
    'forceMode' => null,
])

<div
    x-data="{
        dimmerTheme: null,

        init: function () {
            this.dimmerTheme = localStorage.getItem('dimmer-theme');

            if (! this.dimmerTheme) {
                this.dimmerTheme = '{{ $forceMode ?? "system" }}'
                localStorage.setItem('dimmer-theme', this.dimmerTheme)
            }

            this.handleAttribute()

            $dispatch('dimmer-theme-changed', this.dimmerTheme)

            $watch('dimmerTheme', (theme) => {
                this.handleAttribute()
                localStorage.setItem('dimmer-theme', theme)
                $dispatch('dimmer-theme-changed', theme)
            })
        },
        handleAttribute() {
            if (
                this.dimmerTheme === 'dark' ||
                (this.dimmerTheme === 'system' &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        },
    }"
    class="dimmer-controls flex items-center gap-x-1"
>
    <x-dimmer::button theme="light">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <title>{{ trans('dimmer::dimmer.light') }}</title>
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
        </svg>
    </x-dimmer::button>

    <x-dimmer::button theme="dark">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <title>{{ trans('dimmer::dimmer.dark') }}</title>
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
        </svg>
    </x-dimmer::button>

    <x-dimmer::button theme="system">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <title>{{ trans('dimmer::dimmer.system') }}</title>
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
        </svg>
    </x-dimmer::button>
</div>

