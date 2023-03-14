<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $formData= request()->validate([
            'name'=>'required|max:255|min:4',
            'username'=>['required','max:255','min:4',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:8',
        ]);
        $user= User::create($formData);
        auth()->login($user);
        return redirect('/')->with('success','Welcome, Dear '.$user->username);
    }
    public function login()
    {
        return view('auth.login');
    }
    public function post_login()
    {
        $post_data= request()->validate([
            'email'=>['required','max:255','email',Rule::exists('users','email')],
            'password'=>"required|min:8",
        ]);
        // dd($post_data);
        if (auth()->attempt($post_data)) {
            if(auth()->user()->is_admin){
                return redirect('/admin/blogs');
            }else{
                return redirect('/')->with("success",'Welcome back');
            }
        }else{
            return back()->withErrors([
                "email"=>'Authentication Failed'
            ]);
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success','GoodBye');
    }
}
