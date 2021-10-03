<form action="/articles/{{$article->id}}" method="POST">
    @csrf
    @method('PUT')

    Kategori:<br>
    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{ old('id') ? old('id') : $category->id }} ">
             {{ $category->name }}
        </option>
        @endforeach
    </select><hr>

    Baslik:<br>
    <input type="text" name="title" value="{{ old('title') ? old('title') : $article->title }}">
    <br>@error('title')
         <br>{{ $message }}
    @enderror<hr>

    Icerik:<br>
    <textarea name="content"> {{ old('content') ? old('content') : $article->content }} </textarea>
    <br>@error('title')
         <br>{{ $message }}
    @enderror<hr>

    <button type="submit"> Guncelle </button>
</form>
<hr>
<a href="/articles"> Article Listesine Don </a>