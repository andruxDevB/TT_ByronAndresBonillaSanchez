<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 mb-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white mx-3">Itinerary</h6>
                </div>
            </div>

            <x-add-new href="{{-- {{ route('guides.edit', $guide) }} --}}" value="New activity" />
            
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    @if ($program->activities->count())
                        <table class="table align-items-center mb-0" aria-describedby="Itinerary">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Day</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activities</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pick up time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hotel / Ship</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Room / Cabin</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Guide</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Breakfast</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lunch</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dinner</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach ($program->activities as $activity)
                                <tr>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $i }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            {{ $activity->date }}
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            {{ $activity->day }}
                                        </span>
                                    </td>
                                    <td class="align-middle text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->activity }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            08:10:00
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->hotel->name }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->hotel->room }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->guide->profile->first_name }} {{ $activity->guide->profile->last_name }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->meal->breakfast }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->meal->lunch }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->meal->dinner }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $activity->remarks }}
                                        </p>
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
