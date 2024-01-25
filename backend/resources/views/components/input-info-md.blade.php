@props(['label','value','md'])
<div class="col-md-{{$md}} mb-md-6 mb-4">
    <div class="w-100 border-bottom">
        <p class="text-primary mb-0 text-input">{{ $label }}</p>
        <p class="text-dark ps-3 lh-lg mb-1">{{ $value }}</p>
    </div>
</div>
