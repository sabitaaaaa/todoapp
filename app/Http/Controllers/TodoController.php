<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = todo::all();
        return view('index',compact('todos'));
    }

    public function create()
    {
        $todos = todo::all();
        return view('create',compact('todos'));
     }


    public function edit($id)
    {
         $todo = todo::find($id);
        return view('edit',compact('todo'));
    }

    public function store(Request $request)
    {
       $todo = new Todo();
       $todo->title = $request->Title;
       $todo->details = $request->Details;
       $todo->save();
       return redirect()->route('todo.index');
    }

    public function delete( $id)
    {
       $todo = Todo::find($id);
       $todo->delete();
       return redirect()->route('todo.index');
    }

    public function update(Request $request,$id){
        $todo = Todo::find($id);
        $todo->title=$request->Title;
        $todo->details=$request->Details;
        $todo->update();
        return redirect()->route('todo.index');
    }

}

