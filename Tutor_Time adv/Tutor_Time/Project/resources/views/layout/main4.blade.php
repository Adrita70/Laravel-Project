<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('admin.home')}}">Dashboard</a>
            <a href="{{route('admin.logout')}}">Logout</a>
            <br><br>
        </div>
        @yield('content')
    </body>
</html>