<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.header')

    
    @yield('content')
    

    @include('partials.footer')
</body>
</html>