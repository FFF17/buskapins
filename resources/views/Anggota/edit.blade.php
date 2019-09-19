@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Edit Anggota</title>
</head>
<body>
<div class="container">

<div class="row">
<form action="{{ url('anggota/edit') }}" method="post">
	{!! csrf_field() !!}
	<div class="row">
		<input type="hidden" name="id" value="{{ $anggota->id }}">

		

		<div class="input-field col s12 m6">
		 	<label for="first_name">NIS</label>
			<input type="text" name="NIS" placeholder="NIS" data-mask="00000" value="{{ $anggota->NIS }}">
			@if($errors->first('NIS'))
	{{$errors->first('NIS')}}
	@endif
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 m6">
		 	<label for="first_name">Nama</label>
			<input type="text" name="Nama" placeholder="Nama" value="{{ $anggota->Nama }}">
			@if($errors->first('Nama'))
	{{$errors->first('Nama')}}
	@endif
		</div>

		<div class="input-field col s12 m6">
		 	<label for="first_name">Kelas</label>
			<input type="text" name="Kelas" placeholder="Kelas" value="{{ $anggota->Kelas }}">
			@if($errors->first('Kelas'))
	{{$errors->first('Kelas')}}
	@endif
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 m6">
		 	<label for="first_name">Jenis Kelamin</label>
			<input type="text" name="Jenis_Kelamin"   placeholder="Jenis Kelamin" 
				value="{{ $anggota->Jenis_Kelamin }}">
		</div>

		<div class="input-field col s12 m6">
		 	<label for="first_name">No Telepon</label>
			<input type="text" name="No_Telepon"  data-mask="00000" placeholder="No Telepon" 
				value="{{ $anggota->No_Telepon }}">
				@if($errors->first('No_Telepon'))
	{{$errors->first('No_Telepon')}}
	@endif
		</div>
	</div>

	<div class="row">
	<div class="input-field col s12">
		<label for="first_name">Alamat</label>
		<textarea type="text" class="materialize-textarea" name="Alamat">{{ $anggota->Alamat }}
		</textarea>
		@if($errors->first('Alamat'))
	{{$errors->first('Alamat')}}
	@endif
	</div>
	</div>

	<button class="btn waves-effect waves-light waves-left float right" type="submit" name="action">	Submit<i class="material-icons right">send</i>
  	</button>
</form>
</div>
</div>
</body>
</html>

@endsection