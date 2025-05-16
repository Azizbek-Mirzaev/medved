@extends("admin.parts.layout")
@section("title",'Hello page')
@section("content")

<body> 
Hello world <br>
 
<a class="btn-btn-danger" href="{{route('logout')}}">Выход</a>
</body>

@endsection