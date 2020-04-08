<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index(Request $request){
    	return view("register");
    }

     public function register(Request $request){

     	$name=$request->name;
    	$email=$request->email;
    	$password=$request->password;

    	if(empty($name)||empty($email)||empty($password)){
    		return view("register",["message"=>"please, fill the fields "]);
    	}

    	$user=new User;
    	$user->name=$name;
    	$user->email=$email;
    	$user->password=$password;

    	$user->save();
    	
    	return view("register",["message"=>"¡user created!"]);
    }
}
