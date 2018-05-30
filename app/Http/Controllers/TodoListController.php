<?php

namespace App\Http\Controllers;
use Storage;

use DB;
use Illuminate\Http\Request;
use App\TodoList;


class TodoListController extends Controller
{
    //
    public function returnAll(){
        $todos = TodoList::all();

        return $todos;

    }

    public function create(){


        $this->validate(request(),[
          'item' => 'required',
          'person_id' => 'required'
        ]);

        TodoList::create(request(['item','person_id']));
    }

    public function show($id){
        $todos = TodoList::where('person_id', '=', $id)->pluck('item');
        return $todos;
    }

    public function json(){
        $json = Storage::disk('local')->get('info.json');
        $json = json_decode($json, true);

        return $json;
    }
}
