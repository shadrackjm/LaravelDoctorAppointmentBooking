@if (auth()->user() != null)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Doctors') }}
            </h2>
        </x-slot>
        <livewire:all-doctors/>
    </x-app-layout>
@else
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <!-- ========== HEADER ========== -->
            <livewire:top-bar-navigation />
        <!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content">
    <div class="py-5 bg-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:all-doctors/>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
    </body>
</html>

@endif
