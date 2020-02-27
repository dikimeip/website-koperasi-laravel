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
		<form action="{{route('admin.tabungan_do_tambah')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label>Masukan Nama Customer</label>
				<select name="nama" class="form-control">
					@foreach($custumer as $cs)
					<option value="{{$cs->id}}">{{$cs->nama}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Masukan Jumlah Tabungan</label>
				<input type="number" name="jumlah" class="form-control" value="{{@old('jumlah')}}" placeholder="Masukan Jumlah Tabungan">
				@error('jumlah') <span style="color: red">{{$message}}</span>@enderror
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
			<input type="submit" value="TAMBAH" class="btn btn-success btn-sm" onclick="return confirm('Silahkan Melakukan Pengecakan Sebelum Data ditambahkan')">
		</form>
	</div>
</div>


@endsection