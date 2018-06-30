<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function getLoginView()
    {
    	return view('login.login');
    }

    public function doLogin(Request $request){

    	if(Auth::attempt([$request->input('username') == 'admin', $request->input('password') == 'admin'])){

    		dd($request);

    	} else {

    		return redirect('/')->with('errorMsg', 'User is not registered');
    	}
    }
}
