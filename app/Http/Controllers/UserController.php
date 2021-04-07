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
            $inputs["active"] = 0;
        } else {
            $inputs["active"] = 1;
        }

        User::create($inputs);

        return redirect()->route('home');
    }

    public function make_login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials))  {
            $user = User::where('email', $request["email"])->first();
            Auth::login($user);
            return redirect()->route('home');
        }  else {
            return redirect()->back();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('home');
    }
}
