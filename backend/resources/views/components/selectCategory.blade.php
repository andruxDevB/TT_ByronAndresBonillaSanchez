@props(['class','label','name', 'required' => false])
<md-outlined-select name="{{ $name }}" class="{{ $class }}" label="{{ $label }}" {{ $required ? 'required' : '' }}>
    <md-select-option selected value="5">
        <div slot="headline">5</div>
    </md-select-option>
    <md-select-option value="4">
        <div slot="headline">4</div>
    </md-select-option>
    <md-select-option value="3">
        <div slot="headline">3</div>
    </md-select-option>
    <md-select-option value="2">
        <div slot="headline">2</div>
    </md-select-option>
    <md-select-option value="1">
        <div slot="headline">1</div>
    </md-select-option>
</md-outlined-select>
