<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request){
        // return request()->all();
        $validatedData = $request->validate([
            // 'name'=>require('name'),
            // 'username'=>require('username'),
            // 'email'=>require('email'),
            'name'=>'required|max:255',
            'username'=>['required','min:3','max:255','unique:users'],
            'email'=>['required','email:dns','unique:users'],
            'password'=>'required|min:5|max:255',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password']=Hash::make($validatedData['password']);   

        User::create($validatedData);
        // $request->session()->flash('success', 'Registration Berhasil');
        return Redirect('login')->with('success','Register Berhasil');
    }
}
