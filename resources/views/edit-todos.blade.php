@extends("layout")

@section("content")

<div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 transition-all duration-300 hover:shadow-xl">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Edit Task</h2>
    <form id="todo-form" action="{{ route("upate_todo_put", $todo->id) }}" method="post" class="space-y-4 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        @csrf
        @method('PUT')
        <div class="col-span-1">
            <label for="todo-title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" value="{{ $todo->title }}" id="todo-title" placeholder="e.g., Complete project report" required
                name="title"   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
        </div>
        <div class="col-span-2 lg:col-span-1">
            <label for="todo-description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" id="todo-description" placeholder="e.g., Finalize Q3 findings and analysis"
                name="description" value="{{ $todo->description }}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
        </div>
        <div class="col-span-1">
            <label for="todo-category" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" id="todo-category" placeholder="e.g., Work"
                name="category" value="{{ $todo->category }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
        </div>
        <div class="col-span-1">
            <label for="todo-status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="todo-status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">


                @if($todo->status == "To-Do")
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                    <option value="To-Do">To-Do</option>
                @elseif($todo->status == "In Progress")
                    <option value="To-Do">To-Do</option>
                    <option value="Completed">Completed</option>
                    <option value="In Progress">In Progress</option>
                @elseif($todo->status == "Completed")
                    <option value="To-Do">To-Do</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                @endif

            </select>
        </div>
        <div class="col-span-full mt-4">
            <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 px-6 rounded-md shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                Update Todo
            </button>
        </div>
    </form>
</div>

@endsection