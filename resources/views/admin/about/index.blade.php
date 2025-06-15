@extends('admin.parts.layout')
@section('title', 'О нас история')
@section('content')
<br>
<a href="{{ route('admin.about.create') }}" class="btn btn-primary">Добавить запись</a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Заголовок</th>
            <th>Краткая информация</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($about as $about )
        <tr>
            <td>{{ $about->id }}</td>
            <td>{{ $about->title }}</td>
            <td>{{ $about->short_description }}</td>
            <td><a href="{{ route('admin.about.show', $about->id) }}">Подробно</a> <br>
                <a href="{{ route('admin.about.edit', $about->id) }}">Изминить</a> <br>
                <a href="{{ route('admin.about.delete', $about->id) }}">Удалить</a> <br>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
