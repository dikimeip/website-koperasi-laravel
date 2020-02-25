@extends('admin.template')
@section('isi')
<h1 class="text-center">TAMBAH NASABAH</h1>
<br>
<hr>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Masukan Nama Nasabah</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Masukan Alamat Nasabah</label>
				<textarea class="form-control" name="alamat" style="height: 200px"></textarea>
			</div>
			<div class="form-group">
				<label>Masukan NoHp Nasabah</label>
				<input type="number" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Masukan Foto Nasabah</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<input type="submit" value="TAMBAH" class="btn btn-success btn-sm">
		</form>
	</div>
</div>


@endsection