@extends('admin.parts.layout')
@section('title','Новый контакт')
@section('content')
<div class="mt-3">
    <form action="{{route('admin.contacts.store')}}"
          autocomplete="off"
          method="post">
    @csrf
        <div class="form-group">
            <label for="name">Ф.И.О.</label>
            <input type="text"
                   placeholder="Введите Ф.И.О."
                   name="name"
                   class="form-control"
                   id="name">
        </div>
        <div class="form-group">
        <label for="name">Должность</label>
        <input type="text"
               id="position"
               placeholder="Введите Должность"
               name="position"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Телефон</label>
        <input type="integer"
               id="phonecontact"
               placeholder="Введите Телефон 9символов"
               name="phonecontact"
               class="form-control">
    </div>
        <button class="btn btn-primary" type="submit">Сохранить</button>

        <br><br><a class="btn btn-danger" href="{{route('admin.contacts.index')}}">Назад</a>
    </form>
</div>
@endsection
