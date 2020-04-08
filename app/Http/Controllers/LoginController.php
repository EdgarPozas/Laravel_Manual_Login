<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->session()->has("id"))
            return redirect("/");

    	return view("login");
    }

    public function login(Request $request){
        if($request->session()->has("id"))
            return redirect("/");

    	$email=$request->email;
    	$password=$request->password;

    	if(empty($email)||empty($password)){
    		return view("login",["message"=>"please, fill the fields"]);
    	}

    	$user=User::where("email",$email)->where("password",$password);

    	if($user->count()==0){
    		return view("login",["message"=>"¡login failed! try again"]);
    	}else{
            $request->session();
            $request->session()->put("id",$user->pluck("id"));
    		return redirect("/");
    	}
    }
}
