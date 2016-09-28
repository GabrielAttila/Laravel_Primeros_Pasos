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
         * Cargamos todas las notas de la Database y con paginate() creamos una paginacion
         * para mostrarlas enciandole como parametro el numero de elementos que queremos
         * morestrar
         */
        $notes = Note::paginate(25);

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

    /**
     *
     */
    public function store()
    {

        /**
         * Este metodo requiere de 2 argumentos:
         *
         * 1 - Peticion del usuario "request" usaremos la funcion helper de laravel
         *
         * 2 - Pasamos el array de reglas espesificando entre llaves los nombres de los campos
         */
        $this->validate(request(), [
            /**
             * 1 - nombre del campo
             *
             * 2 - Diferentes reglas de validacion
             */
            'note' => ['required', 'max:200']
        ]);

        $data = request()->all();

        Note::create($data);

        return redirect()->to('notes');
    }

    public function show($id)
    {
        $note = Note::find($id);
        /**
         * Imprimimos la variable "notes" con el helper de laravel llamado "dd"
         */
        //dd($notes);
        /**
         * pasamos como segundo parametro la funcion "compac" la cual genera un array asociativo
         */
        return view('notes/details', $note);
    }
}
