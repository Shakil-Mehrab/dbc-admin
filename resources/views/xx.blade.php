<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ডিবিসি নিউজ') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- @livewireStyles --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        function menu() {
            return {
                open: true,
                openMenu() {
                    this.open = true
                },
                closeMenu() {
                    this.open = false
                }
            }
        }
    </script>
</head>

<body class="font-sans antialiased">
    <div x-data="menu()" @keydown.window.escape="closeMenu()" x-init="open = false"
        class="relative h-screen bg-gray-50 flex overflow-hidden">
        <!-- Narrow sidebar -->
        <div class="hidden w-28 bg-indigo-700 overflow-y-auto md:block">
            <div class="w-full py-6 flex flex-col items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                        alt="Workflow">
                </div>
                <div class="flex-1 mt-6 w-full px-2 space-y-1">

                    <a href="#"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white h-6 w-6" x-state:on="Current"
                            x-state:off="Default"
                            x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span class="mt-2">Home</span>
                    </a>

                    <a href="#"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/view-grid" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="mt-2">All Files</span>
                    </a>

                    <a href="#"
                        class="bg-indigo-800 text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                        aria-current="page"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-white h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/photograph" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="mt-2">Photos</span>
                    </a>

                    <a href="#"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/user-group" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span class="mt-2">Shared</span>
                    </a>

                    <a href="#"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/collection" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                        <span class="mt-2">Albums</span>
                    </a>

                    <a href="#"
                        class="text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
                        x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                        <svg class="text-indigo-300 group-hover:text-white h-6 w-6"
                            x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                            x-description="Heroicon name: outline/cog" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="mt-2">Settings</span>
                    </a>

                </div>
            </div>
        </div>

        <!-- Mobile menu -->

        <div x-show="open" class="fixed inset-0 z-40 flex md:hidden"
            x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
            aria-modal="true">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75"
                x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." @click="closeMenu()"
                aria-hidden="true">
            </div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                class="relative max-w-xs w-full bg-indigo-700 pt-5 pb-4 flex-1 flex flex-col">

                <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="absolute top-1 right-0 -mr-14 p-1"
                    x-description="Close button, show/hide based on off-canvas menu state.">
                    <button type="button"
                        class="h-12 w-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-white"
                        @click="closeMenu()">
                        <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                        <span class="sr-only">Close sidebar</span>
                    </button>
                </div>

                <div class="flex-shrink-0 px-4 flex items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                        alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto">
                    <nav class="h-full flex flex-col">
                        <div class="space-y-1">

                            <a href="#"
                                class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                                x-state:on="Current" x-state:off="Default"
                                x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" x-state:on="Current"
                                    x-state:off="Default"
                                    x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;"
                                    x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <span>Home</span>
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                                x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                                    x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                                    x-description="Heroicon name: outline/view-grid" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                <span>All Files</span>
                            </a>

                            <a href="#"
                                class="bg-indigo-800 text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                                aria-current="page"
                                x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                <svg class="text-white mr-3 h-6 w-6"
                                    x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                                    x-description="Heroicon name: outline/photograph" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>Photos</span>
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                                x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                                    x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                                    x-description="Heroicon name: outline/user-group" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                <span>Shared</span>
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                                x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                                    x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                                    x-description="Heroicon name: outline/collection" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                                <span>Albums</span>
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium"
                                x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                                    x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-300 group-hover:text-white&quot;"
                                    x-description="Heroicon name: outline/cog" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Settings</span>
                            </a>

                        </div>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>


        <!-- Content area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="w-full">

                <div class="relative z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 shadow-sm flex">
                    <button type="button"
                        class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
                        @click="openMenu()">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu-alt-2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7"></path>
                        </svg>
                    </button>
                    <div class="flex-1 flex justify-between px-4 sm:px-6">
                        <div class="flex-1 flex">
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                <label for="desktop-search-field" class="sr-only">Search all files</label>
                                <label for="mobile-search-field" class="sr-only">Search all files</label>
                                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5" x-description="Heroicon name: solid/search"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="mobile-search-field" id="mobile-search-field"
                                        class="h-full w-full border-transparent py-2 pl-8 pr-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:hidden"
                                        placeholder="Search" type="search">
                                    <input name="desktop-search-field" id="desktop-search-field"
                                        class="hidden h-full w-full border-transparent py-2 pl-8 pr-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:block"
                                        placeholder="Search all files" type="search">
                                </div>
                            </form>
                        </div>
                        <div class="ml-2 flex items-center space-x-4 sm:ml-6 sm:space-x-6">
                            <x-header.profile-dropdown></x-header.profile-dropdown>

                            <button type="button"
                                class="flex bg-indigo-600 p-1 rounded-full items-center justify-center text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/plus"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4"></path>
                                </svg>
                                <span class="sr-only">Add file</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <div class="flex-1 flex items-stretch overflow-hidden">
                <main class="flex-1 overflow-y-auto">
                    <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex">
                            <h1 class="flex-1 text-2xl font-bold text-gray-900">Photos</h1>
                            <div class="ml-6 bg-gray-100 p-0.5 rounded-lg flex items-center sm:hidden">
                                <button type="button"
                                    class="p-1.5 rounded-md text-gray-400 hover:bg-white hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/view-list"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Use list view</span>
                                </button>
                                <button type="button"
                                    class="ml-0.5 bg-white p-1.5 rounded-md shadow-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/view-grid"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Use grid view</span>
                                </button>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <div class="mt-3 sm:mt-2">
                            <div class="sm:hidden">
                                <label for="tabs" class="sr-only">Select a tab</label>
                                <select id="tabs" name="tabs"
                                    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option selected="">Recently Viewed</option>
                                    <option>Recently Added</option>
                                    <option>Favorited</option>
                                </select>
                            </div>
                            <div class="hidden sm:block">
                                <div class="flex items-center border-b border-gray-200">
                                    <nav class="flex-1 -mb-px flex space-x-6 xl:space-x-8" aria-label="Tabs">

                                        <a href="#" aria-current="page"
                                            class="border-indigo-500 text-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                            x-state:on="Current" x-state:off="Default"
                                            x-state-description="Current: &quot;border-indigo-500 text-indigo-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                            Recently Viewed
                                        </a>

                                        <a href="#"
                                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                            x-state-description="undefined: &quot;border-indigo-500 text-indigo-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                            Recently Added
                                        </a>

                                        <a href="#"
                                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                            x-state-description="undefined: &quot;border-indigo-500 text-indigo-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                            Favorited
                                        </a>

                                    </nav>
                                    <div class="hidden ml-6 bg-gray-100 p-0.5 rounded-lg items-center sm:flex">
                                        <button type="button"
                                            class="p-1.5 rounded-md text-gray-400 hover:bg-white hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                            <svg class="h-5 w-5" x-description="Heroicon name: solid/view-list"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Use list view</span>
                                        </button>
                                        <button type="button"
                                            class="ml-0.5 bg-white p-1.5 rounded-md shadow-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                            <svg class="h-5 w-5" x-description="Heroicon name: solid/view-grid"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                                </path>
                                            </svg>
                                            <span class="sr-only">Use grid view</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery -->
                        <section class="mt-8 pb-16" aria-labelledby="gallery-heading">
                            <h2 id="gallery-heading" class="sr-only">Recently viewed</h2>
                            <ul role="list"
                                class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                                <li class="relative">
                                    <div class="ring-2 ring-offset-2 ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state:on="Current" x-state:off="Default"
                                        x-state-description="Current: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, Default: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class=" object-cover pointer-events-none" x-state:on="Current"
                                            x-state:off="Default"
                                            x-state-description="Current: &quot;&quot;, Default: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_4985.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_4985.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1614926857083-7be149266cda?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_5214.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_5214.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1614705827065-62c3dc488f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_3851.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_3851.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.8 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_4278.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_4278.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4.1 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1586348943529-beaae6c28db9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_6842.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_6842.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_3284.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_3284.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_4841.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_4841.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.8 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1492724724894-7464c27d0ceb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_5644.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_5644.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1513682322455-ea8b2d81d418?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_4945.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_4945.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1463107971871-fbac9ddb920f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_2156.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_2156.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4.1 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1552461871-ce4f9fb3b438?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_6945.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_6945.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4.2 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1446292532430-3e76f6ab6444?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_1846.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_1846.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.6 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1508669232496-137b159c1cdb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_4769.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_4769.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.3 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1431512284068-4c4002298068?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_9513.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_9513.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1581320546160-0078de357255?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_8451.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_8451.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1541956628-68d338ae09d5?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_1298.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_1298.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4.1 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1505429155379-441cc7a574f7?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_6222.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_6222.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1582029133746-96031e5c8d00?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_7451.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_7451.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.8 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1575868053350-9fd87f68f984?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_9815.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_9815.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1588391051471-1a5283d5a625?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_1025.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_1025.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1575314146619-ec67b6213351?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_6010.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_6010.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.1 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1579874107960-e602329ef20a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_1004.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_1004.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">4.4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/flagged/photo-1551385229-2925ed4eb53d?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_8499.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_8499.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.4 MB</p>
                                </li>

                                <li class="relative">
                                    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden"
                                        x-state-description="undefined: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;, undefined: &quot;focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500&quot;">
                                        <img src="https://images.unsplash.com/photo-1498575637358-821023f27355?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                            alt="" class="group-hover:opacity-75 object-cover pointer-events-none"
                                            x-state-description="undefined: &quot;&quot;, undefined: &quot;group-hover:opacity-75&quot;">
                                        <button type="button" class="absolute inset-0 focus:outline-none">
                                            <span class="sr-only">View details for IMG_2154.HEIC</span>
                                        </button>
                                    </div>
                                    <p
                                        class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                                        IMG_2154.HEIC</p>
                                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.8 MB</p>
                                </li>

                            </ul>
                        </section>
                    </div>
                </main>

                <!-- Details sidebar -->
                <aside class="hidden w-96 bg-white p-8 border-l border-gray-200 overflow-y-auto lg:block">
                    <div class="pb-16 space-y-6">
                        <div>
                            <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=512&amp;q=80"
                                    alt="" class="object-cover">
                            </div>
                            <div class="mt-4 flex items-start justify-between">
                                <div>
                                    <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for
                                        </span>IMG_4985.HEIC</h2>
                                    <p class="text-sm font-medium text-gray-500">3.9 MB</p>
                                </div>
                                <button type="button"
                                    class="ml-4 bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/heart"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Favorite</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Information</h3>
                            <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">

                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Uploaded by</dt>
                                    <dd class="text-gray-900">Marie Culver</dd>
                                </div>

                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Created</dt>
                                    <dd class="text-gray-900">June 8, 2020</dd>
                                </div>

                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Last modified</dt>
                                    <dd class="text-gray-900">June 8, 2020</dd>
                                </div>

                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Dimensions</dt>
                                    <dd class="text-gray-900">4032 x 3024</dd>
                                </div>

                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Resolution</dt>
                                    <dd class="text-gray-900">72 x 72</dd>
                                </div>

                            </dl>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Description</h3>
                            <div class="mt-2 flex items-center justify-between">
                                <p class="text-sm text-gray-500 italic">Add a description to this image.</p>
                                <button type="button"
                                    class="bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/pencil"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Add description</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Shared with</h3>
                            <ul role="list" class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">

                                <li class="py-3 flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=1024&amp;h=1024&amp;q=80"
                                            alt="" class="w-8 h-8 rounded-full">
                                        <p class="ml-4 text-sm font-medium text-gray-900">Aimee Douglas</p>
                                    </div>
                                    <button type="button"
                                        class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                            class="sr-only"> Aimee Douglas</span></button>
                                </li>

                                <li class="py-3 flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixqx=oilqXxSqey&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="" class="w-8 h-8 rounded-full">
                                        <p class="ml-4 text-sm font-medium text-gray-900">Andrea McMillan</p>
                                    </div>
                                    <button type="button"
                                        class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                            class="sr-only"> Andrea McMillan</span></button>
                                </li>

                                <li class="py-2 flex justify-between items-center">
                                    <button type="button"
                                        class="group -ml-1 bg-white p-1 rounded-md flex items-center focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <span
                                            class="w-8 h-8 rounded-full border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">
                                            <svg class="h-5 w-5" x-description="Heroicon name: solid/plus"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <span
                                            class="ml-4 text-sm font-medium text-indigo-600 group-hover:text-indigo-500">Share</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="flex">
                            <button type="button"
                                class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Download
                            </button>
                            <button type="button"
                                class="flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Delete
                            </button>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</body>

</html>
