<div class="row px-3">
    <x-input-info label="{{ __('First Name') }}" value="{{ $driver->profile->first_name }}"/>
    
    <x-input-info label="{{ __('Last Name') }}" value="{{ $driver->profile->last_name }}"/>
    
    <x-input-info label="{{ __('Email') }}" value="{{ $driver->profile->email }}"/>
    
    <x-input-info label="{{ __('Telephone') }}" value="{{ $driver->profile->phone }}"/>
    
    <x-input-info label="{{ __('Id Card Number') }}" value="{{ $driver->profile->id_card_number }}"/>
    
    <x-input-info label="{{ __('Company') }}" value="{{ $driver->company }}"/>
    
    <x-input-info label="{{ __('Transport Type') }}" value="{{ $driver->transport_type }}"/>
    <x-buttons.return routeReturn="{{ route('drivers.index') }}"></x-buttons.return>
</div>
