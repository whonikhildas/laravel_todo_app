<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('edit/{id}', function ($id){
    $todo = Todo::find($id);
    return view('edit', ['todo' => $todo]);
});



Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'create']);
Route::patch('/{id}/update', [TodoController::class, 'update']);
Route::get('delete/{id}', [TodoController::class, 'destroy']);
