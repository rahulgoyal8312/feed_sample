<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct(){
  		$this->middleware('guest',['except'=>['destroy']]);   //if you are logged in you can't reach below pages except destroy
    }
	public function index(){
		return view('login');
	}

	public function login(){
		// echo "Hello";
		$mail=request('email');
		$role=User::select('role')->where('email',$mail)->get();

		if(!\Auth::attempt(request(['email','password']))){
		    return back()->withErrors([
		   		'message' =>'Please check your credentials and try again.'
		   	]);
		}

		session()->flash('message','Logged in, Welcome!');
		return redirect('/home');
	}

	public function change(Request $request){

		$this->validate($request,[
			'old_password' => 'required',
			'password' => 'required|confirmed|min:4'
		]);

		if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
			// The passwords matches dd(Auth::user()->password);
			session()->flash('message','Old Password incorrect');
			return back();
		}

		if(strcmp($request->get('old_password'), $request->get('password')) == 0){
			//Current password and new password are same
			session()->flash('message','New Password cannot be same as your current password.');
			return back();
		}
		
		//Change Password
		$user = Auth::user();
		$user->password = bcrypt($request->get('password'));
		$user->save();
		//msg will be displayed right after password is changed!!
		session()->flash('message','Password Changed!!');
		//mail to the server
		// \Mail::to($user)->send(new Reset);

		return redirect('/dashboard')->with("success","Password changed successfully !");

	}

	public function destroy(){

		auth()->logout();
		return redirect('/');
	}

}
