<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
{{--    @stack('style')--}}
</head>
<body style="background: #1a202c">

@include('partials.navbar')

<div class="container mx-auto text-white">
    @yield('content')
</div>

<div>
    {{ session('alertMessage') }}
</div>
</body>
</html>
