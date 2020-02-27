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
		<p>{{$tabungan->customer->nama}}</p>
		<p><b>Status Nasabah</b></p>
		<p>{{$tabungan->customer->status}}</p>
		<p><b>Jumlah Tabungan</b></p>
		<p>{{$tabungan->jumlah}}</p>
		<p><b>Tanggal Tabungan</b></p>
		<p>{{$tabungan->tanggal}}</p>
		<p><b>Ket Tabungan</b></p>
		<p>{{$tabungan->keterangan}}</p>
		<p><b>Admin Tabungan</b></p>
		<p>{{$tabungan->admin}}</p>
	</div>
</div>


@endsection