<?php

namespace App\Http\Controllers;

use App\Tabungan;
use App\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\TabunganRequest;

class TabunganController extends Controller
{
    public function index()
    {
    	$tabungan = Tabungan::all();
    	return view('admin.tabungan',compact('tabungan')) ;
    }

    public function create()
    {
    	$custumer = Customers::all();
    	return view('admin.tabungan_add',compact('custumer')) ;
    }
}
