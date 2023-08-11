<form action="{{route('createPost')}}" method="post">
    @csrf
    <textarea id="myeditorinstance" name="content">Hello, World!</textarea>
    <button type="submit">enregistrer</button>
</form>
