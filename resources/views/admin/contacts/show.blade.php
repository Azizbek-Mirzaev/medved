@extends('admin.parts.layout')
@section('title', 'Показать')
@section('content')

<div> <div>
   
        <div class="col-6"><h6>Id</h6></div>
        <div class="col-6">{{$contacts->id}}</div>
        <hr>
    </div>
    <div>
   
        <div class="col-6"><h6>Ф.И.О.</h6></div>
        <div class="col-6">{{$contacts->name}}</div>
    </div>
    <hr>
        <div class="col-6"><h6>Должность</h6></div>
        <div class="col-6">{{$contacts->position}}</div>
    </div>
    <hr>
        <div class="col-6"><h6>Телефон</h6></div>
        <div class="col-6">{{$contacts->phonecontact}}</div>
    </div>
    <hr>
    <br><a class="btn btn-primary" href="{{route('admin.contacts.index')}}">Назад</a>
</div>    
    
  


@endsection