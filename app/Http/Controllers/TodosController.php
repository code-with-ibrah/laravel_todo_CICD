<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view("todo-list");
    }

    public function create()
    {
        return view("create-todos");
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view("edit-todos");
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
