<?php

namespace App\Http\Controllers;

use App\Note;

class NotesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
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
        return view('notes/list', compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        return "Creating a note";
    }

    public function show($note)
    {
        dd($note);
    }
}
