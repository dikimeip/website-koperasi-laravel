@extends('admin.template')
@section('isi')
<h1 class="text-center">TAMBAH TABUNGAN</h1>
<br>
@if(Session::has('success'))
<div class="alert alert-success">
	<p>{{Session::get('success')}}</p>
</div>	
@endif
<hr>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label>Masukan Nama Customer</label>
				<select name="nama" class="form-control">
					@foreach($custumer as $cs)
					<option>{{$cs->nama}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Masukan Jumlah Tabungan</label>
				<input type="number" name="harga" class="form-control" value="{{@old('harga')}}" placeholder="Masukan Jumlah Tabungan">
				@error('harga') <span style="color: red">{{$message}}</span>@enderror
			</div>
			<div class="form-group">
				<label>Masukan Nama Admin Penangung Jawab</label>
				<input type="text" name="admin" class="form-control" value="{{@old('admin')}}" placeholder="Masukan Nama Admin">
				@error('admin') <span style="color: red">{{$message}}</span>@enderror
			</div>
			<div class="form-group">
				<label>Masukan Keterangan Nasabah</label>
				<textarea class="form-control" name="ket" style="height: 200px" placeholder="Masukan Keterangan">{{@old('ket')}}</textarea>
				@error('ket') <span style="color: red">{{$message}}</span>@enderror
			</div>
			<input type="submit" value="TAMBAH" class="btn btn-success btn-sm">
		</form>
	</div>
</div>


@endsection