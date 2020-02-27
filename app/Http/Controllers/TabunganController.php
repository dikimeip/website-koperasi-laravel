<?php

namespace App\Http\Controllers;

use App\Tabungan;
use App\Customers;
use Illuminate\Http\Request;
use Session;
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

    public function insert(TabunganRequest $request)
    {
    	Tabungan::create([
    		'customer_id' => $request->nama,
    		'jumlah' => $request->jumlah,
    		'tanggal' => date('Y-m-d'),
    		'keterangan' => $request->ket,
    		'admin' => $request->admin,
    	]);

    	Session::flash('success','Input Data Tabungan Success');
    	return redirect()->route('admin.tabungan') ;
    }
}
