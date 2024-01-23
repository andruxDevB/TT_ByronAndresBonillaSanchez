@csrf
<div class="row">
    <x-forms.inputEdit label="Hotel Name" type="text" name="name" value="">
        @error('name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
        
    <x-forms.inputEdit label="Country" type="text" name="country" value="">
        @error('country')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="City" type="text" name="city" value="">
        @error('city')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
        
    <div class="col-md-4 col-12">
        <div class="input-group input-group-static mb-4">
            <label for="category">Hotel Category</label>
            <select class="form-control" name="category">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
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
