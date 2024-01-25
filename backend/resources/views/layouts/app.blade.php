@props(['bodyClass'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.surtrek.com/images/template/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.surtrek.com/images/template/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://www.surtrek.com/images/template/favicon-16x16.png">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />

        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- DatePicker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="{{ $bodyClass }}">
        
        {{ $slot }}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.1/perfect-scrollbar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/15.2.1/smooth-scroll.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @stack('js')
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
            
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
            
            $(document).ready(function(){
                $('#datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
                });
            });

            $(document).ready(function domReady() {
                $(".js-select2").select2({
                    theme: "material"
                });
                
                $(".select2-selection__arrow")
                    .addClass("material-icons")
                    .html("arrow_drop_down");
            });
        </script>
        @livewireScripts
    </body>
</html>
