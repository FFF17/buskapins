@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
</head>
<body>
<a class="waves-effect waves-light btn right" href="{{route('downloadpdf_allanggota')}}"> 
	<i class="material-icons right">file_download</i>Report
</a>
<h2 style="font-family: 'material icon';">Data Anggota</h2>
<table class="bordered highlight">
<thead>
	<tr>
             
              <th class="center line" data-field="NIS">NIS</th>
              <th class="center line" data-field="Nama">Nama</th>
              <th class="center line" data-field="Kelas">Kelas</th>
              <th class="center line" data-field="Jenis_Kelamin">Jenis Kelamin</th>
              <th class="center line" data-field="No_Telepon">No Telepon</th>
              <th class="center line" data-field="Alamat">Alamat</th>
              <th class="center line" data-field="Pilihan">Pilihan</th>
    </tr>
</thead>
<br>

<tbody>
	@foreach($anggota as $key)
		<tr>

			<td class="center line" >{{ $key->NIS}}</td>
			<td class="center line" >{{ $key->Nama }}</td>
			<td class="center line" >{{ $key->Kelas }}</td>
			<td class="center line" >{{ $key->Jenis_Kelamin }}</td>
			<td class="center line" >{{ $key->No_Telepon }}</td>
			<td class="center line" >{{ $key->Alamat }}</td>
			<td class="center line">
				<a href="{{ route('editanggota',[$key->id])}}" class="btn-floating">
					<i class="material-icons">edit</i>
				</a>
				<a href="{{route('deleteanggota',[$key->id])}}" 
					onclick="return confirm('Hapus Data?')"	class="btn-floating">
					<i class="material-icons red">delete</i>
				</a>
				<a href="{{route('downloadpdfanggota',[$key->id])}}" class="btn-floating"><i class="material-icons">file_download</i></a>
			</td>
		</tr>
	@endforeach
</tbody>
</table>

<div class="fixed-action-btn">
	<a href="{{ url('anggota/create/')}}" class="btn-floating btn-large red">
		<i class="material-icons">add</i>
	</a>
</div>

</body>
</html>
@endsection