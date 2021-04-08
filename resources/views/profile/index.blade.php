@extends('dashboard')
@section('content')
<div>
    <h1>Profil {{ Auth::user()->name }}</h1>
    <p>Dane o użytkowniku wczytane z bazy danych</p>
    <p>żeby wczytać dane link będzie musiał przechodzić przez kontroler,</p>
    <p>a nie jak teraz odrazu zwracać widok</p>
</div>  
@endsection