

<h1>Edit Task</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="post">
    @csrf
    @method('put')
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $task->title }}" required>
    <br>
    <label for="activity">Activity:</label>
    <textarea name="activity" required>{{ $task->activity }}</textarea>
    <br>
    <label for="category_id">Category:</label>
    <select name="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $task->category_id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <br>
    <button type="submit">Update Task</button>
</form>