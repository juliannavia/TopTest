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


Route::get('/listavideos', function () {
    return view('videos');
});

Route::get('cursos', function () {
    return "Bienvenido a la página cursos";
});

Route::get('cursos/{}', function () {
    return "Bienvenido a la página cursos";
});

Route::get('cursos/create', function () {
    return "En esta pagina podrás crear un curso.";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('courses', App\Http\Controllers\CourseController::class);
