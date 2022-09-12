<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('root')}}">Tutor Time!</a> | 
            <a href="{{route('login')}}">Login</a> | 
            <a href="{{route('register')}}">Become a Tutor</a>
            <br><hr><hr><hr><br>
        </div>
        @yield('content')
    </body>
</html>