@extends('layout')

@section('content')

    <div class="max-w-7xl mx-auto space-y-8">
        <!-- Header -->
        <header class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight">Professional To-Do List</h1>
            <p class="mt-2 text-lg text-gray-500">Organize your tasks efficiently.</p>
        </header>

        <!-- To-Do List Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
            <div class="p-6 sm:p-8">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Your Tasks</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="$todo.list" class="bg-white divide-y divide-gray-200">
                        @if (count($todos))
                            @foreach ($todos as $todo)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $todo->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $todo->description }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $todo->category }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusColorClass}">
                                            {{ $todo->status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex">
                                        <!-- Edit and Delete buttons -->
                                        <form action="{{ route('edit_todo', $todo->id) }}">
                                            @csrf
                                            <button type="submit" class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                                        </form>

                                        <form onsubmit="return confirm('Are you sure ?')" action="{{ route('delete_todo_delete', $todo->id) }}">
                                            @csrf                                       
                                            <button type="submit" class="delete-btn text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h2>No Todo Records</h2>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div id="confirmation-modal"
            class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white rounded-lg shadow-xl p-8 max-w-sm mx-auto">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Confirm Deletion</h3>
                <p class="text-gray-600 mb-6">Are you sure you want to delete this task?</p>
                <div class="flex justify-end space-x-4">
                    <button id="confirm-no"
                        class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 transition-colors">
                        No
                    </button>
                    <button id="confirm-yes"
                        class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 transition-colors">
                        Yes
                    </button>
                </div>
            </div>
        </div>

    </div>

@endsection
