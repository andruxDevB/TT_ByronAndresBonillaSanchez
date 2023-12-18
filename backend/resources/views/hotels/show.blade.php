<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="hotels"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Information {{ $hotel->name }}"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/5465/17644436749_36557365cd_h.jpg'></x-profile>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <!-- header Profile -->
                    <x-profile.headerInfo imgAvatar="{{ asset('/img/001-revisin.png') }}" nameProfile="{{ $hotel->name }}" typeProfile='Hotel'></x-profile.headerInfo>
                    <!-- End header Profile -->
                    <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-center">
                        <a class="btn bg-gradient-success mb-0" href="javascript:;">
                            <i class="fas fa-user-edit text-secondary text-sm text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>&nbsp;&nbsp;Edit information
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="p-3">Hotel Main Information</h3>
                    </div>
                </div>
                <!-- Profile -->
                @include('hotels.parts._showProfile')
                <!-- End Profile -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="mb-1 ps-3">
                            <h3 class="mb-1">{{ $hotel->name }} Rooms</h3>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#modal-create-room">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Room
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($hotel->rooms->count())
                        <!-- Rooms -->
                        @include('hotels.parts._rooms')
                        <!-- End Rooms -->
                    @else
                        <div class="px-3">
                            <div class="col-12 card card-blog card-plain border text-center">
                                <div class="card-body py-4 px-3">
                                    <p class="mb-0">There are no rooms to show.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <x-buttons.return routeReturn="{{ route('hotels.index') }}"></x-buttons.return>
                </div>
                <!-- Add Cabins -->
                @include('hotels.parts.modals._createRoom')
                <!-- End Add Cabins -->
            </div>
            <x-footer.auth></x-footer.auth>
        </div>
    </x-main.main>
</x-layout>
