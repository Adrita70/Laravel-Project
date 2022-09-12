<html>
    <body>  
        <div>
        <a href="{{route('student.mainpage')}}">Mainpage |</a>
        <a href="{{route('student.application')}}">Post |</a>
        <a href="{{route('student.appfeedback')}}">Website Feedback |</a>
        <a href="{{route('student.teacherlist')}}">Teacher List |</a>
        <a href="{{route('student.mytutor')}}"> My Tutor |</a>
        <a href="{{route('student.profile')}}">Profile |</a>
        <a href="/logout">Logout</a>
        </div>
        @yield('content')
    </body>
</html>