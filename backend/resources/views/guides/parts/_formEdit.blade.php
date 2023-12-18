@csrf
<div class="row">
    <div class="col-md-2 input-group input-group-static mb-4">
        <label for='type' class="ms-0">Title</label>
        <select class="form-control" name="type">
            <option {{ old("type","") == "Mr" ? "selected" : $guide->profile->type }} value="Mr">Mr.</option>
            <option {{ old("type","") == "Ms" ? "selected" : $guide->profile->type }} value="Ms">Ms.</option>
            <option {{ old("type","") == "Mrs" ? "selected" : $guide->profile->type }} value="Mrs">Mrs.</option>
            <option {{ old("type","") == "Miss" ? "selected" : $guide->profile->type }} value="Miss">Miss.</option>
        </select>
        @error('type')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-5 input-group input-group-static mb-4">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control" value='{{ old('first_name', $guide->profile->first_name) }}'>
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-5 input-group input-group-static mb-4">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control" value='{{ old('last_name', $guide->profile->last_name) }}'>
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value='{{ old('email', $guide->profile->email) }}'>
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" class="form-control" value='{{ old('phone', $guide->profile->phone) }}'>
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="id_card_number">Id Card Number</label>
        <input type="text" name="id_card_number" class="form-control" value='{{ old('id_card_number', $guide->profile->id_card_number) }}'>
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="country">Location</label>
        <input type="text" name="country" class="form-control" value='{{ old('country', $guide->profile->country) }}'>
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control" value='{{ old('nationality', $guide->profile->nationality) }}'>
        @error('nationality')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>

    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="DOB">Date of Birth</label>
        <input type="date" name="DOB" class="form-control" value='{{ old('DOB', $guide->profile->DOB) }}'>
        @error('DOB')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="nationality">Languajes</label>
        <input type="text" name="languajes" class="form-control" value='{{ old('languajes', $guide->languajes) }}'>
        @error('languajes')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
