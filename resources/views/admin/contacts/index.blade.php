@extends("admin.parts.layout")
@section("title",'Contact page')
@section("content")
<table class="table table-striped text-center">
<div class="mt-3">
    <a href="{{route('admin.contacts.create')}}"
       class="btn btn-primary">Создать</a>
    <thead>
        <tr>
            <th>id</th>
            <th>Ф.И.О.</th>
            <th>Должность</th>
            <th>Телефон</th>
            <th>CRUD</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contacts)

        <tr>
        <td>{{$contacts->id}}</td>
        <td>{{$contacts->name}}</td>
        <td>{{$contacts->position}}</td>
        <td>{{$contacts->phonecontact}}</td>
        <td>
            <a class="btn btn-success" href="{{ route('admin.contacts.edit', $contacts->id)}}">Изменить</a><br><br>
            <a class="btn btn-primary" href="{{ route('admin.contacts.show', $contacts->id)}}">Посмотреть</a><br><br>
            <a class="btn btn-danger" href="{{ route('admin.contacts.delete', $contacts->id)}}">Удалить</a><br>

        </td>
        </tr>
        @endforeach
        </tbody>
</table>
@endsection
