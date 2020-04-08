<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    public function index(Request $request){

    	$session=$request->session();

    	if($session->has("id")){

    		$user=User::where("id",$session->get("id"))->first();

    		return view("index",["user"=>$user]);
    	}else{
    		return view("index");
    	}
    }

    public function logout(Request $request){

    	$session=$request->session();
		$session->forget("id");
    	
    	return view("index",["message"=>"Session closed"]);
    }
}
