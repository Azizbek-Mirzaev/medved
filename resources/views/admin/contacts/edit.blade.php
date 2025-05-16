@extends("admin.parts.layout")
@section("title",'Редактирование Контакта')
@section("content")
<form action="{{ route('admin.contacts.update',$contacts->id) }}"
     method="post"
     autocomplete="=off">
    @csrf
    <div class="form-group">
        <label for="name">Ф.И.О.</label>
        <input type="text"
               id="name"
               name="name"
               value="{{ $contacts->name }}"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Должность</label>
        <input type="text"
               id="position"
               name="position"
               value="{{ $contacts->position }}"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Телефон</label>
        <input type="integer"
               id="phonecontact"
               name="phonecontact"
               value="{{ $contacts->phonecontact }}"
               class="form-control">
    </div>
    <br><button class="btn btn-primary" type="submit">Save</button>
</form><br><br>
 Тут надо написать Логику Редактирования <br><br>
<a href="{{ route('logout') }}">Выход</a>
@endsection

