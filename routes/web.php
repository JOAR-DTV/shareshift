<?php

use App\User;
use Illuminate\Http\Request;


Route::post('/userregister', 'UsersController@store');

Route::post('/storeregister', 'UsersController@store');

Route::post('/staffregister', 'UsersController@store');

Route::get('/', 'UsersController@index');

Route::delete('/user/{user}', function (User $user) {
});

