<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="restaurants"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Restaurants Management"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <!-- Alerts -->
            <x-alert.alerts></x-alert.alerts>
            <!-- End Alerts -->
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n3 mx-3 z-index-2">
                            <!-- Title -->
                            <x-title.titleGradient icon='restaurant_menu' title='Restaurants Management'></x-title.titleGradient>
                            <!-- End Title -->
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('restaurants.create') }}">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;New Restaurant
                            </a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <!-- Table Restaurants -->
                                @if ($restaurants->count())
                                    @include('restaurants.parts._indexTable')
                                @else
                                    <x-alert.noResults result='restaurants'></x-alert.noResults>
                                @endif
                                <!-- End Table Restaurants -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <x-footer.auth></x-footer.auth>
            <!-- End Footer -->
        </div>
    </x-main.main>
</x-app-layout>
