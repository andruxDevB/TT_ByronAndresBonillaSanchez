@csrf
<div class="row">
    <div class="col-md-6 input-group input-group-static mb-4">
        <label for="name">Hotel Name</label>
        <input type="text" name="name" class="form-control" value="{{ old("name",$hotel->name) }}">
        @error('name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-6 input-group input-group-static mb-4">
        <label for="category">Hotel Category</label>
        <select class="form-control" name="category">
            <option value="Luxury" {{ old("category",$hotel->category) == 'Luxury' ? 'selected' : '' }}>Luxury</option>
            <option value="First Class" {{ old("category",$hotel->category) == 'First Class' ? 'selected' : '' }}>First Class</option>
            <option value="Executive" {{ old("category",$hotel->category) == 'Executive' ? 'selected' : '' }}>Executive</option>
        </select>
        @error('category')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="name_executive">Executive Sales</label>
        <input type="text" name="name_executive" class="form-control" value="{{ old("name_executive",$hotel->name_executive) }}">
        @error('name_executive')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old("email",$hotel->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
    <div class="col-md-4 input-group input-group-static mb-4">
        <label for="phone">Telephone</label>
        <input type="text" name="phone" class="form-control" value="{{ old("phone",$hotel->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
