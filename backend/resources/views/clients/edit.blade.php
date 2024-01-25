<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="clients"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu='Management' titlePage='Passenger Profile'></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/528/20306337269_2a7fbef60c_k.jpg'></x-profile.bgHeader>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <!-- header Profile -->
                    <x-profile.headerInfo imgAvatar="{{ asset('/img/002-ubicacin.png') }}" nameProfile="{{ $client->user->profile->type.'. '.$client->user->profile->first_name.' '.$client->user->profile->last_name }}" typeProfile='Passenger'></x-profile.headerInfo>
                    <!-- End header Profile -->
                </div>
                <div class="card card-plain h-100">
                    <div class="card-header bg-white pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="mb-3">Edit Passenger Profile Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!-- Alert -->
                        <x-alert.alerts></x-alert.alerts>
                        <!-- End Alert -->
                        <form method="POST" action="{{ route('clients.update', $client->id) }}">
                            @method("PATCH")
                            <!-- Profile -->
                            @include('clients.parts._formEdit')
                            <!-- End Profile -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <x-footer.auth></x-footer.auth>
            <!-- End Footer -->
        </div>
    </x-main.main>
</x-app-layout>
