@extends('admin.parts.layout')
@section('title','Изменить запись')
@section('content')
<div class="mt-3">
    <form action="{{route('admin.posts.update', $post->id)}}"
          method="post"
          enctype="multipart/form-data"
          autocomplete="off">
        @csrf
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{  $error }}</div>
        @endforeach
        @endif
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   id="title"
                   value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="short_description">Краткое описание</label>
            <input type="text"
                   name="short_description"
                   class="form-control"
                   id="short_description"
                   value="{{ $post->short_description }}">
        </div>
                <div class="form-group">
            <label for="image">Выбрать изображение</label>
            <input type="file"
                   name="image"
                   id="image"
                   class="form-control-file"
                   value="{{ $post->image }}">
        </div>
                <div class="form-group">
                <textarea name="body"
                id="body">{{ $post->body }}
                </textarea>
        </div>
        <a class="btn btn-danger " href="{{ route('admin.posts.index')  }}">Назад </a>
        <button class="btn btn-primary" type="submit">Изменить</button>
    </form>
</div>
@endsection
@push('script')
<script src="/assets/ckeditor5/ckeditor.js"></script>
<script src="/assets/ckeditor5/uploader.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ), {
            extraPlugins: [loadUploadAdapter]
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush
