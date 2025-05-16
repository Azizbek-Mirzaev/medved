@extends('admin.parts.layout')
@section('title','Новые услуги и товары')
@section('content')
<div class="mt-3">
<form action="{{route('admin.products.store')}}" 
      autocomplete="off" 
      method="post">
      @csrf
    <div class="form-group">
        <label for="name">Добавить продукут</label>
        <input type="text"
               placeholder="Добавьте новый продукут" 
               name="name"
               id="name"
               class="form-control"
               >
    </div>
    <div class="form-group">
        <label for="price">Добавить Цену Продукута</label>
        <input type="number"
               placeholder="Добавьте цену продукута" 
               name="price"
               id="price"
               class="form-control"
               >
    </div>
    <div class="form-group">
        <label for="markup_percentage">Процент Надбавки</label>
        <input type="number"
               placeholder="Добавьте Процент Надбавки" 
               name="markup_percentage"
               id="markup_percentage"
               class="form-control"
               >
    </div>
    <div class="form-group">
        <label for="stock_quantity">Количество Продуктов на Складе</label>
        <input type="number"
               placeholder="Добавьте Количество Продуктов на Складе" 
               name="stock_quantity"
               id="stock_quantity"
               class="form-control">
    </div>
    <a class="btn btn-secondary" href="{{route('admin.products.index')}}">Назад</a>
    <button class="btn btn-primary" type="submit">SAVE</button>
   
  </form>
</div>

@endsection