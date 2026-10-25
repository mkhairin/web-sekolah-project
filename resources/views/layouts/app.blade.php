<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'InApp Inventory Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest') }}">

    <!-- Vite (SASS/CSS & JS) -->
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <div id="overlay" class="overlay"></div>

    <!-- TOPBAR -->
    <x-topbar />
    {{-- @include('partials.topbar') --}}

    <!-- SIDEBAR -->
    <x-sidebar />
    {{-- @include('partials.sidebar') --}}

    <!-- MAIN CONTENT -->
    <main id="content" class="content py-10">
        <div class="container-fluid">
            @yield('content')

            <!-- FOOTER -->
            <x-footer />
            {{-- @include('partials.footer') --}}
        </div>
    </main>

    @stack('scripts')
    @include('sweetalert::alert')
</body>

</html>
