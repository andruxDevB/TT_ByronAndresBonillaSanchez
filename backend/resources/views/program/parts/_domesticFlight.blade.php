<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 mb-3 z-index-2">
                <div class="d-flex align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="w-100">
                        <h6 class="text-white mx-3">Domestic Flights</h6>
                    </div>
                    <div class="flex-shrink-1 pe-3">
                        <a href="#collapseExample" role="button" data-bs-toggle="modal" data-bs-target="#modal-domesticflight">
                            <i class="material-icons text-white fs-4">post_add</i>
                        </a>
                    </div>
                </div>
            </div>

            <x-add-new href="{{-- {{ route('guides.edit', $guide) }} --}}" value="New flight" />

            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    @if ($program->domestic_flights->count())
                        <table class="table align-items-center mb-0" aria-describedby="Domestic Flights">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Route</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Day</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Airline</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Flight number</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Departure time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Arrival time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Record</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($program->domestic_flights as $domestic_flight)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->route }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->date_flight }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->day }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->airline }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->flight_number }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->departure_time }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->flight_information->arrival_time }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $domestic_flight->reserve_code }}
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
@include('program.parts.modals._domesticFlight')
