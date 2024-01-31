<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

       $email = $request->input('email');
        $password = $request->input('password');

                    // Find the user by email
                $user = User::where('email', $email)->first();

                if ($user) {
                    // Check if the provided password matches the stored password
                    if ($password === $user->password) {
                        // Password is correct
                        Auth::login($user);
                        return redirect('/course');
                    } else {
                        // Password is incorrect
                        return back()->withErrors(['Invalid Credentials!']);
                    }
                } else {
                    // User with the provided email not found
                    return back()->withErrors(['Invalid Credentials!']);
                }


    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
