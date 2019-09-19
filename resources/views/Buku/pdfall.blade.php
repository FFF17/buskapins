

<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
</head>
<body>

<h3>Data Buku</h3>
<table>
<table>
	<thead>
	<tr>
	
	 <th class="center line" data-field="Judul_buku">Judul Buku</th>
	 <th class="center line" data-field="Kategori">Kategori</th>
	 <th class="center line" data-field="Penulis">Penulis</th>
	 <th class="center line" data-field="Penerbit">Penerbit</th>
	 <th class="center line" data-field="Penerbit">Sinopsis</th>
	 
	 <th class="center line" data-field="Jumlah">Jumlah Buku</th>
	
	</tr>
	
	</thead>
	
	
<br>

<tbody>

	@foreach($stud as $buku)
		<tr>
		
				<td class="center line">{{ $buku->Judul_buku }}</td>
				<td class="center line">{{ $buku->Kategori }}</td>
				<td class="center line">{{ $buku->Penulis }}</td>
				<td class="center line">{{ $buku->Penerbit }}</td>
				<td class="center line">{{ substr($buku->Sinopsis, 0, 50) }}...</td>
				<td class="center line">{{ $buku->Jumlah }}</td>

				
				</tr>
	@endforeach
</tbody>
</table>

</body>
</html>
