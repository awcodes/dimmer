@props([
    'theme',
])

<button
    aria-label="{{ trans('dimmer::dimmer.' . $theme) }}"
    type="button"
    x-bind:class="{'bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400':  dimmerTheme === @js($theme)}"
    x-on:click="(dimmerTheme = @js($theme))"
    class="flex justify-center rounded-lg p-2 outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5"
>
    {{ $slot }}
</button>
