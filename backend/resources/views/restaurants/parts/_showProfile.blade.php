<div class="row px-3">
    <x-input-info label="{{ __('Restaurant Name') }}" value="{{ $restaurant->name }}"/>
    
    <x-input-info label="{{ __('Country') }}" value="{{ $restaurant->country }}"/>
    
    <x-input-info label="{{ __('City') }}" value="{{ $restaurant->city }}"/>
    
    <x-input-info label="{{ __('Sales Executive') }}" value="{{ $restaurant->sales_executive }}"/>
    
    <x-input-info label="{{ __('Email') }}" value="{{ $restaurant->email }}"/>
    
    <x-input-info label="{{ __('Telephone') }}" value="{{ $restaurant->phone }}"/>

    <x-buttons.return routeReturn="{{ route('restaurants.index') }}"></x-buttons.return>
</div>
