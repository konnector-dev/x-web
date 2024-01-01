<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireScripts
    </head>
    <body
        class="antialiased
            container mx-auto px-4
            h-dvh min-h-screen
            bg-dots-darker bg-center
            text-white
            bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white
            flex flex-col justify-between
            ">
        <x-header />
        <div>
            <x-auth-links />

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <x-application-logo :class="'w-24 h-24'" />
                </div>
            </div>
        </div>
        <x-footer />
    </body>
</html>
