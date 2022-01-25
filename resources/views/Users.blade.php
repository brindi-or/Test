<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header data="user component data"/>
    <h1>Users page</h1>
    @if($user=="ani")
    <h3>Hi {{$user}}</h3>
    @elseif($user=="bree")
    <h3>hello {{$user}}</h3>
    @endif
</body>
</html>