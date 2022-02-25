<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('xml-upload') }}">Upload XML</a>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
