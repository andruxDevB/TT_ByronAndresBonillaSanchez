<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white mx-3">Drivers</h6>
                </div>
            </div>
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($program->activities as $activity)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $activity->driver->profile->first_name.' '.$activity->driver->profile->last_name }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $activity->driver->profile->phone }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                SURTREK
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                Toyota Fortuner
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                Guide/driver Español
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                Confirmed
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center my-4">
                            <p>Not found records</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
