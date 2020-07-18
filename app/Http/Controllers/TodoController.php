<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        //return "Todo";
        $todos = Todo::all();
        return $todos;
    }
    public function show($id)
    {
        $todos = Todo::find($id);
        return $todos;
    }

    public function delete($id)
    {
        $todos = Todo::find($id);
        $todos->delete();
        return "ลบ";
    }





}
