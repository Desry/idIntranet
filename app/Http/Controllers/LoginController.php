<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
/*use Illuminate\Support\Facades\Auth;
*/

class LoginController extends Controller
{
    public function login(Request $request) {
            
            if(Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {


                //find user
                $user = User::where('email', $request->email)->first();

                if($user->is_admin()) {
                    return redirect()->route('dashboard');
                }

                return redirect()->route('welcome');
            }

            return redirect()->back();
    }

    /*public function authenticate(Request $request) {
        $credentials = $request->only('email', 'passwowrd');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

    }*/
}

