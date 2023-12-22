<html lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Laravel Laratips</title>
    <style>
        .my_border {
            color: green;
            background: black;
            padding: 10px;
            border-radius: 7px;
        }
    </style>
</head>
<body style="background: #1a202c">

<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About us</a>
<a href="{{ URL::temporarySignedRoute('secret', now()->addSeconds(10)) }}">Secret</a>
<h3 style="color: maroon">Home</h3>

<div class="my_border">
    {{ route('post.comment', ['post'=>'first-post', 'comment'=>'first-comment']) }}
</div>

</body>
</html>
