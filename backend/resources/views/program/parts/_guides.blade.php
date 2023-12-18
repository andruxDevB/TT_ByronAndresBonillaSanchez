<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white mx-3">Guides</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    @if ($program->activities->count())
                        <table class="table align-items-center mb-0" aria-describedby="Guides">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date of Birth</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nationality</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telephone</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Card Number</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Languajes</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($program->activities as $activity)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->profile->first_name }} {{ $activity->guide->profile->last_name }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->profile->DOB }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->profile->email }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->profile->nationality }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->profile->phone }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->profile->id_card_number }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                Guide
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                {{ $activity->guide->languajes }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondar text-xs font-weight-boldy">
                                                HOST
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
