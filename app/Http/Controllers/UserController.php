<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:users,email|email:rfc,dns',
            'password'=>'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            return redirect()->route('login');
        }
    }


    public function login(Request $request){
        $cred = $request->validate([
            'email'=>'required|email:rfc,dns',
            'password'=> 'required'
        ]);

        //if(Auth::attempt(['email' => $email, 'password' => $password]))
        if(Auth::attempt($cred)){
            return redirect()->route('dashboard');
        }
    }


    public function dashboard(){
        return view('blog');
    }


    public function userposts(){
        return view('posts');
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

}
