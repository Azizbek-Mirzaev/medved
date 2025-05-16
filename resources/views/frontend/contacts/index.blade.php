
<x-layout>
    <x-slot:heading>
        Contacts page
    </x-slot:heading>
    <h1>Hello from the Contacts page.</h1> <br>

{{-- <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100"> --}}
<table class="table table-striped text-center" class="w-100" alt="">
 <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Ф.И.О.</th>
            <th>Должность</th>
            <th>Телефон</th>
            <th>Посмотреть</th>
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
{{-- </div> --}}


</x-layout>
