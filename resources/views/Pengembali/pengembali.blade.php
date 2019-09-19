@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Data Pengembalian</title>
</head>
<body>

<h3 style="font-family: 'material icon';">Data Pengembalian Buku</h3>
<!-- <a class="waves-effect waves-light btn right" href="{{route('downloadpdf_all')}}"> 
	<i class="material-icons right">file_download</i>Report
</a> -->
<table class="bordered highlight">
<thead>
	<tr>
              <th class="center line" data-field="Nis">NIS</th>
              <th class="center line" data-field="Nama_peminjam">Nama Peminjam</th>
              <th class="center line" data-field="Kelas">Kelas</th>
              <th class="center line" data-field="id_buku">ID Buku</th>
              <th class="center line" >Waktu Pengembalian</th>
              <th class="center line">Pilihan</th>
    </tr>
</thead>
<br>

<tbody>
	@foreach($stud as $pengembali)
		<t
			<td class="center line">{{ $pengembali->Nis}}</td>
			<td class="center line">{{ $pengembali->Nama_peminjam }}</td>
			<td class="center line">{{ $pengembali->Kelas}}</td>
			<td class="center line">{{ $pengembali->id_buku}}</td>
			<td class="center line">{{ $pengembali->updated_at}}</td>
			<td class="center line">

				<!-- <a href="{{ route('detail',[$pengembali->id])}}" class="btn-floating blue">
					<i class="material-icons">info</i>
				</a> -->

				<!-- <a href="{{route('downloadpdf',[$pengembali->id])}}" class="btn-floating"><i class="material-icons">file_download</i></a> -->

				<a href="{{ route('deletepengembali',[$pengembali->id]) }}" 
					onclick="return confirm('Hapus Data?')" class="btn-floating red">
					<i class="material-icons">delete</i>
				</a>
			</td>
		</tr>
	@endforeach
</tbody>
</table>
<div class="fixed-action-btn">

</body>
</html>
@endsection