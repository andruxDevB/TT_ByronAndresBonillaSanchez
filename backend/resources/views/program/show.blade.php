<x-app-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="programs"></x-navbars.sidebar>
    <x-main.main>
        <!-- Navbar -->
        <x-navbars.nav.auth sectionMenu="Management" titlePage="Program to {{ $program->client->user->profile->type.'. '.$program->client->user->profile->first_name.' '.$program->client->user->profile->last_name }}"></x-navbars.nav.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://live.staticflickr.com/528/20306337269_2a7fbef60c_k.jpg');">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6 mb-4">
                @include('program.parts._maininformation')
            </div>
            @include('program.parts._program')
            @include('program.parts._itinerary')
            @include('program.parts._passengers')
            @include('program.parts._internationalFlight')
            @include('program.parts._domesticFlight')
            @include('program.parts._galapagosinformation')

            @if ($guides->count())
                <!-- Guides Table -->
                @include('program.parts._guides')
                <!-- End Guides Table -->
            @else
                <x-alert.noResults result='guides' />
            @endif
            @if ($drivers->count())
                <!-- Drivers Table -->
                @include('program.parts._drivers')
                <!-- End Drivers Table -->
           @else
                <x-alert.noResults result='drivers' />
            @endif
            <x-footer.auth></x-footer.auth>
        </div>
    </x-main.main>
    <script>
        $('.datepicker').datepicker({
            startDate: new Date()
        });
    </script>
</x-app-layout>
