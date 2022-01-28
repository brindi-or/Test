<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-blue-500">

@csrf
<div class="flex-col object-center min-h-screen algflex bg-blue align">
            <div class="container flex flex-col items-center justify-center flex-1 max-w-sm px-2 mx-auto">
                <div class="w-full px-6 py-8 text-black bg-white rounded shadow-md">
                    <h1 class="mb-8 text-3xl text-center text-blue-300">Sign up</h1>
                    <input 
                        type="text"
                        required
                        class="block w-full p-3 mb-4 border rounded border-grey-light"
                        name="Username"
                        placeholder="Full Name" />
                    <span style="color:red">@error('Username'){{$message}}@enderror </span><br>
                    <input 
                        type="text"
                        class="block w-full p-3 mb-4 border rounded border-grey-light"
                        name="email"
                        placeholder="Email" />
                        
                    <input 
                        required
                        type="password"
                        class="block w-full p-3 mb-4 border rounded border-grey-light"
                        name="password"
                        placeholder="Password" />
                        <span style="color:red">@error('Userpassword'){{$message}}@enderror </span><br>
                    <input 
                        type="password"
                        class="block w-full p-3 mb-4 border rounded border-grey-light"
                        name="confirm_password"
                        placeholder="Confirm Password" />
                    <a href="/create">
                    <button
                        type="submit"
                        class="my-1 algign-center text-green-700 rounded py-3it submw-full submit bg-blue-300 hover:bg-green-dark focus:outline-none"
                    >Create Account</button>
                    </a>
                   

                    <div class="mt-4 text-sm text-center text-grey-dark">
                        By signing up, you agree to the 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>

                <div class="mt-6 text-grey-dark">
                    Already have an account? 
                    <a class="text-blue-500 no-underline border-b border-blue" href="/login">
                        Log in
                    </a>.
                </div>
            </div>
        </div>
</body>
</html>

