@extends ('layout3')
@section('header')

@endsection



<ul class="style1">
    @foreach ($articles as $article)

    <li class="first">
        <h3>{{ $article->title }}</h3>
        <p><a href="#">{{ $article->excerpt }}</a></p>

</li>
@endforeach
</ul>





