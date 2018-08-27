<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
class AuthController extends Controller
{
    public function checkAuth(Request $request){

        $credentials = [
            'email'=> $request->input('email'),
            'password'=> $request->input('password')
        ];

        if(!Auth::attempt($credentials)){
            return response('username and password does not match', 403);
        }

        return response(Auth::user(), 201);

    }

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    use RegistersUsers;

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        return User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt('password'),
        ]);
    }

}
