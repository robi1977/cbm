<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Przekazywanie token'u -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Podstawianie odpowiedniej tytułu strony -->
  <title>@yield('page_title','CBM')</title>
  <!-- Blok Style -->
  <!-- CSS z W3 Schoole -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Fonty wykorzystane na stronie -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto">
  <!-- modyfikator stylu -->
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="{{asset('js/all.js')}}"></script>
</head>
<body class="w3-light-grey">
  <!--Górny pasek z logo i przyciskiem na menu -->
  <div class="w3-bar w3-top w3-black w3-large top-bar">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>Menu</button>
    <span class="w3-bar-item w3-right">WWP-CBM</span>
  </div> 

  <!-- Menu boczne -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left sidebar-menu" id="mySidebar">
    <br/>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="{{asset('img/avatar.png')}}" class="w3-circle w3-margin-right avatar-img" alt="avatar"> <!--FIXME: do zmiany na podlinkowanie z danych o użytkowniku-->
      </div>
      <div class="w3-col s8 w3-bar">
        <span>Witaj, <strong>{{ Auth::user()->name, "Nieznajomy" }}</strong></span>
        <br>
        <a href="" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a> <!-- FIXME: przemyśleć nad zmianą na 'button' i obsługą modala z informacjami-->
        <a href="" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
      </div>
    </div>
    <hr/>
    <div class="w3-container">
      <h5>Dashboard</h5>
      <div class="divider"></div>
      <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close();" title="close menu">
          <i class="fa fa-remove fa-fw"></i>Close Menu 
        </a>
        <div class="w3-dropdown-hover">
          <button class="w3-button w3-bar-item">Testy<i class="fa fa-caret-down w3-right"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="{{url('/samples')}}" class="w3-bar-item w3-button">Lista</a>
            <a href="{{url('/samples/create')}}" class="w3-bar-item w3-button">Nowy</a>
            <a href="" class="w3-bar-item w3-button">Szukaj</a><!--TODO: link-->
          </div>
        </div>
        <div class="w3-dropdown-hover">
          <button class="w3-bar-item w3-button">Metale i stopy<i class="fa fa-caret-down w3-right"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-border">
            <a href="{{url('alloys')}}" class="w3-bar-item w3-button">Lista</a>
            <a href="{{url('alloys/create')}}" class="w3-bar-item w3-button">Nowy</a>
            <a href="" class="w3-bar-item w3-button">Szukaj</a><!--TODO: link-->
          </div>
        </div>
        <div class="w3-dropdown-hover">
          <button class="w3-bar-item w3-button">Podłoża<i class="fa fa-caret-down w3-right"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-border">
            <a href="{{url('substrates')}}" class="w3-bar-item w3-button">Lista</a>
            <a href="{{url('substrates/create')}}" class="w3-bar-item w3-button">Nowy</a>
            <a href="" class="w3-bar-item w3-button">Szukaj</a><!--TODO: link-->
          </div>
        </div>
        <a href="{{url('equipment')}}" class="w3-bar-item w3-button">Aparatura</a>
        <a href="{{url('procedures')}}" class="w3-bar-item w3-button">Procedury</a>
        @if (auth()->user()->is_admin())
          <a href="{{url('users')}}" class="w3-bar-item w3-button">Użytkownicy</a>
        @endif
      </div>
    </div>
  </nav>
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor: pointer" title="close side menu" id="myOverlay"></div>

  <!--zawartość strony -->
  <div class="w3-main main-content">
    @yield('header')
    @yield('panels')
    <hr/>
    @yield('content')
  </div> 
<script>
  //FIXME: Na etapie projektowania i wprowadzania zmian wszystkie JS będą poniżej. 
  //W późniejszym terminie lub jak się za bardzo rozrosną to zostaną przerzucone do nowego pliku.
  const mySidebar = document.getElementById("mySidebar");
  const overlayBg = document.getElementById("myOverlay");
  function w3_open(){
    if(mySidebar.style.display === "block"){
      mySidebar.style.display="none";
      overlayBg.style.display="none";
    } else {
      mySidebar.style.display="block";
      overlayBg.style.display="block";
    }
  }
  function w3_close(){
    mySidebar.style.display="none";
    overlayBg.style.display="none";
  }


</script>
</body>
</html>