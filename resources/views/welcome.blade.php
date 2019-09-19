@extends('skeleton')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>
 
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" 
      media="screen,projection"/>
  <link href="{{asset('assets/css/style.css')}}" type="text/css" rel="stylesheet" 
      media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <style type="text/css">
      .mycontainer {
        padding: 10px;
      }
    </style>

</head>

<body>
   <div class="slider">
    <ul class="slides">
      <li>
        <img src="background/maxresdefault.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="background/Library.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="background/lib.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="background/home.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

    <div class="mycontainer">
      <div class="row">
        @foreach ($buku as $key)
        <div class="col s3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{asset('image/'. $key->image)}}">
            </div>

            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">{{ $key->Judul_buku }}
                <i class="material-icons right">more_vert</i></span>
                <p><a href="Peminjam/peminjam">Pinjam Buku</a></p>
            </div>

            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $key->Judul_buku }}
                <i class="material-icons right">close</i></span>
                <p>{{ $key->Sinopsis }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>
  <script type="text/javascript">
     $(document).ready(function(){
      $('.slider').slider();
    });
  </script>
 

</body>
</html>

@endsection