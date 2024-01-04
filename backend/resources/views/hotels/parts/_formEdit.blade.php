@csrf
<div class="row">
    <x-forms.inputEdit label="Hotel Name" type="text" name="name" value="{{ old('name',$hotel->name) }}" error="name"/>
        
    <x-forms.inputEdit label="Country" type="text" name="country" value="{{ old('country',$hotel->country) }}" error="country"/>
        
    <x-forms.inputEdit label="City" type="text" name="city" value="{{ old('city',$hotel->city) }}" error="city"/>
        
    <div class="col-md-4 col-12">
        <div class="input-group input-group-static mb-4">
            <label for="category">Hotel Category</label>
            <select class="form-control" name="category">
                <option value="5" {{ old("category",$hotel->category) == '5' ? 'selected' : '' }}>5</option>
                <option value="4" {{ old("category",$hotel->category) == '4' ? 'selected' : '' }}>4</option>
                <option value="3" {{ old("category",$hotel->category) == '3' ? 'selected' : '' }}>3</option>
                <option value="2" {{ old("category",$hotel->category) == '2' ? 'selected' : '' }}>2</option>
                <option value="1" {{ old("category",$hotel->category) == '1' ? 'selected' : '' }}>1</option>
            </select>
            @error('category')
                <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
        </div>
    </div>
    
    <x-forms.inputEdit label="Executive Sales" type="text" name="sales_executive" value="{{ old('sales_executive',$hotel->sales_executive) }}" error="sales_executive"/>
        
    <x-forms.inputEdit label="Email" type="email" name="email" value="{{ old('email',$hotel->email) }}" error="sales_executive"/>
    
    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="{{ old('phone',$hotel->phone) }}" error="phone"/>
    
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>
