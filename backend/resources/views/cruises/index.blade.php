<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="cruises"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Cruises Management"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <!-- Alerts -->
            <x-alert.alerts></x-alert.alerts>
            <!-- End Alerts -->
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <!-- Title -->
                            <x-title.titleGradient icon='sailing' title='Cruises Management'></x-title.titleGradient>
                            <!-- End Title -->
                        </div>
                        <!-- Create New -->
                        <x-buttons.createNew routeNew="{{ route('cruises.create') }}" iconNew='add' valueNew='Add New Cruise'></x-buttons.createNew>
                        <!-- End Create New -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <!-- Table Cruises -->
                                @if ($cruises->count())
                                    @include('cruises.parts._indexTable')
                                @else
                                    <x-alert.noResults result='cruises'></x-alert.noResults>
                                @endif
                                <!-- End Table Cruises -->
                                {{-- <div class="mx-3">
                                    {!! $hotels->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div> --}}
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
