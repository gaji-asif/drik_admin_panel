<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function login()
    {
        return view('login');
    }

    public function registration(Request $request)
    {
        
        // request()->validate([
        //     'email' => 'required|email|unique:users'
    
        // ]);

        $name = $request["first_name"]. " ".$request["last_name"];
        $userType = $request["user_type"];
        $email = $request["email"];
        $company = $request["company_name"];
        $job = $request["job_title"];
        $password = Hash::make($request["password"]);

        $inputs = [
            'name' => $name,
            'user_type' => $userType,
            'email' => $email,
            'company_name' => $company,
            'job_title' => $job,
            'password' => $password
        ];

        if($userType === "1") {
            $inputs["active_status"] = 0;
        } else {
            $inputs["active_status"] = 1;
        }

        User::create($inputs);

        return redirect()->route('user-login');
    }

    public function make_login(Request $request)
    {
        $user = User::where('email', $request["email"])->first();
        if($user && Hash::check($request["password"], $user->password) && $user->active_status === 1){
            Auth::login($user);
            return redirect()->route('your-dashboard');
        } else {
            return redirect()->back();
        }
    }

    public function logout() {
        // Auth::logout();
        // return redirect('home');
        return redirect('/')->with(Auth::logout());
    }
}
