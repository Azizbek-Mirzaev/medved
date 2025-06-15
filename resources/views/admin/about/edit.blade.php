@extends('admin.parts.layout')
@section('title','Изменить запись')
@section('content')
<div class="mt-3">
    <form action="{{route('admin.about.update', $about->id)}}"
          method="post"
          autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   id="title"
                   value="{{ $about->title }}">
        </div>
        <div class="form-group">
            <label for="short_description">Краткое описание</label>
            <input type="text"
                   name="short_description"
                   class="form-control"
                   id="short_description"
                   value="{{ $about->short_description }}">
        </div>
        <button class="btn btn-primary" type="submit">Изменить</button>
    </form>
</div>
@endsection
