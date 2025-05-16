@extends('admin.parts.layout')
@section('title', 'Show page')
@section('content')
<div class="container">
    <h1>Продажа товара: {{$product->name}}</h1>
    

</div>
 <br><br>


<a class="btn btn-secondary" href="{{route('admin.products.index')}}">Назад</a>
<a class="btn btn-danger" href="{{route('logout')}}">Выход</a>

@endsection
