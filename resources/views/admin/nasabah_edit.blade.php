
@extends('admin.template')
@section('isi')
<h1 class="text-center">EDIT NASABAH</h1>
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
				<label>Nama Nasabah</label>
				<input type="text" name="nama" class="form-control" value="{{@old('nama')}}">
				@error('nama') <span style="color: red">{{$message}}</span>@enderror
			</div>
			<div class="form-group">
				<label>Alamat Nasabah</label>
				<textarea class="form-control" name="alamat" style="height: 200px">{{@old('alamat')}}</textarea>
				@error('alamat') <span style="color: red">{{$message}}</span>@enderror
			</div>
			<div class="form-group">
				<label>NoHp Nasabah</label>
				<input type="number" name="no" class="form-control" value="{{@old('no')}}">
				@error('no') <span style="color: red">{{$message}}</span>@enderror
			</div>
			<div class="form-group">
				<label>Foto Nasabah</label>
				<input type="file" name="foto" class="form-control" >
			</div>
			<input type="submit" value="TAMBAH" class="btn btn-success btn-sm">
		</form>
	</div>
</div>


@endsection