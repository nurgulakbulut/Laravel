<form action="/articles" method="POST">
    @csrf

    Kategori<br>
    <select name="category_id">
        @foreach($categories as $category)
         <option value=" {{ $category->id }}">
             {{ $category->name }}
         </option>
        @endforeach
    </select>
    <hr>
    
    Baslik<br>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title')
         <br>{{ $message }}
    @enderror<hr>
    Icerik<br>
    <textarea name="content"> {{ old('content') }} </textarea>
    @error('content')
          <br>{{ $message }}
    @enderror<br>
    
    <button type="submit"> Ekle </button>  
</form>
<a href="/articles"> Iptal </a>