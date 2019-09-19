<h1>{{$buku->Judul_buku}}</h1>
<h3>Kategori : {{$buku->Kategori}}</h3>
<h3>Penulis : {{$buku->Penulis}}</h3>
<h3>Penerbit : {{$buku->Penerbit}}</h3>
<h3>Sinopsis : {{substr($buku->Sinopsis, 0, 50)}}</h3>
<h3>Jumlah : {{$buku->Jumlah}}</h3>