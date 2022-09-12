@extends('layout.main2')
@section('content')

<h1 align="center">Register as a Tutor</h1>

<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Username : <input type="text" name="username" value="{{old('username')}}"> </br>
    @error('username')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Gender :
    <select name="gender">
        <option value=" " selected>Select a gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select></br>
    @error('gender')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Email : <input type="email" name="email" value="{{old('email')}}"> </br>
    @error('email')
        <span style="color:red">{{$message}}</span><br>
    @enderror

    <br>
    Phone : <input type="number" name="phone" value="{{old('phone')}}"> </br>
    @error('phone')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Password: <input type="password" name="password" value="{{old('password')}}"></br>
    @error('password')
        <span style="color:red">{{$message}}</span><br>
    @enderror

    <br>
    Confirm Password: <input type="password" name="cpassword"></br>
    @error('cpassword')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    <input type="submit" value="Sign Up">
</form>
@endsection