@extends('admin.parts.layout')
@section('title', 'Новости')
@section('content')
<br>
<a href="{{ route('admin.article.create') }}" class="btn btn-primary">Новая статья</a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Главная</th>
            <th>Информация</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article )
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td><a href="{{ route('admin.article.show', $article->id) }}">Подробно</a> <br>
                <a href="{{ route('admin.article.edit', $article->id) }}">Изминить</a> <br>
                <a href="{{ route('admin.article.delete', $article->id) }}">Удалить</a> <br>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
