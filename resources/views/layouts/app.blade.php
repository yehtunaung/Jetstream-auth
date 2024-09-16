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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <body class="font-sans antialiased" x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
        <!-- ===== Preloader Start ===== -->
        <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
            class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
            <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent">
            </div>
        </div>

        <!-- ===== Page Wrapper Start ===== -->
        <div class="flex h-screen overflow-hidden">


            <!-- ===== Sidebar Start ===== -->
            <aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
                class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0 bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none"
                @click.outside="sidebarToggle = false">
                <!-- SIDEBAR HEADER -->
                <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5  ">
                    <a href="index.html">
                        <img src="src/images/logo/logo.svg" alt="Logo" />
                    </a>
                    <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                        <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                                fill="" />
                        </svg>
                    </button>
                </div>
                <!-- SIDEBAR HEADER -->

                <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear sticky top-0 z-999">
                    <!-- Sidebar Menu -->
                    <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('Dashboard') }">
                        <!-- Menu Group -->
                        <div>
                            <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                            <ul class="mb-6 flex flex-col gap-1.5">
                                <!-- Menu Item Calendar -->
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4 text-black dark:text-white"
                                        href="">
                                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                            fill="" />
                                        <path
                                            d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                            fill="" />
                                        <path
                                            d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                            fill="" />
                                        <path
                                            d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                            fill="" />
                                    </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <!-- Menu Item Calendar -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </aside>
            <!-- ===== Sidebar End ===== -->


            <!-- ===== Content Area Start ===== -->
            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                <!-- ===== Header Start ===== -->
                <header
                    class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
                    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
                        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
                            <!-- Hamburger Toggle BTN -->
                            <button
                                class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
                                @click.stop="sidebarToggle = !sidebarToggle">
                                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                                    <span class="du-block absolute right-0 h-full w-full">
                                        <span
                                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
                                            :class="{ '!w-full delay-300': !sidebarToggle }"></span>
                                        <span
                                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
                                            :class="{ '!w-full delay-400': !sidebarToggle }"></span>
                                        <span
                                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
                                            :class="{ '!w-full delay-500': !sidebarToggle }"></span>
                                    </span>
                                    <span class="du-block absolute right-0 h-full w-full rotate-45">
                                        <span
                                            class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
                                            :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
                                        <span
                                            class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
                                            :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
                                    </span>
                                </span>
                            </button>
                            <!-- Hamburger Toggle BTN -->
                            <a class="block flex-shrink-0 lg:hidden" href="index.html">
                                <img src="src/images/logo/logo-icon.svg" alt="Logo" />
                            </a>
                        </div>
                        <div class="hidden sm:block">
                            <form action="https://formbold.com/s/unique_form_id" method="POST">
                                <div class="relative">
                                    <button class="absolute left-0 top-1/2 -translate-y-1/2">
                                        <svg class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary"
                                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z"
                                                fill="" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z"
                                                fill="" />
                                        </svg>
                                    </button>

                                    <input type="text" placeholder="Type to search..."
                                        class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125" />
                                </div>
                            </form>
                        </div>

                        <div class="flex items-center gap-3 2xsm:gap-7">
                            <ul class="flex items-center gap-2 2xsm:gap-4">
                                <li>
                                    <!-- Dark Mode Toggler -->
                                    <label :class="darkMode ? 'bg-primary' : 'bg-stroke'"
                                        class="relative m-0 block h-7.5 w-14 rounded-full">
                                        <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
                                            class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
                                        <span :class="darkMode && '!right-1 !translate-x-full'"
                                            class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                                            <span class="dark:hidden">
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.99992 12.6666C10.5772 12.6666 12.6666 10.5772 12.6666 7.99992C12.6666 5.42259 10.5772 3.33325 7.99992 3.33325C5.42259 3.33325 3.33325 5.42259 3.33325 7.99992C3.33325 10.5772 5.42259 12.6666 7.99992 12.6666Z"
                                                        fill="#969AA1" />
                                                    <path
                                                        d="M8.00008 15.3067C7.63341 15.3067 7.33342 15.0334 7.33342 14.6667V14.6134C7.33342 14.2467 7.63341 13.9467 8.00008 13.9467C8.36675 13.9467 8.66675 14.2467 8.66675 14.6134C8.66675 14.9801 8.36675 15.3067 8.00008 15.3067ZM12.7601 13.4267C12.5867 13.4267 12.4201 13.3601 12.2867 13.2334L12.2001 13.1467C11.9401 12.8867 11.9401 12.4667 12.2001 12.2067C12.4601 11.9467 12.8801 11.9467 13.1401 12.2067L13.2267 12.2934C13.4867 12.5534 13.4867 12.9734 13.2267 13.2334C13.1001 13.3601 12.9334 13.4267 12.7601 13.4267ZM3.24008 13.4267C3.06675 13.4267 2.90008 13.3601 2.76675 13.2334C2.50675 12.9734 2.50675 12.5534 2.76675 12.2934L2.85342 12.2067C3.11342 11.9467 3.53341 11.9467 3.79341 12.2067C4.05341 12.4667 4.05341 12.8867 3.79341 13.1467L3.70675 13.2334C3.58008 13.3601 3.40675 13.4267 3.24008 13.4267ZM14.6667 8.66675H14.6134C14.2467 8.66675 13.9467 8.36675 13.9467 8.00008C13.9467 7.63341 14.2467 7.33342 14.6134 7.33342C14.9801 7.33342 15.3067 7.63341 15.3067 8.00008C15.3067 8.36675 15.0334 8.66675 14.6667 8.66675ZM1.38675 8.66675H1.33341C0.966748 8.66675 0.666748 8.36675 0.666748 8.00008C0.666748 7.63341 0.966748 7.33342 1.33341 7.33342C1.70008 7.33342 2.02675 7.63341 2.02675 8.00008C2.02675 8.36675 1.75341 8.66675 1.38675 8.66675ZM12.6734 3.99341C12.5001 3.99341 12.3334 3.92675 12.2001 3.80008C11.9401 3.54008 11.9401 3.12008 12.2001 2.86008L12.2867 2.77341C12.5467 2.51341 12.9667 2.51341 13.2267 2.77341C13.4867 3.03341 13.4867 3.45341 13.2267 3.71341L13.1401 3.80008C13.0134 3.92675 12.8467 3.99341 12.6734 3.99341ZM3.32675 3.99341C3.15341 3.99341 2.98675 3.92675 2.85342 3.80008L2.76675 3.70675C2.50675 3.44675 2.50675 3.02675 2.76675 2.76675C3.02675 2.50675 3.44675 2.50675 3.70675 2.76675L3.79341 2.85342C4.05341 3.11342 4.05341 3.53341 3.79341 3.79341C3.66675 3.92675 3.49341 3.99341 3.32675 3.99341ZM8.00008 2.02675C7.63341 2.02675 7.33342 1.75341 7.33342 1.38675V1.33341C7.33342 0.966748 7.63341 0.666748 8.00008 0.666748C8.36675 0.666748 8.66675 0.966748 8.66675 1.33341C8.66675 1.70008 8.36675 2.02675 8.00008 2.02675Z"
                                                        fill="#969AA1" />
                                                </svg>
                                            </span>
                                            <span class="hidden dark:inline-block">
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.3533 10.62C14.2466 10.44 13.9466 10.16 13.1999 10.2933C12.7866 10.3667 12.3666 10.4 11.9466 10.38C10.3933 10.3133 8.98659 9.6 8.00659 8.5C7.13993 7.53333 6.60659 6.27333 6.59993 4.91333C6.59993 4.15333 6.74659 3.42 7.04659 2.72666C7.33993 2.05333 7.13326 1.7 6.98659 1.55333C6.83326 1.4 6.47326 1.18666 5.76659 1.48C3.03993 2.62666 1.35326 5.36 1.55326 8.28666C1.75326 11.04 3.68659 13.3933 6.24659 14.28C6.85993 14.4933 7.50659 14.62 8.17326 14.6467C8.27993 14.6533 8.38659 14.66 8.49326 14.66C10.7266 14.66 12.8199 13.6067 14.1399 11.8133C14.5866 11.1933 14.4666 10.8 14.3533 10.62Z"
                                                        fill="#969AA1" />
                                                </svg>
                                            </span>
                                        </span>
                                    </label>
                                    <!-- Dark Mode Toggler -->
                                </li>

                                <!-- Notification Menu Area -->
                                <li class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
                                    <a class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
                                        href="#"
                                        @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                                        <span :class="!notifying && 'hidden'"
                                            class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-meta-1">
                                            <span
                                                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"></span>
                                        </span>

                                        <svg class="fill-current duration-300 ease-in-out" width="18"
                                            height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1999 14.9343L15.6374 14.0624C15.5249 13.8937 15.4687 13.7249 15.4687 13.528V7.67803C15.4687 6.01865 14.7655 4.47178 13.4718 3.31865C12.4312 2.39053 11.0812 1.7999 9.64678 1.6874V1.1249C9.64678 0.787402 9.36553 0.478027 8.9999 0.478027C8.6624 0.478027 8.35303 0.759277 8.35303 1.1249V1.65928C8.29678 1.65928 8.24053 1.65928 8.18428 1.6874C4.92178 2.05303 2.4749 4.66865 2.4749 7.79053V13.528C2.44678 13.8093 2.39053 13.9499 2.33428 14.0343L1.7999 14.9343C1.63115 15.2155 1.63115 15.553 1.7999 15.8343C1.96865 16.0874 2.2499 16.2562 2.55928 16.2562H8.38115V16.8749C8.38115 17.2124 8.6624 17.5218 9.02803 17.5218C9.36553 17.5218 9.6749 17.2405 9.6749 16.8749V16.2562H15.4687C15.778 16.2562 16.0593 16.0874 16.228 15.8343C16.3968 15.553 16.3968 15.2155 16.1999 14.9343ZM3.23428 14.9905L3.43115 14.653C3.5999 14.3718 3.68428 14.0343 3.74053 13.6405V7.79053C3.74053 5.31553 5.70928 3.23428 8.3249 2.95303C9.92803 2.78428 11.503 3.2624 12.6562 4.2749C13.6687 5.1749 14.2312 6.38428 14.2312 7.67803V13.528C14.2312 13.9499 14.3437 14.3437 14.5968 14.7374L14.7655 14.9905H3.23428Z"
                                                fill="" />
                                        </svg>
                                    </a>

                                    <!-- Dropdown Start -->
                                    <div x-show="dropdownOpen"
                                        class="absolute -right-27 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80">
                                        <div class="px-4.5 py-3">
                                            <h5 class="text-sm font-medium text-bodydark2">Notification</h5>
                                        </div>

                                        <ul class="flex h-auto flex-col overflow-y-auto">
                                            <li>
                                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="#">
                                                    <p class="text-sm">
                                                        <span class="text-black dark:text-white">Edit your information
                                                            in a
                                                            swipe</span>
                                                        Sint occaecat cupidatat non proident, sunt in culpa qui
                                                        officia deserunt mollit anim.
                                                    </p>

                                                    <p class="text-xs">12 May, 2025</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="#">
                                                    <p class="text-sm">
                                                        <span class="text-black dark:text-white">It is a long
                                                            established
                                                            fact</span>
                                                        that a reader will be distracted by the readable.
                                                    </p>

                                                    <p class="text-xs">24 Feb, 2025</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="#">
                                                    <p class="text-sm">
                                                        <span class="text-black dark:text-white">There are many
                                                            variations</span>
                                                        of passages of Lorem Ipsum available, but the majority have
                                                        suffered
                                                    </p>

                                                    <p class="text-xs">04 Jan, 2025</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="#">
                                                    <p class="text-sm">
                                                        <span class="text-black dark:text-white">There are many
                                                            variations</span>
                                                        of passages of Lorem Ipsum available, but the majority have
                                                        suffered
                                                    </p>

                                                    <p class="text-xs">01 Dec, 2024</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown End -->
                                </li>
                                <!-- Notification Menu Area -->

                                <!-- Chat Notification Area -->
                                <li class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
                                    <a class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
                                        href="#"
                                        @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                                        <span :class="!notifying && 'hidden'"
                                            class="absolute -right-0.5 -top-0.5 z-1 h-2 w-2 rounded-full bg-meta-1">
                                            <span
                                                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"></span>
                                        </span>

                                        <svg class="fill-current duration-300 ease-in-out" width="18"
                                            height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9688 1.57495H7.03135C3.43135 1.57495 0.506348 4.41558 0.506348 7.90308C0.506348 11.3906 2.75635 13.8375 8.26885 16.3125C8.40947 16.3687 8.52197 16.3968 8.6626 16.3968C8.85947 16.3968 9.02822 16.3406 9.19697 16.2281C9.47822 16.0593 9.64697 15.75 9.64697 15.4125V14.2031H10.9688C14.5688 14.2031 17.522 11.3625 17.522 7.87495C17.522 4.38745 14.5688 1.57495 10.9688 1.57495ZM10.9688 12.9937H9.3376C8.80322 12.9937 8.35322 13.4437 8.35322 13.9781V15.0187C3.6001 12.825 1.74385 10.8 1.74385 7.9312C1.74385 5.14683 4.10635 2.8687 7.03135 2.8687H10.9688C13.8657 2.8687 16.2563 5.14683 16.2563 7.9312C16.2563 10.7156 13.8657 12.9937 10.9688 12.9937Z"
                                                fill="" />
                                            <path
                                                d="M5.42812 7.28442C5.0625 7.28442 4.78125 7.56567 4.78125 7.9313C4.78125 8.29692 5.0625 8.57817 5.42812 8.57817C5.79375 8.57817 6.075 8.29692 6.075 7.9313C6.075 7.56567 5.79375 7.28442 5.42812 7.28442Z"
                                                fill="" />
                                            <path
                                                d="M9.00015 7.28442C8.63452 7.28442 8.35327 7.56567 8.35327 7.9313C8.35327 8.29692 8.63452 8.57817 9.00015 8.57817C9.33765 8.57817 9.64702 8.29692 9.64702 7.9313C9.64702 7.56567 9.33765 7.28442 9.00015 7.28442Z"
                                                fill="" />
                                            <path
                                                d="M12.5719 7.28442C12.2063 7.28442 11.925 7.56567 11.925 7.9313C11.925 8.29692 12.2063 8.57817 12.5719 8.57817C12.9375 8.57817 13.2188 8.29692 13.2188 7.9313C13.2188 7.56567 12.9094 7.28442 12.5719 7.28442Z"
                                                fill="" />
                                        </svg>
                                    </a>

                                    <!-- Dropdown Start -->
                                    <div x-show="dropdownOpen"
                                        class="absolute -right-16 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80">
                                        <div class="px-4.5 py-3">
                                            <h5 class="text-sm font-medium text-bodydark2">Messages</h5>
                                        </div>

                                        <ul class="flex h-auto flex-col overflow-y-auto">
                                            <li>
                                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="messages.html">
                                                    <div class="h-12.5 w-12.5 rounded-full">
                                                        <img src="src/images/user/user-02.png" alt="User" />
                                                    </div>

                                                    <div>
                                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                                            Mariya Desoja
                                                        </h6>
                                                        <p class="text-sm">I like your confidence 💪</p>
                                                        <p class="text-xs">2min ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="messages.html">
                                                    <div class="h-12.5 w-12.5 rounded-full">
                                                        <img src="src/images/user/user-01.png" alt="User" />
                                                    </div>

                                                    <div>
                                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                                            Robert Jhon
                                                        </h6>
                                                        <p class="text-sm">Can you share your offer?</p>
                                                        <p class="text-xs">10min ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="messages.html">
                                                    <div class="h-12.5 w-12.5 rounded-full">
                                                        <img src="src/images/user/user-03.png" alt="User" />
                                                    </div>

                                                    <div>
                                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                                            Henry Dholi
                                                        </h6>
                                                        <p class="text-sm">I cam across your profile and...</p>
                                                        <p class="text-xs">1day ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="messages.html">
                                                    <div class="h-12.5 w-12.5 rounded-full">
                                                        <img src="src/images/user/user-04.png" alt="User" />
                                                    </div>

                                                    <div>
                                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                                            Cody Fisher
                                                        </h6>
                                                        <p class="text-sm">I’m waiting for you response!</p>
                                                        <p class="text-xs">5days ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                                    href="messages.html">
                                                    <div class="h-12.5 w-12.5 rounded-full">
                                                        <img src="src/images/user/user-02.png" alt="User" />
                                                    </div>

                                                    <div>
                                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                                            Mariya Desoja
                                                        </h6>
                                                        <p class="text-sm">I like your confidence 💪</p>
                                                        <p class="text-xs">2min ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Dropdown End -->
                                </li>
                                <!-- Chat Notification Area -->
                            </ul>

                            <!-- User Area -->
                            <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                                <a class="flex items-center gap-4" href="#"
                                    @click.prevent="dropdownOpen = ! dropdownOpen">
                                    <span class="hidden text-right lg:block">
                                        <span class="block text-sm font-medium text-black dark:text-white">Thomas
                                            Anree</span>
                                        <span class="block text-xs font-medium">UX Designer</span>
                                    </span>

                                    <span class="h-12 w-12 rounded-full">
                                        <img src="src/images/user/user-01.png" alt="User" />
                                    </span>

                                    <svg :class="dropdownOpen && 'rotate-180'" class="hidden fill-current sm:block"
                                        width="12" height="8" viewBox="0 0 12 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                                            fill="" />
                                    </svg>
                                </a>

                                <!-- Dropdown Start -->
                                <div x-show="dropdownOpen"
                                    class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                    <ul
                                        class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
                                        <li>
                                            <a href="profile.html"
                                                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                                <svg class="fill-current" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z"
                                                        fill="" />
                                                    <path
                                                        d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z"
                                                        fill="" />
                                                </svg>
                                                My Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="messages.html"
                                                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                                <svg class="fill-current" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z"
                                                        fill="" />
                                                </svg>
                                                My Contacts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="settings.html"
                                                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                                <svg class="fill-current" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.87499 19.6969 6.39374 19.6969 5.87812C19.6969 5.36249 19.525 4.88124 19.1469 4.50312L17.8062 3.12812C17.0844 2.37187 15.8469 2.33749 15.0906 3.09374L14.9875 3.16249C14.8844 3.26562 14.7125 3.29999 14.5406 3.23124C14.4031 3.16249 14.2656 3.09374 14.0937 3.05937C13.9219 2.99062 13.8187 2.85312 13.8187 2.71562V2.54374C13.8187 1.47812 12.9594 0.618744 11.8937 0.618744H9.96875C9.45312 0.618744 8.97187 0.824994 8.62812 1.16874C8.25 1.54687 8.07812 2.02812 8.07812 2.50937V2.64687C8.07812 2.78437 7.975 2.92187 7.8375 2.99062C7.76875 3.02499 7.73437 3.02499 7.66562 3.05937C7.52812 3.12812 7.35625 3.09374 7.25312 2.99062L7.18437 2.88749C6.84062 2.50937 6.35937 2.30312 5.84375 2.30312C5.32812 2.30312 4.84687 2.47499 4.46875 2.85312L3.09375 4.19374C2.3375 4.91562 2.30312 6.15312 3.05937 6.90937L3.12812 7.01249C3.23125 7.11562 3.26562 7.28749 3.19687 7.39062C3.12812 7.52812 3.09375 7.63124 3.025 7.76874C2.95625 7.90624 2.85312 7.97499 2.68125 7.97499H2.57812C2.0625 7.97499 1.58125 8.14687 1.20312 8.52499C0.824996 8.86874 0.618746 9.34999 0.618746 9.86562L0.584371 11.7906C0.549996 12.8562 1.40937 13.7156 2.475 13.75H2.57812C2.75 13.75 2.8875 13.8531 2.92187 13.9906C2.99062 14.0937 3.05937 14.1969 3.09375 14.3344C3.12812 14.4719 3.09375 14.6094 2.99062 14.7125L2.92187 14.7812C2.54375 15.125 2.3375 15.6062 2.3375 16.1219C2.3375 16.6375 2.50937 17.1187 2.8875 17.4969L4.22812 18.8719C4.95 19.6281 6.1875 19.6625 6.94375 18.9062L7.04687 18.8375C7.15 18.7344 7.32187 18.7 7.49375 18.7687C7.63125 18.8375 7.76875 18.9062 7.94062 18.9406C8.1125 19.0094 8.21562 19.1469 8.21562 19.2844V19.4219C8.21562 20.4875 9.075 21.3469 10.1406 21.3469H12.0656C13.1312 21.3469 13.9906 20.4875 13.9906 19.4219V19.2844C13.9906 19.1469 14.0937 19.0094 14.2312 18.9406C14.3 18.9062 14.3344 18.9062 14.4031 18.8719C14.575 18.8031 14.7125 18.8375 14.8156 18.9406L14.8844 19.0437C15.2281 19.4219 15.7094 19.6281 16.225 19.6281C16.7406 19.6281 17.2219 19.4562 17.6 19.0781L18.975 17.7375C19.7312 17.0156 19.7656 15.7781 19.0094 15.0219L18.9406 14.9187C18.8375 14.8156 18.8031 14.6437 18.8719 14.5406C18.9406 14.4031 18.975 14.3 19.0437 14.1625C19.1125 14.025 19.25 13.9562 19.3875 13.9562H19.4906H19.525C20.5562 13.9562 21.4156 13.1312 21.45 12.0656L21.4844 10.1406C21.4156 9.72812 21.2094 9.21249 20.8656 8.86874ZM19.8344 12.1C19.8344 12.3062 19.6625 12.4781 19.4562 12.4781H19.3531H19.3187C18.5281 12.4781 17.8062 12.9594 17.5312 13.6469C17.4969 13.75 17.4281 13.8531 17.3937 13.9562C17.0844 14.6437 17.2219 15.5031 17.7719 16.0531L17.8406 16.1562C17.9781 16.2937 17.9781 16.5344 17.8406 16.6719L16.4656 18.0125C16.3625 18.1156 16.2594 18.1156 16.1906 18.1156C16.1219 18.1156 16.0187 18.1156 15.9156 18.0125L15.8469 17.9094C15.2969 17.325 14.4719 17.1531 13.7156 17.4969L13.5781 17.5656C12.8219 17.875 12.3406 18.5625 12.3406 19.3531V19.4906C12.3406 19.6969 12.1687 19.8687 11.9625 19.8687H10.0375C9.83125 19.8687 9.65937 19.6969 9.65937 19.4906V19.3531C9.65937 18.5625 9.17812 17.8406 8.42187 17.5656C8.31875 17.5312 8.18125 17.4625 8.07812 17.4281C7.80312 17.2906 7.52812 17.2562 7.25312 17.2562C6.77187 17.2562 6.29062 17.4281 5.9125 17.8062L5.84375 17.8406C5.70625 17.9781 5.46562 17.9781 5.32812 17.8406L3.9875 16.4656C3.88437 16.3625 3.88437 16.2594 3.88437 16.1906C3.88437 16.1219 3.88437 16.0187 3.9875 15.9156L4.05625 15.8469C4.64062 15.2969 4.8125 14.4375 4.50312 13.75C4.46875 13.6469 4.43437 13.5437 4.36562 13.4406C4.09062 12.7187 3.40312 12.2031 2.6125 12.2031H2.50937C2.30312 12.2031 2.13125 12.0312 2.13125 11.825L2.16562 9.89999C2.16562 9.76249 2.23437 9.69374 2.26875 9.62499C2.30312 9.59062 2.40625 9.52187 2.54375 9.52187H2.64687C3.4375 9.55624 4.15937 9.07499 4.46875 8.35312C4.50312 8.24999 4.57187 8.14687 4.60625 8.04374C4.91562 7.35624 4.77812 6.49687 4.22812 5.94687L4.15937 5.84374C4.02187 5.70624 4.02187 5.46562 4.15937 5.32812L5.53437 3.98749C5.6375 3.88437 5.74062 3.88437 5.80937 3.88437C5.87812 3.88437 5.98125 3.88437 6.08437 3.98749L6.15312 4.09062C6.70312 4.67499 7.52812 4.84687 8.28437 4.53749L8.42187 4.46874C9.17812 4.15937 9.65937 3.47187 9.65937 2.68124V2.54374C9.65937 2.40624 9.72812 2.33749 9.7625 2.26874C9.79687 2.19999 9.9 2.16562 10.0375 2.16562H11.9625C12.1687 2.16562 12.3406 2.33749 12.3406 2.54374V2.68124C12.3406 3.47187 12.8219 4.19374 13.5781 4.46874C13.6812 4.50312 13.8187 4.57187 13.9219 4.60624C14.6437 4.94999 15.5031 4.81249 16.0875 4.26249L16.1906 4.19374C16.3281 4.05624 16.5687 4.05624 16.7062 4.19374L18.0469 5.56874C18.15 5.67187 18.15 5.77499 18.15 5.84374C18.15 5.91249 18.1156 6.01562 18.0469 6.11874L17.9781 6.18749C17.3594 6.70312 17.1875 7.56249 17.4625 8.24999C17.4969 8.35312 17.5312 8.45624 17.6 8.55937C17.875 9.28124 18.5625 9.79687 19.3531 9.79687H19.4562C19.5937 9.79687 19.6625 9.86562 19.7312 9.89999C19.8 9.93437 19.8344 10.0375 19.8344 10.175V12.1Z"
                                                        fill="" />
                                                    <path
                                                        d="M11 6.32498C8.42189 6.32498 6.32501 8.42186 6.32501 11C6.32501 13.5781 8.42189 15.675 11 15.675C13.5781 15.675 15.675 13.5781 15.675 11C15.675 8.42186 13.5781 6.32498 11 6.32498ZM11 14.1281C9.28126 14.1281 7.87189 12.7187 7.87189 11C7.87189 9.28123 9.28126 7.87186 11 7.87186C12.7188 7.87186 14.1281 9.28123 14.1281 11C14.1281 12.7187 12.7188 14.1281 11 14.1281Z"
                                                        fill="" />
                                                </svg>
                                                Account Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <button
                                        class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                        <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                                                fill="" />
                                            <path
                                                d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                                                fill="" />
                                        </svg>
                                        Log Out
                                    </button>
                                </div>
                                <!-- Dropdown End -->
                            </div>
                            <!-- User Area -->
                        </div>
                    </div>
                </header>
                <!-- ===== Header End ===== -->

                <!-- ===== Main Content Start ===== -->
                <main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                            <!-- Card Item Start -->
                            <div
                                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div
                                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <svg class="fill-primary dark:fill-white" width="22" height="16"
                                        viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                                            fill="" />
                                        <path
                                            d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                                            fill="" />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            $3.456K
                                        </h4>
                                        <span class="text-sm font-medium">Total views</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                        0.43%
                                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                                fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->

                            <!-- Card Item Start -->
                            <div
                                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div
                                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <svg class="fill-primary dark:fill-white" width="20" height="22"
                                        viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.0937 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z"
                                            fill="" />
                                        <path
                                            d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.56245 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.73745 19.8687 5.22183 19.8687Z"
                                            fill="" />
                                        <path
                                            d="M19.0062 0.618744H17.15C16.325 0.618744 15.6031 1.23749 15.5 2.06249L14.95 6.01562H1.37185C1.0281 6.01562 0.684353 6.18749 0.443728 6.46249C0.237478 6.73749 0.134353 7.11562 0.237478 7.45937C0.237478 7.49374 0.237478 7.49374 0.237478 7.52812L2.36873 13.9562C2.50623 14.4375 2.9531 14.7812 3.46873 14.7812H12.9562C14.2281 14.7812 15.3281 13.8187 15.5 12.5469L16.9437 2.26874C16.9437 2.19999 17.0125 2.16562 17.0812 2.16562H18.9375C19.35 2.16562 19.7281 1.82187 19.7281 1.37499C19.7281 0.928119 19.4187 0.618744 19.0062 0.618744ZM14.0219 12.3062C13.9531 12.8219 13.5062 13.2 12.9906 13.2H3.7781L1.92185 7.56249H14.7094L14.0219 12.3062Z"
                                            fill="" />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            $45,2K
                                        </h4>
                                        <span class="text-sm font-medium">Total Profit</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                        4.35%
                                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                                fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->

                            <!-- Card Item Start -->
                            <div
                                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div
                                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <svg class="fill-primary dark:fill-white" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.1063 18.0469L19.3875 3.23126C19.2157 1.71876 17.9438 0.584381 16.3969 0.584381H5.56878C4.05628 0.584381 2.78441 1.71876 2.57816 3.23126L0.859406 18.0469C0.756281 18.9063 1.03128 19.7313 1.61566 20.3844C2.20003 21.0375 2.99066 21.3813 3.85003 21.3813H18.1157C18.975 21.3813 19.8 21.0031 20.35 20.3844C20.9 19.7656 21.2094 18.9063 21.1063 18.0469ZM19.2157 19.3531C18.9407 19.6625 18.5625 19.8344 18.15 19.8344H3.85003C3.43753 19.8344 3.05941 19.6625 2.78441 19.3531C2.50941 19.0438 2.37191 18.6313 2.44066 18.2188L4.12503 3.43751C4.19378 2.71563 4.81253 2.16563 5.56878 2.16563H16.4313C17.1532 2.16563 17.7719 2.71563 17.875 3.43751L19.5938 18.2531C19.6282 18.6656 19.4907 19.0438 19.2157 19.3531Z"
                                            fill="" />
                                        <path
                                            d="M14.3345 5.29375C13.922 5.39688 13.647 5.80938 13.7501 6.22188C13.7845 6.42813 13.8189 6.63438 13.8189 6.80625C13.8189 8.35313 12.547 9.625 11.0001 9.625C9.45327 9.625 8.1814 8.35313 8.1814 6.80625C8.1814 6.6 8.21577 6.42813 8.25015 6.22188C8.35327 5.80938 8.07827 5.39688 7.66577 5.29375C7.25327 5.19063 6.84077 5.46563 6.73765 5.87813C6.6689 6.1875 6.63452 6.49688 6.63452 6.80625C6.63452 9.2125 8.5939 11.1719 11.0001 11.1719C13.4064 11.1719 15.3658 9.2125 15.3658 6.80625C15.3658 6.49688 15.3314 6.1875 15.2626 5.87813C15.1595 5.46563 14.747 5.225 14.3345 5.29375Z"
                                            fill="" />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            2.450
                                        </h4>
                                        <span class="text-sm font-medium">Total Product</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                        2.59%
                                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                                fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->

                            <!-- Card Item Start -->
                            <div
                                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div
                                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <svg class="fill-primary dark:fill-white" width="22" height="18"
                                        viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18418 8.03751C9.31543 8.03751 11.0686 6.35313 11.0686 4.25626C11.0686 2.15938 9.31543 0.475006 7.18418 0.475006C5.05293 0.475006 3.2998 2.15938 3.2998 4.25626C3.2998 6.35313 5.05293 8.03751 7.18418 8.03751ZM7.18418 2.05626C8.45605 2.05626 9.52168 3.05313 9.52168 4.29063C9.52168 5.52813 8.49043 6.52501 7.18418 6.52501C5.87793 6.52501 4.84668 5.52813 4.84668 4.29063C4.84668 3.05313 5.9123 2.05626 7.18418 2.05626Z"
                                            fill="" />
                                        <path
                                            d="M15.8124 9.6875C17.6687 9.6875 19.1468 8.24375 19.1468 6.42188C19.1468 4.6 17.6343 3.15625 15.8124 3.15625C13.9905 3.15625 12.478 4.6 12.478 6.42188C12.478 8.24375 13.9905 9.6875 15.8124 9.6875ZM15.8124 4.7375C16.8093 4.7375 17.5999 5.49375 17.5999 6.45625C17.5999 7.41875 16.8093 8.175 15.8124 8.175C14.8155 8.175 14.0249 7.41875 14.0249 6.45625C14.0249 5.49375 14.8155 4.7375 15.8124 4.7375Z"
                                            fill="" />
                                        <path
                                            d="M15.9843 10.0313H15.6749C14.6437 10.0313 13.6468 10.3406 12.7874 10.8563C11.8593 9.61876 10.3812 8.79376 8.73115 8.79376H5.67178C2.85303 8.82814 0.618652 11.0625 0.618652 13.8469V16.3219C0.618652 16.975 1.13428 17.4906 1.7874 17.4906H20.2468C20.8999 17.4906 21.4499 16.9406 21.4499 16.2875V15.4625C21.4155 12.4719 18.9749 10.0313 15.9843 10.0313ZM2.16553 15.9438V13.8469C2.16553 11.9219 3.74678 10.3406 5.67178 10.3406H8.73115C10.6562 10.3406 12.2374 11.9219 12.2374 13.8469V15.9438H2.16553V15.9438ZM19.8687 15.9438H13.7499V13.8469C13.7499 13.2969 13.6468 12.7469 13.4749 12.2313C14.0937 11.7844 14.8499 11.5781 15.6405 11.5781H15.9499C18.0812 11.5781 19.8343 13.3313 19.8343 15.4625V15.9438H19.8687Z"
                                            fill="" />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            3.456
                                        </h4>
                                        <span class="text-sm font-medium">Total Users</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-5">
                                        0.95%
                                        <svg class="fill-meta-5" width="10" height="11" viewBox="0 0 10 11"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.64284 7.69237L9.09102 4.33987L10 5.22362L5 10.0849L-8.98488e-07 5.22362L0.908973 4.33987L4.35716 7.69237L4.35716 0.0848701L5.64284 0.0848704L5.64284 7.69237Z"
                                                fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->
                        </div>
                    </div>
                </main>
                <!-- ===== Main Content End ===== -->
            </div>
        </div>
        @stack('modals')

        @livewireScripts
        <script src="{{ asset('js/bundle.js') }}"></script>
    </body>
    @livewireScripts
    <script src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
