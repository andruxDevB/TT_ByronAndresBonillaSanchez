<table class="table align-items-center mb-0" aria-labelledby="Hotels Table">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sales Executive</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telephone</th>
            <th class="text-secondary opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hotels as $hotel)
            <tr>
                <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold ps-2">{{ $hotel->name }}</span>
                </td>
                <td class="align-middle text-center">
                    <x-category.starCategory category="{{ $hotel->category }}" />
                    {{-- <p class="text-secondary text-xs mb-0">{{ $hotel->category }}</p>
                    <span class="material-symbols-outlined text-warning text-sm">
                        star
                    </span> --}}
                </td>
                <td class="align-middle text-center">
                    <p class="text-secondary text-xs mb-0">{{ $hotel->sales_executive }}</p>
                </td>
                <td class="align-middle text-center">
                    <p class="text-secondary text-xs mb-0">{{ $hotel->email }}</p>
                </td>
                <td class="align-middle text-center">
                    <p class="text-secondary text-xs mb-0">{{ $hotel->phone }}</p>
                </td>
                <td class="align-middle">
                    <x-buttons.actions routeView='{{ route("hotels.show", $hotel) }}' routeEdit='{{ route("hotels.edit", $hotel) }}'></x-buttons.actions>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
