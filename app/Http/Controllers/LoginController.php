<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
class LoginController extends Controller
{
    public function getLoginView()
    {
    	return view('login.login');
    }

    public function doLogin(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');
        
        $checkLogin = DB::table('users')->where(['username'=>$username, 'password'=> $password])->get();

        if(count($checkLogin) > 0){
            return redirect(route('admin.index'))->with('success', 'Welcome! Log in successful!');
        }else{
            return back()->with('warning', 'Invalid data passed!');
        }
    }

    // public function userLogout(){
    //     Auth::logout();
    //     return redirect('/');
    // }
}
