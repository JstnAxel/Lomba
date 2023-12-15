<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <h1>To-Do List</h1>
                
                <ul>
                    @foreach($tasks as $task)
                        <li>
                            {{ $task->title }} - {{ $task->activity }} - {{ $task->category->name }}
                            <form action="{{ route('tasks.edit', $task->id) }}" method="get" style="display: inline;">
                                @csrf
                                <button type="submit">Edit</button>
                            </form>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
                
                <a href="{{ route('tasks.create') }}">Add Task</a>
            </div>
        </div>
    </div>
</x-app-layout>
