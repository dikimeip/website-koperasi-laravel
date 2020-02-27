<?php

namespace App\Http\Controllers;

use App\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
    	$tabungan = Tabungan::all();
    	return view('admin.tabungan',compact('tabungan')) ;
    }
}
