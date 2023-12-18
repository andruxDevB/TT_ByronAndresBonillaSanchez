@props(['h2', 'p'])
<h2 class="text-white mb-0">
    {{ $h2 ?? $slot }}
</h2>
<p class="text-sm text-white mb-0 ">
    {{ $p ?? $slot }}
</p>
