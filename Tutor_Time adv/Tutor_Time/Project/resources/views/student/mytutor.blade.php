@extends('layouts.navbar2')
@section('content')
<h2 align='center'> Tutor List</h2>
<table border="1"align="center" width=60%>
        <tr>
            <th>Student ID</th>
            <th>Tutor ID</th>
            <th>Subject</th>
           
        </tr>
        @foreach($tutor as $t)
            <tr>
                <td>{{$t->student_id}}</td>
                <td>{{$t->teacher_id}}</td>
                <td>{{$t->subject}}</td>
            </tr>
        @endforeach
    </table>
    @endsection