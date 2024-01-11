<table class="table align-items-center mb-0" aria-labelledby="Guides Table">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Restaurant Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sales Executive</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
            <th class="text-secondary opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($restaurants as $restaurant)
        <tr>
            <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold ps-2">{{ $restaurant->name }}</span>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $restaurant->country }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $restaurant->sales_executive }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $restaurant->email }}</p>
            </td>
            <td class="align-middle">
                <x-buttons.actions routeView='{{ route("restaurants.show", $restaurant) }}' routeEdit='{{ route("restaurants.edit", $restaurant) }}'></x-buttons.actions>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
