@extends('dashboard')
@section('page_title')
  {{"WWP-CBM Index"}}
@endsection
@section('header')
  <header class="w3-container page-header">
    <h5><b><i class="fa fa-dashboard"></i>Lista testów zwilżalności</b></h5>
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
@section('content')
  
@endsection