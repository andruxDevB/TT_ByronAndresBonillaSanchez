<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <x-card.cardHeaderProgram title="Galapagos Information" icon="travel" />
            
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" aria-describedby="Galapagos Information">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ingala</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PNG</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">GPS Ticket</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Boats</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->galapagos_information->ingala ?? '' }}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->galapagos_information->PNG ?? '' }}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->galapagos_information->gps_ticket ?? '' }}
                                    </span></td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $program->galapagos_information->boats ?? '' }}
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
