@csrf
<div class="row">
    <div class="col-md-6 input-group input-group-static mb-4">
        <label for="name">Hotel Name</label>
        <input type="text" name="name" class="form-control" value="">
        @error('name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-6 input-group input-group-static mb-4">
        <label for="category">Hotel Category</label>
        <input type="text" name="category" class="form-control" value="">
        @error('category')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="name_executive">Executive Sales</label>
        <input type="text" name="name_executive" class="form-control" value="">
        @error('name_executive')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" class="form-control" value="">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'></x-buttons.buttonsForms>
