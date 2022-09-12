@extends('layout.main2')
@section('content')
<h1 align='center'>Course ADD Page</h1>
<form action="/addCourse" method="POST">
{{@csrf_field()}}
@error('subject')
<input type="text" name="subject" placeholder="Enter Subject Name"> <br> <br>
        <span style="color:red">{{$message}}</span><br>
@enderror   
<button type="submit">Submit</button>
@endsection