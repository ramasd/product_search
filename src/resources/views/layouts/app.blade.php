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
        <p>Įrenginys:</p>
        <form id="product_search" action="{{ route('products.search') }}" method="post">
            @csrf
            <input type="text" name="search" id="search" required>
            <input value="Ieškoti" type="submit" class="submit-button">
        </form>
        <hr style="width:96%">


        @yield('content')
    </div>
</body>
</html>
