@props(['type','class'])
<md-filled-button  type="{{ $type ?? $slot }}" class="{{ $class ?? $slot }}">
    {{ $slot }}
</md-filled-button>
