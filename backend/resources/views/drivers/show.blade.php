<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="drivers"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Profile {{ $driver->profile->first_name.' '.$driver->profile->last_name }}"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/528/20306337269_2a7fbef60c_k.jpg'></x-profile>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <!-- header Profile -->
                    <x-profile.headerInfo imgAvatar="{{ asset('/img/004-conductor.png') }}" nameProfile="{{ $driver->profile->first_name.' '.$driver->profile->last_name }}" typeProfile='Driver'></x-profile.headerInfo>
                    <!-- End header Profile -->
                    <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-center">
                        <a href="{{ route('drivers.edit', $driver) }}" class="btn bg-gradient-success mb-0">
                            <i class="fas fa-user-edit text-secondary text-sm text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                            &nbsp;&nbsp;Edit Profile
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="p-3">Driver Profile Information</h3>
                    </div>
                </div>
                <!-- Profile -->
                @include('drivers.parts._showProfile')
                <!-- End Profile -->
            </div>
            <x-footer.auth></x-footer.auth>
        </div>
    </x-main.main>
</x-layout>
