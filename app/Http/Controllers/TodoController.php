<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::latest()->simplepaginate(9);
        return view('index', [
            'todo' => $todo
        ]);
    }

    public function create()
    {
        Todo::create([
           'title' => request('title'),
           'detail' => request('detail')
        ]);
        return redirect('/');
    }

    public function update($id){
        $todo = Todo::find($id);

        $todo->update([
            'title' => request('title'),
            'detail' => request('detail'),
        ]);
        return redirect('/', );

    }


    public function destroy($id){

        $todo = Todo::find($id)->delete();
        return redirect('/');

    }

}
