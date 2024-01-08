<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="cruises"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Services" titlePage="Information {{ $cruise->name }}"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/7760/17888403755_5d3697fdac_k.jpg'></x-profile>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <!-- header Profile -->
                    <x-profile.headerInfo imgAvatar="{{ asset('/img/005-crucero.png') }}" nameProfile="{{ $cruise->name }}" typeProfile='Cruise'></x-profile.headerInfo>
                    <!-- End header Profile -->
                    <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-center">
                        <a class="btn bg-gradient-success mb-0" href="{{ route('cruises.edit',$cruise) }}">
                            <i class="fas fa-user-edit text-secondary text-sm text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>&nbsp;&nbsp;Edit information
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="p-3">Cruise Main Information</h3>
                    </div>
                </div>
                <!-- Profile -->
                @include('cruises.parts._showProfile')
                <!-- End Profile -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="mb-1 ps-3">
                            <h3 class="mb-1">{{ $cruise->name }} Cabins</h3>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#modal-create-cabin">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Cabin
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($cruise->cabins->count())
                        <!-- Cabins -->
                        @include('cruises.parts._cabins')
                        <!-- End Cabins -->
                    @else
                        <div class="px-3">
                            <div class="col-12 card card-blog card-plain border text-center">
                                <div class="card-body py-4 px-3">
                                    <p class="mb-0">There are no cabins to show.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <x-buttons.return routeReturn="{{ route('cruises.index') }}"></x-buttons.return>
                </div>
                <!-- Add Cabins -->
                @include('cruises.parts.modals._createCabin')
                <!-- End Add Cabins -->
            </div>
            <x-footer.auth></x-footer.auth>
        </div>
    </x-main.main>
</x-layout>
