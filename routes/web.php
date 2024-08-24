<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [TodoController::class, 'index']);

Route::post('/todos/completed/{todo}', function (Request $request, Todo $todo) {
    $todo->update(['completed' => $request->input('completed') === 'on']);
    return redirect('/todos');
});
