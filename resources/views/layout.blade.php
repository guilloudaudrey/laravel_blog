<html>
    <head>
        <title>Blog - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">       
        <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton|Nanum+Gothic" rel="stylesheet">

    </head>
    <body>
        @include('sidebar')

        <div class="container">
            @yield('content')

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>