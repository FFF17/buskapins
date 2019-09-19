

<!DOCTYPE html>
<html>
<head>
	<title>Data Peminjam</title>
</head>
<body>

<h3>Data Peminjam</h3>
<table>
<thead>
	<tr>
              <th class="center line" data-field="Nis">Nis</th>
              <th class="center line" data-field="Nama_peminjam">Nama Peminjam</th>
              <th class="center line" data-field="Kelas">Kelas</th>
              <th class="center line" data-field="Judul_buku">ID Buku</th>
              <th class="center line" >Waktu Peminjaman</th>
              <th class="center line">Pilihan</th>
    </tr>
</thead>
<br>

<tbody>
	@foreach($stud as $peminjam)
		<tr>
	
			<td class="center line">{{ $peminjam->Nis}}</td>
			<td class="center line">{{ $peminjam->Nama_peminjam }}</td>
			<td class="center line">{{ $peminjam->Kelas}}</td>
			<td class="center line">{{ $peminjam->id_buku}}</td>
			<td class="center line">{{ $peminjam->created_at}}</td>
		</tr>
	@endforeach
</tbody>
</table>

</body>
</html>
