<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4 text-white flex justify-between g-2">
    <a href="{{ route("todos") }}"><h1 class="text-xl font-bold">Wapiwag Todo</h1></a>

    <div class="nav-links">
        <a href="{{ route("todos") }}">Todo List</a>
        <a href="{{ route("create_todos") }}">Add Todo</a>
    </div>
</nav>

<!-- Content Section -->
<main class="container mx-auto p-4 py-10">
    @yield('content')
</main>




<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
