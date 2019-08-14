<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UsersController extends Controller
{
    public function index(){
    return view('userregister');
    }
    
    public function store(Request $request)
    {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'name' => 'required|min:1|max:255',
        'store_name' => 'required|min:1|max:255',
        'sex' => 'required|min:1|max:20',
        'nationality' => 'required|min:2|max:255',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    
    // Eloquent モデル
    $users = new User;
    $users->name = $request->name;
    $users->store_name = $request->store_name;
    $users->sex = $request->sex;
    $users->nationality = $request->nationality;
    $users->save(); 
    return view("js");
    }
}
