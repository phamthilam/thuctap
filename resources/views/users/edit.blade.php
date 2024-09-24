@extends('layouts.master')
@section('title')
 Update user
@endsection
@section('content')

<form method="post" action="{{route('updateUser',$User->id)}}"  enctype="multipart/form-data">
    @csrf
    @method('put')
Name:<br>
<input type="text" name="name" class="form-control" value="{{$User->name}}" ><br>
Email:<br>
<input type="email" name="email" class="form-control" value="{{$User->email}}"><br>
Password:<br>
<input type="password" name="password" class="form-control" value="{{$User->email}}"><br>
Address:<br>
<input type="text" name="address" class="form-control" value="{{$User->address}}" ><br>
Phone:<br>
<input type="text" name="phone" class="form-control" value="{{$User->phone}}"><br>
<input class="btn btn-primary" type="submit" value="update">
</form>
@endsection