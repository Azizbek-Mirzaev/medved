@extends('admin.parts.layout')
@section('title', $category->title)
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-6"><h6>Id</h6></div>
        <div class="col-6">{{$category->id}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Title</h6></div>
        <div class="col-6">{{$category->title}}</div>
    </div>
    <hr>

<form action="{{ route('admin.category.index')  }}" 
      method="get">
    <button type="submit" class="btn btn-success">Назад FORM</button>
</form><br>
<a class="btn btn-primary" href="{{ route('admin.category.index')  }}">Назад </a>
@endsection
