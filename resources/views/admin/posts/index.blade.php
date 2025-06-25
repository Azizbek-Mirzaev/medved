@extends('admin.parts.layout')
@section('title', 'О нас история')
@section('content')
<br>
<a href="{{ route('admin.posts.create') }}"
class="btn btn-primary">Добавить запись</a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Заголовок</th>
            <th>Краткая информация</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $post )
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->short_description }}</td>
            <td><a href="{{ route('admin.posts.show', $post->id) }}">Подробно</a> <br>
                <a href="{{ route('admin.posts.edit', $post->id) }}">Изминить</a> <br>
                <a href="{{ route('admin.posts.delete', $post->id) }}">Удалить</a> <br>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
