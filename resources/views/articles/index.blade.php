



@foreach ($articles as $article)

<div class="content">
    <div class="title">
        <h2>
            <a href="/articles/{{ $article->id }}">
              {{ $article->title }}
           </a>
       </h2>
    </div>


  { !! $article->excerpt !!}
</div>
@endforeach
