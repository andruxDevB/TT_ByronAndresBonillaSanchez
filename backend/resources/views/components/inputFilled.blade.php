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

<md-filled-text-field  
    type="{{ $type ?? $slot }}"
    id="{{ $id ?? $slot }}"
    name="{{ $name ?? $slot }}"
    class="{{ $class ?? $slot }}"
    label="{{ $label ?? $slot }}"
    value="{{ $value ?? $slot }}"
    {{ $disabled ? 'disabled' : '' }}
    {{ $autofocus ? 'autofocus' : '' }}
    {{ $required ? 'required' : '' }}>
</md-filled-text-field>
