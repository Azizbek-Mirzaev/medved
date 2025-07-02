@extends('admin.parts.layout')
@section('title','Изменить новости')
@section('content')
<div class="mt-3">
    <form action="{{route('admin.article.update', $article->id)}}"
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
                   value="{{ $article->title }}">
        </div>
        <div class="form-group">
            <label for="short_description">Краткое описание</label>
            <input type="text"
                   name="short_description"
                   class="form-control"
                   id="short_description"
                   value="{{ $article->short_description }}">
        </div>

        <div class="form-group">
            <label for="published_at">Дата публикации</label>
            <input type="datetime-local"
                   name="published_at"
                   id="published_at"
                   class="form-control"
                   value="{{ old('published_at') }}">
        </div>
        <div class="form-group">
            <label for="category_id">Категория</label>
            <select name="category_id"
                    id="category_id"
                    class="custom-select">
                    @foreach ($categories as $category )
                    <option {{ old('category_id')== $category->id ? 'selected':'' }}
                    value="{{ ($category->id) }}">{{ ($category->title) }}</option>
                    @endforeach
            </select>

        </div>
</div>
<div class="form-group">
            <label for="image">Выбрать изображение</label>
            <input type="file"
                   name="image"
                   id="image"
                   class="form-control-file"
                   value="{{ $article->image }}">
        </div>
                <div class="form-group">
                <textarea name="body"
                id="body">{{ $article->body }}
                </textarea>
        </div>
        <a class="btn btn-danger " href="{{ route('admin.about.index')  }}">Назад </a>
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
