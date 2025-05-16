<x-layout>
    <x-slot:heading>
        Contact page
    </x-slot:heading>
    <h1>Hello from the Contact page.</h1>

<table class="table table-striped text-center" class="w-100" alt="">
 <table class="table">
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
        @foreach ($contacts as $contacts )
        <tr>
            <td>{{ $contacts->id }}</td>
            <td>{{ $contacts->name }}</td>
            <td>{{$contacts->position}}</td>
            <td>{{$contacts->phonecontact}}</td>
            <td><a href="{{ route('frontend.contacts.show', $contacts->id) }}"style="color: blue">Подробно</a> <br>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>







</x-layout>
