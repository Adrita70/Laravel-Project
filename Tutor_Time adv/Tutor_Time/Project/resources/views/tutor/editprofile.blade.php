@extends('layout.main')
@section('content')


<h1 align="center">Edit Profile</h1>

<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Name : <input type="text" value="{{$name}}" name="name"> </br>
    @error('name')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Phone : <input type="number" name="phone" value="{{$phone}}"> </br>
    @error('phone')
        <span style="color:red">{{$message}}</span><br>
    @enderror
    
    <br>
    Email : <input type="email" name="email" value="{{$email}}"> </br>
    @error('email')
        <span style="color:red">{{$message}}</span><br>
    @enderror

    <br>
    @if ($gender == 'male')
        Gender :
        <select name="gender">
            <option value=" ">Select a gender</option>
            <option value="male" selected>Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select></br>
        @error('gender')
            <span style="color:red">{{$message}}</span><br>
        @enderror
    @elseif($gender == 'female')
        Gender :
        <select name="gender">
            <option value=" ">Select a gender</option>
            <option value="male">Male</option>
            <option value="female" selected>Female</option>
            <option value="other">Other</option>
        </select></br>
        @error('gender')
            <span style="color:red">{{$message}}</span><br>
        @enderror 
    @else
        Gender :
        <select name="gender">
            <option value=" ">Select a gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other" selected>Other</option>
        </select></br>
        @error('gender')
            <span style="color:red">{{$message}}</span><br>
        @enderror 
    @endif
    
    <br>
    <input type="submit" value="Save">
</form>
@endsection