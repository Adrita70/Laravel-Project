<html>
    <body>  
        <div>
        <a href="{{route('root')}}">Tutor Time!</a> | 
        <a href="{{route('student.register')}}">Registration</a> | 
        <a href="{{route('student.login')}}">Login</a>
        </div>
        @yield('content')
    </body>
</html>