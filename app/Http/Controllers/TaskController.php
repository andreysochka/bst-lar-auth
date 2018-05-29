<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    /**
   * Создание нового экземпляра контроллера.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index(){
      return view('tasks.index');
  }
  public function create(){
      return view('tasks.create');
  }
  public function store(){
      return "store";
  }
  public function destroy(){
      return 'destroy';
  }
}
