
<x-layout>
    <x-slot:heading>
        Страница Навигации
    </x-slot:heading>
    <h1>На Странице Навигации вы можете выбрать понравишуюся вам Рубрику и подробно изучить её.</h1> <br>

<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
<table class="table table-striped text-center" class="w-1000" alt="">
 <table class="table">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Главная</th>
            <th>Информация</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article )
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td><a href="{{ route('frontend.show', $article->id) }}"style="color: blue">Подробно</a> <br>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


</x-layout>
