@foreach ($articles as $article)
    <h5 ><a href="/articles/{{$article->id_artikel}}">{{$article->judul}}</a></h5>
@endforeach