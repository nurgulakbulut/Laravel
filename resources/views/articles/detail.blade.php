<h1> {{ $article->title }} </h1>

<small>
    <a href=" {{ route('categories.show', $article->category) }} ">
        {{ $article->category->name }}
    </a>
</small>
<p>
    {{ $article->content }}
</p>
<a href="/articles"> Article Listesi </a>