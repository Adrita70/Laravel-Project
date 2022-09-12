<html>
    <body>  
        <div>
        <a href="{{route('root')}}">Tutor Time!</a> | 
        <a href="{{route('student.login')}}">Guardian or Student</a> | 
        <a href="{{route('login')}}">Become a Tutor</a> | 
        <a href="{{route('student.review')}}">Reviews</a> | 
        <a href="{{route('student.contact')}}">Contact Us</a>
        <br><br>
        </div>
        @yield('content')
    </body>
</html>