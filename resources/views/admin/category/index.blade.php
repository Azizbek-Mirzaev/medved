@extends("admin.parts.layout")
@section("title",'Category page')
@section("content")
<div class="mt-3">
    <a href="{{route('admin.category.create')}}" class="btn btn-success">Создать</a>

    <table class="table table-striped text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>CRUD</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        
        <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->title}}</td>
        <td><a class="btn btn-primary" href="{{route('admin.category.show', $category->id)}}">Посмотреть</a><br><br>
             <a class="btn btn-success" href="{{route('admin.category.edit', $category->id)}}">Изменить</a><br><br>
             <a class="btn btn-danger" href="{{route('admin.category.delete', $category->id)}}">Удалить</a><br><br>
        </td>
        </tr>
        @endforeach
        </tbody>
</table>
</div>

@endsection
