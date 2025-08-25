<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        try {
            $todos = Todo::all();
            return view("todo-list", [
                "todos" => $todos
            ]);
        } catch (\Exception $e) {
            return view("error-page", [
                "msg" => $e->getMessage()
            ]);
        }
    }

    public function create()
    {
        return view("create-todos");
    }

    public function store(TodoRequest $request)
    {
        try {
            Todo::create($request->all());
            return redirect()->route("todos")->with("success", "successfully added new record");
        } catch (\Exception $e) {
            return view("error-page", [
                "msg" => $e->getMessage()
            ]);
        }
    }

    public function show(int $id)
    {
        //
    }

    public function edit(int $id)
    {
        try {
            $todo = Todo::findOrFail($id);
            return view("edit-todos", [
                "todo" => $todo
            ]);
        } catch (\Exception $e) {
            return view("error-page", [
                "msg" => $e->getMessage()
            ]);
        }
    }

    public function update(TodoRequest $request, int $id)
    {
        try {
            $todo = Todo::findOrFail($id);
            $todo->update($request->all());

            return redirect()->route("todos")->with("success", "record upated successfully");
        } catch (\Exception $e) {
            return view("error-page", [
                "msg" => $e->getMessage()
            ]);
        }
    }

    public function destroy(int $id)
    {
        try {
            $todo = Todo::findOrFail($id);
            $todo->delete();

            return redirect()->route("todos");
        } catch (\Exception $e) {
            return view("error-page", [
                "msg" => $e->getMessage()
            ]);
        }
    }

    public function error()
    {
        return view("error-page");
    }
}
