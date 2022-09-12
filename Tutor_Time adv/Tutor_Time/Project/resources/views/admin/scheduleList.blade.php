@extends('layout.main2')
@section('content')
<body style='background-color:bisque; font-size: 22px'>
<h2  style='color:blue' align='center'>Schedule List</h2>
<table border="5px black" align="center">
        <tr>
            <th>Id</th>
            <th>Schedule</th>
            <th>Delete</th>
        </tr>
        @foreach($Tutors as $t)
            <tr>
                <td>{{$t->tutor_id}}</td>
                <td>{{$t->schedule}}</td>
                <td><a href="/schdel/{{$t->tutor_id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div>
</div>
</body>
    @endsection