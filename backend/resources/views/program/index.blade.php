<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="programs"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Management" titlePage="Programs Management"></x-navbars.nav.auth>
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
                            <x-title.titleGradient icon='travel_explore' title='Programs Management'></x-title.titleGradient>
                            <!-- End Title -->
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a href="#" class="btn bg-gradient-dark mb-0"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Program</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                @if ($programs->count())
                                    <!-- Hotels Table -->
                                    @include('program.parts._indexTable')
                                    <!-- End Hotels Table -->
                                    {{-- <div class="mx-3">
                                        {!! $hotels->withQueryString()->links('pagination::bootstrap-5') !!}
                                    </div> --}}
                                @else
                                    <div class="px-3 mb-4">
                                        <div class="col-12 card card-blog card-plain border text-center">
                                            <div class="card-body py-4 px-3">
                                                <p class="mb-0">There are no programs to show.</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footer.auth></x-footer.auth>
        </div>
    </x-main.main>
</x-app-layout>