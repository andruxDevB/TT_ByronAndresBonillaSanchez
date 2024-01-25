@csrf
<div class="row">
    <x-forms.inputEdit-md-6 label="Program Name" type="text" name="program_name" value="">
        @error('program_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-6>

    <x-forms.datepicker-md-3  label="Start Date Tour" name="start_date">
        @error('start_date')
        <p class='text-danger inputerror'>{{ $message }} </p>
    @enderror
    </x-forms.datepicker-md-3>
        
    <x-forms.inputEdit-md-3 label="File Number" type="text" name="file_number" value="">
        @error('file_number')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-3>

    <div class="col-md-4 mb-md-6 mb-4">
        <x-select label="Client" name="client">
            @foreach ($clients as $id => $client_full_name)
            <option value="{{ $id }}">
                {{ $client_full_name }}
            </option>
            @endforeach
        </x-select>
    </div>

    <x-forms.inputEdit-md-2 label="Num. Pax" type="number" name="num_pax" value="">
        @error('num_pax')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-2>

    <x-forms.inputEdit-md-3 label="Country Tours" type="text" name="country_tours" value="">
        @error('country_tours')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-3>

    <x-forms.inputEdit-md-3 label="Executive Sales" type="text" name="sales_executive" value="">
        @error('sales_executve')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-3>
    
    <x-forms.inputEdit-md-6 label="Type Tour" type="text" name="type_tour" value="">
        @error('type_tour')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-6>
    
    <x-forms.inputEdit-md-2 label="Tour Days" type="number" name="tour_days" value="">
        @error('tour_days')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-2>

    <x-forms.inputEdit-md-12 label="General Notes" type="text" name="general_notes" value="">
        @error('general_notes')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-12>
</div>
<x-buttons.buttonsForms submit='Create' back='Return'></x-buttons.buttonsForms>
