@csrf
<div class="row">
    <x-forms.inputEdit label="First Name" type="text" name="first_name" value="{{ old('first_name', $driver->profile->first_name) }}">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Last Name" type="text" name="last_name" value="{{ old('last_name', $driver->profile->last_name) }}">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Email" type="email" name="email" value="{{ old('email', $driver->profile->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="{{ old('phone', $driver->profile->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Id Card Number" type="text" name="id_card_number" value="{{ old('id_card_number', $driver->profile->id_card_number) }}">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Company" type="text" name="company" value="{{ old('company', $driver->company) }}">
        @error('company')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Transport Type" type="text" name="type_transport" value="{{ old('type_transport', $driver->transport_type) }}">
        @error('type_transport')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
