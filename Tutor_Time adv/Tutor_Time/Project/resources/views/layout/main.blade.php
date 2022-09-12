<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('thome')}}">Home</a> | 
            <a href="{{route('tutorprofile')}}">My Profile</a> | 
            <a href="{{route('getjobs')}}">Job Board</a> | 
            <a href="{{route('myjobs')}}">My Jobs</a> | 
            <a href="{{route('myfeedbacks')}}">Feedbacks</a> | 
            <a href="{{route('logout')}}">Sign Out</a>
            <br><hr><hr><hr><br>
        </div>
        @yield('content')
    </body>
</html>