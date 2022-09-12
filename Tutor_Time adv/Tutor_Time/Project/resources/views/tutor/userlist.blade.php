@extends('layout.main')
@section('content')

<h1 align="center">User List</h1>
    <table width="25%" align="center" border="5">
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($users as $u)
            <tr align="center">
                <td><a href="{{route('userdetails',['id'=>$u->id])}}">{{$u->id}}</a></td>
                <td>{{$u->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection