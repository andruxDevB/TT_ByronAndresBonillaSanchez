<div class="row px-3">
    <x-inputs.input-md-6 label="{{ __('Activity Name') }}" value="{{ $activity->name }}"/>
    
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

    <x-inputs.input-md-4 label="{{ __('Type Transport') }}" value="{{ $activity->driver->type_transport ?? 'Unassigned' }}"/>
            
    <x-buttons.return routeReturn="{{ route('programs.show',$activity->program_id) }}"></x-buttons.return>
</div>
