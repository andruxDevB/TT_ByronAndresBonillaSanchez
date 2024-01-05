<table class="table align-items-center mb-0" aria-label="Table of Cruises">
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
        @foreach ($cruises as $cruise)
        <tr>
            <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold ps-2">{{ $cruise->name }}</span>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $cruise->category }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $cruise->sales_executive }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $cruise->email }}</p>
            </td>
            <td class="align-middle text-center">
                <p class="text-secondary text-xs mb-0">{{ $cruise->phone }}</p>
            </td>
            <td class="align-middle">
                <x-buttons.actions routeView="{{ route('cruises.show', $cruise) }}" routeEdit="{{ route('cruises.edit', $cruise) }}" routeDelete=""></x-buttons.actions>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
