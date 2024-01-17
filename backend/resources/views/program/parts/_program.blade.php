<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <x-card.cardHeaderProgram title="Program" icon="travel_explore" modal="#" />
            
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" aria-describedby="Program">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipe of Trip</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N. Pax</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year of Tour</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">General Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold text-uppercase">
                                        {{ $program->name }}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->type_tour }}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->num_pax }}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->tour_year }}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->general_notes }}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
