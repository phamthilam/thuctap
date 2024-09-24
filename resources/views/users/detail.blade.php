@extends('layouts.master')
@section('title')
 chi tiết user
@endsection
@section('content')
<a href="{{route('listUser')}}">list</a>
    <table class="table">
        <tr><th>id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>phone</th>
    </tr>
           <tr>
            <td>{{$User->id}}</td>
            <td>{{$User->name}}</td>
            <td>{{$User->email}}</td>
            <td>{{$User->address}}</td>
            <td>{{$User->phone}}</td>
        </tr> 
       
    </table>
    @endsection