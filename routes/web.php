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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('contactame', function(){
    return "Sección de contactos";
}) -> name('contactos');

Route::get('/', function(){
    echo "<a href='" . route('contactos') ."'>Contactos 1</a><br>";
    echo "<a href='" . route('contactos') ."'>Contactos 2</a><br>";
    echo "<a href='" . route('contactos') ."'>Contactos 3</a><br>";
    echo "<a href='" . route('contactos') ."'>Contactos 4</a><br>";
    echo "<a href='" . route('contactos') ."'>Contactos 5</a><br>";
});

Route::get('contacto', function(){
    return "Hola desde la página de contacto";
});

Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
    return "Hola " . $nombre;
});

Route::view('/', 'home');

Route::get('/', function () {
    $nombre = "Eduardo";
    return view('home', ['nombre' => $nombre]);
})->name('home');
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/portafolio', 'portafolio')->name('portafolio');
*/

/*
Route::get('/', function(){
    return 
})->name('contactos');

Route::get('/', function(){
    echo "<a href = '" . route('contactos') . " '>Contactos 1</a><br>";
    echo "<a href = '" . route('contactos') . " '>Contactos 2</a><br>";
    echo "<a href = '" . route('contactos') . " '>Contactos 3</a><br>";
    echo "<a href = '" . route('contactos') . " '>Contactos 4</a><br>";
});
*/

/*
Route::get('/', function(){
    $nombre = "Eudardo";
    return view('home')->with(['nombre' => $nombre]);
})->name('home');

Route::view('/', ' home', ['nombre' => 'Eduardo'])->name('home');
Route::resource('proyectos', 'PortfolioController');
*/


Route::view('/', 'home')->name('home');
Route::view('/acerca-de', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');
Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');

Route::post('contact', 'MessageController@store')->name('messages.store');


