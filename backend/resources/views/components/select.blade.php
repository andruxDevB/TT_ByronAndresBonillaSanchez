@props(['label','name','slot'])
<label class="ml-0" for="{{ $name }}">{{ $label }}</label>
<select class="js-select2 ps-3" name="{{ $name }}">
    <option value="">Choose one...</option>
    {{ $slot }}
</select>
