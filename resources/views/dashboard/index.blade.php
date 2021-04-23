@extends('dashboard')
@section('page_title')
  {{"WWP-CBM Index"}}
@endsection
@section('header')
  <header class="w3-container page-header">   
    <h5 class="w3-left"><b><i class="fa fa-dashboard"></i>Lista testów zwilżalności</b></h5>
    @if (Session::has('error'))
      <div class="w3-panel w3-pale-red w3-card">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Błąd</h3>
        <p>{{Session::get('error')}}</p>
      </div>
    @endif
    @if (Session::has('success'))
      <div class="w3-panel w3-pale-green w3-card">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Błąd</h3>
        <p>{{Session::get('success')}}</p>
      </div>
    @endif
  </header>
@endsection
@section('panels')
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-third">
      <div class="w3-container w3-metro-red w3-padding-16">
        <div class="w3-left"><i class="fas fa-coins w3-xxxlarge"></i></div>
        <div class="w3-right"><h3>{{'testy'}}</h3></div> 
        <div class="w3-clear"></div>
        <div class="w3-row">
          <h4 class="w3-left">Testy</h4>
          <a href="" class="w3-right w3-btn w3-large w3-circle w3-metro-dark-red">+</a> <!-- TODO: uzupełnieć link-->
        </div>
        <div class="w3-clear"></div>
      </div>
    </div>
    <div class="w3-third">
      <div class="w3-container w3-metro-blue w3-padding-16">
        <div class="w3-left"><i class="fas fa-fill-drip w3-xxxlarge"></i></div>
        <div class="w3-right"><h3>{{'metale'}}</h3></div> 
        <div class="w3-clear"></div>
        <div class="w3-row">
          <h4 class="w3-left">Metale i stopy</h4>
          <a href="" class="w3-right w3-btn w3-large w3-circle w3-metro-dark-blue">+</a> <!-- TODO: uzupełnieć link-->
        </div>
        <div class="w3-clear"></div>
      </div>
    </div>
    <div class="w3-third">
      <div class="w3-container w3-metro-green w3-padding-16">
        <div class="w3-left"><i class="fas fa-drum-steelpan w3-xxxlarge"></i></div>
        <div class="w3-right"><h3>{{'Podłoża'}}</h3></div> 
        <div class="w3-clear"></div>
        <div class="w3-row">
          <h4 class="w3-left">Podłoża</h4>
          <a href="" class="w3-btn w3-large w3-circle w3-metro-dark-green w3-right">+</a> <!-- TODO: uzupełnieć link-->
        </div>
        <div class="w3-clear"></div>
      </div>
    </div>
  </div>
@endsection
@section('content')
  <div class="w3-container">
    <h4>Lista wprowadzonych próbek</h4>
    @if(Session::has('samples'))
      <table class="w3-table-all w3-hoverable w3-striped w3-bordered">
        <thead>
          <tr class="w3-black w3-large">
            <td class="w3-quater">Numer: </td>
            <td class="w3-half">Opis: </td>
            <td class="w3-quater">Działania: </td>
          </tr>
        </thead>
        <tbody>
          @foreach ($samples as $sample)
            <tr>
              <td>#{{$sample['numer']}}</td>
              <td>{{$sample['opis']}}</td>
              <td>
                <a href="" class="w3-metro-blue"><i class="fas fa-info-circle"></i></a><!--TODO: Uzupełnić o wywołanie modalu z informacjami szczegółowymi dla próbki-->
                &nbsp;
                <a href="" class="w3-metro-green"><i class="fas fa-edit"></i></a><!--TODO: uzupełnić w link do wyświetlenia formularza edycji--> 
                &nbsp;
                <a href="" class="w3-metro-red"><i class="fas fa-trash"></i></a><!--TODO: uzupełnić link do formularza potwierdzenia usunięcia-->
          @endforeach
        </tbody>
      </table>
    @else
      <h4>Brak danych do wyświetlenia</h4>
    @endif
  </div>
@endsection