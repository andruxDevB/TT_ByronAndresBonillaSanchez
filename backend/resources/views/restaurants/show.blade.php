<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="restaurants"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Information {{ $restaurant->name }}"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Alerts -->
            <x-alert.alerts></x-alert.alerts>
            <!-- End Alerts -->
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/579/21042241428_41dee115e1_b.jpg'></x-profile>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <!-- header Profile -->
                    <x-profile.headerInfo imgAvatar="{{ asset('/img/006-restaurant.png') }}" nameProfile="{{ $restaurant->name }}" typeProfile='Restaurant'></x-profile.headerInfo>
                    <!-- End header Profile -->
                    <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-center">
                        <a href="{{ route('restaurants.edit', $restaurant) }}" class="btn bg-gradient-success mb-0">
                            <i class="fas fa-user-edit text-secondary text-sm text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Information"></i>
                            &nbsp;&nbsp;Edit Information
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="p-3">Restaurant Main Information</h3>
                    </div>
                </div>
                <!-- Profile -->
                @include('restaurants.parts._showProfile')
                <!-- End Profile -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="mb-1 ps-3">
                            <h3 class="mb-1">{{ $restaurant->name }} Menus</h3>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#modal-create-menu">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Menu
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($restaurant->menus->count())
                        <!-- Rooms -->
                        @include('restaurants.parts._menus')
                        <!-- End Rooms -->
                    @else
                        <x-alert.noResults result="menus"/>
                    @endif
                    <x-buttons.return routeReturn="{{ route('restaurants.index') }}"></x-buttons.return>
                </div>
                <!-- Add Cabins -->
                @include('restaurants.parts.modals._createMenu')
                <!-- End Add Cabins -->
            </div>
            <!-- Footer -->
            <x-footer.auth></x-footer.auth>
            <!-- End Footer -->
        </div>
    </x-main.main>
</x-layout>
