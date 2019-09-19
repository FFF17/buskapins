@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Data Peminjam</title>
</head>
<body>

<h3 style="font-family: 'material icon';">Data Peminjam</h3>
<a class="waves-effect waves-light btn right" href="{{route('downloadpdf_allpinjam')}}"> 
	<i class="material-icons right">file_download</i>Report
</a>
<table class="bordered highlight">
<thead>
	<tr>
            
              <th class="center line" data-field="Nis">Nis</th>
              <th class="center line" data-field="Nama_peminjam">Nama Peminjam</th>
              <th class="center line" data-field="Kelas">Kelas</th>
              <th class="center line" data-field="Judul_buku">Judul Buku</th>
              <th class="center line" >Waktu Peminjaman</th>
              <th class="center line">Pilihan</th>
          
    </tr>
</thead>
<br>

<tbody>
	@foreach($peminjam as $key)
		<tr>

			<td class="center line">{{ $key->Nis}}</td>
			<td class="center line">{{ $key->Nama_peminjam }}</td>
			<td class="center line">{{ $key->Kelas}}</td>
			<td class="center line">{{ $key->buku->Judul_buku}}</td>
			<td class="center line">{{ $key->created_at}}</td>
			<td class="center line">
				

				<a href="{{route('downloadpdfpinjam',[$key->id])}}" class="btn-floating"><i class="material-icons">file_download</i></a>

				<a href="{{ route('deletepeminjam',[$key->id])}}" 
					onclick="return confirm('Hapus Data?')" class="btn-floating red">
					<i class="material-icons">delete</i>
				</a>
			</td>
		</tr>
	@endforeach
</tbody>
</table>
<div class="fixed-action-btn">
	<a href="{{ url('peminjam/create/')}}" class="btn-floating btn-large waves-effect waves-light red">		<i class="material-icons">add</i></a>
</div>

</body>
</html>
@endsection