@extends('layout.main')
@section('content')

<h1 align='center'>Feedbacks</h1>

@foreach($tutor as $t)    
    <div style="border: 5px solid black; font-size: 22px">
        <p align="center">
            Student ID: {{$t->student_id}}
            <br><br>
            <textarea name="feedback" rows = "15" cols = "100" disabled>{{$t->feedback}}</textarea><br>
            <br>
            Rating: {{$t->rating}}/5
            <br><br>
        </p>
    </div>
@endforeach
{{ $tutor->links() }}

@endsection