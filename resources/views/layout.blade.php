<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
    <table class="table">
        @include('partials.nav')
        <hr>
        @yield('content')
        @include('partials.footer')
    </table>
    </nav>
</body>
</html>

