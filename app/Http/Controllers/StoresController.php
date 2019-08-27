<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UsersController extends Controller
{
    public function index(){
    return view('storeregister');
    }
    
    public function store(Request $request)
    {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'store_name' => 'required|min:1|max:255',
        'industry' => 'required|min:1|max:255',
        'division' => 'required|min:1|max:20',
        'phone_number' => 'required|min:2|max:255',
        'adress' => 'required|min:1|max:255',
        'industry' => 'required|min:1|max:255',
        'division' => 'required|min:1|max:20',
        'phone_number' => 'required|min:2|max:255',
        'wage' => 'required|min:2|max:255',
        'transpotation_included' => 'required|min:2|max:255',
        'overtime' => 'required|min:2|max:255',
        'daily_installment' => 'required|min:2|max:255',
        'outfits' => 'required|min:2|max:255',
        'remarks' => 'required|min:2|max:255',
        'comment' => 'required|min:2|max:255',
        'pattern' => 'required|min:2|max:255',
        'option' => 'required|min:2|max:255',
        'shift_time' => 'required|min:2|max:255',
        'zone' => 'required|min:2|max:255',
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
