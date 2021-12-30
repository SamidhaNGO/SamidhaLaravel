<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Samidha | Helping to Help</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

              @include('includes/topbar')
              <div class="right_col" role="main">
                @include('flash-message')
                @yield('main_container')
              </div>

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('js/admin/admin.js') }}"></script>

        @stack('scripts')

    </body>
</html>
