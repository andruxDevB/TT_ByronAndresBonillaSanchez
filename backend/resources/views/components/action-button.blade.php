@props(['href', 'class', 'title'])
<a href="{{ $href }}" rel="tooltip" class="{{ $class }}" title="{{ $title }}">
    {{ $slot }}
    <div class="ripple-container"></div>
</a>