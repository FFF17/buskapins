@extends('skeleton')
@section('content')
 <style type="text/css">
      .mycontainer {
        padding: 10px;
      }
    </style>
<div class="mycontainer">
<div class="row">
 <div class="card">
    <div class="card-content pink darken-2">
      <p class="center line"><h1 style="color:white;">{{ $pengembali->Nama_peminjam }}</h1></p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
      
        <li class="tab"><a class="active" href="#test5">Keterangan Pengembali</a></li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4">
   
      <div id="test5"><p>Kelas : {{ $pengembali->Kelas }}</p>
      	<p>No. Telpon : {{ $pengembali->No_telp }}</p>
      </div>
      
    </div>
  </div>
 </div>
 </div>

@endsection