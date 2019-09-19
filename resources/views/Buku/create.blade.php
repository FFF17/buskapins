@extends('skeleton')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
</head>
<body>
<div class="container">
	<div class="row">
		<form action="{{ url('buku/create') }}" class="col s12" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
		<div class="row">
			
				<div class="input-field col s12 m6">
				 <label for="first_name">Judul Buku</label>
		          <input type="text" class="validate"  name="Judul_buku"  class="{{ $errors->first() ? "
	invalid" : "" }}" >
	@if($errors->first('Judul_buku'))
	{{$errors->first('Judul_buku')}}
	@endif
		        </div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6">
				 <label for="first_name">Kategori</label>
					<input type="text" class="validate" name="Kategori"  class="{{ $errors->first() ? "
	invalid" : "" }}" >
	@if($errors->first('Kategori'))
	{{$errors->first('Kategori')}}
	@endif
		        </div>
			
				<div class="input-field col s12 m6">
				 <label for="first_name">Penulis</label>
					<input type="text" class="validate" name="Penulis" class="{{ $errors->first() ? "
	invalid" : "" }}"   >
	@if($errors->first('Penulis'))
	{{$errors->first('Penulis')}}
	@endif
		        </div>
			</div>
				
			<div class="row">
				<div class="input-field col s12 m6">
				 <label for="first_name">Penerbit</label>
					<input type="text" class="validate" name="Penerbit" class="{{ $errors->first() ? "
	invalid" : "" }}"  >
	@if($errors->first('Penerbit'))
	{{$errors->first('Penerbit')}}
	@endif
		        </div>

		        <div class="input-field col s12 m6">
		         <label for="first_name">Jumlah</label>
					<input type="text" class="validate"  data-mask="00000" name="Jumlah" class="{{ $errors->first() ? "
	invalid" : "" }}">
	@if($errors->first('Jumlah'))
	{{$errors->first('Jumlah')}}
	@endif
		        </div>
			</div>
				
			<div class="row">
				<div class="input-field col s12">
				 <label for="first_name">Sinopsis</label>
					<textarea type="text" class="materialize-textarea"  name="Sinopsis"  class="{{ $errors->first() ? "
	invalid" : "" }}">  
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
			</div>

			<button class="btn waves-effect waves-light waves-left float right" type="submit" name="action">Submit
    			<i class="material-icons right">send</i>
  			</button>

		</form>
	</div>
</div>
</body>
</html>
@endsection