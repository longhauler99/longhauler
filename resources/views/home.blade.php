<html lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Laravel Laratips</title>
</head>
<body style="background: darkkhaki">

<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About us</a>
<h3 style="color: maroon">Home</h3>

<div>
    {{ route('about', ['slug'=>'english']) }}
</div>

</body>
</html>
