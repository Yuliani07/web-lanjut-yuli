<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function formLogin(){
        return view(".form-login");
    }

    public function prosesLogin(Request $request)
    {
        session_start();
        $name = $request->get("name");
        $password = $request->get("password");
        $user = User::where('name', $name)->where("password", $password)->first();
        if ($user != null) {
            Auth::login($user);
            if($user->level == "Admin"){
                return redirect(route("home"));
            }
            else{
                return redirect(route("home_user"));
            }
        } else {
            return back();
        }
    }
    

    public function logout(){
        Auth::logout();
        return redirect(route("login"));
    }

}

