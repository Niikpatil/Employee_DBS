<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./admin">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Laravel">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CoreUI Integration with Laravel</title>

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
            @include('common.main')
        </main>

    </div>
        
        {{-- @yield('content') --}}
        @include('common.footer')
        

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Include the script only on homepage -->
    @if(Request::path() === 'admin')
    <script src="js/main.js"></script>
    @endif
</body>

</html>
