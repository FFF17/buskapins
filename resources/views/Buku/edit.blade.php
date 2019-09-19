@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
	<div class="container">
	<h2>Edit <u><b>{{ $buku->Judul_buku }}</b></u></h2>
<div class="row">
<form action="{{ url('buku/edit') }}" method="post" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<div class="row">
	<input type="hidden" name="id" value="{{ $buku->id }}">


	<div class="input-field col s12 m6">
		<label for="first_name">Judul Buku</label>
		<input type="text" name="Judul_buku" value="{{ $buku->Judul_buku }}">
		@if($errors->first('Judul_buku'))
	{{$errors->first('Judul_buku')}}
	@endif
	</div>
	</div>

	<div class="row">
	<div class="input-field col s12 m6">
		<label for="first_name">Kategori</label>
		<input type="text" name="Kategori" value="{{ $buku->Kategori }}">
		@if($errors->first('Kategori'))
	{{$errors->first('Kategori')}}
	@endif
	</div>

	<div class="input-field col s12 m6">
		<label for="first_name">Penulis</label>
		<input type="text" name="Penulis" value="{{ $buku->Penulis }}">
		@if($errors->first('Penulis'))
	{{$errors->first('Penulis')}}
	@endif
	</div>
	</div>

	<div class="row">
	<div class="input-field col s12 m6">
	<label for="first_name">Penerbit</label>
		<input type="text" name="Penerbit" value="{{ $buku->Penerbit }}">
		@if($errors->first('Penerbit'))
	{{$errors->first('Penerbit')}}
	@endif
	</div>

	<div class="input-field col s12 m6">
	<label for="first_name">Jumlah Buku</label>
		<input type="text" name="Jumlah" value="{{ $buku->Jumlah }}">
		@if($errors->first('Jumlah'))
	{{$errors->first('Jumlah')}}
	@endif
	</div>
	</div>

	<div class="row">
	<div class="input-field col s12">
		<label for="first_name">Sinopsis</label>
		<textarea type="text" class="materialize-textarea" name="Sinopsis">{{ $buku->Sinopsis }}
		</textarea>
		@if($errors->first('Sinopsis'))
	{{$errors->first('Sinopsis')}}
	@endif
	</div>
	</div>
		<div class="row">
			<div class="input-field col s6">

			<input type="file" name="image">
			</div>

	<button class="btn waves-effect waves-light waves-left float right" type="submit" name="action">	Submit<i class="material-icons right">send</i>
  	</button>
</form>
</div>
</div>
</body>
</html>

@endsection