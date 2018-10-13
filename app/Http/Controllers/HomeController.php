<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index(){
    	$current=app('Illuminate\Contracts\Auth\Guard')->user();
    	$mail= $current->email;

    	if(\Auth::user()->role=='1'){
    		$role='1';
    		$post=Post::all();
    	}
    	else{
    		$role='0';
    		$post=Post::where('email',$mail)->get();
    	}
   
    	return view('home',compact('role','post'));
    }
}
