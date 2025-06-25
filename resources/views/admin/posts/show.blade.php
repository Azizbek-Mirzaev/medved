@extends('admin.parts.layout')
@section('title', 'Пост')
@section('content')


    <div >
        <img src="/storage/{{ $post->image }}" class="w-50" alt="">
    </div>
    <h3 class="text-center text-uppercase pt-3">{{ $post->title }}</h3>
    <h5 class="text-justify">{{ $post->short_description }}</h5>
    <div class="mt-5 ck-content">
        {!! $post->body !!}
    </div>

    <div>
        <a class="btn btn-danger" href="{{ route('admin.posts.index') }}">Назад</a>
    </div><br>
@endsection

@push('script')
    <script src="/assets/ckeditor5/ckeditor.js"></script>
    <script async charset="utf-8" src="//cdn.embedly.com/widgets/platform.js"></script>
    <script>
        document.querySelectorAll( 'oembed[url]' ).forEach( element => {
            // Create the <a href="..." class="embedly-card"></a> element that Embedly uses
            // to discover the media.
            const anchor = document.createElement( 'a' );

            anchor.setAttribute( 'href', element.getAttribute( 'url' ) );
            anchor.className = 'embedly-card';

            element.appendChild( anchor );
        } );
</script>
@endpush

