@csrf
<div class="row">
    <div class="col-md-1 mb-6 mb-md-4">
        <div class="input-group input-group-static">
            <label for='type' class="ms-0">Title</label>
            <select class="form-control" name="type">
                <option {{ old("type","") == "Mr" ? "selected" : $client->user->profile->type }} value="Mr">Mr.</option>
                <option {{ old("type","") == "Ms" ? "selected" : $client->user->profile->type }} value="Ms">Ms.</option>
                <option {{ old("type","") == "Mrs" ? "selected" : $client->user->profile->type }} value="Mrs">Mrs.</option>
                <option {{ old("type","") == "Miss" ? "selected" : $client->user->profile->type }} value="Miss">Miss.</option>
            </select>
            @error('type')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
    </div>

    <x-forms.inputEdit-md md="3" label="First Name" type="text" name="first_name" value="{{ old('first_name', $client->user->profile->first_name) }}">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
        
    <x-forms.inputEdit-md md="3" label="Last Name" type="text" name="last_name" value="{{ old('last_name', $client->user->profile->last_name) }}">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
        
    <x-forms.inputEdit-md md="2" label="Country" type="text" name="country" value="{{ old('country', $client->user->profile->country) }}">
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
        
    <x-forms.inputEdit-md md="3" label="Nationality" type="text" name="nationlaity" value="{{ old('nationality', $client->user->profile->nationality) }}">
        @error('nationality')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="3" label="Email" type="email" name="email" value="{{ old('email', $client->user->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="3" label="Telephone" type="text" name="phone" value="{{ old('phone', $client->user->profile->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="3" label="Id Card Number" type="text" name="id_card_number" value="{{ old('id_card_number', $client->user->profile->id_card_number) }}">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.datepicker-md-value md="3" label="Date of Birth" name="dob" value="{{ old('dob', $client->user->profile->dob) }}">
    </x-forms.datepicker-md-value>

    <x-forms.inputEdit-md md="4" label="Restrictions" type="text" name="restrictions" value="{{ old('restrictions', $client->restrictions) }}">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="4" label="Special Requests" type="text" name="special_request" value="{{ old('special_request', $client->special_request) }}">
        @error('special_request')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="4" label="Emergency Contact" type="text" name="emergency_contact" value="{{ old('emergency_contact', $client->emergency_contact) }}">
        @error('emergency_contact')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
