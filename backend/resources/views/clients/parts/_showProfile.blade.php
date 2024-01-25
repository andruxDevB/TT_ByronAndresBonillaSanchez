@php
    use Carbon\Carbon;
    $years_old = Carbon::parse($client->user->profile->dob)->age;
@endphp
<div class="row px-3">
    <x-input-info-md md="1" label="{{ __('Title') }}" value="{{ $client->user->profile->type.'.' }}"/>
    
    <x-input-info-md md="5" label="{{ __('Full Name') }}" value="{{ $client->user->profile->first_name.' '.$client->user->profile->last_name }}"/>
    
    <x-input-info-md md="3" label="{{ __('Country') }}" value="{{ $client->user->profile->country }}"/>
    
    <x-input-info-md md="3" label="{{ __('Nationality') }}" value="{{ $client->user->profile->nationality }}"/>
    
    <x-input-info-md md="3" label="{{ __('Email') }}" value="{{ $client->user->email }}"/>
    
    <x-input-info-md md="3" label="{{ __('Telephone') }}" value="{{ $client->user->profile->phone }}"/>
    
    <x-input-info-md md="3" label="{{ __('Id Card Number') }}" value="{{ $client->user->profile->id_card_number }}"/>

    <x-input-info-md md="2" label="{{ __('Date of Birth') }}" value="{{ $client->user->profile->dob }}"/>

        <x-input-info-md md="1" label="{{ __('Years Old') }}" value="{{ $years_old }}"/>

    <x-input-info-md md="4" label="{{ __('Restrictions') }}" value="{{ $client->restrictions }}"/>

    <x-input-info-md md="4" label="{{ __('Special Requests') }}" value="{{ $client->special_request }}"/>

    <x-input-info-md md="4" label="{{ __('Emergency Contact') }}" value="{{ $client->emergency_contact }}"/>

    <x-buttons.return routeReturn="{{ route('clients.index') }}"></x-buttons.return>
</div>
