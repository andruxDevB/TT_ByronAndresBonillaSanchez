@props(['md', 'label','type','name','value'])
<div class="col-md-{{$md}} mb-md-6 mb-4">
    <div class="input-group input-group-static">
        <label for="name">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" class="form-control ps-3" value="{{ $value }}">
        {{ $slot }}
    </div>
</div>
