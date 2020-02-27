@extends('admin.template')
@section('isi')
<h1 class="text-center">HALAMAN NASABAH</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('admin.nasabah_tambah')}}" class="btn btn-info btn-sm">TAMBAH TABUNGAN</a>
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
			<a href="" class="btn btn-info btn-sm">DETAIL</a>
			<a href="" class="btn btn-warning btn-sm">HAPUS</a>
		</th>
	</tr>
	@endforeach
</table>
@endsection