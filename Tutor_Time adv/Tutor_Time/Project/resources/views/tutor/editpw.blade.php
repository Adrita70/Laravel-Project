@extends('layout.main')
@section('content')
<br><br>
<h4>{{Session::get('ma')}}</h4><br>
<h1 align="center">Edit Password</h1>
    <br><br>
    <div style="border: 10px solid black;" align="center">
        <form align="center" action="" method="post">
            {{@csrf_field()}}
            <br>
            Old Password: <input type="password" name="opassword" value="{{old('opassword')}}"></br>
            @error('opassword')
                <span style="color:red">{{$message}}</span><br>
            @enderror
            
            <br>
            New Password: <input type="password" name="npassword" value="{{old('npassword')}}"></br>
            @error('npassword')
                <span style="color:red">{{$message}}</span><br>
            @enderror

            <br>
            Confirm Password: <input type="password" name="cpassword"></br>
            @error('cpassword')
                <span style="color:red">{{$message}}</span><br>
            @enderror

            <br>
            <input type="submit" value="Change">
        </form>
    </div>
    @endsection