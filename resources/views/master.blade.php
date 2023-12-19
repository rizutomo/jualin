<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @stack('additional-css')
</head>

<body>
    
    <div class="wrapper">
        @include('navbar')
        @yield('content')
        @include ('footer')
    </div>
    
    @stack('additional-js')


</body>

</html>