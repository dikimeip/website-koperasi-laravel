<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class LoginController extends Controller
{
    public function index()
    {
    	return view('LoginPage');
    }

    public function do_login(Request $request)
    {
    	//return $request->pilih ;
    	$uname = $request->email;
    	$password = $request->password;

    	if ($request->pilih == "1") {
    		$query = Admin::where(['email' => $uname ,'password' => $password ])->get();
            if (count($query) > 0 ) {
                return "Success" ;
            } else {
                return "Failed";
            }
    	} elseif ($request->pilih == "2") {
    		return "kastaf";
    	} else {
    		return "Ok";
    	}
    }
}
