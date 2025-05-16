@extends('admin.parts.layout')
@section('title', 'Изминить категорию')
@section('content')
<div class="mt-3">
<form action="{{route('admin.category.update',$category->id)}}" 
      autocomplete="off" 
      method="post">
      @csrf
    <div class="form-group">
        <label for="name">id</label>
        <input type="text"
               id="id" 
               name="id"
               value="{{$category->id }}"
               class="form-control">
    </div>
    <div class="form-goup">
            <label for="title">Title</label>
            <input type="text"
            id="title"
            name='title'
            value="{{ $category->title }}"
            class="form-control">
        </div>
        <br>
    <button class="btn btn-primary" type="submit">Сохранить</button> <br>
    <br><a  class="btn btn-danger" href="{{route('admin.category.index')}}">Назад</a>
</form>
@endsection