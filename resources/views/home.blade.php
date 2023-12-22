<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Laravel Laratips</title>
</head>
<body style="background: darkkhaki">

<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About us</a>
<h3 style="color: maroon">Home</h3>

<div>
{{--    {{ url()->current() }}--}}
{{--    {{ url()->full() }}--}}
{{--    {{ url()->previous() }}--}}
{{--    {{ URL::previous() }} {{--    use facades; no namespacing required. It is already available in views--}}
    {{ url('about') }}
</div>

</body>
</html>
