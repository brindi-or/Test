<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("Header")
   
    <x-header data="user component data"/>
    <h1>User Login</h1>
    <form action="Users" method="POST">
        @csrf
        Username: <input type="text" name="Username" id="" placeholder="Enter User Id" ><br>
        <span style="color:red">@error('Username'){{$message}}@enderror </span><br>
        Mail: <input type="text" name="Usermail" id="" placeholder="Enter User mail" ><br><br>
        Password: <input type="password" name="Userpassword" id="" placeholder="Enter User password" ><br>
        <span style="color:red">@error('Userpassword'){{$message}}@enderror </span><br>
        <button type="submit" class="submit">Login</button>

    </form>
    
    
</body>
@include("Footer")
</html>

<style>
    .submit{
        background-color:rgb(135, 203, 235);
        color:green;
        width: 70px;
        border-radius: 3px;
    }
</style>