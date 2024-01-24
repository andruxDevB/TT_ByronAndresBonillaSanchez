@props(['label','type','name','value'])
<div class="col-md-6">
    <div class="input-group input-group-static mb-md-6 mb-4">
        <label for="name">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" class="form-control ps-3" value="{{ $value }}">
        {{ $slot }}
    </div>
</div>
