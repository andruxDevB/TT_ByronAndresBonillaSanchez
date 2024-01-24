<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <x-card.cardHeaderProgram title="Drivers" icon="drive_eta" modal="#"/>
            
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    @if ($program->activities->count())
                        <table class="table align-items-center mb-0" aria-describedby="Drivers">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Driver Telephone</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type of Transportation</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($program->activities as $activity)
                                @if ($activity !== null && $activity->driver !== null)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $activity->driver->profile->first_name.' '. $activity->driver->profile->last_name ?? '' }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $activity->driver->profile->phone }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $activity->driver->company }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $activity->driver->transport_type }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                Confirmed
                                            </span>
                                        </td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <x-alert.noResults result='drivers' />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
