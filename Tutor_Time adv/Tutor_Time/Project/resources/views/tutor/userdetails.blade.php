@extends('layout.main')
@section('content')

<h1 align="center">User Details</h1>
    <br><br>
    <div style="border: 10px solid black;  background-color: yellow; font-size: 30px" align="center" ">
        ID: {{$u->id}}
        <br>
        Name: {{$u->name}}
        <br>
        Email: {{$u->email}}
        <br>
        Type: {{$u->type}}
    </div>
@endsection