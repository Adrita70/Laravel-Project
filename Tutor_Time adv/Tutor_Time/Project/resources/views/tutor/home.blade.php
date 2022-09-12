@extends('layout.main')
@section('content')

<br>
<div style="border: 5px solid black; font-size: 20px" border="5" align="right">
    <label>
        Welcome, <b>{{$name}}</b><br>
    </label>
    <label>
        {{$email}}<br>
    </label>
    <label>
        ID : {{$id}}
    </label>
</div>
<br><br>
<div style="border: 10px solid black; font-size: 20px" border="5">
    <p align="center">
        Tutoring is educational support, either one-on-one or in small groups. It works to support or complement regular classroom activities. It -
    </p>
    <p>
        <ul>
            <li>Gives students personalized learning plans</li>
            <li>Addresses special educational needs</li>
            <li>Provides safe environment for learning</li>
            <li>Reduces learning loss</li>
            <li>Boosts students confidence</li>
            <li>Teaches lifelong learning skills</li>
        </ul>
    </p>
</div>

@endsection