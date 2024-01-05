@csrf
<div class="row">
    <x-forms.inputEdit label="Cruise Name" type="text" name="cruise_name" value="">
        @error('cruise_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <div class="col-md-4 col-12">
        <div class="input-group input-group-static mb-4">
            <label for="category">Hotel Category</label>
            <select class="form-control" name="category">
                <option value="Luxury">Luxury</option>
                <option value="First Class">First Class</option>
                <option value="Tourist">Tourist</option>
                <option value="Diving">Diving</option>
            </select>
            @error('category')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
    </div>

    <x-forms.inputEdit label="Executive Sales" type="text" name="sales_executive" value="">
        @error('sales_executive')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Email" type="email" name="email" value="">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'></x-buttons.buttonsForms>
