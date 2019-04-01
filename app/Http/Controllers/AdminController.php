<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class AdminController extends Controller
{
    //
    public function index() {
    	return view('admin.login');
    }
    public function home() {
    	return view('admin.dashboard');
    }
    public function login(Request $request) {
    	// $email=$request->email;
    	// $password=$request->password;
    	// $result=
    	$email=$request->email;
    	$password=md5($request->password);
    	$result=DB::table('admin')
    			->where('email',$email)
    			->where('password',$password)
    			->first();
    			// echo "<pre>";
    			// print_r($result);
    			// exit();
    	if($result) {
    		Session::put('id',$result->id);
    		Session::put('email',$result->email);
    		Session::put('name',$result->name);
    		return redirect('/dashboard')->with('Successfully Logged in ');
    	}
    	else {
    		Session::put('message','Invalid Username Or Password');
    		// echo "Failed To Logged In ";
    		return redirect('/login');
    	}
    	}
    	//dd($request->all());
    
}
