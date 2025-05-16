@extends('admin.parts.layout')
@section('title','Новая категория')
@section('content')
<div class="mt-3">
<form action="{{route('admin.category.store')}}" 
      autocomplete="off" 
      method="post">
      @csrf
    <div class="form-group">
        <label for="title">Название</label>
        <input type="text"
               placeholder="Введите категорию" 
               name="title"
               id="title"
               class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">SAVE</button><br> <br>
    <a class="btn btn-danger" href="{{route('admin.category.index')}}">Назад</a>
  </form>
</div>

@endsection