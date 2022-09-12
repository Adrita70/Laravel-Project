<h4>{{Session::get('m')}}</h4><br><br>
<h1 align="center">Forgot Password</h1>
    <br><br>
    <div style="border: 10px solid black;" align="center">
        <form align="center" action="" method="post">
            {{@csrf_field()}}
            <br>
            Enter your username : <input type="username" value="{{old('username')}}" name="username"> </br>
            @error('username')
                <span style="color:red">{{$message}}</span><br>
            @enderror

            <br>
            <input type="submit" value="Enter">
        </form>
    </div>