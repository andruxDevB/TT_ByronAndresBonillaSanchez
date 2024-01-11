@csrf
<div class="row">        
    <x-forms.inputEdit label="Restaurant Name" type="text" name="restaurant_name" value="{{ old('name', $restaurant->name) }}">
        @error('restaurant_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Country" type="text" name="country" value="{{ old('country', $restaurant->country) }}">
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="City" type="text" name="city" value="{{ old('city', $restaurant->city) }}">
        @error('city')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Sales Executive" type="text" name="sales_executive" value="{{ old('sales_executive', $restaurant->sales_executive) }}">
        @error('sales_executive')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Email" type="email" name="email" value="{{ old('email', $restaurant->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="{{ old('phone', $restaurant->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
