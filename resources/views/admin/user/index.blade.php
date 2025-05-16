@extends('admin.parts.layout')
@section('title','Users page')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>№</th>
            <th>FIO</th>
            <th>Email</th>
            <th>CRUD</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $user_list as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td><a href="{{route('admin.user.edit', $user->id)}}">Изменить</a> <br>
                    <a href="{{ route('admin.user.show', $user->id) }}">Посмотреть</a><br>
                    <a href="{{ route('admin.user.delete', $user->id) }}">Удалить</a>
                </td> <br>
                
            </tr>
    @endforeach
    </tbody>

</table>

<a href="{{route('logout')}}">Выход</a>

@endsection