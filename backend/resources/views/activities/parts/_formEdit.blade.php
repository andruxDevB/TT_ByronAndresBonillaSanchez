@csrf
<div class="row">
    <x-forms.inputEdit-md-4 label="{{ __('Activity Name') }}" type="text" name="activity_name" value="{{ old('name', $activity->name) }}"/>
        @error('activity_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-4>
        
    <x-forms.inputEdit label="Last Name" type="text" name="last_name" value="{{ old('last_name', $guide->profile->last_name) }}">
        @error('last_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Email" type="email" name="email" value="{{ old('email', $guide->profile->email) }}">
        @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Telephone" type="text" name="phone" value="{{ old('phone', $guide->profile->phone) }}">
        @error('phone')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>

    <x-forms.inputEdit label="Id Card Number" type="text" name="id_card_number" value="{{ old('id_card_number', $guide->profile->id_card_number) }}">
        @error('id_card_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
    
    <x-forms.inputEdit label="Languajes" type="text" name="languajes" value="{{ old('languajes', $guide->languajes) }}">
        @error('languajes')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit>
</div>
<x-buttons.buttonsForms submit='Update' back='Return'></x-buttons.buttonsForms>


{{-- <x-inputs.input-md-6 label="{{ __('Activity Name') }}" type="text" name="activity_name" value="{{ old('name', $activity->name) }}"/>
    
    <x-inputs.input-md-2 label="{{ __('Activity Date') }}" value="{{ $activity->date }}"/>
    
    <x-inputs.input-md-2 label="{{ __('Activity Day') }}" value="{{ $activity->day }}"/>
    
    <x-inputs.input-md-2 label="{{ __('Activity Pick up') }}" value="{{ $activity->time_pickup }}"/>
    
    <x-inputs.input-md-4 label="{{ __('Breakfast') }}" value="{{ $activity->breakfast }}"/>
    
    <x-inputs.input-md-4 label="{{ __('Lunch') }}" value="{{ $activity->lunch }}"/>
    
    <x-inputs.input-md-4 label="{{ __('Dinner') }}" value="{{ $activity->dinner }}"/>
    
    <x-inputs.input-md-6 label="{{ __('Hotel') }}" value="{{ $activity->hotel->name ?? 'Unassigned' }}"/>
    
    <x-inputs.input-md-6 label="{{ __('Galapagos Cruise') }}" value="{{ $activity->cruise->name ?? 'Unassigned' }}"/>
    
    <x-inputs.input-md-12 label="{{ __('Remarks') }}" value="{{ $activity->lunch }}"/>
        
    <x-inputs.input-md-4 label="{{ __('Guide') }}" value="{{ $activity->guide->name ?? 'Unassigned' }}"/>
    
    <x-inputs.input-md-4 label="{{ __('Driver') }}" value="{{ $activity->driver->name ?? 'Unassigned' }}"/>

    <x-inputs.input-md-4 label="{{ __('Type Transport') }}" value="{{ $activity->driver->type_transport ?? 'Unassigned' }}"/> --}}