<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="guides"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Guides Management"></x-navbars.nav.auth>
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
                            <x-title.titleGradient icon='directions_walk' title='Guides Management'></x-title.titleGradient>
                            <!-- End Title -->
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('guides.create') }}">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;New Guide
                            </a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <!-- Table Guides -->
                                @if ($guides->count())
                                    @include('guides.parts._indexTable')
                                @else
                                    <x-alert.noResults result='guides'></x-alert.noResults>
                                @endif
                                <!-- End Table Guides -->
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
