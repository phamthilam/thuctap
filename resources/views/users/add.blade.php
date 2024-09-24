@extends('layouts.master')
@section('title')
 Thêm mới user
@endsection
@section('content')
    <form method="post" action="{{route('addPostUser')}}"  enctype="multipart/form-data">
        @csrf
    Name:<br>
    <input type="text" name="name" class="form-control"><br>
    Email:<br>
    <input type="email" name="email" class="form-control"><br>
    Password:<br>
    <input type="password" name="password" class="form-control"><br>
    <input class="btn btn-primary" type="submit" value="add" >
    </form>
    @endsection