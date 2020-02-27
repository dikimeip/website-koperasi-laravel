<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\NasabahRequest;
use Session;

class NasabahController extends Controller
{
    public function index()
    {
    	$nasabah = Customers::all();
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

        Customers::create([
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
    	$nasabah = Customers::find($id);
    	return view('admin.nasabah_show',compact('nasabah'));
    }

    public function edit($id)
    {
        $nasabah = Customers::find($id);
        return view('admin.nasabah_edit',compact('nasabah')) ;
    }

    public function update(NasabahRequest $request,$id)
    {
        $gambar = $request->file('foto');
        if ($gambar == null) {
           $data = Customers::find($id);
           $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no,
           ]);

            Session::flash('success','Success Input Data');
            return redirect()->route('admin.nasabah');
        } else {
            $data = Customers::find($id);
            $gambar = $request->file('foto');
            $org = $gambar->getClientOriginalName();
            $path = "image";
            $gambar->move($path,$org);
            $data->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no,
                'foto' => $org,
            ]);

            Session::flash('success','Success Input Data');
            return redirect()->route('admin.nasabah');
        }
    }
}
