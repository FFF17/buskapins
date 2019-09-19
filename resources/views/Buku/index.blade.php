@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Kumpulan Buku</title>
</head>
<body>


<a class="waves-effect waves-light btn right" href="{{route('downloadpdf_allbuku')}}"> 
	<i class="material-icons right">file_download</i>Report
</a>

<h2 style="font-family: 'material icon';">List Buku</h2>
<table class="bordered highlight">
	<thead>
	<tr>
	
	 <th class="center line" data-field="Judul_buku">Judul Buku</th>
	 <th class="center line" data-field="Kategori">Kategori</th>
	 <th class="center line" data-field="Penulis">Penulis</th>
	 <th class="center line" data-field="Penerbit">Penerbit</th>
	 <th class="center line" data-field="Penerbit">Sinopsis</th>
	 <th class="center line" data-field="Jumlah">Jumlah Buku</th>
	 <th class="center line" data-field="Penerbit" class="center">Pilihan</th>
	</tr>
	</thead>
	<tbody>
	@foreach($buku as $key)
		
		<tr>
		
				<td class="center line">{{ $key->Judul_buku }}</td>
				<td class="center line">{{ $key->Kategori }}</td>
				<td class="center line">{{ $key->Penulis }}</td>
				<td class="center line">{{ $key->Penerbit }}</td>
				<td class="center line">{{ substr($key->Sinopsis, 0, 50) }}...</td>
				<td class="center line">{{ $key->Jumlah }}</td>
				<td class="center line">

					<a href="{{ url('buku/detailbuku/'.$key->id)}}" class="btn-floating">
						<i class="material-icons">info</i>
					</a>

					@if(Auth::user()->nama_role == "admin")
					<a href="{{ url('buku/edit/'.$key->id) }}" class="btn-floating"><i class="material-icons">edit</i></a>
					@endif
					
					@if(Auth::user()->nama_role == "admin")
					<a href="{{ route('deletebuku',[$key->id]) }}" onclick="return confirm('Hapus data ?')" class="btn-floating"><i class="material-icons red" >delete</i>
					</a>
					@endif
				
					<a href="{{route('downloadpdfbuku',[$key->id])}}" class="btn-floating"><i class="material-icons">file_download</i></a>

				</td>	
				</td>
			</tr>
		@endforeach
</tbody>
</table>
<div class="fixed-action-btn">
	<a href="{{ url('buku/create/')}}" class="btn-floating btn-large red">
		<i class="material-icons">add</i>
	</a>
</div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('assets/js/materialize.js')}}"></script>
  <script type="text/javascript">
   $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
  </script>
</body>
</html>
@endsection