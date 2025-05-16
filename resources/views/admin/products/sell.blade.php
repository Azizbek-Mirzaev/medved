@extends('admin.parts.layout')
@section('title', 'Show page')
@section('content')
<div class="container">
    <h1>Продажа товара: {{$product->name}}</h1>
    <form action="{{rote('admin.products.sell',$product->id)}}" method="POST">
        
    </form>

</div>
 <br><br>



<a class="btn btn-danger" href="{{route('logout')}}">Выход</a>

@endsection
