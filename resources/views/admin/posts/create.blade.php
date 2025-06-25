@extends('admin.parts.layout')
@section('title', 'Добавитьб запись')
@section('content')


    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-default-danger">{{ $error }}</div>
    @endforeach
    @endif

    <form action="{{ route('admin.posts.store') }}"
          method="post"
          enctype="multipart/form-data"
          autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="title"><h1>Загаловок</h1></label>
            <input type="text"
                   class="form-control"
                   name ="title"
                   id="title"
                   placeholder="Введите заголовок"
                   value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="short_description">Краткое описание</label>
            <textarea name="short_description"
                      class="form-control"
                      id="short_description"
                      placeholder="Введите текст описания"
                      rows="5">{{ old('short_description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Выбрать изображение</label>
            <input type="file"
                   name="image"
                   id="image"
                   class="form-control-file"><br>

        <div class="form-group">
            <textarea name="body" id="body">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a class="btn btn-danger " href="{{ route('admin.about.index')  }}">Назад </a>
        </div>

    </form>
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
