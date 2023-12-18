<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.surtrek.com/images/template/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.surtrek.com/images/template/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://www.surtrek.com/images/template/favicon-16x16.png">

        <!-- Fonts and icons -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-200">
        <main class="main-content mt-0">
            <div class="font-sans text-gray-900 antialiased">
                <div class="page-header align-items-start min-vh-100" style="background-image: url('img/background-guest.jpg');">
                    <span class="mask bg-gradient-dark opacity-1"></span>
                    <div class="container my-auto">
                        <div class="row">
                            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @livewireScripts
    </body>
</html>
