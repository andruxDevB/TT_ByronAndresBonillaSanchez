@props(['class','label','type'])
<md-outlined-select class="form-control" label="Title" name="type">
    <md-select-option selected value="Mr">
        <div slot="headline">Mr.</div>
    </md-select-option>
    <md-select-option value="Ms">
        <div slot="headline">Ms.</div>
    </md-select-option>
    <md-select-option value="Mrs">
        <div slot="headline">Mrs.</div>
    </md-select-option>
    <md-select-option value="Miss">
        <div slot="headline">Miss</div>
    </md-select-option>
</md-outlined-select>