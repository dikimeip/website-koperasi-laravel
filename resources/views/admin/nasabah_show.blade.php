@extends('admin.template')
@section('isi')
<h1 class="text-center">DETAIL NASABAH</h1>
<br>
@if(Session::has('success'))
<div class="alert alert-success">
	<p>{{Session::get('success')}}</p>
</div>	
@endif
<hr>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="background-color: white">
		<p><b>Nama Nasabah</b></p>
		<p>{{$nasabah->nama}}</p>
		<p><b>Alamat Nasabah</b></p>
		<p>{{$nasabah->alamat}}</p>
		<p><b>No Headpone Nasabah</b></p>
		<p>{{$nasabah->no_hp}}</p>
		<p><b>Status Nasabah</b></p>
		<p>{{$nasabah->status}}</p>
		<p><b>Foto Nasabah</b></p>
		<p><img src="{{asset('image/'.$nasabah->foto)}}" style="width: 200px"></p>
	</div>
</div>


@endsection