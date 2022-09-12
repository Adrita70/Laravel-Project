@extends('layout.main2')
@section('content')
<br><h4>{{Session::get('msg1')}}</h4><br>
<h1 align="center">Sign In to Continue</h1>
<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Username : <input type="username" value="{{old('username')}}" name="username"> </br>
    @error('username')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Password : <input type="password" name="password"></br>
    @error('password')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    <br>
    <a href="{{route('forgotpw')}}"><b>Forgotten password?</b></a>
    <br><br>
    <input type="submit" value="Login">
</form>
@endsection