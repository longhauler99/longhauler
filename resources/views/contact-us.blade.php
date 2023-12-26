<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body style="background: #1a202c">
@include('partials.navbar')

<div class="container mx-auto text-white">
    Contact Us Page

    <form action="{{ route('contact-submit') }}">
        <button class="px-4 py-2 rounded text-white bg-purple-700">Submit</button>
    </form>
</div>
</body>
</html>
