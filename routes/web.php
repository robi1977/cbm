<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', function(){
//     $samples=[
//         'numer'=>"2343",
//         'opis'=>"Al/Al2O3 700C 30min CH"
//     ];
//     return view('dashboard.index')->withSamples( $samples)->with('error','To jest błąd');
// })->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\SampleController::class, 'index'])->middleware('auth');
Route::get('/profile', function(){
    return view('profile.index');
})->middleware('auth');