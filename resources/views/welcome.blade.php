<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tailwind</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="p-12 bg-gray-300">
    @include("Header")<br>
    <div class="">
        <h1 >Hello.{{$data["Username"]}}</h1>
    </div>
    
</body>
@include("Footer")
</html>