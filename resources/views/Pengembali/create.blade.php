@extends('skeleton')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Peminjam</title>
	<script type="text/javascript">

   function changeFunc() {
    var selectBox = document.getElementById("id_buku");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var selectinput = document.getElementById("idBuku");
    selectinput.value = selectedValue;
    //alert(selectedValue);
   }

  </script>
</head>
<body>
<div class="container">
<div class="row">
<form action="{{ url('pengembali/create') }}" method="post">
	{!! csrf_field() !!}

		
		<div class="input-field col s12 m6">
		<!-- <label for="first_name">Test</label> -->
		   	<input type="hidden" name="Get_IdBuku" id="idBuku" value="">
		</div>	
		<div class="input-field col s12 m6">
			<label for="first_name">NIS</label>
		   	<input type="text" name="Nis">
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 m6">
			<label for="first_name">Nama Pengembali</label>
		    <input type="text" name="Nama_peminjam">
		</div>
			
		<div class="input-field col s12 m6">
			<label for="first_name">Kelas</label>
		   	<input type="text" name="Kelas">
		</div>
	</div>

	<div class="input-field col s12 m6">
	    <select id="id_buku" onchange="changeFunc();">
	    @foreach($buku as $key)
			@if(isset($pengembali->id_buku))
				@if($pengembali->id_buku==$key->id)
	      <!-- <option disabled selected>Choose your option</option> -->
	     			 <option selected value="{{$key->id}}">{{$key->Judul_buku}}</option>
	      		@else
					<option value="{{$key->id}}">{{$key->Judul_buku}}</option>
				@endif
			@else
				<option value="{{$key->id}}">{{$key->Judul_buku}}</option>
			@endif
		@endforeach
	      
	    </select>
	    <label>Judul Buku</label>
  	</div>
		

	<button class="btn waves-effect waves-light waves-left float right" type="submit" name="action">	Submit<i class="material-icons right">send</i>
  	</button>
  	
</form>
</div>
</div>
</body>
</html>
@endsection