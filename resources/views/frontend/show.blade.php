<x-layout>
    <x-slot:heading>
        {{ $article->category->title }}
    </x-slot:heading>
    <h1>{{ $article->category->title }}</h1> <br>

    <div >
        <img src="/storage/{{ $article->image }}" class="w-100" alt="">
    </div>
    <h3 class="text-center text-uppercase pt-3">{{ $article->title }}</h3> <hr>
    <h5 class="text-justify">{{ $article->short_description }}</h5><hr>
    <div class="mt-5 ck-content"><hr>
        {!! $article->body !!}
    </div>
    <div>
        Категория: {{ $article->category->title }}<hr>
    </div> <br>
    <div>
        <a class="btn btn-danger" href="{{ route('frontend.post.index') }}"style="color: red" >Назад</a><hr>
    </div><br>
</x-layout>

@push('script')
    <script src="/assets/ckeditor5/ckeditor.js"></script>
@endpush

