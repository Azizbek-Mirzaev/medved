<x-layout>
    <x-slot:heading>
        Show Contacts Page
    </x-slot:heading>
    <h1>Hello from the Show Contacts page.</h1> <br>
<div><div><div>

        <div class="col-6"><h6>Id</h6></div>
        <div class="col-6">{{$contacts->id}}</div>
        <hr>
    </div>
    <div>

        <div class="col-6"><h6>Ф.И.О.</h6></div>
        <div class="col-6">{{$contacts->name}}</div>
    </div>
    <hr>
        <div class="col-6"><h6>Должность</h6></div>
        <div class="col-6">{{$contacts->position}}</div>
    </div>
    <hr>
        <div class="col-6"><h6>Телефон</h6></div>
        <div class="col-6">{{$contacts->phonecontact}}</div>
    </div>
    <hr>
        <a class="btn btn-danger" href="{{ route('frontend.contacts.index') }}"style="color: red" >Назад</a><hr>
    </div><br>
</x-layout>

@push('script')
    <script src="/assets/ckeditor5/ckeditor.js"></script>
@endpush

