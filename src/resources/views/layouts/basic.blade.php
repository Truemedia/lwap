<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <title>{{ $title }}</title>
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>
