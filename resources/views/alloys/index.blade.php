@extends('dashboard')
@section('page_title')
  {{"WWP-CBM Alloys list"}}
@endsection
@section('header')
  <header class="w3-container page-header">
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
        <h3>Sukces</h3>
        <p>{{Session::get('success')}}</p>
      </div>
    @endif
  </header>
@endsection
@section('panels')
    <div class="divider"></div>
@endsection
@section('content')
  <div class="w3-container">
    <a href="alloys/create" class="w3-btn w3-large w3-metro-green w3-right w3-margin-16">Dodaj nowy stop</a>
    <div class="w3-clear"></div>
    @if(Session::has('alloys'))
      <table class="w3-table-all w3-hoverable w3-striped w3-bordered" id="tabAlloysList">
        <thead>
          <tr class="w3-black w3-large">
            <td>Symbol: </td>
            <td>Pełna nazwa </td>
            <td>Opis: </td>
            <td>Działania: </td>
          </tr>
        </thead>
        <tbody>
          @foreach ($alloys as $alloy)
            <tr>
              <td>#{{$alloy['symbol']}}</td>
              <td>{{$alloy['full_name']}}</td>
              <td>{{$alloy['description']}}</td>
              <td>
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