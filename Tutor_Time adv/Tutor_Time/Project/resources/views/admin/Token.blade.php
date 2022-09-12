@extends('layout.main2')
@section('content')
<body style='background-color:bisque; font-size: 22px'>
<h2  style='color:blue' align='center'>Tokens</h2>
<table border="5px black" align="center">
        <tr>
            <th>Id</th>
            <th>UserId</th>
            <th>Token</th>
            <th>Delete</th>        
        </tr>
        @foreach($Tokens as $t)
            <tr>
                
                <td>{{$t->id}}</td>
                <td>{{$t->token_key}}</td>
                <td>{{$t->userid}}</td>      
                <td><a href="/deltok/{{$t->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div>
</body>
    @endsection