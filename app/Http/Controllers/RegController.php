<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegController extends Controller
{
    public function Reg(Request $req)
    {
        $validField = $req ->validate([
            'name' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|unique:users'
        ]);

        $validField['password'] = Hash::make($validField['password']);
        $user = User::create($validField);

        if($user)
        {
            Auth::login($user);
           
          // return $validField['name'];
         return redirect()->route('user',['name'=>$validField['name']]);


           
        }
        else return redirect(route('reg'));
    }
}
