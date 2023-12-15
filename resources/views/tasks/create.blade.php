<h1>Create Task</h1>

<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="activity">Activity:</label>
    <textarea name="activity" required></textarea>
    <br>
    <label for="category_id">Category:</label>
    <select name="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Create Task</button>
</form>