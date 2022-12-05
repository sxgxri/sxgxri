<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate (Request $request)
    {
        // $err  =  echo "<script>alert('Неверные данные')</script>";

        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('user', ['name' => $credentials['name']]));
        }
         else{
            //err();
            return  redirect(route('login'));
           
         } 
           
         
    }
   

}
