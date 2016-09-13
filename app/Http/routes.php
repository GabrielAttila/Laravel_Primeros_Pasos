<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

/**
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
Route::get(
    '/notes', function () {

    /**
     * Cargamos todas las notas de la Database
     */
    $notes = Note::all();

    /**
     * Imprimimos la variable "notes" con el helper de laravel llamado "dd"
     */
    //dd($notes);
    /**
     * pasamos como segundo parametro la funcion "compac" la cual genera un array asociativo
     */
    return view('notes', compact('notes'));
});
