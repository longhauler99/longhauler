<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Laravel Laratips</title>
</head>
<body style="background: darkkhaki">

<h3 style="color: maroon">Home</h3>
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About us</a>

<div>
{{--    {{ url()->current() }}--}}
{{--    {{ url()->full() }}--}}
    {{ url()->previous() }}
</div>
</body>
</html>
