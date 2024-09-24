@extends('layouts.master')
@section('title')
 Thêm mới user
@endsection
@section('content')
<button class="btn btn-info"><a href="{{route('addUser')}}">Add</a></button>
    <table class="table">
        <tr><th>id</th>
        <th>name</th>
        <th>email</th>
        <th>action</th>
    </tr>
    
        @foreach ($listUser as $user)
           <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td> <button class="btn btn-secondary"><a href="{{route('detailUser',$user->id)}}">detail</a></button>  
               <button  class="btn btn-warning"><a href="{{route('editUser',$user->id)}}">update</a> </button> 
                <button class="btn btn-danger"><a href="{{route('deleteUser',$user->id)}}" onclick="return confirm('bạn có muốn xóa')">delete</a></button></td>
        </tr> 
        @endforeach
        
    </table>
    @endsection
