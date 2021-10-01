<form action="{{ route('categories.store') }}" method="POST">
  @csrf
  Kategori Adi:<br>
  <input type="text" name="name" value=" {{ old('name') }}">
  @error('name')
    <br>{{ $message }}
  @enderror
  <br>
  <button type="submit"> Ekle </button>
</form>
<hr>
<a href=" {{ route('categories.index') }} "> Geri Don </a>
