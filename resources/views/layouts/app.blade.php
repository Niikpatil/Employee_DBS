<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Employee_DBS</title>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('common.header')
        <div class="app-body">
            <div class="sidebar">
                @include('common.sidebar')
            </div>
            <main class="main">
                <div class="dash_ui">
                    @yield('content')
                </div>
            </main>
        </div>
    @include('common.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Include the script only on homepage -->
    @if(Request::path() === 'admin')
    <script src="js/main.js"></script>
    @endif

</body>
</html>
