<html>
    <head>
        <meta charset="utf-8">
        <title>Acme - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include ('layouts.navbar')
        <div class="container">
            @if (Request::is('/'))
                @include ('layouts.showcase')
            @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include ('layouts.errors')
                    @yield ('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @include ('layouts.sidebar')
                </div>
            </div>
        </div>

        <footer id="footer" class="text-center">
            <p>Copyright 2019 &copy; Acme</p>
        </footer>
    </body>
</html>
