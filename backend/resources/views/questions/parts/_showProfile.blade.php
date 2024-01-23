<div class="row px-3">
    <x-input-info label="{{ __('Hotel Name') }}" value="{{ $hotel->name }}"/>
    
    <x-input-info label="{{ __('Country') }}" value="{{ $hotel->country }}"/>
    
    <x-input-info label="{{ __('City') }}" value="{{ $hotel->city }}"/>
    
    <div class="col-md-4 mb-4">
        <div class="w-100 border-bottom">
            <p class="text-primary mb-0 text-input">Category</p>
            <div class="lh-lg mb-1 ps-3">
                <x-category.starCategory category="{{ $hotel->category }}" />
            </div>
        </div>
    </div>
    
    <x-input-info label="{{ __('Excutive Sales') }}" value="{{ $hotel->sales_executive }}"/>
    
    <x-input-info label="{{ __('Email') }}" value="{{ $hotel->email }}"/>
    
    <x-input-info label="{{ __('Telephone') }}" value="{{ $hotel->phone }}"/>
</div>
