

<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
</head>
<body>

<h3>Data Anggota</h3>
<table>
<table>
	<thead>
	<tr>
			  <th class="center line" data-field="NIS">NIS</th>
              <th class="center line" data-field="Nama">Nama</th>
              <th class="center line" data-field="Kelas">Kelas</th>
              <th class="center line" data-field="Jenis_Kelamin">Jenis Kelamin</th>
              <th class="center line" data-field="No_Telepon">No Telepon</th>
              <th class="center line" data-field="Alamat">Alamat</th>
	</tr>
	</thead>
	<tbody>
<br>

<tbody>

	@foreach($stud as $anggota)
		<tr>
		
				
			<td class="center line" >{{ $anggota->NIS}}</td>
			<td class="center line" >{{ $anggota->Nama }}</td>
			<td class="center line" >{{ $anggota->Kelas }}</td>
			<td class="center line" >{{ $anggota->Jenis_Kelamin }}</td>
			<td class="center line" >{{ $anggota->No_Telepon }}</td>
			<td class="center line" >{{ $anggota->Alamat }}</td>

				</tr>
	@endforeach
</tbody>
</table>

</body>
</html>
