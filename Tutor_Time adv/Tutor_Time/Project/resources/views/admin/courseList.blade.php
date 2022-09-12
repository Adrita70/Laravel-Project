@extends('layout.main2')
@section('content')
<body style='background-color:bisque; font-size: 22px'>
<h2  style='color:blue' align='center'>Course List</h2>
<table border="5px black" align="center">
        <tr>
            <th>Id</th>
            <th>Course</th>
            <th>Delete</th>
        </tr>
        @foreach($Tutors as $t)
            <tr>
                <td>{{$t->tutor_id}}</td>
                <td>{{$t->subject}}</td>
                <td><a href="/subdel/{{$t->tutor_id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div>
</div>
</body>
 @endsection