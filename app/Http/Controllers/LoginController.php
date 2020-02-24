<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\KepalaStaf;

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
                return redirect()->route('admin.index');
            } else {
                 return redirect()->back();
            }
    	} elseif ($request->pilih == "2") {
    		$query = KepalaStaf::where(['username' => $uname,'password' => $password])->get();
            if (count($query) > 0 ) {
                return redirect()->route('kepala.index');
            } else {
                 return redirect()->back();
            }
    	} else {
    		return "Ok";
    	}
    }
}
