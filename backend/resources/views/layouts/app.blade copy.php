<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.1/perfect-scrollbar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/15.2.1/smooth-scroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('js')
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            
            // Get all elements with class "auto-close"
            const autoCloseElements = document.querySelectorAll(".auto-close");

            // Define a function to handle the fading and sliding animation
            function fadeAndSlide(element) {
            const fadeDuration = 500;
            const slideDuration = 500;
            
            // Step 1: Fade out the element
            let opacity = 1;
            const fadeInterval = setInterval(function () {
                if (opacity > 0) {
                opacity -= 0.1;
                element.style.opacity = opacity;
                } else {
                clearInterval(fadeInterval);
                // Step 2: Slide up the element
                let height = element.offsetHeight;
                const slideInterval = setInterval(function () {
                    if (height > 0) {
                    height -= 10;
                    element.style.height = height + "px";
                    } else {
                    clearInterval(slideInterval);
                    // Step 3: Remove the element from the DOM
                    element.parentNode.removeChild(element);
                    }
                }, slideDuration / 10);
                }
            }, fadeDuration / 10);
            }

            // Set a timeout to execute the animation after 1000 milliseconds (1 seconds)
            setTimeout(function () {
            autoCloseElements.forEach(function (element) {
                fadeAndSlide(element);
            });
            }, 1500);
        </script>
        @livewireScripts
    </body>
</html>
