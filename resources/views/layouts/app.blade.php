<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased" x-data="{ page: 'ecommerce', loaded: true, darkMode: true, stickyMenu: false, sidebarToggle: false, scrollTop: false }"
      x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">

    <!-- Page Wrapper -->
    <div class="flex h-screen overflow-hidden">
        {{-- Side Bar --}}
        @include('partial/sidebar-menu')

        <!-- Content Area -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!-- Header -->
            @livewire('navigation-menu')

            <!-- Main Content -->
            {{ $slot }}
        </div>
    </div>

    <!-- Modals Stack -->
    @stack('modals')

    @livewireScripts
    {{-- <script src="{{ asset('js/bundle.js') }}"></script> --}}
</body>
</html>
