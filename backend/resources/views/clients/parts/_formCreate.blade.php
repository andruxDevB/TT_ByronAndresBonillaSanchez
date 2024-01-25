@csrf
<div class="row">
    <div class="col-md-1 mb-6 mb-md-4">
        <div class="input-group input-group-static">
            <label for='type' class="ms-0">Title</label>
            <select class="form-control" name="type">
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
            </select>
            @error('type')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
    </div>

    <x-forms.inputEdit-md md="3" label="First Name" type="text" name="first_name" value="">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
        
    <x-forms.inputEdit-md md="3" label="Last Name" type="text" name="last_name" value="">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
        
    <x-forms.inputEdit-md md="2" label="Country" type="text" name="country" value="">
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
        
    <x-forms.inputEdit-md md="3" label="Nationality" type="text" name="nationality" value="">
        @error('nationality')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="3" label="Email" type="email" name="email" value="">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="3" label="Telephone" type="text" name="phone" value="">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="3" label="Id Card Number" type="text" name="id_card_number" value="">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.datepicker-md-value md="3" label="Date of Birth" name="dob" value="">
    </x-forms.datepicker-md-value>

    <x-forms.inputEdit-md md="4" label="Restrictions" type="text" name="restrictions" value="">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="4" label="Special Requests" type="text" name="special_request" value="">
        @error('special_request')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>

    <x-forms.inputEdit-md md="4" label="Emergency Contact" type="text" name="emergency_contact" value="">
        @error('emergency_contact')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'/>
