<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginView(){
        return view('Auth.login');
    }
    public function AuthUser(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->action([UserController::class, 'registerView']);
        }
    }
    public function registerView(){
        return view('Auth.register');
    }
    public function registerUser(Request $request){
        User::create([
            'name' => $request->nameUser,
            'email' => $request->emailUser,
            'password' =>Hash::make($request->pwdUser),

        ]);
        return redirect()->action([UserController::class, 'loginView']);
    }
}
