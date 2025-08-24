@extends("layout")


@section('section')

<div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 transition-all duration-300 hover:shadow-xl">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Edit Task</h2>
    <form id="edit-todo-form" class="space-y-4 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="col-span-1">
            <label for="edit-todo-title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="edit-todo-title" value="Complete project report" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
        </div>
        <div class="col-span-2 lg:col-span-1">
            <label for="edit-todo-description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" id="edit-todo-description" value="Finalize Q3 findings and analysis"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
        </div>
        <div class="col-span-1">
            <label for="edit-todo-category" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" id="edit-todo-category" value="Work"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
        </div>
        <div class="col-span-1">
            <label for="edit-todo-status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="edit-todo-status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                <option value="To-Do">To-Do</option>
                <option value="In Progress" selected>In Progress</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="col-span-full mt-4">
            <button type="submit"
                    class="w-full bg-green-600 text-white font-semibold py-3 px-6 rounded-md shadow-md hover:bg-green-700 focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200">
                Update Todo
            </button>
        </div>
    </form>
</div>

@endsection