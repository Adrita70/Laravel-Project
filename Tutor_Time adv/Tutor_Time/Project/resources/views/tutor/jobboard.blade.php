@extends('layout.main')
@section('content')

<h1 align='center'>Jobs</h1>

@foreach($tutor as $t)    
    <div style="border: 5px solid black; font-size: 22px">
        <p align="center">
            Application ID: {{$t->app_id}}
            <br>
            Student ID: {{$t->student_id}}
            <br>
            Subject: {{$t->subject}}
            <br>
            Days/Week: {{$t->days_week}}
            <br>
            Location: {{$t->location}}
            <br>
            Salary: {{$t->salary}}
            <br>
            Time: {{$t->time}}
            <br><br>
        </p>
        <p align="right">
            <button style="margin-right: 30px; font-size: 20px"><a href="{{route('getjobssubmit',['id'=>$t->app_id])}}">Apply</a></button>
        </p>
    </div>
        
@endforeach
{{ $tutor->links() }}
@endsection