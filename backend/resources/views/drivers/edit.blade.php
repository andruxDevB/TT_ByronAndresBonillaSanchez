<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="drivers"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu='Services' titlePage='Driver Profile'></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80'></x-profile.bgHeader>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <!-- header Profile -->
                    <x-profile.headerInfo imgAvatar="{{ asset('/img/004-conductor.png') }}" nameProfile="{{ $driver->profile->first_name.' '.$driver->profile->last_name }}" typeProfile='Driver'></x-profile.headerInfo>
                    <!-- End header Profile -->
                </div>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="mb-3">Edit Drive Profile Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!-- Alert -->
                        <x-alert.alerts></x-alert.alerts>
                        <!-- End Alert -->
                        <form method="POST" action="{{ route('drivers.update', $driver->id) }}">
                            @method("PATCH")
                            <!-- Profile -->
                            @include('drivers.parts._formEdit')
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
