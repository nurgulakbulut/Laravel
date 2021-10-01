<h1>{{ $category->name }}</h1>
<hr>
<a href=" {{ route('categories.edit', $category) }} "> Duzenle </a> |
<a href=" {{ route('categories.index') }} "> Kategori Listesine Geri Don </a> |
<form action=" {{ route('categories.destroy', $category) }} " method="POST">
    @csrf
    @method('DELETE')
    <button type="submit"> SIL </button>
</form>
 