<div class="modal fade" id="modal-internationalflight" tabindex="-1" role="dialog" aria-labelledby="modal-internationalflight" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h6 class="mb-0 text-primary">Add New International Flight</h6>
                        <p class="mt-0 text-sm">Enter new international flight information.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{-- {{ route('international_flights.store') }} --}}" method="post">
                            @csrf
                            <input type="hidden" name="idp" value="{{ $program->id }}">
                            <div class="input-group input-group-static mb-4">
                                <label for="route">Route</label>
                                <input type="text" name="route" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="date_flight">Date Flight</label>
                                <input type="date" name="date_flight" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="airline">Airline</label>
                                <input type="text" name="airline" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="flight_number">Flight Number</label>
                                <input type="text" name="flight_number" class="form-control datepicker" autocomplete="off">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="departure_time">Departure Time</label>
                                <input type="time" name="departure_time" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="arrival_time">Arrival Time</label>
                                <input type="time" name="arrival_time" class="form-control">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn bg-gradient-dark mt-4 mb-0">Save Flight</button>
                                <button type="button" class="btn btn-link ml-auto mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
