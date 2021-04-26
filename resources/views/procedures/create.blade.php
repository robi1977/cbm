@extends('dashboard')
@section('page_title')
  {{"WWP-CBM Create new alloy in database"}}
@endsection
@section('header')
  <header class="w3-container page-header">   
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
  @if ($errors->any())
      <div class="w3-panel w3-pale-red w3-card">
      <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
@endsection
@section('content')
  <div class="w3-container w3-metro-blue">
    <h2>Formularz dodania nowej procedury</h>
  </div>
  <form action="/procedures" method="POST" class="w3-container w3-margin-top">
  @csrf
    <label for="symbol">Akronim:</label>
    <input name="symbol" id="symbol" type="text" required class="w3-input"/>
    
    <label for="full_name">Pełna nazwa:</label>
    <input name="full_name" id="full_name" type="text" required class="w3-input"/>
    
    <label for="description">Dodatkowe informacje:</label>
    <input name="description" id="description" type="text" class="w3-input"/>
    
    <div class="w3-row w3-margin-top w3-right w3-margin-right">
      <input type="submit" value="Zapisz" class="w3-btn w3-large w3-metro-green">
      <a href="/dashboard" class="w3-btn w3-large w3-metro-red">Anuluj</a>
    </div>
  </form>

@endsection