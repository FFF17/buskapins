@extends('skeleton')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Anggota</title>
</head>
<body>
<div class="container">
	<div class="row">
<form action="{{ url('anggota/create') }}" class="col s12" method="post">
	{!! csrf_field() !!}
	<div class="row">
					
		<div class="input-field col s12 m6">
			<label for="first_name" class="{{$errors->first() ? " invalid" : ""}}" data-mask="00000">NIS</label>
		   	<input type="text" name="NIS">
		   	@if($errors->first('NIS'))
			{{$errors->first('NIS')}}
			@endif
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 m6">
			<label for="first_name" class="{{$errors->first() ? " invalid" : ""}}">Nama</label>
		   	<input type="text" name="Nama">
		   	@if($errors->first('Nama'))
			{{$errors->first('Nama')}}
			@endif
		</div>
			
		<div class="input-field col s6 m6">
			<label for="first_name" class="{{$errors->first() ? " invalid" : ""}}">kelas</label>
		  	<input type="text" name="Kelas">
			@if($errors->first('Kelas'))
			{{$errors->first('Kelas')}}
			@endif
		</div>

	</div>

	<div class="row">
		<!-- <div class="input-field col s12 m6">
			<label for="first_name">Jenis Kelamin</label>
		  	<input type="text" name="Jenis_Kelamin">
		</div> -->
		<div class="input-field col s12 m6">
	    <select name="Jenis_Kelamin">
	      <option value="" disabled selected>Choose your option</option>
	      <option value="Perempuan">Perempuan</option>
	      <option value="Laki-Laki">Laki-Laki</option>
	    </select>
	    <label>Jenis Kelamin</label>
  		</div>
 
			
		<div class="input-field col s12 m6">
			<label for="first_name" class="{{$errors->first() ? " invalid" : ""}}" data-mask="00000">No Telepon</label>
		  	<input type="text" name="No_Telepon">
		  	@if($errors->first('No_Telepon'))
			{{$errors->first('No_Telepon')}}
			@endif
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12">
			<label for="first_name" class="{{$errors->first() ? " invalid" : ""}}">Alamat</label>
			<textarea type="text" class="materialize-textarea" name="Alamat">
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

<script type="text/javascript">

</script>
</body>
</html>
@endsection