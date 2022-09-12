@extends('layout.main')
@section('content')

<br><h4>{{Session::get('ma')}}</h4><br>
<h1 align="center">My Profile</h1>

<div style="border: 7px solid black;  font-size: 20px" align="center" border="5">
    <p>
        Name : {{$name}}
        <br><br>
        Phone : {{$phone}}
        <br><br>
        Email : {{$email}}
        <br><br>
        Gender : {{$gender}}
        <br>
    </p>
    <br><br>
    <p>
        <button style="margin-right: 50px"><b><a href="{{route('editprofile')}}">Edit Profile</a></b></button>
        <button style="margin-leftt: 50px"><b><a href="{{route('editpw')}}">Change Password</a></b></button>
    </p>
</div>

@endsection