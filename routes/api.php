<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
return $request->user();
});

Route::get('/person', 'PeopleController@show');

Route::post('/person','PeopleController@create');

Route::get('/person/{id}', 'PeopleController@show');

Route::get('/todo', 'TodoListController@returnAll');

Route::post('/todo', 'TodoListController@create');

Route::get('/todo/{task}', 'TodoListController@show');

Route::get('/json', 'TodoListController@json');
