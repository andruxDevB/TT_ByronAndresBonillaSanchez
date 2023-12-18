@props([
    'disabled' => false,
    'required' => false,
    'autofocus' => false,
    'type',
    'id',
    'name',
    'class',
    'label',
    'value'])

<md-outlined-text-field  
    type="{{ $type ?? $slot }}"
    id="{{ $id ?? $slot }}"
    name="{{ $name ?? $slot }}"
    class="{{ $class ?? $slot }}"
    label="{{ $label ?? $slot }}"
    value="{{ $value ?? $slot }}"
    {{ $disabled ? 'disabled' : '' }}
    {{ $autofocus ? 'autofocus' : '' }}
    {{ $required ? 'required' : '' }}>
</md-outlined-text-field>
