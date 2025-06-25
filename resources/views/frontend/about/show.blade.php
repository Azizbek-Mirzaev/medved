<x-layout>
    <x-slot:headerSlot>
        <script src="/assets/ckeditor5/ckeditor.js"></script>   <script async charset="utf-8" src="//cdn.embedly.com/widgets/platform.js"></script>
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
    </x-slot:headerSlot>
    <x-slot:heading>
        Show page
    </x-slot:heading>
    <div>
        <img src="/storage/{{ $about->image }}" class="w-50" alt="">

    </div>
    <h3 class="text-center text-uppercase pt-3">{{ $about->title }}</h3>
    <h5 class="text-justify">{{ $about->short_description }}</h5>
    <div class="mt-5 ck-content">
        {!! $about->body !!}
    </div>

    <div>
        <a class="btn btn-danger" href="{{ route('frontend.about.index') }}"style="color: red">Назад</a>
    </div><br>


</x-layout>
