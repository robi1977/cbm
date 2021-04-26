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
    <h2>Formularz dodania nowych patametrów i jednostek</h>
  </div>
  <form action="/parameter_types" method="POST" class="w3-container w3-margin-top">
  @csrf
    <label for="innert_project_number">Nazwa parametru (temperatura, czas, etc)</label>
    <input name="innert_project_number" id="innert_project_number" type="text" class="w3-input"/>
    
    <label for="project_number">Jednostka</label>
    <input name="project_number" id="project_number" type="text" class="w3-input"/>
    
    <div class="w3-row w3-margin-top w3-right w3-margin-right">
      <input type="submit" value="Zapisz" class="w3-btn w3-large w3-metro-green">
      <a href="/dashboard" class="w3-btn w3-large w3-metro-red">Anuluj</a>
    </div>
  </form>

@endsection