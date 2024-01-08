<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireScripts
    </head>
    <body class="font-sans antialiased w-full min-h-screen bg-gray-900 text-white">
        <div>
            <div class="">
                <x-full-width.mobile-nav />
                <x-full-width.desktop-nav />
            </div>
            <div class="flex flex-col h-screen max-h-screen justify-between ml-24">
                <x-full-width.header />
                <div class="flex flex-col h-screen max-h-screen justify-between m-5 p-5 rounded">
                    <main>
                        {{ $slot }}
                    </main>
                    <x-full-width.footer />
                </div>
            </div>
        </div>
        @stack('modals')
    </body>
</html>
