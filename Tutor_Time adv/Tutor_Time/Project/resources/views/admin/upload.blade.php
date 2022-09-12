@extends('layout.main3')
@section('content')
<body style='background-color:aqua'>
<h1 Style='color:blue'align='center'>Admin Profile</h1>
<div style='color:red'align='center'>   
<table border="5px black">
        <tr>
           
            <th>Name</th>

            <th>Delete</th>
            <th>Upload File</th>
           
        </tr>
        @foreach($admin as $s)
            <tr>
                <form method="POST"action="/upload" enctype="multipart/form-data"> 
                <td><input type="text" readonly name="uname" value="{{$s->username}}"></td>
               
                <td><a href="/upload/{{$s->username}}">Delete</a></td>
                <td>
               
    {{@csrf_field()}}
  
    <input type="file" name="pro_pic" >
    @error('pro_pic')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    <input type="submit" value="Submit">  
</form>
</td>
</tr>
@endforeach
</table>          
</div>
</body>
@endsection