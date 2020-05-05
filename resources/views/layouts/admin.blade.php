<!DOCTYPE html>
<head>
    <title>BattleC19 - Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('public/datta-able/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- Material icon -->
    <link rel="stylesheet" href="{{ asset('public/datta-able/fonts/material/css/materialdesignicons.min.css') }}">
    <!-- Material icon -->
    <link rel="stylesheet" href="{{ asset('public/datta-able/fonts/feather/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('public/datta-able/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/datta-able/css/style.css?v='. time()) }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/admin-style.css?v='. time()) }}">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    @yield('css')
</head>
<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('layouts.includes.sidebar')
    
    @include('layouts.includes.header')
    
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    @include('layouts.includes.notifications')

                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Js -->
    <script src="{{ asset('public/datta-able/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('public/datta-able/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.error').hide();
        });
    </script>
    @yield('js')

</body>
</html>
