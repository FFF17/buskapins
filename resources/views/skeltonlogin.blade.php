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
</head>

<body>
 
  <nav class="pink darken-2" role="navigation">
  
    <div class="nav-wrapper">
      <a id="logo-container" href="{{url('')}}" class="brand-logo" style="padding-left:10px;">
        <b>Buskapin</b></a>
      <a href="#mobile-demo" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
         <!--  <li {{ Request::is('logout') ? 'class=active' : '' }}>
            <a href="{{url('logout')}}">Logout</a>
          </li> -->



       
     
  </nav>
  
  <div class="section no-pad-bot" id="index-banner">
    
      <h2 class="header center">@yield('title')</h2>
@yield('content')
      
   
  </div>
 

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>
  <script type="text/javascript">
   
    $(document).ready(function(){
        $(".dropdown-button").dropdown();
        $('select').material_select();
        
   });
  </script>
  @yield('script')
  </body>
</html>