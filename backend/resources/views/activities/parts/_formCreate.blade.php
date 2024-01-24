@csrf
<div class="row">
    <x-forms.inputEdit-md-6 label="Activity Name" type="text" name="activity_name" value="">
        @error('activity_name')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-6>
        
    <x-forms.inputEdit-md-3 id="datepicker" label="Activity Date" type="date" name="activity_date" value="">
        @error('activity_date')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-3>

    <div class="col-md-6">
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <div class="input-group input-group-static mb-md-6 mb-4 date" id="datepicker">
                <input type="text" class="form-control" name="fecha">
                <span class="input-group-append">
                    <span class="input-group-text bg-light d-block">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </div>
    </div>

    {{-- <div class="form-group">
        <label for="fecha">Fecha:</label>
        <div class="input-group date" id="datepicker">
            <input type="text" class="form-control" name="fecha">
            <span class="input-group-append">
                <span class="input-group-text bg-light d-block">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
        </div>
    </div> --}}

    <x-forms.inputEdit-md-3 label="Activity time pickup" type="time" name="time_pickup" value="">
        @error('time_pickup')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-3>

    <div class="col-md-4 mb-md-6 mb-4">
        <x-select label="Breakfast" name="breakfast">
            @foreach ($restaurants as $id => $name)
            <option value="{{ $id }}">
                {{ $name }}
            </option>
            @endforeach
        </x-select>
    </div>

    <div class="col-md-4 mb-md-6 mb-4">
        <x-select label="Lunch" name="lunch">
            @foreach ($restaurants as $id => $name)
            <option selected value="{{ $id }}">
                {{ $name }}
            </option>
            @endforeach
        </x-select>
    </div>

    <div class="col-md-4 mb-md-6 mb-4">
        <x-select label="Dinner" name="dinner">
            @foreach ($restaurants as $id => $name)
            <option selected value="{{ $id }}">
                {{ $name }}
            </option>
            @endforeach
        </x-select>
    </div>

    <div class="col-md-6 mb-md-6 mb-4">
        <x-select label="Hotel" name="hotel">
            @foreach ($hotels as $id => $name)
            <option selected value="{{ $id }}">
                {{ $name }}
            </option>
            @endforeach
        </x-select>
    </div>

    <div class="col-md-6 mb-md-6 mb-4">
        <x-select label="Cruise" name="cruise">
            @foreach ($cruises as $id => $name)
            <option selected value="{{ $id }}">
                {{ $name }}
            </option>
            @endforeach
        </x-select>
    </div>
    
    <div class="col-md-6 mb-md-6 mb-4">
        <x-select label="Guide" name="guide">
            @foreach ($guides as $id => $guide_full_name)
            <option value="{{ $id }}">
                {{ $guide_full_name }}
            </option>
            @endforeach
        </x-select>
    </div>

    <div class="col-md-6 mb-md-6 mb-4">
        <x-select label="Driver" name="driver">
            @foreach ($drivers as $id => $driver_full_name)
            <option selected value="{{ $id }}">
                {{ $driver_full_name }}
            </option>
            @endforeach
        </x-select>
    </div>
    
    <x-forms.inputEdit-md-12 label="Remarks" type="text" name="remarks" value="">
        @error('remarks')
            <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </x-forms.inputEdit-md-12>

    <input name="program_id" hidden value="{{ $program->id }}">
</div>
<x-buttons.buttonsForms submit='Create' back='Return'/>
