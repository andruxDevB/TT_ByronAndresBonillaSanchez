@csrf
<div class="row">
    <div class="col-md-2 input-group input-group-static mb-4">
        <label for='type'>Title</label>
        <select class="form-control" name="type">
            <option value="Mr" {{ old("type",$driver->profile->type) == "Mr" ? "selected" : '' }}>Mr</option>
            <option value="Ms" {{ old("type",$driver->profile->type) == "Ms" ? "selected" : '' }}>Ms</option>
            <option value="Mrs" {{ old("type",$driver->profile->type) == "Mrs" ? "selected" : '' }}>Mrs</option>
            <option value="Miss" {{ old("type",$driver->profile->type) == "Miss" ? "selected" : '' }}>Miss</option>
        </select>
        @error('type')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-5 input-group input-group-static mb-4">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control" value="{{ old("first_name", $driver->profile->first_name) }}">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-5 input-group input-group-static mb-4">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control" value='{{ old('last_name', $driver->profile->last_name) }}'>
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value='{{ old('email', $driver->profile->email) }}'>
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" class="form-control" value='{{ old('phone', $driver->profile->phone) }}'>
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="id_card_number">Id Card Number</label>
        <input type="text" name="id_card_number" class="form-control" value='{{ old('id_card_number', $driver->profile->id_card_number) }}'>
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="country">Location</label>
        <input type="text" name="country" class="form-control" value='{{ old('country', $driver->profile->country) }}'>
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" value='{{ old('nationality', $driver->profile->nationality) }}'>
        @error('nationality')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="DOB">Date of Birth</label>
        <input type="date" name="DOB" class="form-control" value='{{ old('DOB', $driver->profile->DOB) }}'>
        @error('DOB')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="company">Company</label>
        <input type="text" name="company" class="form-control" value='{{ old('company', $driver->company) }}'>
        @error('company')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="type_transport">Type of Transport</label>
        <input type="text" name="type_transport" class="form-control" value='{{ old('type_transport', $driver->type_transport) }}'>
        @error('type_transport')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
