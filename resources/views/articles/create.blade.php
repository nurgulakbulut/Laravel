<form action="/articles" method="POST">
    @csrf

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