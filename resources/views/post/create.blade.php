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
                    {{ __("Information") }}
                </div>
?                    
                <form action="/post" method="POST">
                    @csrf
                <input type="Text" placeholder="Judul" class="input input-bordered input-primary w-full max-w-xs" name="judul"/> <br> <br>
                <input type="text" placeholder="Kegiatan" class="input input-bordered input-accent w-full max-w-xs" name="kegiatan"/><br> <br>
                    @foreach ($categories as $category )
                        <th>{{ $category->name }}</th>
                    @endforeach
                <button class="btn btn-outline btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
