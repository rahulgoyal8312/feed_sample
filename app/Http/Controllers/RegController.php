<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegController extends Controller
{
    public function index(){
    	return view('register');
    }

    public function store(){
	    $this->validate(request(),[
	    'email'=> 'required|email',
	    'name'=>'required',
	    'password'=>'required',
	    'role'=>'required'
	  	]);
	  	$user= new User;
	  	$user->email=request('email');
	  	$user->password=bcrypt(request('password'));
	  	$user->name=request('name');
	  	$user->role=request('role');
	  	$user->save();

	  	return redirect('/');
    }
}
