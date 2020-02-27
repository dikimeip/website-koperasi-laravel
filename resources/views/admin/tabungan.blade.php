@extends('admin.template')
@section('isi')
<h1 class="text-center">HALAMAN TABUNGAN</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('admin.tabungan_tambah')}}" class="btn btn-info btn-sm">TAMBAH TABUNGAN</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Nasabah">
			</div>
		</form>
	</div>
</div>
<hr>
@if(Session::has('success'))
<div class="alert alert-success">
	<p>{{Session::get('success')}}</p>
</div>	
@endif
<table class="table table-hover" style="background-color: white">
	<tr>
		<th>NO</th>
		<th>NAMA_CUST</th>
		<th>JUMLAH</th>
		<th>TANGGAL</th>
		<th>AKSI</th>
	</tr>
	@foreach($tabungan as $t=>$a)
	<tr>
		<th>{{$t+1}}</th>
		<th>{{$a->customer->nama}}</th>
		<th>{{$a->jumlah}}</th>
		<th>{{$a->tanggal}}</th>
		<th>
			<a href="{{route('admin.tabungan_tampil',$a->id)}}" class="btn btn-info btn-sm">DETAIL</a>
		</th>
	</tr>
	@endforeach
</table>
@endsection