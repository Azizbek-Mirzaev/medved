@extends('admin.parts.layout')
@section('title','Edit Users page')
@section('content')
<form action="{{route('admin.user.update',$user_list->id)}}"
 method="post" 
 autocomplete="off">
    @csrf
    <div class="class form-group">
        <label for="name">FIO</label>
        <input type="text" 
               id="name" 
               name="name" 
               value="{{$user_list->name}}"
               class="form-control">
    </div>
    <div class="class form-group">
        <label for="email">Email</label>
        <input type="text" 
               id="email" 
               name="email" 
               value="{{$user_list->email}}"
               class="form-control">
               <div class="form-group">
        <label for="name">Password</label>
        <input type="text"
               id="password"
               name="password"
               class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form> <br>



<a href="{{route('logout')}}">Выход</a>
@endsection