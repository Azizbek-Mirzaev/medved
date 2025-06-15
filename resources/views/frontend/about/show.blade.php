<x-layout>
    <x-slot:heading>
        Show page
    </x-slot:heading>
<div >
        <img src="/storage/{{ $about->image }}" class="w-50" alt="">
    </div>
    <h3 class="text-center text-uppercase pt-3">{{ $about->title }}</h3>
    <h5 class="text-justify">{{ $about->short_description }}</h5>
    <div class="mt-5 ck-content">
        {!! $about->body !!}
    </div>

    <div>
        <a class="btn btn-danger" href="{{ route('admin.about.index') }}">Назад</a>
    </div><br>


</x-layout>

@push('script')
    <script src="/assets/ckeditor5/ckeditor.js"></script>
@endpush

