<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name" required>
    <label>tag</label>
    <input type="text" name="tag" required>
    <input type="submit" name="submit">
</form>
