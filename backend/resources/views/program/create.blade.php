<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="programs"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu='Management' titlePage='Add New Program'></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- Bg Header -->
            <x-profile.bgHeader bgImage='https://live.staticflickr.com/528/20306337269_2a7fbef60c_k.jpg'></x-profile>
            <!-- End Bg Header -->
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="card card-plain h-100">
                    <div class="card-header bg-white pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="mb-3">Create New Program</h3>
                            </div>
                            <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-center">
                                <a href="#" class="btn bg-gradient-success mb-0">
                                    <i class="fas fa-user-plus text-secondary text-sm text-white"></i>
                                    &nbsp;&nbsp;New Client
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body mt-6 p-3">
                        <x-alert.alerts></x-alert.alerts>
                        <form method="POST" action="{{ route('programs.store') }}">
                            <!-- Create Profile -->
                            @include('program.parts._formCreate')
                            <!-- End Create Profile -->
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
