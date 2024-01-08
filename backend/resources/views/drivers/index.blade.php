<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="drivers"></x-navbars.sidebars>
        <x-main.main>
            <!-- Navbar -->
            <x-navbars.nav.auth sectionMenu="Services" titlePage="Drivers Management"></x-navbars.nav.auth>
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
                                <x-title.titleGradient icon='drive_eta' title='Drivers Management'></x-title.titleGradient>
                                <!-- End Title -->
                            </div>
                            <div class="me-3 my-3 text-end">
                                <a href="{{ route('drivers.create') }}" class="btn bg-gradient-dark mb-0"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New driver</a>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <!-- Table Drivers -->
                                    @if ($drivers->count())
                                        @include('drivers.parts._indexTable')
                                    @else
                                        <div class="px-3 mb-4">
                                            <div class="col-12 card card-blog card-plain border text-center">
                                                <div class="card-body py-4 px-3">
                                                    <p class="mb-0">There are no rooms to show.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- End Table Drivers -->
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
</x-layout>
