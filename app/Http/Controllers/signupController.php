<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
          /*  'password_confirmation' => 'required|string|same:password|min:8',*/

        ]);

        if($request['password'] == $request['password_confirmation']) {
            Auth::login($user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]));
            //return redirect('/');
        }
    }

    public function index(Request $request)
    {

        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return response()->json(Auth::user(),200);
        }
        throw ValidationException::withMessages([
            'email'=>['the provides credentials are incorrect']
        ]);

    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }


}
