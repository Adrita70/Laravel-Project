@extends('layout.main2')
@section('content')
<body style='background-color:bisque;font-size:22px'>
<h2 align='center'>This is Student Details</h2>
<table border="5px black" align="center">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Id</th>
            <th>Phone Number</th>
            <th>Username</th>
            <th>Address</th>
            <th>Desc</th>
            <th>Delete</th>
            <th>Banned</th>
        </tr>
        @foreach($Students as $t)
            <tr>
                <td><a href="{{route('Student.studentdetails',['student_id'=>$t->student_id,
                'name'=>$t->name,'email'=>$t->email,
                'phone'=>$t->phone,'username'=>$t->username,'address'=>$t->address])}}">{{$t->name}}</td>
                <td>{{$t->email}}</td>
                <td>{{$t->student_id}}</td>
                <td>{{$t->phone}}</td>
                <td>{{$t->username}}</td>
                <td>{{$t->address}}</td>
                <td>{{$t->desc}}</td>
                <td><a href="/remove/{{$t->student_id}}">Delete</a></td>
               @if($t->status==1)
                <td><a href="{{route('students.status.update',
                    ['student'=>$t->student_id,'status_code'=>0])}}">Banned</a></td>
                @else
                    <td><a href="{{route('students.status.update',
                    ['student'=>$t->student_id,'status_code'=>1])}}">Permit</a></td>
               @endif
            </tr>
        @endforeach
    </table>
<span>{{$Students->links()}}</span>
    <style>.w-5{display:none;}</style>
</body>
    @endsection