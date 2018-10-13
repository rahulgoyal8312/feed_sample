<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
    	return view('create');
    }

    public function store(){
    	$current=app('Illuminate\Contracts\Auth\Guard')->user();
    	$mail= $current->email;
	    $this->validate(request(),[
	    'title'=> 'required|min:5',
	    'body'=>'required'
	  	]);
	  
		// Post::create(request(['title','body','email'=>$mail ]));
		$post=new Post;
		$post->title=request('title');
	  	$post->body=request('body');
	  	$post->email=$mail;
	  	$post->save();
		return redirect('/home');
    }
}
