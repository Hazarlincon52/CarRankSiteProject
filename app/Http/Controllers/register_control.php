<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class register_control extends Controller
{
    public function index(){
        $auth = Auth::check();
        return view('/User/register',['auth'=>$auth]);
    }

    public function insert(Request $request){
        

        $this->validate($request,
        [
        'username'=>'required|unique:App\users,username',
        'email'=>'required|email|unique:App\users,email',
        'password' => 'required|min:5',
        ],
        [
        'username.required' => 'Name must not empty!',
        'username.unique' => 'Name already taken!',
        'email.required' => 'Email must not empty!',
        'email.email' => 'Email must be an email form!',
        'email.unique' => 'Email already taken!',
        'password.required' => 'Password must not empty!',
        'password.min' => 'Password must be at least 5 character!',
        ]
        );  
            $pass = request('password');
            $hash = Hash::make($pass);

            $insert = new \App\users();

            $insert->username = request('username');
            $insert->email = request('email');
            $insert->password = $hash;
            $insert->role = 'user';
    
            $insert->save();
            return redirect('/');
        

    }
}
