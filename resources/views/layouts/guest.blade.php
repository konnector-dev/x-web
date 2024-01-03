<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
            bg-gray-900
            flex flex-col justify-between
            ">
        <x-header />
        <div>
            {{ $slot }}
        </div>
    <x-footer />
    </body>
</html>
