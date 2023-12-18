<table class="table align-items-center mb-0" aria-describedby="Programs">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nº FILE</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">YEAR</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TOUR START DATE</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TOUR END DATE</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N° PAX</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PASSENGER</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $program)
            <tr>
                <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold ps-2">{{ $program->file_number }}</span>
                </td>
                <td class="align-middle">
                    <p class="text-center text-secondary text-xs mb-0">{{ $program->tour_year }}</p>
                </td>
                <td class="align-middle">
                    <p class="text-center text-secondary text-xs mb-0">2023/Nov/03</p>
                </td>
                <td class="align-middle">
                    <p class="text-center text-secondary text-xs mb-0">2023/Nov/03</p>
                </td>
                <td class="align-middle">
                    <p class="text-center text-secondary text-xs mb-0">{{ $program->num_pax }}</p>
                </td>
                <td class="align-middle">
                    <p class="text-secondary text-xs my-3">{{ $program->client->user->profile->type.'. '.$program->client->user->profile->first_name.' '.$program->client->user->profile->last_name }}</p>
                </td>
                <td class="align-middle">
                    <x-action-button href="{{ route('programs.show', $program) }}" rel="tooltip" class="btn btn-success btn-link btn-sm mb-0" title="View">{{ __('Manage Program') }}</x-action-button>
                
                    {{-- <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm" data-original-title="" title="Delete">
                        Delete
                        <div class="ripple-container"></div>
                    </button> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>