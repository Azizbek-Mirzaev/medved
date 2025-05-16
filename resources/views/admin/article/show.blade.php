@extends('admin.parts.layout')
@section('title', 'Статья')
@section('content')
    {{-- @dd($article->category) --}}

    <div >
        <img src="/storage/{{ $article->image }}" class="w-50" alt="">
    </div>
    <h3 class="text-center text-uppercase pt-3">{{ $article->title }}</h3>
    <h5 class="text-justify">{{ $article->short_description }}</h5>
    <div class="mt-5 ck-content">
        {!! $article->body !!}
    </div>
    <div>
        Категория: {{ $article->category->title }}
    </div> <br>
    <div>
        <a class="btn btn-danger" href="{{ route('admin.article.index') }}">Назад</a>
    </div><br>
@endsection

@push('script')
    <script src="/assets/ckeditor5/ckeditor.js"></script>
@endpush

