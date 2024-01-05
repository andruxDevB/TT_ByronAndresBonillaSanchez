<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="cruises"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu='Services' titlePage='Add New Cruise'></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/7760/17888403755_5d3697fdac_k.jpg'></x-profile>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="card card-plain h-100">
                    <div class="card-header bg-white pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="mb-3">Create New Cruise Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <x-alert.alerts></x-alert.alerts>
                        <form method="POST" action="{{ route('cruises.store') }}">
                            <!-- Create Cruise -->
                            @include('cruises.parts._formCreate')
                            <!-- End Create Cruise -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <x-footer.auth></x-footer.auth>
            <!-- End Footer -->
        </div>
    </x-main.main>
</x-layout>
