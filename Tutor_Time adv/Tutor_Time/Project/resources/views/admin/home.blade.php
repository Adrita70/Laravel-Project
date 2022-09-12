@extends('layout.main4')
@section('content')
<html>
    <head></head>
    <body style='background-color:aqua'>
        <div>
        <h1 align='center'>Welcome Admin</h1>
        </div>
        <div style="font-size: 20px" align="center"><a href="/teacherdetails">Tutor</a><br>
        <br>
        <a href="/studentdetails">Student</a>
        <br>
        <br>
        <a href="/upload">Admin Profile</a>


        </div>
        @yield('content')
    </body>
</html>
@endsection