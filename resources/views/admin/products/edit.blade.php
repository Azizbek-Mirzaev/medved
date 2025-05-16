@extends('admin.parts.layout')
@section('title', 'Edit page')
@section('content')
<div class="mt-3">
    <form action="{{route('admin.products.update', $product->id)}}"
    method="post" 
    autocomplete="off">
        @csrf
        <div class="form-group">
        <label for="name">Добавить продукут</label>
        <input type="text"
               placeholder="Добавьте новый продукут" 
               name="name"
               id="name"
               class="form-control"
               value="{{ $product->name }}"
               >
    </div>
    <div class="form-group">
        <label for="price">Добавить Цену Продукута</label>
        <input type="number"
               placeholder="Добавьте цену продукута" 
               name="price"
               id="price"
               class="form-control"
               value="{{ $product->price }}"
               >
    </div>
    <div class="form-group">
        <label for="markup_percentage">Процент Надбавки</label>
        <input type="number"
               placeholder="Добавьте Процент Надбавки" 
               name="markup_percentage"
               id="markup_percentage"
               class="form-control"
               value="{{ $product->markup_percentage }}"
               >
    </div>
    <div class="form-group">
        <label for="stock_quantity">Количество Продуктов на Складе</label>
        <input type="number"
               placeholder="Добавьте Количество Продуктов на Складе" 
               name="stock_quantity"
               id="stock_quantity"
               class="form-control"
               value="{{ $product->stock_quantity }}"
               >
    </div>
 <br><br>

    <button class="btn btn-primary" type="submit">SAVE</button>
        <a class="btn btn-secondary" href="{{route('admin.products.index')}}">Назад</a>
        <a class="btn btn-danger" href="{{route('logout')}}">Выход</a>
    </form>
    </div>
@endsection
