   @foreach($categories as $category)
      <li>
          <a href="{{ route('categories.show', $category->id) }}">
            {{ $category->name }}
          </a>
          <ul>
          @foreach($category->articles as $article)
              <li>
                  <a href="/articles/{{ $article->id }} ">
                        {{$article->title}}
                  </a>
              </li>
          @endforeach
          </ul>
      </li>
   @endforeach
<hr>
<a href="{{ route('categories.create') }}"> Yeni Kategori Ekle </a>