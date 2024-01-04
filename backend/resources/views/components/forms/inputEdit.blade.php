@props(['label','type','name','value','error'])
<div class="col-md-4 col-12">
    <div class="input-group input-group-static mb-4">
        <label for="name">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" class="form-control ps-3" value="{{ $value }}">
        @error('{{ $error }}')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>
