<table class="table align-items-center mb-0" aria-labelledby="Guides Table">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telephone</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">File Number</th>
            <th class="text-secondary opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold ps-2">{{ $client->user->profile->type.'. '.$client->user->profile->first_name.' '.$client->user->profile->last_name }}</span>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $client->user->email }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $client->user->profile->phone }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $client->program->file_number ?? '' }}</p>
            </td>
            <td class="align-middle">
                <x-buttons.actions routeView='{{ route("clients.show", $client) }}' routeEdit='{{ route("clients.edit", $client) }}' routeDelete=''></x-buttons.actions>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
