<br><br><br>
<h1 align="center">A verification code has been sent to your email.</h1>
<br>
<form align="center" action="" method="post">
    
    {{@csrf_field()}}
    
    Please verify your account : <input type="number" value="{{old('otp')}}" name="otp" placeholder="OTP"> </br>
    @error('otp')
        <span style="color:red">{{$message}}</span><br>
    @enderror<br>

    <br><h4>{{Session::get('msg')}}</h4><br>

    <input type="submit" value="Verify">
</form>