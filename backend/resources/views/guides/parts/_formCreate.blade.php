@csrf
<div class="row">
    <div class="col-md-4 mb-4">
        <x-input type="text" id="first_name" name="first_name" class="form-control" label="{{ __('First Name') }}" :required="true" :autofocus="true"/>
    </div>
    <div class="col-md-4 mb-4">
        <x-input type="text" id="last_name" name="last_name" class="form-control" label="{{ __('Last Name') }}" :required="true"/>
    </div>
    <div class="col-md-4 mb-4">
        <x-input type="email" id="email" name="email" class="form-control" label="{{ __('Email') }}" :required="true"/>
    </div>
    <div class="col-md-4 mb-4">
        <x-input type="text" id="telephone" name="telephone" class="form-control" label="{{ __('Telephone') }}" :required="true"/>
    </div>
    <div class="col-md-4 mb-4">
        <x-input type="text" id="id_card_number" name="id_card_number" class="form-control" label="{{ __('Id Card Number') }}" :required="true"/>
    </div>
    <div class="col-md-4 mb-4">
        <x-input type="text" id="languajes" name="languajes" class="form-control" label="{{ __('Languajes') }}" :required="true"/>
    </div>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'/>
