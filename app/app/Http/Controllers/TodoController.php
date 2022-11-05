<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function index(){
    $todos = Todo::all();
    return view('welcome',[
      'todos' => $todos
    ]);
  }

  public function store(){
    $attributes = request([
      'title' => 'title',
      'description', 'description',
      // 'is_done' => 'default(false)'
    ]);

    Todo::create($attributes);
    
    return redirect('/');
  }

  // public function update(Todo $todo){
  //   $todo -> update([
  //     'is_done' => true
  //   ]);
  // }

  public function destroy(Todo $todo){
    $todo -> delete();

    return redirect('/');
  }
}
