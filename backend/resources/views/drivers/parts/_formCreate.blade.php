@csrf
<div class="row">
    <div class="col-md-2 input-group input-group-static mb-4">
        <label for='type' class="ms-0">Title</label>
        <select class="form-control" name="type">
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Miss.">Miss.</option>
        </select>
        @error('type')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-5 input-group input-group-static mb-4">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control">
        @error('first_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-5 input-group input-group-static mb-4">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" class="form-control">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="id_card_number">Id Card Number</label>
        <input type="text" name="id_card_number" class="form-control">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="country">Location</label>
        <input type="text" name="country" class="form-control">
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" class="form-control">
        @error('nationality')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="DOB">Date of Birth</label>
        <input type="date" name="DOB" class="form-control">
        @error('DOB')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="company">Company</label>
        <input type="text" name="company" class="form-control">
        @error('company')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="type_transport">Type Transport</label>
        <input type="text" name="type_transport" class="form-control">
        @error('type_transport')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'></x-buttons.buttonsForms>
