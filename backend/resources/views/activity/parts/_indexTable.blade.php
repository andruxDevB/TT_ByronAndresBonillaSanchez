<table class="table align-items-center mb-0" aria-labelledby="Guides Table">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telephone</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Languajes</th>
            <th class="text-secondary opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guides as $guide)
        <tr>
            <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold ps-2">{{ $guide->profile->first_name.' '.$guide->profile->last_name }}</span>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $guide->profile->email }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $guide->profile->phone }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $guide->languajes }}</p>
            </td>
            <td class="align-middle">
                <x-buttons.actions routeView='{{ route("guides.show", $guide) }}' routeEdit='{{ route("guides.edit", $guide) }}' routeDelete=''></x-buttons.actions>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
