<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ডিবিসি নিউজ') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <style>
        [x-cloak] {
            display: none;
        }

    </style>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    @stack('scripts')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main>
            <div class="relative h-screen bg-gray-50 flex overflow-hidden">
                <x-sidebar.left_sidebar></x-sidebar.left_sidebar>
                <div class="flex-1 flex flex-col overflow-hidden">
                    <x-header.header></x-header.header>
                    <div class="flex-1 flex items-stretch overflow-hidden">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
    @stack('modals')
    @livewireScripts
</body>

</html>
