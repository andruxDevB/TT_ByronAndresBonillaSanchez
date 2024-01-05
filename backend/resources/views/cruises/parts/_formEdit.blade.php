@csrf
<div class="row">
    <x-forms.inputEdit label="Cruise Name" type="text" name="cruise_name" value="{{ old('name',$cruise->name) }}">
        @error('cruise_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
        
    <div class="col-md-4 col-12">
        <div class="input-group input-group-static mb-4">
            <label for="category">Cruise Category</label>
            <select class="form-control" name="category">
                <option value="Luxury" {{ old("category",$cruise->category) == 'Luxury' ? 'selected' : '' }}>Luxury</option>
                <option value="First Class" {{ old("category",$cruise->category) == 'First Class' ? 'selected' : '' }}>First Class</option>
                <option value="Tourist" {{ old("category",$cruise->category) == 'Tourist' ? 'selected' : '' }}>Tourist</option>
                <option value="Diving" {{ old("category",$cruise->category) == 'Diving' ? 'selected' : '' }}>Diving</option>
            </select>
            @error('category')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
    </div>
    
    <x-forms.inputEdit label="Executive Sales" type="text" name="sales_executive" value="{{ old('sales_executive',$cruise->sales_executive) }}">
        @error('sales_executive')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
        
    <x-forms.inputEdit label="Email" type="email" name="email" value="{{ old('email',$cruise->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="{{ old('phone',$cruise->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
