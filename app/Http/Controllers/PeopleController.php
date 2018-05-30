<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{
    //
    public function show(){
        $person = People::select('name')->pluck('name')->toarray();

        return $person;
    }

    public function create(){
        /*$this->validate(request(),[
          'name' => 'required'
        ]);

        People::create(request(['name']));*/

        $data = request('name');
        $person = People::create($data);

        return 'ok';
    }

    public function individual(){
        $person = People::find(1)->get('item');
        return $person;
    }
}
