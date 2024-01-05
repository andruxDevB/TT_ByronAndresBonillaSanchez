@csrf
<div class="row">
    <x-forms.inputEdit label="First Name" type="text" name="first_name" value="">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
        
    <x-forms.inputEdit label="Last Name" type="text" name="last_name" value="">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Email" type="email" name="email" value="">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Id Card Number" type="text" name="id_card_number" value="">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Languajes" type="text" name="languajes" value="">
        @error('languajes')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'/>
