<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class NasabahController extends Controller
{
    public function index()
    {
    	$nasabah = Customer::all();
    	return view('admin.nasabah',compact('nasabah')) ;
    }

    public function create()
    {
    	return view('admin.nasabah_add'); 
    }
}
