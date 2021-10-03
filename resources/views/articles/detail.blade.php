<h1> {{ $article->title }} </h1>

<small>
    <a href=" {{ route('categories.show', $article->category) }} ">
        {{ $article->category->name }}
    </a>
</small>
<p>
    {{ $article->content }}
</p>
<a href="/articles"> Article Listesi </a> |
<a href="/articles/{{ $article->id }}/edit"> Article Duzenle </a>|
<form action="/articles/{{ $article->id }}" method="POST">
     @csrf
     @method('DELETE')
     <button type="submit"> Sil </button>
</form>
