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
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>