<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>posty</title>
</head>
<body class="bg-gray-200">
    <nav class="p-4 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li class="p-3">
                <a href="/">Home</a>
            </li>
            <li class="p-3">
                <a href="/">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="/">Post</a>
            </li>
        </ul>   

        <ul class="flex items-center">
            @auth
                <li class="p-3">
                    <a href="">Abe Chen</a>
                </li>
                <li class="p-3">
                    <a href="/">Logout</a>
                </li>
            @endauth

            @guest
                <li class="p-3">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="p-3">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endguest
        </ul>   
    </nav> 
    @yield('content')
</body>
</html>