<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Nishanth') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Scripts -->
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            ::selection {
                background: #fff2a8;
                /* color: rgb(236 253 245 ); */
                color: #000;
            }
            ::-moz-selection {
                background: #fff2a8;
                color: #000;
                /* color: rgb(236 253 245 ); */
            }
        </style>
    </head>
    <body class="font-sans antialiased max-w-screen">
        <div class="min-h-screen bg-slate-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="pt-16 max-w-screen">
                {{ $slot }}
            </main>
        </div>

        <div class=" max-w-screen mx-auto py-6 bg-slate-800 px-4 sm:px-6 lg:px-8">
            @include('layouts.footer')
        </div>
        
    </body>
</html>
