<br><br><br>
<h1 align="center">Forgot Password</h1>
    <br><br>
    <div style="border: 10px solid black;" align="center">
        <form align="center" action="" method="post">
            {{@csrf_field()}}
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
            <input type="submit" value="Change">
        </form>
    </div>