<div class="row px-3">
    <div class="col-md-2 form-floating input-group input-group-dynamic mb-4">
        <input name="type" class="form-control" value="{{ $guide->profile->type.'.' }}" disabled>
        <label for="type">Title</label>
    </div>
    <div class="col-md-5 form-floating input-group input-group-dynamic mb-4">
        <input name="first_name" class="form-control" value="{{ $guide->profile->first_name }}" disabled>
        <label for="first_name">First Name</label>
    </div>
    <div class="col-md-5 form-floating input-group input-group-dynamic mb-4">
        <input name="last_name" class="form-control" value="{{ $guide->profile->last_name }}" disabled>
        <label for="first_name">Last Name</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input name="email" class="form-control" value="{{ $guide->profile->email }}" disabled>
        <label for="email">Email</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input name="telephone" class="form-control" value="{{ $guide->profile->phone }}" disabled>
        <label for="telephone">Telephone</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input name="DOB" class="form-control" value="{{ $guide->profile->DOB }}" disabled>
        <label for="DOB">Date of Birth</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input name="location" class="form-control" value="{{ $guide->profile->country }}" disabled>
        <label for="location">Location</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input name="nationality" class="form-control" value="{{ $guide->profile->nationality }}" disabled>
        <label for="nationality">Nationality</label>
    </div>
    <div class="col-md-4 form-floating input-group input-group-dynamic mb-4">
        <input name="id_card_number" class="form-control" value="{{ $guide->profile->id_card_number }}" disabled>
        <label for="id_card_number">Id Card Number</label>
    </div>
    <div class="col-md-6 form-floating input-group input-group-dynamic mb-4">
        <input name="company" class="form-control" value="{{ $guide->languajes }}" disabled>
        <label for="company">Languajes</label>
    </div>
    <x-buttons.return routeReturn="{{ route('guides.index') }}"></x-buttons.return>
</div>
