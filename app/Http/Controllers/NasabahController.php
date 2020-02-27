<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests\NasabahRequest;
use Session;

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

    public function insert(NasabahRequest $request)
    {	
    	$gambar = $request->file('foto');
        $org = $gambar->getClientOriginalName();
        $path = "image";
        $gambar->move($path,$org);

        Customer::create([
        	'nama' => $request->nama,
        	'alamat' => $request->alamat,
        	'no_hp' => $request->no,
        	'foto' => $org,
        	'status' => "Pengajuan Nasabah"
        ]);

        Session::flash('success','Success Input Data');
        return redirect('admin.nasabah') ;
    }

    public function show($id)
    {
    	$nasabah = Customer::find($id);
    	return view('admin.nasabah_show',compact('nasabah'));
    }

    public function edit($id)
    {
        return view('admin.nasabah_edit') ;
    }
}
