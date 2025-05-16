@extends('admin.parts.layout')
@section('title','Products page')
@section('content')
<div class="container">
<a href="{{route('admin.products.create')}}" class="btn btn-success">Создать</a> <br>
<table class="table">
    <thead>
        <tr>
            <th>Название</th>
            <th>Цена</th>
            <th>Остаток</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock_quantity}}</td>
            <td><a href="{{route('admin.products.show',$product->id)}}" class="btn btn-info">Продать</a><br><br>
            <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-warning">Изменить</a><br><br>
                <a href="{{route('admin.products.delete',$product->id)}}" class="btn btn-danger">Удалить</a><br>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>

 <br><br>


 <a class="btn btn-secondary" href="{{route('admin')}}">Назад</a>
<a class="btn btn-danger" href="{{route('logout')}}">Выход</a>
</div>
@endsection