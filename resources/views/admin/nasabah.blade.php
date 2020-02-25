@extends('admin.template')
@section('isi')
<h1 class="text-center">HALAMAN NASABAH</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('admin.nasabah_tambah')}}" class="btn btn-info btn-sm">TAMBAH NASABAH</a>
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
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>STATUS</th>
		<th>AKSI</th>
	</tr>
	@foreach($nasabah as $n=>$a)
	<tr>
		<th>{{$n+1}}</th>
		<th>{{$a->nama}}</th>
		<th>{{$a->alamat}}</th>
		<th>{{$a->status}}</th>
		<th>
			<a href="" class="btn btn-warning btn-sm">EDIT</a>
			<a href="{{route('admin.nasabah_tampil',$a->id)}}" class="btn btn-success btn-sm">SHOW</a>
		</th>
	</tr>
	@endforeach
</table>
@endsection