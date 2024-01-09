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
        <div
            x-data="{
                openMobileNav: false,
                expandDesktopNav: true,
                collapseDesktopNavbar() {
                    this.expandDesktopNav = false;
                    localStorage.setItem('expandDesktopNav', 'false');
                },
                expandDesktopNavbar() {
                    this.expandDesktopNav = true;
                    localStorage.expandDesktopNav = 'true';
                },
                initSidebar(expandDesktopNav = 'true') {
                    if (localStorage.getItem('expandDesktopNav')) {
                        if(localStorage.expandDesktopNav === 'true') {
                            this.expandDesktopNavbar();
                            return;
                        }
                        this.collapseDesktopNavbar()
                        return;
                    }
                    this.expandDesktopNavbar();
                    if(expandDesktopNav !== 'true') {
                        this.collapseDesktopNavbar();
                    }
                }
            }"
            x-init="initSidebar()"
            @keydown.shift.left.document="collapseDesktopNavbar()"
            @keydown.shift.right.document="expandDesktopNavbar()"
            x-on:show-mobile-navbar.window="openMobileNav = true"
            x-on:hide-mobile-navbar.window="openMobileNav = false"
            x-on:expand-desktop-navbar.window="expandDesktopNavbar()"
            x-on:collapse-desktop-navbar.window="collapseDesktopNavbar()">
            <div>
                <x-full-width.mobile-nav />
                <x-full-width.desktop-nav />
            </div>
            <div
                class="flex flex-col justify-between h-screen max-h-screen"
                :class="expandDesktopNav ? 'lg:ml-64' : 'lg:ml-20'">
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
