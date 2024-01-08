@csrf
<div class="row">
    <x-forms.inputEdit label="First Name" type="text" name="first_name" value="{{ old('first_name', $guide->profile->first_name) }}">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
        
    <x-forms.inputEdit label="Last Name" type="text" name="last_name" value="{{ old('last_name', $guide->profile->last_name) }}">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Email" type="email" name="email" value="{{ old('email', $guide->profile->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="{{ old('phone', $guide->profile->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Id Card Number" type="text" name="id_card_number" value="{{ old('id_card_number', $guide->profile->id_card_number) }}">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Languajes" type="text" name="languajes" value="{{ old('languajes', $guide->languajes) }}">
        @error('languajes')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
