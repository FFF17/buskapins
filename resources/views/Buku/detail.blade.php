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
      <p class="center line"><h1 style="color:white;">{{ $buku->Judul_buku }}</h1></p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Sinopsis</a></li>
        <li class="tab"><a class="active" href="#test5">Keterangan Buku</a></li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4">{{ $buku->Sinopsis }}</div>
      <div id="test5"><p>ID Buku : {{ $buku->IDbuku }}</p>
      <p>Penulis : {{ $buku->Penulis }}</p> <p>Penerbit : {{ $buku->Penerbit }}</p></div>
      
    </div>
  </div>
 </div>
 </div>

@endsection