<!DOCTYPE>
<html>
<head>
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('packages/bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/main.css') }}
</head>
<body>
    <header class="navbar navbar-fixed-top navbar-inverse">
        <nav class="container">
            <ul class="nav navbar-nav navbar-inner">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
    {{ HTML::script('packages/jquery/jquery.min.js') }}
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('js/main.js') }}
</body>
</html>
