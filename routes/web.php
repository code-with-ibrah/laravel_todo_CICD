<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;


Route::get("/", [TodosController::class, "index"])->name("todos");

Route::get("/edit/{id}", [TodosController::class, "edit"])->name("edit_todo");

Route::get("/create", [TodosController::class, "create"])->name("create_todos");

Route::post("/create", [TodosController::class, "store"])->name("store_todo_post");

Route::put("/update", [TodosController::class, "update"])->name("upate_todo_put");
