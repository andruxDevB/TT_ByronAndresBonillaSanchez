<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telephone</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($drivers as $driver)
            <tr>
                <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold ps-2">{{ $driver->profile->first_name.' '.$driver->profile->last_name }}</span>
                </td>
                <td class="align-middle text-center">
                    <p class="text-secondary text-xs mb-0">{{ $driver->profile->email }}</p>
                </td>
                <td class="align-middle text-center">
                    <p class="text-secondary text-xs mb-0">{{ $driver->profile->phone }}</p>
                </td>
                <td class="align-middle text-center">
                    <p class="text-secondary text-xs mb-0">{{ $driver->company }}</p>
                </td>
                <td class="align-middle">
                    <x-buttons.actions routeView='{{ route("drivers.show", $driver) }}' routeEdit='{{ route("drivers.edit", $driver) }}' routeDelete=''></x-buttons.actions>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
