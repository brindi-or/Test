<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Document</title>
</head>
<body>

    @include("Header")
   <div class="flex flex-col object-center min-h-screen bg-transparent-700  algflex bg-grey-lighter align container  items-center justify-center flex-1 max-w-sm px-3 mx-auto">
   <h1 class="text-bold">User Login</h1>
    <form action="Users" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
        @csrf
        Username: <input type="text" name="Username" id="" placeholder="Enter User Id" required ><br>
        <span style="color:red">@error('Username'){{$message}}@enderror </span><br>
        Mail: <input type="text" name="Usermail" id="" placeholder="Enter User mail" required><br><br>
        Password: <input type="password" name="Userpassword" id="" placeholder="Enter User password" ><br>
        <span style="color:red">@error('Userpassword'){{$message}}@enderror </span><br>
        <button type="submit" class="submit">Login</button>

    </form>
    
  
   
   
</body>

</html>
