<div class="row gx-4 mb-2">
    <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('/img/003-gua-turstico.png') }}" alt="profile_image" class="w-100">
        </div>
    </div>
    <div class="col-auto my-auto">
        <div class="h-100">
            <h5 class="mb-1">{{ $program->client->user->profile->type.'. '.$program->client->user->profile->first_name.' '.$program->client->user->profile->last_name }}</h5>
            <p class="mb-0 font-weight-normal text-sm">Program</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h6 class="p-3">Main Information</h6>
    </div>
</div>
<div class="row px-3">

    <x-input-info label="{{ __('Client Name') }}" value="{{ $program->client->user->profile->type.'. '.$program->client->user->profile->first_name.' '.$program->client->user->profile->last_name }}"/>

    <x-input-info label="{{ __('Email') }}" value="{{ $program->client->user->email }}"/>

    <x-input-info label="{{ __('File Number') }}" value="{{ $program->file_number }}"/>
    
    <x-input-info label="{{ __('Telephone') }}" value="{{ $program->client->user->profile->phone }}"/>

    <x-input-info label="{{ __('Type Tour') }}" value="{{ $program->type_tour }}"/>

    <x-input-info label="{{ __('Sales Executive') }}" value="{{ $program->sales_executive }}"/>
        
</div>
