@csrf
<div class="row">
    <div class="col-md-4 col-12">
        <x-input type="text" id="name" name="name" class="form-control" label="{{ __('Hotel Name') }}" :value="old('name')" :required="true" :autofocus="true"/>
    </div>
    <div class="col-md-4 col-12">
        <x-input type="text" id="country" name="country" class="form-control" label="{{ __('Country') }}" :value="old('country')" :required="true"/>
    </div>
    <div class="col-md-4 col-12">
        <x-input type="text" id="city" name="city" class="form-control" label="{{ __('City') }}" :value="old('city')" :required="true"/>
    </div>
    <div class="col-md-4 col-12">
        <x-selectCategory name="category" class="form-control" label="{{ __('Hotel Category') }}" :required="true" />
    </div>
    <div class="col-md-4 col-12">
        <x-input type="text" id="sales_executive" name="sales_executive" class="form-control" label="{{ __('Executive Sales') }}" :value="old('sales_executive')" :required="true"/>
    </div>
    <div class="col-md-4 col-12">
        <x-input type="email" id="email" name="email" class="form-control" label="{{ __('Email') }}" :value="old('email')" :required="true"/>
    </div>
    <div class="col-md-4 col-12">
        <x-input type="text" id="phone" name="phone" class="form-control" label="{{ __('Telephone') }}" :value="old('phone')" :required="true"/>
    </div>
    <div class="col-md-4 col-12 lh-lg pt-4 text-center">
        <label for="active">Active</label>
        <md-switch name="active" selected></md-switch>
    </div>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'></x-buttons.buttonsForms>
