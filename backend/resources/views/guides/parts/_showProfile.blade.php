<div class="row px-3">
    <x-input-info label="{{ __('First Name') }}" value="{{ $guide->profile->first_name }}"/>
    
    <x-input-info label="{{ __('Last Name') }}" value="{{ $guide->profile->last_name }}"/>
    
    <x-input-info label="{{ __('Email') }}" value="{{ $guide->profile->email }}"/>
    
    <x-input-info label="{{ __('Telephone') }}" value="{{ $guide->profile->phone }}"/>
    
    <x-input-info label="{{ __('Id Card Number') }}" value="{{ $guide->profile->id_card_number }}"/>
    
    <x-input-info label="{{ __('Languajes') }}" value="{{ $guide->languajes }}"/>
    <x-buttons.return routeReturn="{{ route('guides.index') }}"></x-buttons.return>
</div>
